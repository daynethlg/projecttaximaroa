<?php

include("../../bd.php");

if (isset($_GET['txtid'])) {
    //recuperar los datos de ID correspondiente (seleccioando)
    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";

    $sentencia = $conexion->prepare("SELECT * FROM tb_usuario WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();

    $registro = $sentencia->fetch(PDO::FETCH_LAZY);

    $usuario = $registro['usuario'];
    $correo = $registro['correo'];
    $password = $registro['password'];
}

if ($_POST) {
    print_r($_POST);

    //recepcionamos los valores del formulario
    $txtid = (isset($_POST['txtid'])) ? $_POST['txtid'] : "";
    $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : "";
    $correo = (isset($_POST['correo'])) ? $_POST['correo'] : "";
    $password = (isset($_POST['password'])) ? $_POST['password'] : "";


    $sentencia = $conexion->prepare("UPDATE tb_usuario 
     SET 
     usuario=:usuario,
     correo=:correo,
     password=:password
     WHERE id=:id ");

    $sentencia->bindParam(":usuario", $usuario);
    $sentencia->bindParam(":password", $password);
    $sentencia->bindParam(":correo", $correo);
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();

    $mensaje = "Registro Agregado";
    header("location:index.php?mensaje=" . $mensaje);
}

include("../../templates/header.php")

?>

<div class="card">
    <div class="card-header">
        Usuario
    </div>

    <div class="card-body">

        <form action="" method="post">

            <div class="mb-3">
                <label for="txtid" class="form-label">id</label>
                <input readonly type="text" class="form-control" value="<?php echo $txtid; ?>" name="txtid" id="txtid" aria-describedby="helpId" placeholder="" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Nombre Usuario</label>
                <input type="text" class="form-control" value="<?php echo $usuario; ?>" name="usuario" id="usuario" aria-describedby="helpId" placeholder="USUARIO" />
            </div>


            <div class="mb-3">
                <label for="" class="form-label">Correo</label>
                <input type="text" value="<?php echo $correo; ?>" class="form-control" name="correo" id="correo" aria-describedby="emailhelpId" placeholder="CORREO" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" value="<?php echo $password; ?>" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="PASSWORD" />
            </div>

            <button type="submit" class="btn btn-success">
                Actualizar
            </button>

            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        
        </form>
    </div>
</div>


<?php
include("../../templates/footer.php")
?>