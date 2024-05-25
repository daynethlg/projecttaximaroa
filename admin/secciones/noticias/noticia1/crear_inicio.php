<?php

include("../../../bd.php");


//******************************************Categorias******************************************* */

if ($_POST) {

    //recepcionamos los valores del formulario
    $imagen = (isset($_FILES["imagen"]["name"])) ? $_FILES["imagen"]["name"] : "";
    $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : "";
    $fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : "";
    $lugar = (isset($_POST['lugar'])) ? $_POST['lugar'] : "";
    $autor = (isset($_POST['autor'])) ? $_POST['autor'] : "";
    //imagen
    $fecha_imagen = new DateTime();
    $nombre_archivo_imagen = ($imagen != "") ? $fecha_imagen->getTimestamp() . "_" . $imagen : "";

    $tmp_imagen = $_FILES["imagen"]["tmp_name"];

    if ($tmp_imagen != "") {
        move_uploaded_file($tmp_imagen, "../../../../img/noticias/noticia1/" . $nombre_archivo_imagen);
    }

    $sentencia = $conexion->prepare("INSERT INTO `tb_noticias_inicio` (`id`, `imagen`, `titulo`, `fecha`, `lugar`, `autor`) 
    VALUES (NULL,  :imagen, :titulo, :fecha, :lugar, :autor);");

    $sentencia->bindParam(":imagen", $nombre_archivo_imagen);
    $sentencia->bindParam(":titulo", $titulo);
    $sentencia->bindParam(":fecha", $fecha);
    $sentencia->bindParam(":lugar", $lugar);
    $sentencia->bindParam(":autor", $autor);
    $sentencia->execute();

    $mensaje = "Registro Agregado";
    header("location:index_noticias.php?mensaje=" . $mensaje);
}


include("../../../templates/header.php");
?>



<!--***********************************CATEGORIAS******************************-->
<div class="card">

    <div class="card-header">
        Crear noticia
    </div>

    <div class="card-body">


        <form action="" enctype="multipart/form-data" method="post">

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" name="imagen" id="imagen" aria-describedby="helpId" placeholder="Imagen" />
            </div>

            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="" />
            </div>


            <div class="mb-3">
                <label for="" class="form-label">Fecha</label>
                <input type="text" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="" />
            </div>


            <div class="mb-3">
                <label for="" class="form-label">Lugar</label>
                <input type="text" class="form-control" name="lugar" id="lugar" aria-describedby="helpId" placeholder="" />
            </div>


            <div class="mb-3">
                <label for="" class="form-label">Autor</label>
                <input type="text" class="form-control" name="autor" id="autor" aria-describedby="helpId" placeholder="" />
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