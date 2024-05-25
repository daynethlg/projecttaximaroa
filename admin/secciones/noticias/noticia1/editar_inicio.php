<?php
include("../../../bd.php");

if (isset($_GET['txtid'])) {
    //recuperar los datos de ID correspondiente (seleccioando)

    $txtid=(isset($_GET['txtid'])) ?$_GET['txtid']:"";

    $sentencia = $conexion->prepare("SELECT * FROM tb_noticias_inicio WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();

    $registro=$sentencia->fetch(PDO::FETCH_LAZY);

    $titulo=$registro['titulo'];
    $fecha=$registro['fecha'];
    $lugar=$registro['lugar'];
    $autor=$registro['autor'];

}

if($_POST) {
    print_r($_POST);

     //recepcionamos los valores del formulario
     $txtid=(isset($_POST['txtid']))?$_POST['txtid']:"";
     $titulo=(isset($_POST['titulo']))?$_POST['titulo']:"";
     $fecha=(isset($_POST['fecha']))?$_POST['fecha']:"";
     $lugar=(isset($_POST['lugar']))?$_POST['lugar']:"";
     $autor=(isset($_POST['autor']))?$_POST['autor']:"";

 
 
     $sentencia = $conexion->prepare("UPDATE tb_noticias_inicio 
     SET 
     titulo=:titulo,
     fecha=:fecha,
     lugar=:lugar,
     autor=:autor
     WHERE id=:id ");
     
     $sentencia->bindParam(":titulo", $titulo);
     $sentencia->bindParam(":fecha", $fecha);
     $sentencia->bindParam(":lugar", $lugar);
     $sentencia->bindParam(":autor", $autor);
     $sentencia->bindParam(":id", $txtid);
     $sentencia->execute();

      //imagen
    if ($_FILES["imagen"]["tmp_name"] != "") {

        $imagen = (isset($_FILES["imagen"]["name"])) ? $_FILES["imagen"]["name"] : "";
        $fecha_imagen = new DateTime();
        $nombre_archivo_imagen = ($imagen != "") ? $fecha_imagen->getTimestamp() . "_" . $imagen : "";

        $tmp_imagen = $_FILES["imagen"]["tmp_name"];
        move_uploaded_file($tmp_imagen, "../../../../img/noticias/noticia1/" . $nombre_archivo_imagen);

    
       //boorado arcjivpo anterior
        $sentencia = $conexion->prepare("SELECT imagen FROM tb_noticias_inicio WHERE id=:id ");
        $sentencia->bindParam(":id", $txtid);
        $sentencia->execute();
        $registro_imagen = $sentencia->fetch(PDO::FETCH_LAZY);


        //actualizar
        if (isset($registro_imagen["imagen"])) {
            if (file_exists("../../../../img/noticias/noticia1/" . $registro_imagen["imagen"])) {
                unlink("../../../../img/noticias/noticia1/" . $registro_imagen["imagen"]);
            }
        }

        $sentencia = $conexion->prepare("UPDATE tb_noticias_inicio  
        SET 
        imagen=:imagen
        WHERE id=:id");

        $sentencia->bindParam(":imagen", $nombre_archivo_imagen);
        $sentencia->bindParam(":id", $txtid);
        $sentencia->execute();
    }


     $mensaje="Registro Modificado";
     header("location:index_noticias.php?mensaje=".$mensaje);
}





include("../../../templates/header.php")
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
                <label for="fecha" class="form-label">Fecha</label>
                <input value="<?php echo $fecha; ?>" ype="text" 
                class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="" />
            </div>

            <div class="mb-3">
                <label for="lugar" class="form-label">Lugar</label>
                <input value="<?php echo $lugar; ?>" ype="text" 
                class="form-control" name="lugar" id="lugar" aria-describedby="helpId" placeholder="" />
            </div>

            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input value="<?php echo $autor; ?>" ype="text" 
                class="form-control" name="autor" id="autor" aria-describedby="helpId" placeholder="" />
            </div>

    

            <button type="submit" class="btn btn-success">
                Actualizar
            </button>


            <a name="" id="" class="btn btn-primary" href="index_noticias.php" role="button">Cancelar</a>


        </form>

    </div>
    <div class="card-footer text-muted">
        Foot


    </div>
</div>


<?php
include("../../../templates/footer.php")
?>