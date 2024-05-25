<?php
include("../../bd.php");

if (isset($_GET['txtid'])) {
    //recuperar los datos de ID correspondiente (seleccioando)

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";

    $sentencia = $conexion->prepare("SELECT * FROM tb_configuracion WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();

    $registro = $sentencia->fetch(PDO::FETCH_LAZY);

    $nombreconfi = $registro['nombreconfi'];
    $valor = $registro['valor'];
}

if ($_POST) {
    print_r($_POST);

    //recepcionamos los valores del formulario
    $txtid = (isset($_POST['txtid'])) ? $_POST['txtid'] : "";
    $nombreconfi = (isset($_POST['nombreconfi'])) ? $_POST['nombreconfi'] : "";
    $valor = (isset($_POST['valor'])) ? $_POST['valor'] : "";
   
    $sentencia = $conexion->prepare("UPDATE tb_configuracion  
     SET 
     nombreconfi=:nombreconfi,
     valor=:valor
     WHERE id=:id ");

    $sentencia->bindParam(":nombreconfi", $nombreconfi);
    $sentencia->bindParam(":valor", $valor);
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();


    $mensaje = "Registro Modificado";
    header("location:index.php?mensaje=" . $mensaje);
}







include("../../templates/header.php")
?>




<div class="card">

    <div class="card-header">
        Ediar infromacion general
    </div>

    <div class="card-body">


        <form action="" enctype="multipart/form-data" method="post">

            <div class="mb-3">
                <label for="txtid" class="form-label">ID:</label>
                <input readonly value="<?php echo $txtid; ?>" type="text" class="form-control" name="txtid" id="txtid" aria-describedby="helpId" placeholder="id" />
            </div>


            <div class="mb-3">
                <label for="nombreconfi" class="form-label">Titulo</label>
                <input value="<?php echo $nombreconfi; ?>" type="text" class="form-control" name="nombreconfi" id="nombreconfi" aria-describedby="helpId" placeholder="" />
            </div>

            
            <div class="mb-3">
                <label for="valor" class="form-label">Valor</label>
                <input value="<?php echo $valor; ?>" ype="text" class="form-control" name="valor" id="valor" aria-describedby="helpId" placeholder="" />
            </div>


            <button type="submit" class="btn btn-success">
                Actualizar
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