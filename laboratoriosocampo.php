<?php
include("admin/bd.php");



//BANNER*************************************************
include("admin/bd.php");
$sentencia = $conexion->prepare("SELECT *FROM `tb_ocampo_banner` ");
$sentencia->execute();
$lista_baner = $sentencia->fetchAll(PDO::FETCH_ASSOC);




//Perfil*************************************************
include("admin/bd.php");
$sentencia2 = $conexion->prepare("SELECT *FROM `tb_ocampo_perfil` ");
$sentencia2->execute();
$lista_perfil = $sentencia2->fetchAll(PDO::FETCH_ASSOC);




//ABOUT THEY*************************************************
include("admin/bd.php");
$sentencia3 = $conexion->prepare("SELECT *FROM `tb_ocampo_info` ");
$sentencia3->execute();
$lista_info = $sentencia3->fetchAll(PDO::FETCH_ASSOC);




//GALERIA*************************************************
include("admin/bd.php");
$sentencia4 = $conexion->prepare("SELECT *FROM `tb_ocampo_galeria` ");
$sentencia4->execute();
$lista_galeria = $sentencia4->fetchAll(PDO::FETCH_ASSOC);





//DIRECCIONES*************************************************
include("admin/bd.php");
$sentencia9 = $conexion->prepare("SELECT *FROM `tb_ocampo_datos_direccion` ");
$sentencia9->execute();
$lista_direccion = $sentencia9->fetchAll(PDO::FETCH_ASSOC);





//CONTACTO*************************************************
include("admin/bd.php");
$sentencia5 = $conexion->prepare("SELECT *FROM `tb_ocampo_datos` ");
$sentencia5->execute();
$lista_contacto = $sentencia5->fetchAll(PDO::FETCH_ASSOC);




//HORARIO*************************************************
include("admin/bd.php");
$sentencia6 = $conexion->prepare("SELECT *FROM `tb_ocampo_horario` ");
$sentencia6->execute();
$lista_horario = $sentencia6->fetchAll(PDO::FETCH_ASSOC);




//MAPA*************************************************
include("admin/bd.php");
$sentencia7 = $conexion->prepare("SELECT *FROM `tb_ocampo_mapa` ");
$sentencia7->execute();
$lista_mapa = $sentencia7->fetchAll(PDO::FETCH_ASSOC);





//ICONO*************************************************
include("admin/bd.php");
$sentencia8 = $conexion->prepare("SELECT *FROM `tb_ocampo_icono` ");
$sentencia8->execute();
$lista_icono = $sentencia8->fetchAll(PDO::FETCH_ASSOC);




include("templates/header.php"); ?>


<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" <?php foreach ($lista_baner as $registros) { ?> style=" background-image: url(img/servicios/salud/laboratorio/<?php echo $registros["imagen"]; ?>);">
<?php } ?>

<!--<div class="container-fluid col-10">
            <h2 class="display-3">king Crunch</h2>
        </div>-->
<div class="container-fluid col-6">
    <?php foreach ($lista_perfil as $registros2) { ?>
        <img class="mx-auto d-block" src="img/servicios/salud/laboratorio/<?php echo $registros2["imagen"]; ?>" width="250" alt="">
    <?php } ?>
</div>


<br>
</div>


</div>
<!-- Header End -->


<div class="row justify-content-center col-12">

    <div>
        <a href="salud.php" class="btn btn-sm btn-secondary"> Regresar</a>
    </div>
    <div>
        <a href="index.php" class="btn btn-sm btn-secondary"> Inicio</a>
    </div>

</div>

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <?php foreach ($lista_info as $registros3) { ?>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5"> <?php echo $registros3["titulo"]; ?></h1>
                </div>

                <p class=" mb-3"><?php echo $registros3["descripcion"]; ?>
                </p>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/servicios/salud/laboratorio/<?php echo $registros3["imagen"]; ?>" style="object-fit: cover;">
                    </div>
                </div>

            </div>
        <?php } ?>
    </div>
</div>
<!-- About End -->







<!-- Portfolio Start -->
<div class="container-fluid py-5 px-0">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <h1 class="section-title position-relative text-center mb-5">Galeria</h1>
            </div>
        </div>

        <div class="row m-0 portfolio-container">
            <?php foreach ($lista_galeria as $registros4) { ?>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/servicios/salud/laboratorio/<?php echo $registros4["imagen"]; ?>" alt="">
                        <a class="portfolio-btn" href="img/servicios/salud/laboratorio/<?php echo $registros4["imagen"]; ?>" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            <?php } ?>


        </div>
    </div>
</div>
<!-- Portfolio End -->


<!--CONTACTO-->
<div class="container-fluid  py-5">
    <div class="container text-center py-5">
        <div class="row">
            <div class="col-12 mt-2 mb-4">

                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <h1 class="section-title position-relative text-center mb-5">CONTACTO</h1>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-5 text-center text-sm-left">
                        <?php foreach ($lista_mapa as $registros7) { ?>
                            <p><?php echo $registros7["titulo"]; ?></p>
                            <iframe src="<?php echo $registros7["link"]; ?>"></iframe>
                        <?php } ?>
                    </div>
                    <div class="col-sm-4 text-center text-sm-left">
                        <!--<h5 class="font-weight-bold mb-2">Opening Hours</h5>
                        <p class="mb-2">Mon – Sat, 8AM – 5PM</p>
                        <p class="mb-0">Sunday: Closed</p>-->
                        <h3>Dirección</h3>
                        <?php foreach ($lista_direccion as $registros9) { ?>
                            <p><?php echo $registros9["titulo"]; ?></p>
                        <?php } ?>


                        <?php foreach ($lista_contacto as $registros5) { ?>
                            <h3><?php echo $registros5["titulo"]; ?></h3>
                            <p><?php echo $registros5["descripcion"]; ?></p>
                        <?php } ?>



                        <?php foreach ($lista_icono as $registros8) { ?>
                            <a href="<?php echo $registros8["link"]; ?>">
                                <img class="social-media" width="80px" src="img/servicios/salud/laboratorio/<?php echo $registros8["imagen"]; ?>" alt="">
                            </a>
                        <?php } ?>



                    </div>



                    <div class="col-sm-3 text-center text-sm-left">
                        <!--<h5 class="font-weight-bold mb-2">Opening Hours</h5>
                        <p class="mb-2">Mon – Sat, 8AM – 5PM</p>
                        <p class="mb-0">Sunday: Closed</p>-->

                        <h3>Horario</h3>


                        <?php foreach ($lista_horario as $registros6) { ?>
                        <p><?php echo $registros6["titulo"]; ?><br>
                                <?php echo $registros6["descripcion"]; ?>
                            </p>
                        <?php } ?>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!--CONTACTO-->



<br>

<?php include("templates/footer.php"); ?>