<?php
include("../../../../bd.php");

if (isset($_GET['txtid'])) {
    //recuperar los datos de ID correspondiente (seleccioando)

    $txtid=(isset($_GET['txtid'])) ?$_GET['txtid']:"";

    $sentencia = $conexion->prepare("SELECT * FROM tb_kings_horario WHERE id=:id");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();

    $registro=$sentencia->fetch(PDO::FETCH_LAZY);

    $titulo=$registro['titulo'];
    $descripcion=$registro['descripcion'];
}

if($_POST) {
    print_r($_POST);

     //recepcionamos los valores del formulario
     $txtid=(isset($_POST['txtid']))?$_POST['txtid']:"";
     $titulo=(isset($_POST['titulo']))?$_POST['titulo']:"";
     $descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";
 
     $sentencia = $conexion->prepare("UPDATE tb_kings_horario 
     SET 
     titulo=:titulo,
     descripcion=:descripcion
     WHERE id=:id ");
     
     $sentencia->bindParam(":titulo", $titulo);
     $sentencia->bindParam(":descripcion", $descripcion);
     $sentencia->bindParam(":id", $txtid);
     $sentencia->execute();

    
     $mensaje="Registro Modificado";
     header("location:index_kings.php?mensaje=".$mensaje);
}





include("../../../../templates/header.php")
?>




<div class="card">

    <div class="card-header">
        Ediar informacion empresa
    </div>

    <div class="card-body">


        <form action="" enctype="multipart/form-data" method="post">

            <div class="mb-3">
                <label for="txtid" class="form-label">ID:</label>
                <input readonly value="<?php echo $txtid; ?>" type="text" 
                class="form-control" name="txtid" id="txtid" aria-describedby="helpId" placeholder="id" />
            </div>


            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input value="<?php echo $titulo; ?>" type="text" 
                class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="" />
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">descripcion</label>
                <input value="<?php echo $descripcion; ?>" type="text" 
                class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="" />
            </div>


            <button type="submit" class="btn btn-success">
                Actualizar
            </button>


            <a name="" id="" class="btn btn-primary" href="index_kings.php" role="button">Cancelar</a>


        </form>

    </div>
    <div class="card-footer text-muted">
        Foot


    </div>
</div>


<?php
include("../../../../templates/footer.php")
?>