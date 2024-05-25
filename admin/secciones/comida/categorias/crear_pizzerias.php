<?php

include("../../../bd.php");

if ($_POST) {
    print_r($_POST);

    //recepcionamos los valores del formulario
    $imagen = (isset($_FILES["imagen"]["name"])) ? $_FILES["imagen"]["name"] : "";
    $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : "";
    $descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : "";
    $descripcion2 = (isset($_POST['descripcion2'])) ? $_POST['descripcion2'] : "";
    $descripcion3 = (isset($_POST['descripcion3'])) ? $_POST['descripcion3'] : "";
    $boton = (isset($_POST['boton'])) ? $_POST['boton'] : "";

    //imagen
    $fecha_imagen = new DateTime();
    $nombre_archivo_imagen = ($imagen != "") ? $fecha_imagen->getTimestamp() . "_" . $imagen : "";

    $tmp_imagen = $_FILES["imagen"]["tmp_name"];

    if ($tmp_imagen != "") {
        move_uploaded_file($tmp_imagen, "../../../../img/comida/pizzerias/peperonis_pizzas/" . $nombre_archivo_imagen);
    }


    $sentencia = $conexion->prepare("INSERT INTO `tb_categorias` (`id`, `imagen`, `titulo`, `descripcion`, `descripcion2`, `descripcion3`, `boton`) 
    VALUES (NULL, :imagen, :titulo, :descripcion, :descripcion2, :descripcion3, :boton);");

    $sentencia->bindParam(":imagen", $nombre_archivo_imagen);
    $sentencia->bindParam(":titulo", $titulo);
    $sentencia->bindParam(":descripcion", $descripcion);
    $sentencia->bindParam(":descripcion2", $descripcion2);
    $sentencia->bindParam(":descripcion3", $descripcion3);
    $sentencia->bindParam(":boton", $boton);
    $sentencia->execute();
    

    $mensaje = "Registro Agregado";
    header("location:index_pizzerias.php?mensaje=" . $mensaje);
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
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="DESCRIPCIÓN" />
            </div>

            <div class="mb-3">
                <label for="descripcion2" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="descripcion2" id="descripcion2" aria-describedby="helpId" placeholder="DIRECCIÓN" />
            </div>

            <div class="mb-3">
                <label for="descripcion3" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="descripcion3" id="descripcion3" aria-describedby="helpId" placeholder="Telefono" />
            </div>

            <div class="mb-3">
                <label for="boton" class="form-label">Boton</label>
                <input type="text" class="form-control" name="boton" id="boton" aria-describedby="helpId" placeholder="boton" />
            </div>


            <button type="submit" class="btn btn-success">
                Agregar
            </button>


            <a name="" id="" class="btn btn-primary" href="index_pizzerias.php" role="button">Cancelar</a>

        </form>

    </div>
    <div class="card-footer text-muted">
        Foot


    </div>
</div>




<?php
include("../../../templates/footer.php")
?>