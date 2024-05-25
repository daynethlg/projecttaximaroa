<?php
include("../../../bd.php");




//**************************************Noticias*******************
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";

    //imagen
    $sentencia = $conexion->prepare("SELECT imagen FROM tb_noticias_inicio WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();
    $registro_imagen = $sentencia->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen3["imagen"])) {
        if (file_exists("../../../../img/noticias/noticia1/" . $registro_imagen["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../../img/noticias/noticia1/" . $registro_imagen["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia = $conexion->prepare("DELETE FROM tb_noticias_inicio WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();
}
//seleccionar registros
$sentencia = $conexion->prepare("SELECT *FROM `tb_noticias_inicio`");
$sentencia->execute();
$lista_noticias = $sentencia->fetchAll(PDO::FETCH_ASSOC);





//**************************************descripcion*******************
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";

   
    //borra registror con ID correspondiente
    $sentencia2 = $conexion->prepare("DELETE FROM tb_noticias_descripcion WHERE id=:id ");
    $sentencia2->bindParam(":id", $txtid);
    $sentencia2->execute();
}
//seleccionar registros
$sentencia2 = $conexion->prepare("SELECT *FROM `tb_noticias_descripcion`");
$sentencia2->execute();
$lista_noticias2 = $sentencia2->fetchAll(PDO::FETCH_ASSOC);






//**************************************GALERIA*******************
if (isset($_GET['txtid'])) {

    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";

    //imagen
    $sentencia = $conexion->prepare("SELECT imagen FROM tb_noticias_galeria WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();
    $registro_imagen = $sentencia->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen3["imagen"])) {
        if (file_exists("../../../../img/noticias/noticia1/" . $registro_imagen["imagen"])) {
            echo "Imagen enconconyrada...";
            unlink("../../../../img/noticias/noticia1/" . $registro_imagen["imagen"]);
        }
    }


    //borra registror con ID correspondiente
    $sentencia = $conexion->prepare("DELETE FROM tb_noticias_galeria WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();
}
//seleccionar registros
$sentencia = $conexion->prepare("SELECT *FROM `tb_noticias_galeria`");
$sentencia->execute();
$lista_galeria = $sentencia->fetchAll(PDO::FETCH_ASSOC);



include("../../../templates/header.php")
?>





<!--************************************NOTICIAS*******************************-->
<div class="card">
    <div class="card-header">
        <h2>Noticia 1 </h2>
        <a name="" id="" class="btn btn-primary" href="crear_inicio.php" role="button">Agregar Registros</a>
    </div>
    <div class="card-body">

        <div class="table-responsive-sm">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Lugar</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_noticias as $registros) { ?>

                        <tr class="">

                            <td scope="col"><?php echo $registros['id']; ?></td>

                            <td scope="col">
                                <img width="50" src="../../../../img/noticias/noticia1/<?php echo $registros['imagen']; ?>" />
                            </td>

                            <td><?php echo $registros['titulo']; ?></td>

                            <td scope="col"><?php echo $registros['fecha']; ?></td>
                            <td><?php echo $registros['lugar']; ?></td>
                            <td><?php echo $registros['autor']; ?></td>

                            <td>
                                <a name="" id="" class="btn btn-info" href="editar_inicio.php?txtid=<?php echo $registros['id']; ?>" role="button">Editar
                                </a>
                                <a name="" id="" class="btn btn-danger" href="index_noticias.php?txtid=<?php echo $registros['id']; ?>" role="button">Eliminar
                                </a>

                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>


<!--************************************NOTICIAS*******************************-->
<div class="card">
    <div class="card-header">
        <h2>Noticia 1 </h2>
        <a name="" id="" class="btn btn-primary" href="crear_descripcion.php" role="button">Agregar Registros</a>
    </div>
    <div class="card-body">

        <div class="table-responsive-sm">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_noticias2 as $registros2) { ?>

                        <tr class="">

                            <td scope="col"><?php echo $registros2['id']; ?></td>


                            <td><?php echo $registros2['descripcion']; ?></td>

                            <td>
                                <a name="" id="" class="btn btn-info" href="editar_descripcion.php?txtid=<?php echo $registros2['id']; ?>" role="button">Editar
                                </a>
                                <a name="" id="" class="btn btn-danger" href="index_noticias.php?txtid=<?php echo $registros2['id']; ?>" role="button">Eliminar
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

<!--************************************GALERIA*******************************-->
<div class="card">
    <div class="card-header">
        <h2>GALERIA </h2>
        <a name="" id="" class="btn btn-primary" href="crear_galeria.php" role="button">Agregar Registros</a>
    </div>
    <div class="card-body">

        <div class="table-responsive-sm">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_galeria as $registros3) { ?>

                        <tr class="">

                            <td scope="col"><?php echo $registros3['id']; ?></td>


                            <td><?php echo $registros3['titulo']; ?></td>


                            <td scope="col">
                                <img width="50" src="../../../../img/noticias/noticia1/<?php echo $registros3['imagen']; ?>" />
                            </td>


                            <td>
                                <a name="" id="" class="btn btn-info" href="editar_galeria.php?txtid=<?php echo $registros3['id']; ?>" role="button">Editar
                                </a>
                                <a name="" id="" class="btn btn-danger" href="index_noticias.php?txtid=<?php echo $registros3['id']; ?>" role="button">Eliminar
                                </a>

                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>


