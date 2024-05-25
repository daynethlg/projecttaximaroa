<?php
include("../../bd.php");

//Configuracion general
if ($_POST) {

    //recepcionamos los valores del formulario
    $nombreconfi = (isset($_POST['nombreconfi'])) ? $_POST['nombreconfi'] : "";
    $valor = (isset($_POST['valor'])) ? $_POST['valor'] : "";


    $sentencia = $conexion->prepare("INSERT INTO `tb_configuracion` (`id`, `nombreconfi`, `valor`) 
    VALUES (NULL, :nombreconfi, :valor);");

    $sentencia->bindParam(":nombreconfi", $nombreconfi);
    $sentencia->bindParam(":valor", $valor);
    $sentencia->execute();

    $mensaje = "Registro Agregado";
    header("location:index.php?mensaje=" . $mensaje);
}



include("../../templates/header.php")
?>



<!--configuracion general-->
<div class="card">
    <div class="card-header">Configuracion General</div>

    <div class="card-body">

        <form action="" method="post">

            <div class="mb-3">
                <label for="nombreconfi" class="form-label">Nombre configuracion:</label>
                <input type="text" class="form-control" name="nombreconfi" id="nombreconfi" aria-describedby="helpId" placeholder="Nombre Configuracion" />
            </div>

            <div class="mb-3">
                <label for="valor" class="form-label">Valor</label>
                <input type="text" class="form-control" name="valor" id="valor" aria-describedby="helpId" placeholder="Valor" />
            </div>

            <button type="submit" class="btn btn-success">
                Agregar
            </button>

            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

        </form>

    </div>

</div>