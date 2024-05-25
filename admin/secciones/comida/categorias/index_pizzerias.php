<?php
include("../../../bd.php");


if (isset($_GET['txtid'])) {
    //borra registror con ID correspondiente
    $txtid = (isset($_GET['txtid'])) ? $_GET['txtid'] : "";

    //imagen
    $sentencia = $conexion->prepare("SELECT imagen FROM tb_categorias WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();
    $registro_imagen = $sentencia->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen["imagen"])) {
        if (file_exists("../../../../img/comida/pizzerias/peperonis_pizzas/" . $registro_imagen["imagen"])) {
            echo "Imagen enconcontrada...";
            unlink("../../../../img/comida/pizzerias/peperonis_pizzas/" . $registro_imagen["imagen"]);
        }
    }


    $sentencia = $conexion->prepare("DELETE FROM tb_categorias WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();
}





//seleccionar registros
$sentencia = $conexion->prepare(" SELECT *FROM `tb_categorias` ");
$sentencia->execute();
$lista_subcategoria = $sentencia->fetchAll(PDO::FETCH_ASSOC);



include("../../../templates/header.php")
?>

<h1>Pizzerias</h1>
<br>
<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear_pizzerias.php" role="button">Agregar Registros</a>


    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Botón</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_subcategoria as $registros) { ?>

                        
                        <tr class="">
                            <!--ID-->
                            <td scope="col"><?php echo $registros['id']; ?></td>
                            
                            <!--imagen-->
                            <td scope="col">
                                <img  width="50" src="../../../../img/comida/pizzerias/peperonis_pizzas/<?php echo $registros['imagen']; ?>" alt="">
                            </td>

                            <!--texto-->
                            <td scope="col"><?php echo $registros['titulo']; ?></td>
                            <td scope="col"><?php echo $registros['descripcion']; ?></td>
                            <td scope="col"><?php echo $registros['descripcion2']; ?></td>
                            <td scope="col"><?php echo $registros['descripcion3']; ?></td>
                            <td scope="col"><?php echo $registros['boton']; ?></td>

                            <!--Botones-->
                            <td>
                                <a name="" id="" class="btn btn-info" href="editar_pizzerias.php?txtid=<?php echo $registros['id']; ?>" role="button">Editar
                                </a>
                                <a name="" id="" class="btn btn-danger" href="index_pizzerias.php?txtid=<?php echo $registros['id']; ?>" role="button">Eliminar
                                </a>
                            </td>

                        </tr>
                        
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>


<?php
include("../../../templates/footer.php")
?>