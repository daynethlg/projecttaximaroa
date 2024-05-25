<?php
include("../../bd.php");






//**************************************Noticias*******************
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";

    //imagen
    $sentencia3 = $conexion->prepare("SELECT imagen FROM tb_noticias WHERE id=:id ");
    $sentencia3->bindParam(":id", $txtid);
    $sentencia3->execute();
    $registro_imagen3 = $sentencia3->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen3["imagen"])) {
        if (file_exists("../../../img/noticias/" . $registro_imagen3["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../img/noticias/" . $registro_imagen3["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia = $conexion->prepare("DELETE FROM tb_noticias WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();
}
//seleccionar registros
$sentencia = $conexion->prepare("SELECT *FROM `tb_noticias`");
$sentencia->execute();
$lista_noticias = $sentencia->fetchAll(PDO::FETCH_ASSOC);




include("../../templates/header.php")
?>





<!--************************************NOTICIAS*******************************-->
<div class="card">
    <div class="card-header">
        <h2>Noticias</h2>
        <a name="" id="" class="btn btn-primary" href="crear_noticias.php" role="button">Agregar Registros</a>
    </div>
    <div class="card-body">

        <div class="table-responsive-sm">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Categorias</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Boton</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_noticias as $registros) { ?>

                        <tr class="">

                            <td scope="col"><?php echo $registros['id']; ?></td>

                            <td scope="col">
                                <img width="50" src="../../../img/noticias/<?php echo $registros['imagen']; ?>" />
                            </td>

                            <td><?php echo $registros['titulo']; ?></td>

                            <td scope="col"><?php echo $registros['descripcion']; ?></td>
                            <td><?php echo $registros['categoria']; ?></td>
                            <td><?php echo $registros['fecha']; ?></td>
                            <td><?php echo $registros['boton']; ?></td>

                            <td>
                                <a name="" id="" class="btn btn-info" href="editar_noticias.php?txtid=<?php echo $registros['id']; ?>" role="button">Editar
                                </a>
                                <a name="" id="" class="btn btn-danger" href="index.php?txtid=<?php echo $registros['id']; ?>" role="button">Eliminar
                                </a>

                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>