<?php

include("../../bd.php");


//******************************************TITULO******************************************* */

if ($_POST){

    //recepcionamos los valores del formulario
    $nombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
    $puesto=(isset($_POST['puesto']))?$_POST['puesto']:"";
    $imagen = (isset($_FILES["imagen"]["name"])) ? $_FILES["imagen"]["name"] : "";
    $link=(isset($_POST['link']))?$_POST['link']:"";
   
    
    //imagen
    $fecha_imagen = new DateTime();
    $nombre_archivo_imagen = ($imagen != "") ? $fecha_imagen->getTimestamp() . "_" . $imagen : "";

    $tmp_imagen = $_FILES["imagen"]["tmp_name"];

    if ($tmp_imagen != "") {
        move_uploaded_file($tmp_imagen, "../../../img/about_us/team/" . $nombre_archivo_imagen);
    }

    $sentencia = $conexion->prepare("INSERT INTO `tb_datos_team` (`id`, `nombre`, `puesto`, `imagen`, `link`) 
    VALUES (NULL, :nombre, :puesto, :imagen, :link);");
    
    $sentencia->bindParam(":nombre", $nombre);
    $sentencia->bindParam(":puesto", $puesto);
    $sentencia->bindParam(":imagen", $nombre_archivo_imagen);
    $sentencia->bindParam(":link", $link);
   
    $sentencia->execute();

    $mensaje="Registro Agregado";
    header("location:index.php?mensaje=".$mensaje);
    
}


include("../../templates/header.php");
?>



<!--***********************************DATOS******************************-->
<div class="card">

    <div class="card-header">
        Crear Datos
    </div>

    <div class="card-body">


        <form action="" enctype="multipart/form-data" method="post">
            


            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">puesto</label>
                <input type="text" class="form-control" name="puesto" id="puesto" aria-describedby="helpId" placeholder="" />
            </div>


            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" name="imagen" id="imagen" aria-describedby="helpId" placeholder="Imagen" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Link</label>
                <input type="text" class="form-control" name="link" id="link" aria-describedby="helpId" placeholder="" />
            </div>


            


            <button type="submit" class="btn btn-success">
                Agregar
            </button>


            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

        </form>

    </div>

</div>




<?php
include("../../templates/footer.php")
?>