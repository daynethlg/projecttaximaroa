<?php

include("../../../bd.php");

if ($_POST) {
    print_r($_POST);

    //recepcionamos los valores del formulario
    $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : "";
    $link = (isset($_POST['link'])) ? $_POST['link'] : "";
    $imagen = (isset($_FILES["imagen"]["name"])) ? $_FILES["imagen"]["name"] : "";


    //imagen
    $fecha_imagen = new DateTime();
    $nombre_archivo_imagen = ($imagen != "") ? $fecha_imagen->getTimestamp() . "_" . $imagen : "";

    $tmp_imagen = $_FILES["imagen"]["tmp_name"];

    if ($tmp_imagen != "") {
        move_uploaded_file($tmp_imagen, "../../../../img/comida/pizzerias/peperonis_pizzas/" . $nombre_archivo_imagen);
    }


    $sentencia = $conexion->prepare("INSERT INTO `tb_peperonis_icono` (`id`, `titulo`, `link`, `imagen`) 
    VALUES (NULL, :titulo, :link, :imagen);");

    $sentencia->bindParam(":titulo", $titulo);
    $sentencia->bindParam(":link", $link);
    $sentencia->bindParam(":imagen", $nombre_archivo_imagen);


    $sentencia->execute();


    $mensaje = "Registro Agregado";
    header("location:index_peperonis.php?mensaje=" . $mensaje);
}

include("../../../templates/header.php");
?>

<div class="card">

    <div class="card-header">
        Crear Icono
    </div>

    <div class="card-body">


        <form action="" enctype="multipart/form-data" method="post">
            <p> Instrucciones:
                <br>
                Faceboook: https://www.facebook.com/nombre del perfil
                <br>
                Whatsapp: https://wa.me/Código del país + Teléfono (Sin signos)
                <br>
                Instagram: https://www.instagram.com/nombre del perfil/
            </p>

            <div class="mb-3">
                <label for="titulo" class="form-label">Icono</label>
                <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Nombre del icono" />
            </div>

        

            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input type="text" class="form-control" name="link" id="link" aria-describedby="helpId" placeholder="Link" />
            </div>


            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" name="imagen" id="imagen" aria-describedby="helpId" placeholder="Imagen" />
            </div>


            <button type="submit" class="btn btn-success">
                Agregar
            </button>


            <a name="" id="" class="btn btn-primary" href="index_peperonis.php" role="button">Cancelar</a>

        </form>

    </div>

</div>




<?php
include("../../../templates/footer.php")
?>