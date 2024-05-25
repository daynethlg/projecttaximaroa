<?php
include("../../../../bd.php");

if (isset($_GET['txtid'])) {
    //recuperar los datos de ID correspondiente (seleccioando)

    $txtid=(isset($_GET['txtid'])) ?$_GET['txtid']:"";

    $sentencia = $conexion->prepare("SELECT * FROM tb_conecta_info WHERE id=:id");
    $sentencia->bindParam(":id", $txtid);
    $sentencia->execute();

    $registro=$sentencia->fetch(PDO::FETCH_LAZY);

    $titulo=$registro['titulo'];
    $descripcion=$registro['descripcion'];
    $descripcion2=$registro['descripcion2'];
}

if($_POST) {
    print_r($_POST);

     //recepcionamos los valores del formulario
     $txtid=(isset($_POST['txtid']))?$_POST['txtid']:"";
     $titulo=(isset($_POST['titulo']))?$_POST['titulo']:"";
     $descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";
     $descripcion2=(isset($_POST['descripcion2']))?$_POST['descripcion2']:"";
 
     $sentencia = $conexion->prepare("UPDATE tb_conecta_info 
     SET 
     titulo=:titulo,
     descripcion=:descripcion,
     descripcion2=:descripcion2
     WHERE id=:id ");
     
     $sentencia->bindParam(":titulo", $titulo);
     $sentencia->bindParam(":descripcion", $descripcion);
     $sentencia->bindParam(":descripcion2", $descripcion2);
     $sentencia->bindParam(":id", $txtid);
     $sentencia->execute();

      //imagen
    if ($_FILES["imagen"]["tmp_name"] != "") {

        $imagen = (isset($_FILES["imagen"]["name"])) ? $_FILES["imagen"]["name"] : "";
        $fecha_imagen = new DateTime();
        $nombre_archivo_imagen = ($imagen != "") ? $fecha_imagen->getTimestamp() . "_" . $imagen : "";

        $tmp_imagen = $_FILES["imagen"]["tmp_name"];
        move_uploaded_file($tmp_imagen, "../../../../../img/agencias/conecta/" . $nombre_archivo_imagen);

    
       //boorado arcjivpo anterior
        $sentencia = $conexion->prepare("SELECT imagen FROM tb_conecta_info WHERE id=:id ");
        $sentencia->bindParam(":id", $txtid);
        $sentencia->execute();
        $registro_imagen = $sentencia->fetch(PDO::FETCH_LAZY);


        //actualizar
        if (isset($registro_imagen["imagen"])) {
            if (file_exists("../../../../../img/agencias/conecta/" . $registro_imagen["imagen"])) {
                unlink("../../../../../img/agencias/conecta/" . $registro_imagen["imagen"]);
            }
        }

        $sentencia = $conexion->prepare("UPDATE tb_conecta_info  
        SET 
        imagen=:imagen
        WHERE id=:id");

        $sentencia->bindParam(":imagen", $nombre_archivo_imagen);
        $sentencia->bindParam(":id", $txtid);
        $sentencia->execute();
    }


     $mensaje="Registro Modificado";
     header("location:index.php?mensaje=".$mensaje);
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

            <div class="mb-3">
                <label for="descripcion2" class="form-label">descripcion2</label>
                <input value="<?php echo $descripcion2; ?>" type="text" 
                class="form-control" name="descripcion2" id="descripcion2" aria-describedby="helpId" placeholder="" />
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <img width="50" src="../../../../../img/agencias/conecta/<?php echo $imagen; ?>" />
                <input type="file" class="form-control" name="imagen" id="imagen" aria-describedby="helpId" placeholder="" />
            </div>


            <button type="submit" class="btn btn-success">
                Actualizar
            </button>


            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>


        </form>

    </div>
    <div class="card-footer text-muted">
        Foot


    </div>
</div>


<?php
include("../../../../templates/footer.php")
?>