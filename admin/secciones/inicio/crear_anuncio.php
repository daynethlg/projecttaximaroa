<?php

include("../../bd.php");

if ($_POST) {
    print_r($_POST);

    //recepcionamos los valores del formulario
    $imagen = (isset($_FILES["imagen"]["name"])) ? $_FILES["imagen"]["name"] : "";
    $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : "";

    //imagen
    $fecha_imagen = new DateTime();
    $nombre_archivo_imagen = ($imagen != "") ? $fecha_imagen->getTimestamp() . "_" . $imagen : "";

    $tmp_imagen = $_FILES["imagen"]["tmp_name"];

    if ($tmp_imagen != "") {
        move_uploaded_file($tmp_imagen, "../../../img/inicio/anuncios/" . $nombre_archivo_imagen);
    }


    $sentencia = $conexion->prepare("INSERT INTO `tb_anuncios` (`id`, `imagen`, `titulo`) 
    VALUES (NULL, :imagen, :titulo);");

    $sentencia->bindParam(":imagen", $nombre_archivo_imagen);
    $sentencia->bindParam(":titulo", $titulo);

    $sentencia->execute();
    

    $mensaje = "Registro Agregado";
    header("location:index.php?mensaje=" . $mensaje);
}

include("../../templates/header.php");
?>

<div class="card">

    <div class="card-header">
        Crear Anuncios
    </div>

    <div class="card-body">


        <form action="" enctype="multipart/form-data" method="post">



            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" name="imagen" id="imagen" aria-describedby="helpId" placeholder="Imagen" />
            </div>


            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input  type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="TITULO" />
            </div>

            <button type="submit" class="btn btn-success">
                Agregar
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