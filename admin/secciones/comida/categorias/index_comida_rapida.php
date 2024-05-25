<?php
include("../../../bd.php");


//INICIO********************
if (isset($_GET['txtid'])) {
    //borra registror con ID correspondiente
    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";

    //imagens
    $sentencia2 = $conexion->prepare("SELECT imagen FROM tb_comida_rapida_inicio WHERE id=:id ");
    $sentencia2->bindParam(":id", $txtid);
    $sentencia2->execute();
    $registro_imagen2 = $sentencia2->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen2["imagen"])) {
        if (file_exists("../../../../img/comida/comida_rapida/" . $registro_imagen2["imagen"])) {
            echo "Imagen enconcontrada...";
            unlink("../../../../img/comida/comida_rapida/" . $registro_imagen2["imagen"]);
        }
    }


    $sentencia2 = $conexion->prepare("DELETE FROM tb_comida_rapida_inicio WHERE id=:id ");
    $sentencia2->bindParam(":id", $txtid);
    $sentencia2->execute();
}


//seleccionar registros
$sentencia2 = $conexion->prepare(" SELECT *FROM `tb_comida_rapida_inicio` ");
$sentencia2->execute();
$lista_baner = $sentencia2->fetchAll(PDO::FETCH_ASSOC);









//CATEGORIAS********************
if (isset($_GET['txtid'])) {
    //borra registror con ID correspondiente
    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";

    //imagen
    $sentencia = $conexion->prepare("SELECT imagen FROM tb_comida_rapida_categorias WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();
    $registro_imagen = $sentencia->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen["imagen"])) {
        if (file_exists("../../../../img/comida/comida_rapida/" . $registro_imagen["imagen"])) {
            echo "Imagen enconcontrada...";
            unlink("../../../../img/comida/comida_rapida/" . $registro_imagen["imagen"]);
        }
    }


    $sentencia = $conexion->prepare("DELETE FROM tb_comida_rapida_categorias WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();
}


//seleccionar registros
$sentencia = $conexion->prepare(" SELECT *FROM `tb_comida_rapida_categorias` ");
$sentencia->execute();
$lista_subcategoria = $sentencia->fetchAll(PDO::FETCH_ASSOC);



include("../../../templates/header.php")
?>

<div class="container">


    <h1>Comida rapida</h1>
    <br>

    <!--Inicio/biemvemida-->
    <div class="card">
        <div class="card-header">
            <h3>Inicio/bienvenida</h3>
            <a name="" id="" class="btn btn-primary" href="crear_comida_rapida_inicio.php" role="button">Agregar Registros</a>


        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Banner</th>
                            

                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista_baner as $registros2) { ?>


                            <tr class="">
                                <!--ID-->
                                <td scope="col"><?php echo $registros2['id']; ?></td>

                                <!--imagen-->
                                <td scope="col">
                                    <img width="50" src="../../../../img/comida/comida_rapida<?php echo $registros2['imagen']; ?>" alt="">
                                </td>

                                <!--texto-->
                                <td scope="col"><?php echo $registros2['titulo']; ?></td>


                                <!--Botones-->
                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_comida_rapida_inicio.php?txtid=<?php echo $registros2['id']; ?>" role="button">Editar
                                    </a>
                                    <a name="" id="" class="btn btn-danger" href="index_comida_rapida.php?txtid=<?php echo $registros2['id']; ?>" role="button">Eliminar
                                    </a>
                                </td>

                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!--Categorias-->

    <div class="card">
        <div class="card-header">
            <h3>Categorias</h3>
            <a name="" id="" class="btn btn-primary" href="crear_comida_rapida.php" role="button">Agregar Registros</a>


        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Titulo</th>

                            <th scope="col">Botón</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista_subcategoria as $registros) { ?>


                            <tr class="">
                                <!--ID-->
                                <td scope="col"><?php echo $registros['id']; ?></td>

                                <!--imagen-->
                                <td scope="col">
                                    <img width="50" src="../../../../img/comida/comida_rapida<?php echo $registros['imagen']; ?>" alt="">
                                </td>

                                <!--texto-->
                                <td scope="col"><?php echo $registros['titulo']; ?></td>
                                <td scope="col"><?php echo $registros['boton']; ?></td>

                                <!--Botones-->
                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_comida_rapida.php?txtid=<?php echo $registros['id']; ?>" role="button">Editar
                                    </a>
                                    <a name="" id="" class="btn btn-danger" href="index_comida_rapida.php?txtid=<?php echo $registros['id']; ?>" role="button">Eliminar
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
include("../../../templates/footer.php")
?>