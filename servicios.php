<?php
include("admin/bd.php");

//REGISTROS COMIDA
$sentencia = $conexion->prepare("SELECT *FROM `tb_servicios`");
$sentencia->execute();
$lista_banner = $sentencia->fetchAll(PDO::FETCH_ASSOC);



//BIENVENIDA COMIDA
$sentencia2 = $conexion->prepare("SELECT *FROM `tb_servicios_categorias`");
$sentencia2->execute();
$lista_categorias = $sentencia2->fetchAll(PDO::FETCH_ASSOC);


include("templates/header.php"); ?>



<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" <?php foreach ($lista_banner as $registros) { ?> style=" background-image: url(img/servicios/<?php echo $registros["imagen"]; ?>);">
    <?php } ?>>
    <div class="container text-center py-5">
        <h1 class="text-white display-3 mt-lg-5"></h1>
    </div>
    <div class="container text-center py-5">
        <h1 class="text-white display-3 mt-lg-5"></h1>
    </div>
</div>
<!-- Header End -->



<!-- Products Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <?php foreach ($lista_banner as $registros) { ?>
                <div class="col-lg-12">
                    <h1 class="section-title position-relative text-center mb-5"><?php echo $registros["descripcion"]; ?></h1>
                </div>
            <?php } ?>
        </div>
        <div class="row">
        <?php foreach ($lista_categorias as $registros2) { ?>
            <div class="col-lg-3 col-md-6 mb-4 pb-2">
                <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">

                    <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                        <img class="rounded-circle w-100 h-100" src="img/servicios/<?php echo $registros2["imagen"];?>" style="object-fit: cover;">
                    </div>
                    <h5 class="font-weight-bold mb-4"><?php echo $registros2["titulo"]; ?></h5>
                    <a href="<?php echo $registros2["boton"]; ?>" class="btn btn-sm btn-secondary">Ir</a>
                </div>
            </div>
            <?php } ?>
         

        </div>
    </div>
</div>
<!-- Products End -->


<br>

<?php include("templates/footer.php"); ?>