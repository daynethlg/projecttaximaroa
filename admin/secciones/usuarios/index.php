<?php
include("../../bd.php");


if (isset($_GET['txtid'])) {

    //borrara
    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";
    $sentencia = $conexion->prepare ("DELETE FROM tb_usuario WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();
}


//seleccionar registros
$sentencia = $conexion->prepare("SELECT * FROM `tb_usuario`");
$sentencia->execute();
$lista_usuario = $sentencia->fetchAll(PDO::FETCH_ASSOC);


include("../../templates/header.php")
?>


<div class="card">

    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar Registros</a>
    </div>

    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>

                    <tr>
                        <th scope="col">Usuario</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Acciones</th>
                    </tr>

                </thead>

                <tbody>
                    <?php foreach ($lista_usuario as $registros) { ?>

                        <tr class="">
                            <td scope="col"><?php echo $registros['usuario']; ?></td>
                            <td scope="col"><?php echo $registros['correo']; ?></td>
                            <td scope="col"><?php echo $registros['password']; ?></td>
                            <td scope="col">
                                <a name="" id="" class="btn btn-info" href="editar.php?txtid=<?php echo $registros['id']; ?>" role="button">Editar</a>
                                <a name="" id="" class="btn btn-danger" href="index.php?txtid=<?php echo $registros['id']; ?>" role="button">Borrar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <?php
            include("../../templates/footer.php")
            ?>

        </div>
    </div>
</div>