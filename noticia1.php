<?php
include("admin/bd.php");


//INICIO*************************************************
include("admin/bd.php");
$sentencia = $conexion->prepare("SELECT *FROM `tb_noticias_inicio` ");
$sentencia->execute();
$lista_inicio = $sentencia->fetchAll(PDO::FETCH_ASSOC);



//descripcion*************************************************
include("admin/bd.php");
$sentencia2 = $conexion->prepare("SELECT *FROM `tb_noticias_descripcion` ");
$sentencia2->execute();
$lista_descripcion = $sentencia2->fetchAll(PDO::FETCH_ASSOC);



//GALERIA*************************************************
include("admin/bd.php");
$sentencia3 = $conexion->prepare("SELECT *FROM `tb_noticias_galeria` ");
$sentencia3->execute();
$lista_galeria = $sentencia3->fetchAll(PDO::FETCH_ASSOC);



include("templates/header.php"); ?>

<br>

<?php foreach ($lista_inicio as $registros) { ?>
    <div class="container">

        <div class="container-fluid justify-content-center">
            <img width="800" height="100" src="img/noticias/noticia1/<?php echo $registros["imagen"]; ?>" class="img-fluid" alt="">
        </div>


    </div>
<?php } ?>
<br>

<main class="container">
    <div class="row g-5">
        <div class="col-md-8">
            <article class="blog-post">
                <?php foreach ($lista_inicio as $registros) { ?>
                    <h2 class="blog-post-title"><?php echo $registros["titulo"]; ?></h2>
                    <p class="blog-post-meta"><?php echo $registros["fecha"]; ?> | <?php echo $registros["lugar"]; ?> | <?php echo $registros["autor"]; ?></p>
                <?php } ?>

                <?php foreach ($lista_descripcion as $registros2) { ?>
                    <p><?php echo $registros2["descripcion"]; ?></p>

                <?php } ?>
            </article>
        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <h4 class="fst-italic">Galeria</h4>
                <div class="p-3 mb-3 bg-light rounded">
                    <?php foreach ($lista_galeria as $registros3) { ?>
                        <img width="400" src="img/noticias/noticia1/<?php echo $registros3["imagen"]; ?>" alt="">
                    <?php } ?>
                </div>
            </div>
</main>

<br>
<br>

<div class="row justify-content-center col-12">

    <div>
        <a href="noticias.php" class="btn btn-sm btn-secondary"> Regresar</a>
    </div>
    <div>
        <a href="index.php" class="btn btn-sm btn-secondary"> Inicio</a>
    </div>

</div>




<?php include("templates/footer.php"); ?>