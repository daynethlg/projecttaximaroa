<?php
include("admin/bd.php");

//BANNER*************************************************
include("admin/bd.php");
$sentencia = $conexion->prepare("SELECT *FROM `tb_banner` ");
$sentencia->execute();
$lista_baner = $sentencia->fetchAll(PDO::FETCH_ASSOC);


// ******************Bienvenida INICIO TITULO****************************************
include("admin/bd.php");
$sentencia2 = $conexion->prepare("SELECT *FROM `tb_bienvenida` ");
$sentencia2->execute();
$lista_inicio = $sentencia2->fetchAll(PDO::FETCH_ASSOC);



// ******************ANUNCIOS****************************************
include("admin/bd.php");
$sentencia3 = $conexion->prepare("SELECT *FROM `tb_anuncios`");
$sentencia3->execute();
$lista_anuncios = $sentencia3->fetchAll(PDO::FETCH_ASSOC);

// ******************PRUEBA****************************************
include("admin/bd.php");
$sentencia4 = $conexion->prepare("SELECT *FROM `pruba`");
$sentencia4->execute();
$lista_prueba = $sentencia4->fetchAll(PDO::FETCH_ASSOC);


include("templates/header.php"); ?>





<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 pb-5">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Taximaroa MX</h4>
                        <h1 class="display-3 text-white mb-md-4">Traditional Ice Cream Since 1950</h1>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Taximaroa MX</h4>
                        <h1 class="display-3 text-white mb-md-4">Made From Our Own Organic Milk</h1>

                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n1"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n1"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <?php foreach ($lista_inicio as $registros2) { ?>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5"><?php echo $registros2["titulo"]; ?></h1>
                </div>
                <p></p>
            </div>
            <div class="row">
                <div class="col-lg-6">

                    <h5>
                        <?php echo $registros2["descripcion"]; ?>
                    </h5>

                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/inicio/bienvenida/<?php echo $registros2["imagen"]; ?>" style="object-fit: cover;" alt="">
                        <!--<img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">-->
                    </div>
                </div>
                <!-- <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Our Features</h4>
                    <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                    <a href="" class="btn btn-primary mt-2">Learn More</a>
                </div>-->
            </div>
        <?php } ?>
    </div>
</div>
<!-- About End -->


<!-- Anuncios -->
<div class="container-fluid my-5 py-5 px-0">
    <div class="row bg-primary m-0">
        <?php foreach ($lista_anuncios as $registros3) { ?>
            <div class="col-md-6 px-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/inicio/anuncios/<?php echo $registros3["imagen"]; ?>" alt="">
                    <!--<img class="position-absolute w-100 h-100" src="img/promotion.jpg" style="object-fit: cover;">-->

                </div>
            </div>
        <?php } ?>
        <!--<div class="col-md-6 py-5 py-md-0 px-0">
            <div class="position-relative h-100">
                <img class="position-absolute w-100 h-100" src="img/promotion.jpg" style="object-fit: cover;">

            </div>
             </div>-->
    </div>
</div>
<!-- Promotion End -->


<!--<div class="container" >
<//?php foreach ($lista_prueba as $registros4) { ?>
    <div>
        <h1><//?php echo $registros4["titulo"]; ?></h1>
    </div>
    <div>
        <h4><//?php echo $registros4["descripcion"]; ?></h4>
        <p><//?php echo $registros4["descripcion2"]; ?></p>
    </div>
    <//?php } ?>
</div>-->


<!-- Services Start -->
<!--<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Servicios</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-1.jpg"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5"
                                style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Quality Maintain</h5>
                                <p>Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd
                                    justo</p>
                                <a href=""
                                    class="border-bottom border-secondary text-decoration-none text-secondary">Learn
                                    More</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-2.jpg"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5"
                                style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Individual Approach</h5>
                                <p>Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd
                                    justo</p>
                                <a href=""
                                    class="border-bottom border-secondary text-decoration-none text-secondary">Learn
                                    More</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-3.jpg"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5"
                                style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Celebration Ice Cream</h5>
                                <p>Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd
                                    justo</p>
                                <a href=""
                                    class="border-bottom border-secondary text-decoration-none text-secondary">Learn
                                    More</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-4.jpg"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5"
                                style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Delivery To Any Point</h5>
                                <p>Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd
                                    justo</p>
                                <a href=""
                                    class="border-bottom border-secondary text-decoration-none text-secondary">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
<!-- Services End -->


<!-- Portfolio Start -->
<div class="container-fluid my-5 py-5 px-0">
    <div class="row justify-content-center m-0">
        <div class="col-lg-5">
            <h1 class="section-title position-relative text-center mb-5"> Galeria</h1>
        </div>
    </div>
    <div class="row m-0 portfolio-container">
        <div class="col-lg-4 col-md-6 p-0 portfolio-item">
            <div class="position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                <a class="portfolio-btn" href="img/portfolio-1.jpg" data-lightbox="portfolio">
                    <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 p-0 portfolio-item">
            <div class="position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                <a class="portfolio-btn" href="img/portfolio-2.jpg" data-lightbox="portfolio">
                    <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 p-0 portfolio-item">
            <div class="position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                <a class="portfolio-btn" href="img/portfolio-3.jpg" data-lightbox="portfolio">
                    <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                </a>
            </div>
        </div>
        <br>
        <br>
        <b></b>
        <div class="col-lg-4 col-md-6 p-0 portfolio-item">
            <div class="position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                <a class="portfolio-btn" href="img/portfolio-4.jpg" data-lightbox="portfolio">
                    <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 p-0 portfolio-item">
            <div class="position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                <a class="portfolio-btn" href="img/portfolio-5.jpg" data-lightbox="portfolio">
                    <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 p-0 portfolio-item">
            <div class="position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                <a class="portfolio-btn" href="img/portfolio-6.jpg" data-lightbox="portfolio">
                    <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio End -->

<br>
<br>
<br>
<br>

<!-- Products Start -->
<!--<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Best Prices We Offer For Ice Cream Lovers</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel product-carousel">
                        <div
                            class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3"
                                style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-1.jpg"
                                    style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                        <div
                            class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3"
                                style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-2.jpg"
                                    style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                        <div
                            class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3"
                                style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-3.jpg"
                                    style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                        <div
                            class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3"
                                style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-4.jpg"
                                    style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                        <div
                            class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3"
                                style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-5.jpg"
                                    style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
<!-- Products End -->


<!-- Team Start -->
<!--<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Experienced & Most Famous Ice Cream Chefs</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel team-carousel">
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="img/team-1.jpg" style="object-fit: cover;">
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
                        </div>
                        <div class="team-item">
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
                        </div>
                        <div class="team-item">
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
                        </div>
                        <div class="team-item">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
<!-- Team End -->


<!-- Testimonial Start -->
<!--<div class="container-fluid py-5">
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



<?php include("templates/footer.php"); ?>