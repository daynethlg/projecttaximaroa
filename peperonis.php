<?php
include("admin/bd.php");


//BANNER*************************************************
include("admin/bd.php");
$sentencia = $conexion->prepare("SELECT *FROM `tb_peperonis_banner` ");
$sentencia->execute();
$lista_baner = $sentencia->fetchAll(PDO::FETCH_ASSOC);



//Perfil*************************************************
include("admin/bd.php");
$sentencia2 = $conexion->prepare("SELECT *FROM `tb_peperonis_perfil` ");
$sentencia2->execute();
$lista_perfil = $sentencia2->fetchAll(PDO::FETCH_ASSOC);



//GALERIA*************************************************
include("admin/bd.php");
$sentencia3 = $conexion->prepare("SELECT *FROM `tb_peperonis_galeria` ");
$sentencia3->execute();
$lista_galeria = $sentencia3->fetchAll(PDO::FETCH_ASSOC);



//DATOS****************************************************
include("admin/bd.php");
$sentencia4 = $conexion->prepare("SELECT *FROM `tb_peperonis_datos` ");
$sentencia4->execute();
$lista_datos = $sentencia4->fetchAll(PDO::FETCH_ASSOC);



//MAPA****************************************************
include("admin/bd.php");
$sentencia5 = $conexion->prepare("SELECT *FROM `tb_peperonis_mapa` ");
$sentencia5->execute();
$lista_mapa = $sentencia5->fetchAll(PDO::FETCH_ASSOC);



//ICONO****************************************************
include("admin/bd.php");
$sentencia6 = $conexion->prepare("SELECT *FROM `tb_peperonis_icono` ");
$sentencia6->execute();
$lista_icono = $sentencia6->fetchAll(PDO::FETCH_ASSOC);




//HORARIO****************************************************
include("admin/bd.php");
$sentencia7 = $conexion->prepare("SELECT *FROM `tb_peperonis_horario` ");
$sentencia7->execute();
$lista_horario = $sentencia7->fetchAll(PDO::FETCH_ASSOC);


include("templates/header.php"); ?>


<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" 
        <?php foreach ($lista_baner as $registros) { ?> 
            style=" background-image: url(img/comida/pizzerias/peperonis_pizzas/<?php echo $registros["imagen"]; ?>);">
        <?php } ?>

        <div class="container-fluid col-6">
            <?php foreach ($lista_perfil as $registros2) { ?>
                <img class="mx-auto d-block" src="img/comida/pizzerias/peperonis_pizzas/<?php echo $registros2["imagen"]; ?>" width="250" alt="">
        <?php } ?>
</div>

</div>


</div>
<!-- Header End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <h1 class="section-title position-relative text-center mb-5">Traditional & Delicious Ice Cream Since
                    1950</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 py-5">
                <h4 class="font-weight-bold mb-3">About Us</h4>
                <h5 class="text-muted mb-3">Eos kasd eos dolor vero vero, lorem stet diam rebum. Ipsum amet sed vero
                    dolor sea</h5>
                <p>Takimata sed vero vero no sit sed, justo clita duo no duo amet et, nonumy kasd sed dolor eos diam
                    lorem eirmod. Amet sit amet amet no. Est nonumy sed labore eirmod sit magna. Erat at est justo
                    sit ut. Labor diam sed ipsum et eirmod</p>

            </div>
            <div class="col-lg-4" style="min-height: 400px;">
                <div class="position-relative h-100 rounded overflow-hidden">
                    <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4 py-5">
                <h4 class="font-weight-bold mb-3">Valores</h4>
                <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                    ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                    dolor</p>
                <p class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Calidad: Compromiso con la excelencia en la selección de ingredientes frescos y de alta calidad, así como en la preparación de alimentos deliciosos y saludables.</p>
                <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Satisfacción del Cliente: Prioridad en ofrecer una experiencia gastronómica excepcional, superando las expectativas de los clientes y garantizando su satisfacción.</h5>
                <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>

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
                <h1 class="section-title position-relative text-center mb-5">Menu</h1>
            </div>
        </div>

        <div class="row m-0 portfolio-container">
            <?php foreach ($lista_galeria as $registros3) { ?>
                <div class="col-lg-6 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/comida/pizzerias/peperonis_pizzas/<?php echo $registros3["imagen"]; ?>" alt="">
                        <a class="portfolio-btn" href="img/comida/pizzerias/peperonis_pizzas/<?php echo $registros3["imagen"]; ?>" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            <?php } ?>
            <!--<div class="col-lg-6 col-md-6 p-0 portfolio-item second">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-80" src="img/comida/pizzerias/peperonis_pizzas/menu2.jpg" alt="">
                    <a class="portfolio-btn" href="img/comida/pizzerias/peperonis_pizzas/menu2.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>-->

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

                    <div class="col-sm-6 text-center text-sm-right border-right ">
                        <?php foreach ($lista_mapa as $registros5) { ?>
                            <iframe src="<?php echo $registros5["link"]; ?>"></iframe>
                        <?php } ?>
                    </div>

                    <div class="col-sm-3 text-center text-sm-left">
                        <?php foreach ($lista_datos as $registros4) { ?>
                            <!--<h5 class="font-weight-bold mb-2">Opening Hours</h5>
                        <p class="mb-2">Mon – Sat, 8AM – 5PM</p>
                        <p class="mb-0">Sunday: Closed</p>-->

                            <h3> <?php echo $registros4["titulo"]; ?></h3>
                            <p><?php echo $registros4["descripcion"]; ?></p>

                        <?php } ?>


                        <?php foreach ($lista_icono as $registros6) { ?>
                            <a href="<?php echo $registros6["link"]; ?>">
                                <img class="social-media" width="80px" src="img/comida/pizzerias/peperonis_pizzas/<?php echo $registros6["imagen"]; ?>" alt="">
                            </a>
                        <?php } ?>

                    </div>


                    <div class="col-sm-3 text-center text-sm-left">
                        <!--<h5 class="font-weight-bold mb-2">Opening Hours</h5>
                        <p class="mb-2">Mon – Sat, 8AM – 5PM</p>
                        <p class="mb-0">Sunday: Closed</p>-->
                        <h3>Horario</h3>
                        
                        <?php foreach ($lista_horario as $registros7) { ?>
            
                            <p><?php echo $registros7["titulo"]; ?><br>
                                <?php echo $registros7["descripcion"]; ?>
                            </p>

                        <?php } ?>
                    </div>



                </div>
            </div>

        </div>
    </div>
</div>
<!--CONTACTO-->

<div class="row justify-content-center">
    <a href="comida.php" class="btn btn-sm btn-secondary">Regresar</a>
</div>






<br>



<?php include("templates/footer.php"); ?>