<?php

include("../../../bd.php");


//******************************************Categorias******************************************* */

if ($_POST){

    //recepcionamos los valores del formulario
    $titulo=(isset($_POST['titulo_p']))?$_POST['titulo_p']:"";
    $imagen = (isset($_FILES["imagen"]["name"])) ? $_FILES["imagen"]["name"] : "";
    $descripcion=(isset($_POST['descripcion_p']))?$_POST['descripcion_p']:"";
    $boton=(isset($_POST['boton']))?$_POST['boton']:"";
    
    //imagen
    $fecha_imagen = new DateTime();
    $nombre_archivo_imagen = ($imagen != "") ? $fecha_imagen->getTimestamp() . "_" . $imagen : "";

    $tmp_imagen = $_FILES["imagen"]["tmp_name"];

    if ($tmp_imagen != "") {
        move_uploaded_file($tmp_imagen, "../../../../img/comida/" . $nombre_archivo_imagen);
    }

    $sentencia = $conexion->prepare("INSERT INTO `tb_comida` (`id`, `titulo_p`, `imagen`, `descripcion_p`, `boton` ) 
    VALUES (NULL, :titulo_p, :imagen, :descripcion_p, :boton);");
    
    $sentencia->bindParam(":titulo_p", $titulo);
    $sentencia->bindParam(":imagen", $nombre_archivo_imagen);
    $sentencia->bindParam(":descripcion_p", $descripcion);
    $sentencia->bindParam(":boton", $boton);
    $sentencia->execute();

    $mensaje="Registro Agregado";
    header("location:index.php?mensaje=".$mensaje);
    
}


include("../../../templates/header.php");
?>



<!--***********************************CATEGORIAS******************************-->
<div class="card">

    <div class="card-header">
        Crear Categorias
    </div>

    <div class="card-body">


        <form action="" enctype="multipart/form-data" method="post">
            


            <div class="mb-3">
                <label for="titulo_p" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo_p" id="titulo_p" aria-describedby="helpId" placeholder="" />
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" name="imagen" id="imagen" aria-describedby="helpId" placeholder="Imagen" />
            </div>


            <div class="mb-3">
                <label for="" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion_p" id="descripcion_p" aria-describedby="helpId" placeholder="" />
            </div>


            <div class="mb-3">
                <label for="" class="form-label">Boton</label>
                <input type="text" class="form-control" name="boton" id="boton" aria-describedby="helpId" placeholder="" />
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
include("../../../templates/footer.php")
?>