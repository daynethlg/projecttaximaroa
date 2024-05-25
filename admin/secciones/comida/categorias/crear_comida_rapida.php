<?php

include("../../../bd.php");

if ($_POST) {
    print_r($_POST);

    //recepcionamos los valores del formulario
    $imagen = (isset($_FILES["imagen"]["name"])) ? $_FILES["imagen"]["name"] : "";
    $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : "";
    $boton = (isset($_POST['boton'])) ? $_POST['boton'] : "";

    //imagen
    $fecha_imagen = new DateTime();
    $nombre_archivo_imagen = ($imagen != "") ? $fecha_imagen->getTimestamp() . "_" . $imagen : "";

    $tmp_imagen = $_FILES["imagen"]["tmp_name"];

    if ($tmp_imagen != "") {
        move_uploaded_file($tmp_imagen, "../../../../img/comida/comida_rapida" . $nombre_archivo_imagen);
    }


    $sentencia = $conexion->prepare("INSERT INTO `tb_comida_rapida_categorias` (`id`, `imagen`, `titulo`, `boton`) 
    VALUES (NULL, :imagen, :titulo, :boton);");

    $sentencia->bindParam(":imagen", $nombre_archivo_imagen);
    $sentencia->bindParam(":titulo", $titulo);
    $sentencia->bindParam(":boton", $boton);
    $sentencia->execute();
    

    $mensaje = "Registro Agregado";
    header("location:index_comida_rapida.php?mensaje=" . $mensaje);
}

include("../../../templates/header.php");
?>

<div class="card">

    <div class="card-header">
        Crear Categorias
    </div>

    <div class="card-body">


        <form action="" enctype="multipart/form-data" method="post">



            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" name="imagen" id="imagen" aria-describedby="helpId" placeholder="Imagen" />
            </div>


            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="TITULO" />
            </div>


            <div class="mb-3">
                <label for="boton" class="form-label">Boton</label>
                <input type="text" class="form-control" name="boton" id="boton" aria-describedby="helpId" placeholder="boton" />
            </div>


            <button type="submit" class="btn btn-success">
                Agregar
            </button>


            <a name="" id="" class="btn btn-primary" href="index_comida_rapida.php" role="button">Cancelar</a>

        </form>

    </div>
    <div class="card-footer text-muted">
        Foot


    </div>
</div>




<?php
include("../../../templates/footer.php")
?>