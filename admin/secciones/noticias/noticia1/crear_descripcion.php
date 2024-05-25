<?php

include("../../../bd.php");


//******************************************Categorias******************************************* */

if ($_POST) {

    //recepcionamos los valores del formulario
  
    $descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : "";


    $sentencia = $conexion->prepare("INSERT INTO `tb_noticias_descripcion` (`id`, `descripcion`) 
    VALUES (NULL,  :descripcion);");


    $sentencia->bindParam(":descripcion", $descripcion);

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
                <label for="descripcion" class="form-label">Descricpion</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="" />
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