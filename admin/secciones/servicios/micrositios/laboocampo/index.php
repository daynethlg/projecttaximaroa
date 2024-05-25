<?php
include("../../../../bd.php");


//BANNER
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";


    //imagen
    $sentencia = $conexion->prepare("SELECT imagen FROM tb_ocampo_banner WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();
    $registro_imagen = $sentencia->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen["imagen"])) {
        if (file_exists("../../../../../img/servicios/salud/laboratorio/" . $registro_imagen["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../../../img/servicios/salud/laboratorio/" . $registro_imagen["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia = $conexion->prepare("DELETE FROM tb_ocampo_banner WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();
    
}

//seleccionar registros
$sentencia = $conexion->prepare("SELECT *FROM `tb_ocampo_banner`");
$sentencia->execute();
$lista_banner = $sentencia->fetchAll(PDO::FETCH_ASSOC);





//PERFIL*****************
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";


    //imagen
    $sentencia7 = $conexion->prepare("SELECT imagen FROM tb_ocampo_perfil WHERE id=:id ");
    $sentencia7->bindParam(":id", $txtid);
    $sentencia7->execute();
    $registro_imagen7 = $sentencia7->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen7["imagen"])) {
        if (file_exists("../../../../../img/servicios/salud/laboratorio/" . $registro_imagen7["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../../../img/servicios/salud/laboratorio/" . $registro_imagen7["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia7 = $conexion->prepare("DELETE FROM tb_ocampo_perfil WHERE id=:id ");
    $sentencia7->bindParam(":id", $txtid);
    $sentencia7->execute();
}


//seleccionar registros
$sentencia7 = $conexion->prepare("SELECT *FROM `tb_ocampo_perfil`");
$sentencia7->execute();
$lista_perfil = $sentencia7->fetchAll(PDO::FETCH_ASSOC);







//INFORMACION*****************
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";


    //imagen
    $sentencia9 = $conexion->prepare("SELECT imagen FROM tb_ocampo_info WHERE id=:id ");
    $sentencia9->bindParam(":id", $txtid);
    $sentencia9->execute();
    $registro_imagen7 = $sentencia9->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen9["imagen"])) {
        if (file_exists("../../../../../img/servicios/salud/laboratorio" . $registro_imagen9["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../../../img/servicios/salud/laboratorio" . $registro_imagen9["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia9 = $conexion->prepare("DELETE FROM tb_ocampo_info WHERE id=:id ");
    $sentencia9->bindParam(":id", $txtid);
    $sentencia9->execute();
}


//seleccionar registros
$sentencia9 = $conexion->prepare("SELECT *FROM `tb_ocampo_info`");
$sentencia9->execute();
$lista_info = $sentencia9->fetchAll(PDO::FETCH_ASSOC);








//GALERIA
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";


    //imagen
    $sentencia2 = $conexion->prepare("SELECT imagen FROM tb_ocampo_galeria WHERE id=:id ");
    $sentencia2->bindParam(":id", $txtid);
    $sentencia2->execute();
    $registro_imagen2 = $sentencia2->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen2["imagen"])) {
        if (file_exists("../../../../../img/servicios/salud/laboratorio" . $registro_imagen2["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../../../img/servicios/salud/laboratorio" . $registro_imagen2["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia2 = $conexion->prepare("DELETE FROM tb_ocampo_galeria WHERE id=:id ");
    $sentencia2->bindParam(":id", $txtid);
    $sentencia2->execute();
}


//seleccionar registros
$sentencia2 = $conexion->prepare("SELECT *FROM `tb_ocampo_galeria`");
$sentencia2->execute();
$lista_galeria = $sentencia2->fetchAll(PDO::FETCH_ASSOC);






//DIRECCION******
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";

    //borra registror con ID correspondiente
    $sentencia3 = $conexion->prepare("DELETE FROM tb_ocampo_datos_direccion WHERE id=:id ");
    $sentencia3->bindParam(":id", $txtid);
    $sentencia3->execute();
}

//seleccionar registros
$sentencia3 = $conexion->prepare("SELECT *FROM `tb_ocampo_datos_direccion`");
$sentencia3->execute();
$lista_direccion = $sentencia3->fetchAll(PDO::FETCH_ASSOC);



//DATOS******
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";

    //borra registror con ID correspondiente
    $sentencia3 = $conexion->prepare("DELETE FROM tb_ocampo_datos WHERE id=:id ");
    $sentencia3->bindParam(":id", $txtid);
    $sentencia3->execute();
}

//seleccionar registros
$sentencia3 = $conexion->prepare("SELECT *FROM `tb_ocampo_datos`");
$sentencia3->execute();
$lista_datos = $sentencia3->fetchAll(PDO::FETCH_ASSOC);














//HORARIOS******
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";

    //borra registror con ID correspondiente
    $sentencia4 = $conexion->prepare("DELETE FROM tb_ocampo_horario WHERE id=:id ");
    $sentencia4->bindParam(":id", $txtid);
    $sentencia4->execute();
}

//seleccionar registros
$sentencia4 = $conexion->prepare("SELECT *FROM `tb_ocampo_horario`");
$sentencia4->execute();
$lista_horario = $sentencia4->fetchAll(PDO::FETCH_ASSOC);









//MAPA******
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";

    //borra registror con ID correspondiente
    $sentencia5 = $conexion->prepare("DELETE FROM tb_ocampo_mapa WHERE id=:id ");
    $sentencia5->bindParam(":id", $txtid);
    $sentencia5->execute();
}

//seleccionar registros
$sentencia5 = $conexion->prepare("SELECT *FROM `tb_ocampo_mapa`");
$sentencia5->execute();
$lista_mapa = $sentencia5->fetchAll(PDO::FETCH_ASSOC);









//ICONOS
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";


    //imagen
    $sentencia6 = $conexion->prepare("SELECT imagen FROM tb_ocampo_icono WHERE id=:id ");
    $sentencia6->bindParam(":id", $txtid);
    $sentencia6->execute();
    $registro_imagen6 = $sentencia6->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen6["imagen"])) {
        if (file_exists("../../../../img/servicios/salud/laboratorio/" . $registro_imagen6["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../../img/servicios/salud/laboratorio/" . $registro_imagen6["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia6 = $conexion->prepare("DELETE FROM tb_ocampo_icono WHERE id=:id ");
    $sentencia6->bindParam(":id", $txtid);
    $sentencia6->execute();
}


//seleccionar registros
$sentencia6 = $conexion->prepare("SELECT *FROM `tb_ocampo_icono`");
$sentencia6->execute();
$lista_icono = $sentencia6->fetchAll(PDO::FETCH_ASSOC);





include("../../../../templates/header.php")
?>

<h2>LABORATORIOS OCAMPO</h2>
<!--****************************************BIENVENIDA INICIO************************************************-->
<div class="container">

    <div class="card">
        <div class="card-header">
            <h1>Banner</h1>
            <a name="" id="" class="btn btn-primary" href="crear_banner.php" role="button">Agregar Registros</a>

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
                                    <img width="50" src="../../../../../img/servicios/salud/laboratorio/<?php echo $registros['imagen']; ?>" />
                                </td>
                               
                                
                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_banner.php?txtid=<?php echo $registros['id']; ?>" role="button">Editar
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
    <!--*********************PERFIL****************************-->
    <div class="card">
        <div class="card-header">
            <h1>Perfil</h1>
            <a name="" id="" class="btn btn-primary" href="crear_perfil.php" role="button">Agregar Registros</a>

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
                                    <img width="50" src="../../../../../img/servicios/salud/laboratorio/<?php echo $registros7['imagen']; ?>" />
                                </td>
                               
                                
                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_perfil.php?txtid=<?php echo $registros7['id']; ?>" role="button">Editar
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






<!--*********************INFORMACION****************************-->
<div class="card">
        <div class="card-header">
            <h1>SOBRE USTEDES</h1>
            <a name="" id="" class="btn btn-primary" href="crear_info.php" role="button">Agregar Registros</a>

        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">descripcion</th>
                           
                            <th scope="col">Imagen</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista_info as $registros9) { ?>

                            <tr class="">

                                <td scope="col"><?php echo $registros9['id']; ?></td>
                                <td><?php echo $registros9['titulo']; ?></td>
                                <td><?php echo $registros9['descripcion']; ?></td>
                            
                                
                                <td scope="col">
                                    <img width="50" src="../../../../../img/servicios/salud/laboratorio/<?php echo $registros9['imagen']; ?>" />
                                </td>
                               
                                
                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_info.php?txtid=<?php echo $registros9['id']; ?>" role="button">Editar
                                    </a>
                                    <a name="" id="" class="btn btn-danger" href="index.php?txtid=<?php echo $registros9['id']; ?>" role="button">Eliminar
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



    <!--*****************************************Galeria*****************************-->

    <div class="card">
        <div class="card-header">

            <h1>Galeria</h1>
            <a name="" id="" class="btn btn-primary" href="crear_galeria.php" role="button">Agregar Registros</a>

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
                                    <img width="50" src="../../../../../img/servicios/salud/laboratorio/<?php echo $registros2['imagen']; ?>" />
                                </td>


                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_galeria.php?txtid=<?php echo $registros2['id']; ?>" role="button">Editar
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

    <!--********************CONTACTO*******************-->



    <!--DIRECCION-->
    <div class="card">
        <div class="card-header">

            <h1>Direcciones</h1>
            <a name="" id="" class="btn btn-primary" href="crear_direcciones.php" role="button">Agregar Registros</a>


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
                        <?php foreach ($lista_direccion as $registros3) { ?>

                            <tr class="">

                                <td scope="col"><?php echo $registros3['id']; ?></td>
                                <td scope="col"><?php echo $registros3['titulo']; ?></td>
                             
                               

                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_direcciones.php?txtid=<?php echo $registros3['id']; ?>" role="button">Editar
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




    <!--DATOS-->
    <div class="card">
        <div class="card-header">

            <h1>Contacto</h1>
            <a name="" id="" class="btn btn-primary" href="crear_datos.php" role="button">Agregar Registros</a>


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
                                    <a name="" id="" class="btn btn-info" href="editar_datos.php?txtid=<?php echo $registros3['id']; ?>" role="button">Editar
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


    <!--********************HORARIO*******************-->

    <div class="card">
        <div class="card-header">

            <h1>Horario</h1>
            <a name="" id="" class="btn btn-primary" href="crear_horario.php" role="button">Agregar Registros</a>


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
                                    <a name="" id="" class="btn btn-info" href="editar_horario.php?txtid=<?php echo $registros4['id']; ?>" role="button">Editar
                                    </a>

                                    <a name="" id="" class="btn btn-danger" href="index.php?txtid=<?php echo $registros4['id']; ?>" role="button">Eliminar</a>

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
            <a name="" id="" class="btn btn-primary" href="crear_mapa.php" role="button">Agregar Registros</a>

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
                                    <a name="" id="" class="btn btn-info" href="editar_mapa.php?txtid=<?php echo $registros5['id']; ?>" role="button">Editar
                                    </a>

                                    <a name="" id="" class="btn btn-danger" href="index.php?txtid=<?php echo $registros5['id']; ?>" role="button">Eliminar</a>

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
                        <?php foreach ($lista_icono as $registros6) { ?>

                            <tr class="">

                                <td><?php echo $registros6['id']; ?></td>
                                <td><?php echo $registros6['titulo']; ?></td>
                                <td><?php echo $registros6['link']; ?></td>

                                <td scope="col">
                                    <img width="50" src="../../../../../img/servicios/salud/laboratorio/<?php echo $registros6['imagen']; ?>" />
                                </td>

                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar_icono.php?txtid=<?php echo $registros6['id']; ?>" role="button">Editar
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



</div>


<?php include("../../../../templates/footer.php") ?>
