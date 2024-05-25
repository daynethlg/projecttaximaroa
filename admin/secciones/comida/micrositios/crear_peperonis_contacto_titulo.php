<?php

include("../../../bd.php");


//******************************************Banner******************************************* */

if ($_POST) {

    //recepcionamos los valores del formulario
    $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : "";


    $sentencia = $conexion->prepare("INSERT INTO `tb_peperonis_datos_titulo` (`id`, `titulo`) 
    VALUES (NULL, :titulo);");

    $sentencia->bindParam(":titulo", $titulo);
    $sentencia->execute();

    $mensaje = "Registro Agregado";
    header("location:index_peperonis.php?mensaje=" . $mensaje);
}


include("../../../templates/header.php");
?>



<!--***********************************TITULO CONTACTO******************************-->
<div class="card">

    <div class="card-header">
        Crear titulo contacto
    </div>

    <div class="card-body">


        <form action="" enctype="multipart/form-data" method="post">



            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="" />
            </div>



            <button type="submit" class="btn btn-success">
                Agregar
            </button>


            <a name="" id="" class="btn btn-primary" href="index_peperonis.php" role="button">Cancelar</a>

        </form>

    </div>
    <div class="card-footer text-muted">
        Foot


    </div>
</div>




<?php
include("../../../templates/footer.php")
?>