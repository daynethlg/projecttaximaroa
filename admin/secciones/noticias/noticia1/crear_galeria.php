<?php

include("../../../bd.php");


//******************************************Categorias******************************************* */

if ($_POST) {

    //recepcionamos los valores del formulario
    $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : "";
    $imagen = (isset($_FILES["imagen"]["name"])) ? $_FILES["imagen"]["name"] : "";


    //imagen
    $fecha_imagen = new DateTime();
    $nombre_archivo_imagen = ($imagen != "") ? $fecha_imagen->getTimestamp() . "_" . $imagen : "";

    $tmp_imagen = $_FILES["imagen"]["tmp_name"];

    if ($tmp_imagen != "") {
        move_uploaded_file($tmp_imagen, "../../../../img/noticias/noticia1/" . $nombre_archivo_imagen);
    }

    $sentencia = $conexion->prepare("INSERT INTO `tb_noticias_galeria` (`id`, `titulo`, `imagen` ) 
    VALUES (NULL, :titulo, :imagen);");

    $sentencia->bindParam(":titulo", $titulo);
    $sentencia->bindParam(":imagen", $nombre_archivo_imagen);


    $sentencia->execute();

    $mensaje = "Registro Agregado";
    header("location:index_noticias.php?mensaje=" . $mensaje);
}


include("../../../templates/header.php");
?>



<!--***********************************CATEGORIAS******************************-->
<div class="card">

    <div class="card-header">
        Crear notciias
    </div>

    <div class="card-body">


        <form action="" enctype="multipart/form-data" method="post">


            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="" />
            </div>


            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" name="imagen" id="imagen" aria-describedby="helpId" placeholder="Imagen" />
            </div>


            <button type="submit" class="btn btn-success">
                Agregar
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