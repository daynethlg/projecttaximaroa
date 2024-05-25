<?php
include("../../bd.php");


//****************************************BIENVENIDA INICIO************************************************

if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";


    //imagen
    $sentencia2 = $conexion->prepare("SELECT imagen FROM tb_servicios WHERE id=:id ");
    $sentencia2->bindParam(":id", $txtid);
    $sentencia2->execute();
    $registro_imagen2 = $sentencia2->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen2["imagen"])) {
        if (file_exists("../../../img/servicios/" . $registro_imagen2["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../img/servicios/" . $registro_imagen2["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia2 = $conexion->prepare("DELETE FROM tb_servicios WHERE id=:id ");
    $sentencia2->bindParam(":id", $txtid);
    $sentencia2->execute();
}


//seleccionar registros
$sentencia2 = $conexion->prepare("SELECT *FROM `tb_servicios`");
$sentencia2->execute();
$lista_comida2 = $sentencia2->fetchAll(PDO::FETCH_ASSOC);




//****************************************CATEGORIAS************************************************

if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";


    //imagen
    $sentencia = $conexion->prepare("SELECT imagen FROM tb_servicios_categorias WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();
    $registro_imagen = $sentencia->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen["imagen"])) {
        if (file_exists("../../../img/servicios/" . $registro_imagen["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../img/servicios/" . $registro_imagen["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia = $conexion->prepare("DELETE FROM tb_servicios_categorias WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();
}


//seleccionar registros
$sentencia = $conexion->prepare("SELECT *FROM `tb_servicios_categorias`");
$sentencia->execute();
$lista_comida = $sentencia->fetchAll(PDO::FETCH_ASSOC);







include("../../templates/header.php")
?>

<!--****************************************BIENVENIDA INICIO************************************************-->
<div class="container">
<h1>SERVICIOS</h1>
<br>
    <div class="card">

        <div class="card-header">
            <h2>Bienvenida</h2>
            <a name="" id="" class="btn btn-primary" href="crear_inicio.php" role="button">Agregar Registros</a>

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
                                    <img width="50" src="../../../img/servicios/<?php echo $registros2['imagen']; ?>" />
                                </td>


                                <td scope="col"><?php echo $registros2['descripcion']; ?></td>

                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_inicio.php?txtid=<?php echo $registros2['id']; ?>" role="button">Editar
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
            <a name="" id="" class="btn btn-primary" href="crear_categorias.php" role="button">Agregar Registros</a>


        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>

                            <th scope="col">Titulo</th>
                            <th scope="col">Imagenes</th>
                            <th>Boton</th>
                            <th scope="col">Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista_comida as $registros) { ?>

                            <tr class="">

                                <td scope="col"><?php echo $registros['id']; ?></td>
                                <td><?php echo $registros['titulo']; ?></td>


                                <td scope="col">
                                    <img width="50" src="../../../img/servicios/<?php echo $registros['imagen']; ?>" />
                                </td>

                                <td> <?php echo $registros['boton']; ?> </td>

                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_categorias.php?txtid=<?php echo $registros['id']; ?>" role="button">Editar
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

</div>
<?php
include("../../templates/footer.php")
?>