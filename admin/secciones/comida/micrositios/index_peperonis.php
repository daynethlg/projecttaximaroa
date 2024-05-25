<?php
include("../../../bd.php");


//BANNER
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";


    //imagen
    $sentencia = $conexion->prepare("SELECT imagen FROM tb_peperonis_banner WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();
    $registro_imagen = $sentencia->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen["imagen"])) {
        if (file_exists("../../../../img/comida/pizzerias/peperonis_pizzas/" . $registro_imagen["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../../img/comida/pizzerias/peperonis_pizzas/" . $registro_imagen["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia = $conexion->prepare("DELETE FROM tb_peperonis_banner WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();
    
}

//seleccionar registros
$sentencia = $conexion->prepare("SELECT *FROM `tb_peperonis_banner`");
$sentencia->execute();
$lista_banner = $sentencia->fetchAll(PDO::FETCH_ASSOC);





//PERFIL*****************
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";


    //imagen
    $sentencia7 = $conexion->prepare("SELECT imagen FROM tb_peperonis_perfil WHERE id=:id ");
    $sentencia7->bindParam(":id", $txtid);
    $sentencia7->execute();
    $registro_imagen7 = $sentencia7->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen7["imagen"])) {
        if (file_exists("../../../../img/comida/pizzerias/peperonis_pizzas/" . $registro_imagen7["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../../img/comida/pizzerias/peperonis_pizzas/" . $registro_imagen7["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia7 = $conexion->prepare("DELETE FROM tb_peperonis_perfil WHERE id=:id ");
    $sentencia7->bindParam(":id", $txtid);
    $sentencia7->execute();
}


//seleccionar registros
$sentencia7 = $conexion->prepare("SELECT *FROM `tb_peperonis_perfil`");
$sentencia7->execute();
$lista_perfil = $sentencia7->fetchAll(PDO::FETCH_ASSOC);



//GALERIA
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";


    //imagen
    $sentencia2 = $conexion->prepare("SELECT imagen FROM tb_peperonis_galeria WHERE id=:id ");
    $sentencia2->bindParam(":id", $txtid);
    $sentencia2->execute();
    $registro_imagen2 = $sentencia2->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen2["imagen"])) {
        if (file_exists("../../../../img/comida/pizzerias/peperonis_pizzas/" . $registro_imagen2["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../../img/comida/pizzerias/peperonis_pizzas/" . $registro_imagen2["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia2 = $conexion->prepare("DELETE FROM tb_peperonis_galeria WHERE id=:id ");
    $sentencia2->bindParam(":id", $txtid);
    $sentencia2->execute();
}


//seleccionar registros
$sentencia2 = $conexion->prepare("SELECT *FROM `tb_peperonis_galeria`");
$sentencia2->execute();
$lista_galeria = $sentencia2->fetchAll(PDO::FETCH_ASSOC);





//DATOS******
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";

    //borra registror con ID correspondiente
    $sentencia3 = $conexion->prepare("DELETE FROM tb_peperonis_datos WHERE id=:id ");
    $sentencia3->bindParam(":id", $txtid);
    $sentencia3->execute();
}

//seleccionar registros
$sentencia3 = $conexion->prepare("SELECT *FROM `tb_peperonis_datos`");
$sentencia3->execute();
$lista_datos = $sentencia3->fetchAll(PDO::FETCH_ASSOC);


//DATOS TITULO******
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";

    //borra registror con ID correspondiente
    $sentencia8 = $conexion->prepare("DELETE FROM tb_peperonis_datos_titulo WHERE id=:id ");
    $sentencia8->bindParam(":id", $txtid);
    $sentencia8->execute();
}

//seleccionar registros
$sentencia8 = $conexion->prepare("SELECT *FROM `tb_peperonis_datos_titulo`");
$sentencia8->execute();
$lista_datos_titulo = $sentencia8->fetchAll(PDO::FETCH_ASSOC);







//HORARIOS******
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";

    //borra registror con ID correspondiente
    $sentencia4 = $conexion->prepare("DELETE FROM tb_peperonis_horario WHERE id=:id ");
    $sentencia4->bindParam(":id", $txtid);
    $sentencia4->execute();
}

//seleccionar registros
$sentencia4 = $conexion->prepare("SELECT *FROM `tb_peperonis_horario`");
$sentencia4->execute();
$lista_horario = $sentencia4->fetchAll(PDO::FETCH_ASSOC);




//MAPA******
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";

    //borra registror con ID correspondiente
    $sentencia5 = $conexion->prepare("DELETE FROM tb_peperonis_mapa WHERE id=:id ");
    $sentencia5->bindParam(":id", $txtid);
    $sentencia5->execute();
}

//seleccionar registros
$sentencia5 = $conexion->prepare("SELECT *FROM `tb_peperonis_mapa`");
$sentencia5->execute();
$lista_mapa = $sentencia5->fetchAll(PDO::FETCH_ASSOC);




//ICONOS
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";


    //imagen
    $sentencia6 = $conexion->prepare("SELECT imagen FROM tb_peperonis_icono WHERE id=:id ");
    $sentencia6->bindParam(":id", $txtid);
    $sentencia6->execute();
    $registro_imagen6 = $sentencia6->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen6["imagen"])) {
        if (file_exists("../../../../img/comida/pizzerias/peperonis_pizzas/" . $registro_imagen6["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../../img/comida/pizzerias/peperonis_pizzas/" . $registro_imagen6["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia6 = $conexion->prepare("DELETE FROM tb_peperonis_icono WHERE id=:id ");
    $sentencia6->bindParam(":id", $txtid);
    $sentencia6->execute();
}


//seleccionar registros
$sentencia6 = $conexion->prepare("SELECT *FROM `tb_peperonis_icono`");
$sentencia6->execute();
$lista_icono = $sentencia6->fetchAll(PDO::FETCH_ASSOC);





include("../../../templates/header.php")
?>

<!--****************************************BIENVENIDA INICIO************************************************-->
<div class="container">

    <div class="card">
        <div class="card-header">
            <h1>Banner</h1>
            <a name="" id="" class="btn btn-primary" href="crear_peperonis_banner.php" role="button">Agregar Registros</a>

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
                        <?php foreach ($lista_banner as $registros) { ?>

                            <tr class="">

                                <td scope="col"><?php echo $registros['id']; ?></td>
                                <td><?php echo $registros['titulo']; ?></td>
                                
                                <td scope="col">
                                    <img width="50" src="../../../../img/comida/pizzerias/peperonis_pizzas/<?php echo $registros['imagen']; ?>" />
                                </td>
                               
                                
                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_peperonis_banner.php?txtid=<?php echo $registros['id']; ?>" role="button">Editar
                                    </a>
                                    <a name="" id="" class="btn btn-danger" href="index_peperonis.php?txtid=<?php echo $registros['id']; ?>" role="button">Eliminar
                                    </a>

                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>



    <!--*********************PERFIL****************************-->
    <div class="card">
        <div class="card-header">
            <h1>Perfil</h1>
            <a name="" id="" class="btn btn-primary" href="crear_peperonis_perfil.php" role="button">Agregar Registros</a>

        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Perfil</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista_perfil as $registros7) { ?>

                            <tr class="">

                                <td scope="col"><?php echo $registros7['id']; ?></td>
                                <td><?php echo $registros7['titulo']; ?></td>
                                
                                <td scope="col">
                                    <img width="50" src="../../../../img/comida/pizzerias/peperonis_pizzas/<?php echo $registros7['imagen']; ?>" />
                                </td>
                               
                                
                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_peperonis_perfil.php?txtid=<?php echo $registros7['id']; ?>" role="button">Editar
                                    </a>
                                    <a name="" id="" class="btn btn-danger" href="index_peperonis.php?txtid=<?php echo $registros7['id']; ?>" role="button">Eliminar
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





    <!--*****************************************Galeria************** ***************-->

    <div class="card">
        <div class="card-header">

            <h1>Galeria</h1>
            <a name="" id="" class="btn btn-primary" href="crear_peperonis_galeria.php" role="button">Agregar Registros</a>


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
                        <?php foreach ($lista_galeria as $registros2) { ?>

                            <tr class="">

                                <td scope="col"><?php echo $registros2['id']; ?></td>
                                <td><?php echo $registros2['titulo']; ?></td>

                                <td scope="col">
                                    <img width="50" src="../../../../img/comida/pizzerias/peperonis_pizzas/<?php echo $registros2['imagen']; ?>" />
                                </td>


                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_peperonis_galeria.php?txtid=<?php echo $registros2['id']; ?>" role="button">Editar
                                    </a>
                                    <a name="" id="" class="btn btn-danger" href="index_peperonis.php?txtid=<?php echo $registros2['id']; ?>" role="button">Eliminar
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

    <!--********************CONTACTO*******************-->



    <!--********************TITULO CONTACTO*******************-->

    <div class="card">
        <div class="card-header">

            <h1>Contacto</h1>
            <a name="" id="" class="btn btn-primary" href="crear_peperonis_contacto_titulo.php" role="button">Agregar Registros</a>


        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titulo</th>
                         
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista_datos_titulo as $registros8) { ?>

                            <tr class="">

                                <td scope="col"><?php echo $registros8['id']; ?></td>
                                <td scope="col"><?php echo $registros8['titulo']; ?></td>
                           
                               

                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_peperonis_contacto_titulo.php?txtid=<?php echo $registros8['id']; ?>" role="button">Editar
                                    </a>

                                    <a name="" id="" class="btn btn-danger" href="index_peperonis.php?txtid=<?php echo $registros8['id']; ?>" role="button">Eliminar</a>

                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!--********************CONTACTO Datos*******************-->
    <div class="card">
        <div class="card-header">

            <h1>Contacto</h1>
            <a name="" id="" class="btn btn-primary" href="crear_peperonis_datos.php" role="button">Agregar Registros</a>


        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">descripcion</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista_datos as $registros3) { ?>

                            <tr class="">

                                <td scope="col"><?php echo $registros3['id']; ?></td>
                                <td scope="col"><?php echo $registros3['titulo']; ?></td>
                                <td scope="col"><?php echo $registros3['descripcion']; ?></td>
                               

                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_peperonis_datos.php?txtid=<?php echo $registros3['id']; ?>" role="button">Editar
                                    </a>

                                    <a name="" id="" class="btn btn-danger" href="index_peperonis.php?txtid=<?php echo $registros3['id']; ?>" role="button">Eliminar</a>

                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>






    <br>


    <!--********************HORARIO*******************-->

    <div class="card">
        <div class="card-header">

            <h1>Horario</h1>
            <a name="" id="" class="btn btn-primary" href="crear_peperonis_horario.php" role="button">Agregar Registros</a>


        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">descripcion</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista_horario as $registros4) { ?>

                            <tr class="">

                                <td scope="col"><?php echo $registros4['id']; ?></td>
                                <td scope="col"><?php echo $registros4['titulo']; ?></td>
                                <td scope="col"><?php echo $registros4['descripcion']; ?></td>

                        
                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_peperonis_horario.php?txtid=<?php echo $registros4['id']; ?>" role="button">Editar
                                    </a>

                                    <a name="" id="" class="btn btn-danger" href="index_peperonis.php?txtid=<?php echo $registros4['id']; ?>" role="button">Eliminar</a>

                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    


    <br>
      <!--********************MAPA*******************-->

      <div class="card">
        <div class="card-header">

            <h1>MAPA</h1>
            <a name="" id="" class="btn btn-primary" href="crear_peperonis_mapa.php" role="button">Agregar Registros</a>


        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">link</th>
                      
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista_mapa as $registros5) { ?>

                            <tr class="">

                                <td scope="col"><?php echo $registros5['id']; ?></td>
                                <td scope="col"><?php echo $registros5['titulo']; ?></td>
                              
                                <td scope="col"><?php echo $registros5['link']; ?></td>

                        
                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_peperonis_mapa.php?txtid=<?php echo $registros5['id']; ?>" role="button">Editar
                                    </a>

                                    <a name="" id="" class="btn btn-danger" href="index_peperonis.php?txtid=<?php echo $registros5['id']; ?>" role="button">Eliminar</a>

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
            <a name="" id="" class="btn btn-primary" href="crear_peperonis_icono.php" role="button">Agregar Registros</a>


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
                        <?php foreach ($lista_icono as $registros6) { ?>

                            <tr class="">

                                <td><?php echo $registros6['id']; ?></td>
                                <td><?php echo $registros6['titulo']; ?></td>
                                <td><?php echo $registros6['link']; ?></td>

                                <td scope="col">
                                    <img width="50" src="../../../../img/comida/pizzerias/peperonis_pizzas/<?php echo $registros6['imagen']; ?>" />
                                </td>

                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_peperonis_icono.php?txtid=<?php echo $registros6['id']; ?>" role="button">Editar
                                    </a>
                                    <a name="" id="" class="btn btn-danger" href="index_peperonis.php?txtid=<?php echo $registros6['id']; ?>" role="button">Eliminar
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


<?php include("../../../templates/footer.php") ?>