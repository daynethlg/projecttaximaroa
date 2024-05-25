<?php
include("admin/bd.php");


//INICIO
$sentencia1 = $conexion->prepare("SELECT *FROM `tb_nosotros_titulo`");
$sentencia1->execute();
$lista_inicio = $sentencia1->fetchAll(PDO::FETCH_ASSOC);


//INFO
$sentencia2 = $conexion->prepare("SELECT *FROM `tb_datos_nosotros`");
$sentencia2->execute();
$lista_info = $sentencia2->fetchAll(PDO::FETCH_ASSOC);


//TEAM
$sentencia3 = $conexion->prepare("SELECT *FROM `tb_datos_team`");
$sentencia3->execute();
$lista_team = $sentencia3->fetchAll(PDO::FETCH_ASSOC);


//MAPA
$sentencia4 = $conexion->prepare("SELECT *FROM `tb_nosotros_contacto_mapa`");
$sentencia4->execute();
$lista_mapa = $sentencia4->fetchAll(PDO::FETCH_ASSOC);



//DATOS
$sentencia4 = $conexion->prepare("SELECT *FROM `tb_nosotros_datos2`");
$sentencia4->execute();
$lista_datos2 = $sentencia4->fetchAll(PDO::FETCH_ASSOC);



//ICONO
$sentencia5 = $conexion->prepare("SELECT *FROM `tb_nosotros_icono`");
$sentencia5->execute();
$lista_icono = $sentencia5->fetchAll(PDO::FETCH_ASSOC);

include("templates/header.php"); ?>



<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" <?php foreach ($lista_inicio as $registros) { ?> style="background-image: url(img/about_us/<?php echo $registros["imagen"]; ?>);">
<?php } ?>

<div class="container text-center py-5">
    <h1 class="text-white display-3 mt-lg-5"></h1>
</div>
<div class="container text-center py-5">
    <h1 class="text-white display-3 mt-lg-5"></h1>
</div>
</div>
<!-- Header End -->




<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <h1 class="section-title position-relative text-center mb-5">Taximaroa MX</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 py-5">
                <?php foreach ($lista_info as $registros2) { ?>
                    <h4 class="font-weight-bold mb-3"><?php echo $registros2["titulo"]; ?></h4>
                    <!-- <h5 class="text-muted mb-3">Eos kasd eos dolor vero vero, lorem stet diam rebum. Ipsum amet sed vero
                        dolor sea</h5>-->
                    <p><?php echo $registros2["descripcion"]; ?></p>
                <?php } ?>
                <?php foreach ($lista_inicio as $registros) { ?>
                    <h4 class="font-weight-bold mb-3"><?php echo $registros["titulo"]; ?></h4>
                    <p><?php echo $registros["descripcion"]; ?></p>
                <?php } ?>
            </div>
            <div class="col-lg-3" style="min-height: 400px;">
                <div class="position-relative h-100 rounded overflow-hidden">
                    <?php foreach ($lista_info as $registros2) { ?>
                        <img class="position-absolute w-100 h-100" src="img/about_us/<?php echo $registros2["imagen"]; ?>" style="object-fit: cover;">
                    <?php } ?>
                </div>
            </div>

        </div>
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
            <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-1.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-2.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-3.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-4.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-5.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-6.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio End -->

<br>





<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="section-title position-relative mb-5">Nuestro Equipo</h1>
            </div>

        </div>
        <div class="row">
            <?php foreach ($lista_team as $registros3) { ?>
                <div class="col-6">

                    <div class="team-item">

                        <div class="team-img mx-auto">
                            <img class="rounded-circle w-100 h-100" src="img/about_us/team/<?php echo $registros3["imagen"]; ?>" style="object-fit: cover;">
                        </div>
                        <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">

                            <h3 class="font-weight-bold mt-5 mb-3 pt-5"><?php echo $registros3["nombre"]; ?></h3>
                            <h6 class="text-uppercase text-muted mb-4"><?php echo $registros3["puesto"]; ?></h6>
                            <div class="d-flex justify-content-center pt-1">
                               
                                <a class="btn btn-outline-secondary btn-social mr-2" href="<?php echo $registros3["link"]; ?>"><i class="fab fa-facebook-f"></i></a>
                                
                            </div>

                        </div>

                    </div>

                </div>
            <?php } ?>




            <!--  <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="img/team-2.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Full Name</h3>
                                <h6 class="text-uppercase text-muted mb-4">Designation</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>-->



            <!-- <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="img/team-3.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Full Name</h3>
                                <h6 class="text-uppercase text-muted mb-4">Designation</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>-->

            <!--<div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="img/team-4.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Full Name</h3>
                                <h6 class="text-uppercase text-muted mb-4">Designation</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>-->


        </div>
    </div>
</div>
</div>
</div>
<!-- TEAM****************-->





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

                    <div class="col-sm-6 text-center text-sm-right border-right ">
                        <?php foreach ($lista_mapa as $registros7) { ?>
                            <iframe src="<?php echo $registros7["link"]; ?>"></iframe>
                        <?php } ?>
                    </div>
                    <div class="col-sm-3 text-center text-sm-left">
                        <?php foreach ($lista_datos2 as $registros5) { ?>
                            <!--<h5 class="font-weight-bold mb-2">Opening Hours</h5>
                        <p class="mb-2">Mon – Sat, 8AM – 5PM</p>
                        <p class="mb-0">Sunday: Closed</p>-->
                            <h3><?php echo $registros5["titulo"]; ?></h3>
                            <p><?php echo $registros5["descripcion"]; ?></p>
                        <?php } ?>


                        <?php foreach ($lista_icono as $registros8) { ?>
                            <a href="<?php echo $registros8["link"]; ?>">
                                <img class="social-media" width="80px" src="img/about_us/<?php echo $registros8["imagen"]; ?>" alt="">
                            </a>
                        <?php } ?>



                    </div>



                </div>
            </div>

        </div>
    </div>
</div>
<!--CONTACTO-->


<?php include("templates/footer.php"); ?>