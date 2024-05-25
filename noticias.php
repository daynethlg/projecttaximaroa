<?php
include("admin/bd.php");


//CATEGORIAS*************************************************
include("admin/bd.php");
$sentencia = $conexion->prepare("SELECT *FROM `tb_noticias` ");
$sentencia->execute();
$lista_categorias = $sentencia->fetchAll(PDO::FETCH_ASSOC);


include("templates/header.php"); ?>




<br>
<br>


<div class="container">

  <div class="row mb-2">

    <div class="col-md-6">
      <?php foreach ($lista_categorias as $registros) { ?>

        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary"><?php echo $registros["categoria"]; ?></strong>
            <h3 class="mb-0"><?php echo $registros["titulo"]; ?></h3>
            <div class="mb-1 text-muted"><?php echo $registros["fecha"]; ?></div>
            <p class="card-text mb-auto"><?php echo $registros["descripcion"]; ?></p>
            <a href="<?php echo $registros["boton"]; ?>" class="stretched-link">Ver Más</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="img/noticias/<?php echo $registros["imagen"]; ?>" width="200" height="250" alt="">
          </div>
        </div>

      <?php } ?>
    </div>

  </div>

</div>




<?php include("templates/footer.php"); ?>