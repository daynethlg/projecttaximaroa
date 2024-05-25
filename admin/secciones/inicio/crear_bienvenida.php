<?php

include("../../bd.php");


//******************************************Categorias******************************************* */

if ($_POST){

    //recepcionamos los valores del formulario
    $titulo=(isset($_POST['titulo']))?$_POST['titulo']:"";
    $imagen = (isset($_FILES["imagen"]["name"])) ? $_FILES["imagen"]["name"] : "";
    $descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";
    
    //imagen
    $fecha_imagen = new DateTime();
    $nombre_archivo_imagen = ($imagen != "") ? $fecha_imagen->getTimestamp() . "_" . $imagen : "";

    $tmp_imagen = $_FILES["imagen"]["tmp_name"];

    if ($tmp_imagen != "") {
        move_uploaded_file($tmp_imagen, "../../../img/inicio/bienvenida/" . $nombre_archivo_imagen);
    }

    $sentencia = $conexion->prepare("INSERT INTO `tb_bienvenida` (`id`, `titulo`, `imagen`, `descripcion`) 
    VALUES (NULL, :titulo, :imagen, :descripcion);");
    
    $sentencia->bindParam(":titulo", $titulo);
    $sentencia->bindParam(":imagen", $nombre_archivo_imagen);
    $sentencia->bindParam(":descripcion", $descripcion);
    $sentencia->execute();

    $mensaje="Registro Agregado";
    header("location:index.php?mensaje=".$mensaje);
    
}


include("../../templates/header.php");
?>



<!--***********************************CATEGORIAS******************************-->
<div class="card">

    <div class="card-header">
        Crear bienvenida
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


            <div class="mb-3">
                <label for="" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="" />
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