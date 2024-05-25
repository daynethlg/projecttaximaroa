<?php
session_start();

$url_base = "http://localhost/taximaroamx/admin/";

if (!isset($_SESSION['usuario'])) {
    header("Location:" . $url_base . "login.php");
}

?>

<!doctype html>
<html lang="es">

<head>
    <title>Administrador Sitio Web</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/2.0.2/js/dataTables.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





</head>

<body>
    <header>



        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link" href="<?php echo $url_base; ?>secciones/inicio/index.php">INICIO </a>



<!--***********************************************************COMIDA**********************************************************************-->

                <!--***************************CATEGORIAS COMIDA**********-->

                <div class="dropdown">
                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Comida
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="<?php echo $url_base; ?>secciones/comida/categorias/index.php"> Categorias General </a></li>

                        <!--<li><a class="dropdown-item" href="<//?php echo $url_base; ?>secciones/comida/categorias/index_pizzerias.php">Categorias Pizzeria</a></li>

                        <li><a class="dropdown-item" href="<//?php echo $url_base; ?>secciones/comida/categorias/index_comida_rapida.php">Categorias Comida rapida</a></li>-->
                    </ul>
                </div>


                <!--***************************MICROSITIOS COMIDA**********-->
                <div class="dropdown">
                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Micrositios comida
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="<?php echo $url_base; ?>secciones/comida/micrositios/index_peperonis.php">Peperonis pizza </a></li>
                        <li><a class="dropdown-item" href="<?php echo $url_base; ?>secciones/comida/micrositios/kings/index_kings.php">Kings</a></li>


                    </ul>
                </div>

<!--********************MODAAAAAA******************************************-->
                <div class="dropdown">
                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Moda
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="<?php echo $url_base; ?>secciones/moda/index.php">General</a></li>

                        <li><a class="dropdown-item" href="<?php echo $url_base; ?>secciones/moda/micrositios/algobonito/index.php">Algo bonito</a></li>

                    </ul>
                </div>










<!--***********************************************************SERVICIOS**********************************************************************-->

                <!--***************************CATGORIAS SERVICIOOS**********-->

                <div class="dropdown">
                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Servicios
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="<?php echo $url_base; ?>secciones/servicios/index.php"> Geneneral </a></li>
                       
                    </ul>


                </div>
                <!--***************************MICROSITIOS SERVICIOS**********-->
                <div class="dropdown">
                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Micrositios Servicios
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="<?php echo $url_base; ?>secciones/agencias/micrositios/conecta/index.php">agencia connecta</a></li>
                        <li><a class="dropdown-item" href="<?php echo $url_base; ?>secciones/servicios/micrositios/laboocampo/index.php"> Laboratorios Ocampo </a></li>
                        <li><a class="dropdown-item" href="<?php echo $url_base; ?>secciones/servicios/micrositios/dvelazquez/index.php">d velazquez</a></li>
                        <li><a class="dropdown-item" href="<?php echo $url_base; ?>secciones/servicios/micrositios/gonzalezviajes/index.php">agencia gonzalez</a></li>

                    </ul>
                </div>

<!--************************NOTICIAS*********************-->
                <div class="dropdown">
                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Noticias
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="<?php echo $url_base; ?>secciones/noticias/index.php"> Geneneral </a></li>
                    <li><a class="dropdown-item" href="<?php echo $url_base; ?>secciones/noticias/noticia1/index_noticias.php">Noticia1</a></li>

                </ul>


            </div>



            <a class="nav-item nav-link" href="<?php echo $url_base; ?>secciones/nosotros/">Nosotros</a>
            <a class="nav-item nav-link" href="<?php echo $url_base; ?>secciones/configuraciones/">Configuracion</a>
            <a class="nav-item nav-link" href="<?php echo $url_base; ?>secciones/terminos/index.php">Terminos/condiciones</a>
            <a class="nav-item nav-link" href="<?php echo $url_base; ?>secciones/usuarios/">Usuarios</a>
            <a class="nav-item nav-link" href="<?php echo $url_base; ?>cerrar.php">Cerrar sesion</a>
            </div>






        </nav>




    </header>