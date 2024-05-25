<?php

include("../../bd.php");

//Configuracion Banner
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";

    //imagen
    $sentencia2 = $conexion->prepare("SELECT imagen FROM tb_banner WHERE id=:id ");
    $sentencia2->bindParam(":id", $txtid);
    $sentencia2->execute();
    $registro_imagen2 = $sentencia2->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen2["imagen"])) {
        if (file_exists("../../../img/inicio/banner/" . $registro_imagen2["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../img/inicio/banner/" . $registro_imagen2["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia2 = $conexion->prepare("DELETE FROM tb_banner WHERE id=:id ");
    $sentencia2->bindParam(":id", $txtid);
    $sentencia2->execute();
}


//seleccionar registros
$sentencia2 = $conexion->prepare("SELECT *FROM `tb_banner`");
$sentencia2->execute();
$lista_banner = $sentencia2->fetchAll(PDO::FETCH_ASSOC);








//****************************************BIENVENIDA INICIO************************************************

if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";


    //imagen
    $sentencia = $conexion->prepare("SELECT imagen FROM tb_bienvenida WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();
    $registro_imagen = $sentencia->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen["imagen"])) {
        if (file_exists("../../../img/inicio/bienvenida/" . $registro_imagen["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../img/inicio/bienvenida/" . $registro_imagen["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia = $conexion->prepare("DELETE FROM tb_bienvenida WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();
}


//seleccionar registros
$sentencia = $conexion->prepare("SELECT *FROM `tb_bienvenida`");
$sentencia->execute();
$lista_comida2 = $sentencia->fetchAll(PDO::FETCH_ASSOC);





//****************************************ANUNCIOS************************************************

if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";


    //imagen
    $sentencia3 = $conexion->prepare("SELECT imagen FROM tb_anuncios WHERE id=:id ");
    $sentencia3->bindParam(":id", $txtid);
    $sentencia3->execute();
    $registro_imagen3 = $sentencia3->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen3["imagen"])) {
        if (file_exists("../../../img/inicio/anuncios/" . $registro_imagen3["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../img/inicio/anuncios/" . $registro_imagen3["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia3 = $conexion->prepare("DELETE FROM tb_anuncios WHERE id=:id ");
    $sentencia3->bindParam(":id", $txtid);
    $sentencia3->execute();
}


//seleccionar registros
$sentencia3 = $conexion->prepare("SELECT *FROM `tb_anuncios`");
$sentencia3->execute();
$lista_anuncios = $sentencia3->fetchAll(PDO::FETCH_ASSOC);













//**************************************+Configuracion general****************************
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";
    //borra registror con ID correspondiente
    $sentencia4 = $conexion->prepare("DELETE FROM tb_configuracion WHERE id=:id ");
    $sentencia4->bindParam(":id", $txtid);
    $sentencia4->execute();
}
//seleccionar registros
$sentencia4 = $conexion->prepare("SELECT *FROM `tb_configuracion`");
$sentencia4->execute();
$lista_configuracion = $sentencia4->fetchAll(PDO::FETCH_ASSOC);







//**************************************ICONOS******************************************
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";


    //imagen
    $sentencia5 = $conexion->prepare("SELECT imagen FROM tb_iconos WHERE id=:id ");
    $sentencia5->bindParam(":id", $txtid);
    $sentencia5->execute();
    $registro_imagen4 = $sentencia5->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen4["imagen"])) {
        if (file_exists("../../../images/icono/" . $registro_imagen4["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../images/icono/" . $registro_imagen4["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia5 = $conexion->prepare("DELETE FROM tb_iconos WHERE id=:id ");
    $sentencia5->bindParam(":id", $txtid);
    $sentencia5->execute();
}


//seleccionar registros
$sentencia5 = $conexion->prepare("SELECT *FROM `tb_iconos`");
$sentencia5->execute();
$lista_icono = $sentencia5->fetchAll(PDO::FETCH_ASSOC);













include("../../templates/header.php")
?>

<br>


<!--**************************************************************CODIGO*****************************************************************************-->
<!--****************************************BANNER************************************************-->
<div class="container">

    <div class="card">
        <div class="card-header">
            <h1>Banner</h1>
            <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar Registros</a>


        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>

                            <th scope="col">Imagen</th>
                            <th scope="col">Titulo</th>

                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista_banner as $registros2) { ?>

                            <tr class="">

                                <td scope="col"><?php echo $registros2['id']; ?></td>


                                <td scope="col">
                                    <img width="50" src="../../../img/inicio/banner/<?php echo $registros2['imagen']; ?>" />
                                </td>
                                <td><?php echo $registros2['titulo']; ?></td>

                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar.php?txtid=<?php echo $registros2['id']; ?>" role="button">Editar
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





    <!--*****************************************BIENVENIDA************** ***************-->

    <div class="card">
        <div class="card-header">

            <h1>Bienvenida</h1>
            <a name="" id="" class="btn btn-primary" href="crear_bienvenida.php" role="button">Agregar Registros</a>


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
                                    <img width="50" src="../../../img/inicio/bienvenida/<?php echo $registros2['imagen']; ?>" />
                                </td>


                                <td scope="col"><?php echo $registros2['descripcion']; ?></td>

                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_bienvenida.php?txtid=<?php echo $registros2['id']; ?>" role="button">Editar
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

    <!--********************ANUNCIOS*******************-->
    <div class="card">
        <div class="card-header">

            <h1>Anuncios</h1>
            <a name="" id="" class="btn btn-primary" href="crear_anuncio.php" role="button">Agregar Registros</a>


        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Imagenes</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista_anuncios as $registros3) { ?>

                            <tr class="">

                                <td scope="col"><?php echo $registros3['id']; ?></td>
                                <td scope="col"><?php echo $registros3['titulo']; ?></td>

                                <td scope="col">
                                    <img width="50" src="../../../img/inicio/anuncios/<?php echo $registros3['imagen']; ?>" />
                                </td>

                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_anuncio.php?txtid=<?php echo $registros3['id']; ?>" role="button">Editar
                                    </a>

                                    <a name="" id="" class="btn btn-danger" href="index.php?txtid=<?php echo $registros3['id']; ?>" role="button">Eliminar</a>

                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>



    <br>

    <!--*****************************************Pie de pagina ***************-->
    <div class="card">
        <div class="card-header">
            <h1>Configuracion General</h1>
            <a name="" id="" class="btn btn-primary" href="crear_confi.php" role="button">Agregar Registros</a>
        </div>
        <div class="card-body">

            <div class="table-responsive-sm">
                <table class="table">

                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre configuracion</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($lista_configuracion as $registros) { ?>
                            <tr class="">
                                <td><?php echo $registros['id']; ?></td>
                                <td><?php echo $registros['nombreconfi']; ?></td>
                                <td><?php echo $registros['valor']; ?></td>
                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_confi.php?txtid=<?php echo $registros['id']; ?>" role="button">Editar
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






    <br>

    <!--*****************************************ICONOS************************************-->
    <div class="card">
        <div class="card-header">
            <h1>Iconos</h1>
            <a name="" id="" class="btn btn-primary" href="crear_icono.php" role="button">Agregar Registros</a>


        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Link</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Acciones</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php foreach ($lista_icono as $registros5) { ?>

                            <tr class="">

                                <td><?php echo $registros5['id']; ?></td>
                                <td><?php echo $registros5['titulo']; ?></td>
                                <td><?php echo $registros5['link']; ?></td>

                                <td scope="col">
                                    <img width="50" src="../../../images/icono/<?php echo $registros5['imagen']; ?>" />
                                </td>

                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_icono.php?txtid=<?php echo $registros5['id']; ?>" role="button">Editar
                                    </a>
                                    <a name="" id="" class="btn btn-danger" href="index.php?txtid=<?php echo $registros5['id']; ?>" role="button">Eliminar
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


<?php include("../../templates/footer.php") ?>