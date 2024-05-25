<?php
include("../../../bd.php");


//****************************************BIENVENIDA INICIO************************************************

if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";


    //imagen
    $sentencia2 = $conexion->prepare("SELECT imagen FROM tb_biencomida WHERE id=:id ");
    $sentencia2->bindParam(":id", $txtid);
    $sentencia2->execute();
    $registro_imagen2 = $sentencia2->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen2["imagen"])) {
        if (file_exists("../../../../img/comida/" . $registro_imagen2["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../../img/comida/" . $registro_imagen2["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia2 = $conexion->prepare("DELETE FROM tb_biencomida WHERE id=:id ");
    $sentencia2->bindParam(":id", $txtid);
    $sentencia2->execute();
}


//seleccionar registros
$sentencia2 = $conexion->prepare("SELECT *FROM `tb_biencomida`");
$sentencia2->execute();
$lista_comida2 = $sentencia2->fetchAll(PDO::FETCH_ASSOC);
print_r($lista_comida2);




//****************************************CATEGORIAS************************************************

if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";


    //imagen
    $sentencia = $conexion->prepare("SELECT imagen FROM tb_comida WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();
    $registro_imagen = $sentencia->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen["imagen"])) {
        if (file_exists("../../../../img/comida/" . $registro_imagen["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../../img/comida/" . $registro_imagen["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia = $conexion->prepare("DELETE FROM tb_comida WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();
}


//seleccionar registros
$sentencia = $conexion->prepare("SELECT *FROM `tb_comida`");
$sentencia->execute();
$lista_comida = $sentencia->fetchAll(PDO::FETCH_ASSOC);
print_r($lista_comida);






include("../../../templates/header.php")
?>

<!--****************************************BIENVENIDA INICIO************************************************-->
<div class="card">
    <div class="card-header">
        <h2>Bienvenida</h2>
        <a name="" id="" class="btn btn-primary" href="crear2.php" role="button">Agregar Registros</a>


    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>

                        <th scope="col">Titulo</th>
                        <th scope="col">Imagenes</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_comida2 as $registros2) { ?>

                        <tr class="">

                            <td scope="col"><?php echo $registros2['id']; ?></td>
                            <td><?php echo $registros2['titulo']; ?></td>


                            <td scope="col">
                                <img width="50" src="../../../../img/comida/<?php echo $registros2['imagen']; ?>" />
                            </td>


                            <td scope="col"><?php echo $registros2['descripcion']; ?></td>

                            <td>
                                <a name="" id="" class="btn btn-info" href="editar2.php?txtid=<?php echo $registros2['id']; ?>" role="button">Editar
                                </a>
                                <a name="" id="" class="btn btn-danger" href="index.php?txtid=<?php echo $registros2['id']; ?>" role="button">Eliminar
                                </a>

                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>




<br>

<!--****************************************CATEGORIAS************************************************-->
<div class="card">
    <div class="card-header">
        <h2>Categorias</h2>
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar Registros</a>


    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>

                        <th scope="col">Titulo</th>
                        <th scope="col">Imagenes</th>
                        <th scope="col">Descripcion</th>
                        <th>Boton</th>
                        <th scope="col">Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_comida as $registros) { ?>

                        <tr class="">

                            <td scope="col"><?php echo $registros['id']; ?></td>
                            <td><?php echo $registros['titulo_p']; ?></td>


                            <td scope="col">
                                <img width="50" src="../../../../img/comida/<?php echo $registros['imagen']; ?>" />
                            </td>


                            <td scope="col"><?php echo $registros['descripcion_p']; ?></td>

                            <td> <?php echo $registros['boton']; ?> </td>

                            <td>
                                <a name="" id="" class="btn btn-info" href="editar.php?txtid=<?php echo $registros['id']; ?>" role="button">Editar
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


<?php
include("../../../templates/footer.php")
?>