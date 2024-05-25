<?php
include("../../bd.php");


//****************************************TITULO************************************************

if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";


    //imagen
    $sentencia1 = $conexion->prepare("SELECT imagen FROM tb_nosotros_titulo WHERE id=:id ");
    $sentencia1->bindParam(":id", $txtid);
    $sentencia1->execute();
    $registro_imagen1 = $sentencia1->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen1["imagen"])) {
        if (file_exists("../../../img/about_us/" . $registro_imagen1["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../img/about_us/" . $registro_imagen1["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia1 = $conexion->prepare("DELETE FROM tb_nosotros_titulo WHERE id=:id ");
    $sentencia1->bindParam(":id", $txtid);
    $sentencia1->execute();
}


//seleccionar registros
$sentencia1 = $conexion->prepare("SELECT *FROM `tb_nosotros_titulo`");
$sentencia1->execute();
$lista_titulo = $sentencia1->fetchAll(PDO::FETCH_ASSOC);





//****************************************DATOS************************************************

if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";


    //imagen
    $sentencia2 = $conexion->prepare("SELECT imagen FROM tb_datos_nosotros WHERE id=:id ");
    $sentencia2->bindParam(":id", $txtid);
    $sentencia2->execute();
    $registro_imagen = $sentencia2->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen2["imagen"])) {
        if (file_exists("../../../img/about_us/" . $registro_imagen2["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../img/about_us/" . $registro_imagen2["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia2 = $conexion->prepare("DELETE FROM tb_datos_nosotros WHERE id=:id ");
    $sentencia2->bindParam(":id", $txtid);
    $sentencia2->execute();
}


//seleccionar registros
$sentencia2 = $conexion->prepare("SELECT *FROM `tb_datos_nosotros`");
$sentencia2->execute();
$lista_datos = $sentencia2->fetchAll(PDO::FETCH_ASSOC);








//****************************************TEAM************************************************

if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";


    //imagen
    $sentencia4 = $conexion->prepare("SELECT imagen FROM tb_datos_team WHERE id=:id ");
    $sentencia4->bindParam(":id", $txtid);
    $sentencia4->execute();
    $registro_imagen3 = $sentencia4->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen3["imagen"])) {
        if (file_exists("../../../img/about_us/team/" . $registro_imagen3["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../img/about_us/team/" . $registro_imagen3["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia4 = $conexion->prepare("DELETE FROM tb_datos_team WHERE id=:id ");
    $sentencia4->bindParam(":id", $txtid);
    $sentencia4->execute();
}


//seleccionar registros
$sentencia4 = $conexion->prepare("SELECT *FROM `tb_datos_team`");
$sentencia4->execute();
$lista_team = $sentencia4->fetchAll(PDO::FETCH_ASSOC);









//**********************************MAPA************************* */
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";
    //borra registror con ID correspondiente
    $sentencia6 = $conexion->prepare("DELETE FROM tb_nosotros_contacto_mapa WHERE id=:id ");
    $sentencia6->bindParam(":id", $txtid);
    $sentencia6->execute();
}
//seleccionar registros
$sentencia6 = $conexion->prepare("SELECT *FROM `tb_nosotros_contacto_mapa`");
$sentencia6->execute();
$lista_mapa = $sentencia6->fetchAll(PDO::FETCH_ASSOC);



// ******************DATOS GENERALES****************************************
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";
    //borra registror con ID correspondiente
    $sentencia7 = $conexion->prepare("DELETE FROM tb_nosotros_datos2 WHERE id=:id ");
    $sentencia7->bindParam(":id", $txtid);
    $sentencia7->execute();
}
//seleccionar registros
$sentencia7 = $conexion->prepare("SELECT *FROM `tb_nosotros_datos2`");
$sentencia7->execute();
$lista_datos2 = $sentencia7->fetchAll(PDO::FETCH_ASSOC);







//**************************************ICONOS******************************************
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";


    //imagen
    $sentencia8 = $conexion->prepare("SELECT imagen FROM tb_nosotros_icono WHERE id=:id ");
    $sentencia8->bindParam(":id", $txtid);
    $sentencia8->execute();
    $registro_imagen4 = $sentencia8->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen4["imagen"])) {
        if (file_exists("../../../img/about_us/" . $registro_imagen4["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../img/about_us/" . $registro_imagen4["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia8 = $conexion->prepare("DELETE FROM tb_nosotros_icono WHERE id=:id ");
    $sentencia8->bindParam(":id", $txtid);
    $sentencia8->execute();
}


//seleccionar registros
$sentencia8 = $conexion->prepare("SELECT *FROM `tb_nosotros_icono`");
$sentencia8->execute();
$lista_icono = $sentencia8->fetchAll(PDO::FETCH_ASSOC);



include("../../templates/header.php")
?>




<div class="container">



    <!--****************************************TITULO************************************************-->
    <div class="card">
        <div class="card-header">
            <h2>Encanbezado</h2>
            <a name="" id="" class="btn btn-primary" href="crear_titulo_nosotros.php" role="button">Agregar Registros</a>


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
                        <?php foreach ($lista_titulo as $registros1) { ?>

                            <tr class="">

                                <td scope="col"><?php echo $registros1['id']; ?></td>
                                <td><?php echo $registros1['titulo']; ?></td>


                                <td scope="col">
                                    <img width="50" src="../../../img/about_us/<?php echo $registros1['imagen']; ?>" />
                                </td>


                                <td scope="col"><?php echo $registros1['descripcion']; ?></td>

                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_titulo_nosotros.php?txtid=<?php echo $registros1['id']; ?>" role="button">Editar
                                    </a>
                                    <a name="" id="" class="btn btn-danger" href="index.php?txtid=<?php echo $registros1['id']; ?>" role="button">Eliminar
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

    <!--****************************************DATOS************************************************-->
    <div class="card">
        <div class="card-header">
            <h2>Datos</h2>
            <a name="" id="" class="btn btn-primary" href="crear_datos_nosotros.php" role="button">Agregar Registros</a>


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
                        <?php foreach ($lista_datos as $registros2) { ?>

                            <tr class="">

                                <td scope="col"><?php echo $registros2['id']; ?></td>
                                <td><?php echo $registros2['titulo']; ?></td>


                                <td scope="col">
                                    <img width="50" src="../../../img/about_us/<?php echo $registros2['imagen']; ?>" />
                                </td>


                                <td scope="col"><?php echo $registros2['descripcion']; ?></td>

                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_datos_nosotros.php?txtid=<?php echo $registros2['id']; ?>" role="button">Editar
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






    <br>

    <!--****************************************  TEAM************************************************-->
    <div class="card">
        <div class="card-header">
            <h2>Datos team</h2>
            <a name="" id="" class="btn btn-primary" href="crear_datos_team.php" role="button">Agregar Registros</a>


        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>

                            <th scope="col">Nombre</th>
                            <th scope="col">puesto</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Link</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista_team as $registros4) { ?>

                            <tr class="">

                                <td scope="col"><?php echo $registros4['id']; ?></td>

                                <td><?php echo $registros4['nombre']; ?></td>


                                <td scope="col"><?php echo $registros4['puesto']; ?></td>

                                <td scope="col">
                                    <img width="50" src="../../../img/about_us/team/<?php echo $registros4['imagen']; ?>" />
                                </td>


                                <td scope="col"><?php echo $registros4['link']; ?></td>
                                

                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_datos_team.php?txtid=<?php echo $registros4['id']; ?>" role="button">Editar
                                    </a>
                                    <a name="" id="" class="btn btn-danger" href="index.php?txtid=<?php echo $registros4['id']; ?>" role="button">Eliminar
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





    <!--*****************************************MAPA************************************-->
    <div class="card">
        <div class="card-header">
            <h1>MAPA</h1>
            <a name="" id="" class="btn btn-primary" href="crear_mapa.php" role="button">Agregar Registros</a>


        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Link</th>
                            <th scope="col">Acciones</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php foreach ($lista_mapa as $registros6) { ?>

                            <tr class="">

                                <td><?php echo $registros6['id']; ?></td>
                                <td><?php echo $registros6['titulo']; ?></td>
                                <td><?php echo $registros6['link']; ?></td>


                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_mapa.php?txtid=<?php echo $registros6['id']; ?>" role="button">Editar
                                    </a>
                                    <a name="" id="" class="btn btn-danger" href="index.php?txtid=<?php echo $registros6['id']; ?>" role="button">Eliminar
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
    <!--**************************************** Descripicion general************************************************-->
    <div class="card">
        <div class="card-header">
            <h2>Datos</h2>
            <a name="" id="" class="btn btn-primary" href="crear_datos_generales.php" role="button">Agregar Registros</a>


        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Descripcion</th>

                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista_datos2 as $registros7) { ?>

                            <tr class="">

                                <td scope="col"><?php echo $registros7['id']; ?></td>
                                <td><?php echo $registros7['titulo']; ?></td>
                                <td><?php echo $registros7['descripcion']; ?></td>

                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_datos_generales.php?txtid=<?php echo $registros7['id']; ?>" role="button">Editar
                                    </a>
                                    <a name="" id="" class="btn btn-danger" href="index.php?txtid=<?php echo $registros7['id']; ?>" role="button">Eliminar
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
                        <?php foreach ($lista_icono as $registros8) { ?>

                            <tr class="">

                                <td><?php echo $registros8['id']; ?></td>
                                <td><?php echo $registros8['titulo']; ?></td>
                                <td><?php echo $registros8['link']; ?></td>

                                <td scope="col">
                                    <img width="50" src="../../../img/about_us/<?php echo $registros8['imagen']; ?>" />
                                </td>

                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_icono.php?txtid=<?php echo $registros8['id']; ?>" role="button">Editar
                                    </a>
                                    <a name="" id="" class="btn btn-danger" href="index.php?txtid=<?php echo $registros8['id']; ?>" role="button">Eliminar
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