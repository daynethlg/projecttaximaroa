<?php
include("../../../bd.php");

if (isset($_GET['txtid'])) {
    //recuperar los datos de ID correspondiente (seleccioando)

    $txtid=(isset($_GET['txtid'])) ?$_GET['txtid']:"";

    $sentencia = $conexion->prepare("SELECT * FROM tb_noticias_descripcion WHERE id=:id ");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();

    $registro=$sentencia->fetch(PDO::FETCH_LAZY);

    $descripcion=$registro['descripcion'];


}

if($_POST) {
    print_r($_POST);

     //recepcionamos los valores del formulario
     $txtid=(isset($_POST['txtid']))?$_POST['txtid']:"";
     $descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";


 
 
     $sentencia = $conexion->prepare("UPDATE tb_noticias_descripcion 
     SET 
     descripcion=:descripcion

     WHERE id=:id ");
     
     $sentencia->bindParam(":descripcion", $descripcion);

     $sentencia->bindParam(":id", $txtid);
     $sentencia->execute();

    
     $mensaje="Registro Modificado";
     header("location:index_noticias.php?mensaje=".$mensaje);
}





include("../../../templates/header.php")
?>




<div class="card">

    <div class="card-header">
        Ediar infromacion de catgeorias
    </div>

    <div class="card-body">


        <form action="" enctype="multipart/form-data" method="post">

            <div class="mb-3">
                <label for="txtid" class="form-label">ID:</label>
                <input readonly value="<?php echo $txtid; ?>" type="text" 
                class="form-control" name="txtid" id="txtid" aria-describedby="helpId" placeholder="id" />
            </div>



            <div class="mb-3">
                <label for="descricpion" class="form-label">Descricpion</label>
                <input value="<?php echo $descripcion; ?>" type="text" 
                class="form-control" name="descricpion" id="descricpion" aria-describedby="helpId" placeholder="" />
            </div>

         

    

            <button type="submit" class="btn btn-success">
                Actualizar
            </button>


            <a name="" id="" class="btn btn-primary" href="index_noticias.php" role="button">Cancelar</a>


        </form>

    </div>
    <div class="card-footer text-muted">
        Foot


    </div>
</div>


<?php
include("../../../templates/footer.php")
?>