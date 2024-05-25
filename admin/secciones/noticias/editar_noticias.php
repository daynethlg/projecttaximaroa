<?php
include("../../bd.php");

if (isset($_GET['txtid'])) {
    //recuperar los datos de ID correspondiente (seleccioando)

    $txtid=(isset($_GET['txtid'])) ?$_GET['txtid']:"";

    $sentencia = $conexion->prepare("SELECT * FROM tb_noticias WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();

    $registro=$sentencia->fetch(PDO::FETCH_LAZY);

    $titulo=$registro['titulo'];
    $descripcion=$registro['descripcion'];
    $categoria=$registro['categoria'];
    $fecha=$registro['fecha'];
    $boton=$registro['boton'];
}

if($_POST) {
    print_r($_POST);

     //recepcionamos los valores del formulario
     $txtid=(isset($_POST['txtid']))?$_POST['txtid']:"";
     $titulo=(isset($_POST['titulo']))?$_POST['titulo']:"";
     $descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";
     $categoria=(isset($_POST['categoria']))?$_POST['categoria']:"";
     $fecha=(isset($_POST['fecha']))?$_POST['fecha']:"";
     $boton=(isset($_POST['boton']))?$_POST['boton']:"";
 
 
     $sentencia = $conexion->prepare("UPDATE tb_noticias 
     SET 
     titulo=:titulo,
     descripcion=:descripcion,
     categoria=:categoria,
     fecha=:fecha,
     boton=:boton
     WHERE id=:id ");
     
     $sentencia->bindParam(":titulo", $titulo);
     $sentencia->bindParam(":descripcion", $descripcion);
     $sentencia->bindParam(":categoria", $categoria);
     $sentencia->bindParam(":fecha", $fecha);
     $sentencia->bindParam(":boton", $boton);
     $sentencia->bindParam(":id", $txtid);
     $sentencia->execute();

      //imagen
    if ($_FILES["imagen"]["tmp_name"] != "") {

        $imagen = (isset($_FILES["imagen"]["name"])) ? $_FILES["imagen"]["name"] : "";
        $fecha_imagen = new DateTime();
        $nombre_archivo_imagen = ($imagen != "") ? $fecha_imagen->getTimestamp() . "_" . $imagen : "";

        $tmp_imagen = $_FILES["imagen"]["tmp_name"];
        move_uploaded_file($tmp_imagen, "../../../img/noticias/" . $nombre_archivo_imagen);

    
       //boorado arcjivpo anterior
        $sentencia = $conexion->prepare("SELECT imagen FROM tb_noticias WHERE id=:id ");
        $sentencia->bindParam(":id", $txtid);
        $sentencia->execute();
        $registro_imagen = $sentencia->fetch(PDO::FETCH_LAZY);


        //actualizar
        if (isset($registro_imagen["imagen"])) {
            if (file_exists("../../../img/noticias/" . $registro_imagen["imagen"])) {
                unlink("../../../img/noticias/" . $registro_imagen["imagen"]);
            }
        }

        $sentencia = $conexion->prepare("UPDATE tb_noticias  
        SET 
        imagen=:imagen
        WHERE id=:id");

        $sentencia->bindParam(":imagen", $nombre_archivo_imagen);
        $sentencia->bindParam(":id", $txtid);
        $sentencia->execute();
    }


     $mensaje="Registro Modificado";
     header("location:index.php?mensaje=".$mensaje);
}





include("../../templates/header.php")
?>




<div class="card">

    <div class="card-header">
        Ediar infromacion de catgeorias
    </div>

    <div class="card-body">


        <form action="" enctype="multipart/form-data" method="post">

            <div class="mb-3">
                <label for="txtid" class="form-label">ID:</label>
                <input readonly value="<?php echo $txtid; ?>" type="text" 
                class="form-control" name="txtid" id="txtid" aria-describedby="helpId" placeholder="id" />
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <img width="50" src="../../../img/noticias/<?php echo $imagen; ?>" />
                <input type="file" class="form-control" name="imagen" id="imagen" aria-describedby="helpId" placeholder="" />
            </div>

            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input value="<?php echo $titulo; ?>" type="text" 
                class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="" />
            </div>

            


            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input value="<?php echo $descripcion; ?>" ype="text" 
                class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="" />
            </div>

            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <input value="<?php echo $categoria; ?>" ype="text" 
                class="form-control" name="categoria" id="categoria" aria-describedby="helpId" placeholder="" />
            </div>

            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input value="<?php echo $fecha; ?>" ype="text" 
                class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="" />
            </div>

            <div class="mb-3">
                <label for="boton" class="form-label">Boton</label>
                <input value="<?php echo $boton; ?>" ype="text" 
                class="form-control" name="boton" id="boton" aria-describedby="helpId" placeholder="" />
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
include("../../templates/footer.php")
?>