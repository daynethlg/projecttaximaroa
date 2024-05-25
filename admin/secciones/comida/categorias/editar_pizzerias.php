<?php
include("../../../bd.php");

if (isset($_GET['txtid'])) {
    //recuperar los datos de ID correspondiente (seleccioando)
    echo $_GET['txtid'];

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";

    $sentencia = $conexion->prepare("SELECT * FROM tb_categorias WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();

    $registro = $sentencia->fetch(PDO::FETCH_LAZY);

    $imagen = $registro['imagen'];
    $titulo = $registro['titulo'];
    $descripcion = $registro['descripcion'];
    $descripcion2 = $registro['descripcion2'];
    $descripcion3 = $registro['descripcion3'];
    $boton = $registro['boton'];
}

if ($_POST) {
    print_r($_POST);

    //recepcionamos los valores del formulario
    $txtid = (isset($_POST['txtid'])) ? $_POST['txtid'] : "";
    $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : "";
    $descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : "";
    $descripcion2 = (isset($_POST['descripcion2'])) ? $_POST['descripcion2'] : "";
    $descripcion3 = (isset($_POST['descripcion3'])) ? $_POST['descripcion3'] : "";
    $boton = (isset($_POST['boton'])) ? $_POST['boton'] : "";


    $sentencia = $conexion->prepare("UPDATE tb_categorias  
     SET 
     titulo=:titulo,
     descripcion=:descripcion,
     descripcion2=:descripcion2,
     descripcion3=:descripcion3,
     boton=:boton
     WHERE id=:id ");

    $sentencia->bindParam(":titulo", $titulo);
    $sentencia->bindParam(":descripcion", $descripcion);
    $sentencia->bindParam(":descripcion2", $descripcion2);
    $sentencia->bindParam(":descripcion3", $descripcion3);
    $sentencia->bindParam(":boton", $boton);
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();


    //imagen
    if ($_FILES["imagen"]["tmp_name"] != "") {

        $imagen = (isset($_FILES["imagen"]["name"])) ? $_FILES["imagen"]["name"] : "";
        $fecha_imagen = new DateTime();
        $nombre_archivo_imagen = ($imagen != "") ? $fecha_imagen->getTimestamp() . "_" . $imagen : "";

        $tmp_imagen = $_FILES["imagen"]["tmp_name"];
        move_uploaded_file($tmp_imagen, "../../../../img/comida/pizzerias/peperonis_pizzas/" . $nombre_archivo_imagen);

    
       //boorado arcjivpo anterior
        $sentencia = $conexion->prepare("SELECT imagen FROM tb_categorias WHERE id=:id ");
        $sentencia->bindParam(":id", $txtid);
        $sentencia->execute();
        $registro_imagen = $sentencia->fetch(PDO::FETCH_LAZY);


        //actualizar
        if (isset($registro_imagen["imagen"])) {
            if (file_exists("../../../../img/comida/pizzerias/peperonis_pizzas/" . $registro_imagen["imagen"])) {
                unlink("../../../../img/comida/pizzerias/peperonis_pizzas/" . $registro_imagen["imagen"]);
            }
        }

        $sentencia = $conexion->prepare("UPDATE tb_categorias  
        SET 
        imagen=:imagen
        WHERE id=:id");

        $sentencia->bindParam(":imagen", $nombre_archivo_imagen);
        $sentencia->bindParam(":id", $txtid);
        $sentencia->execute();
    }

    $mensaje = "Registro Modificado";
    header("location:index_pizzerias.php?mensaje=" . $mensaje);
}





include("../../../templates/header.php")
?>




<div class="card">

    <div class="card-header">
        Ediar informacion de catgeorias
    </div>

    <div class="card-body">


        <form action="" enctype="multipart/form-data" method="post">


            <div class="mb-3">
                <label for="txtid" class="form-label">ID:</label>
                <input readonly value="<?php echo $txtid; ?>" type="text" class="form-control" name="txtid" id="txtid" aria-describedby="helpId" placeholder="id" />
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <img width="50" src="../../../../img/comida/pizzerias/peperonis_pizzas/<?php echo $imagen; ?>" />
                <input type="file" class="form-control" name="imagen" id="imagen" aria-describedby="helpId" placeholder="" />
            </div>


            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input value="<?php echo $titulo; ?>" type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="" />
            </div>


            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input value="<?php echo $descripcion; ?>" ype="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="" />
            </div>
           
            <div class="mb-3">
                <label for="descripcion2" class="form-label">Direccion</label>
                <input value="<?php echo $descripcion2; ?>" ype="text" class="form-control" name="descripcion2" id="descripcion2" aria-describedby="helpId" placeholder="" />
            </div>

            <div class="mb-3">
                <label for="descripcion3" class="form-label">Telefono</label>
                <input value="<?php echo $descripcion3; ?>" ype="text" class="form-control" name="descripcion3" id="descripcion3" aria-describedby="helpId" placeholder="" />
            </div>

            <div class="mb-3">
                <label for="boton" class="form-label">Boton</label>
                <input value="<?php echo $boton; ?>" ype="text" class="form-control" name="boton" id="boton" aria-describedby="helpId" placeholder="Boton: /carpeta1/carpeta2/archivp.php" />
            </div>


            <button type="submit" class="btn btn-success">
                Actualizar
            </button>


            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>


        </form>

    </div>
    <div class="card-footer text-muted">
        Foot


    </div>
</div>


<?php
include("../../../templates/footer.php")
?>