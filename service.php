<?php
include("admin/bd.php");


//INICIO*************************************************
include("admin/bd.php");
$sentencia = $conexion->prepare("SELECT *FROM `tb_agencias` ");
$sentencia->execute();
$lista_baner = $sentencia->fetchAll(PDO::FETCH_ASSOC);




//CATEGORIAS*************************************************
include("admin/bd.php");
$sentencia2 = $conexion->prepare("SELECT *FROM `tb_agencias_categoria` ");
$sentencia2->execute();
$lista_categorias = $sentencia2->fetchAll(PDO::FETCH_ASSOC);


include("templates/header.php"); ?>

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" 
        <?php foreach ($lista_baner as $registros) { ?> 
            style="background-image: url(img/agencias/<?php echo $registros["imagen"]; ?>);">
        <?php } ?>
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5"></h1>

        </div>
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5"></h1>

        </div>
    </div>
    <!-- Header End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                <?php foreach ($lista_baner as $registros) { ?>
                    <h1 class="section-title  mb-5"><?php echo $registros["descripcion"]; ?></h1>
                    <?php } ?>
                </div>
                
            </div>
            <div class="row">
            <?php foreach ($lista_categorias as $registros2) { ?>
                <div class="col-6">
                  
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/agencias/<?php echo $registros2["imagen"]; ?>"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5"
                                style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><?php echo $registros2["titulo"]; ?></h5>
                                <p><?php echo $registros2["descripcion"]; ?></p>
                                <a href="<?php echo $registros2["boton"]; ?>"
                                    class="border-bottom border-secondary text-decoration-none text-secondary">Leer Más</a>
                            </div>
                        </div>
                </div>
                <?php } ?>
                      
                      
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Testimonial Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Clients Say About Our Famous Ice Cream</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-1.jpg" alt="">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-2.jpg" alt="">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-3.jpg" alt="">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Testimonial End -->


<br>
<br>
<br>
<br>

    <!-- Portfolio Start -->
    <div class="container-fluid py-5 px-0">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <h1 class="section-title position-relative text-center mb-5">Delicious Ice Cream Made From Our Very Own Organic Milk</h1>
                </div>
            </div>
            <div class="row">
               
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
<br>

 
<?php include("templates/footer.php"); ?>