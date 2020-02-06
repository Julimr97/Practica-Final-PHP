<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ROLEX</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
<?php
error_reporting(E_ERROR);
?>
        <?php $usuario = $_GET['usuario']; ?>
        
        <nav class="navbar navbar-inverse">
            <div class="container-fluid" style="background-color:#006039;">
                <div class="navbar-header" >
                    <a class="navbar-brand" href="inicio.php">ROLEX</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="inicio.php">Inicio</a></li>
                    <li><a href="colecciones.php">Colecciones</a></li>
                    <li><a href="Accesorios.php">Accesorios</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> <?php if(isset($usuario)){ echo $usuario;} else{ echo"Iniciar Sesion";} ?></a></li>
                    <li><a href="registro.php"><span class="glyphicon glyphicon-log-in"></span> Registrarse</a></li>
                    <li><a href="carro.php"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <img src="imagenes/reloj5.jpg" alt="Los Angeles" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Rolex Oyster Rosa</h3>
                            <p>15.000 €</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="imagenes/reloj1.webp" alt="Chicago" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Rolex Oyster</h3>
                            <p>7.500 €</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="imagenes/reloj2.webp" alt="New York" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Rolex Oyster Green</h3>
                            <p>12.500 €</p>
                        </div>
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <h2 align="center">Relojes Rolex</h2>
            <p align="center">
                Los relojes Rolex son creados a partir de las mejores materias primas y montados con escrupulosa minuciosidad. 
                Cada componente es diseñado, desarrollado y fabricado en nuestros talleres, cumpliendo los estándares más estrictos.
            </p>
        </div>

        <!-- Footer -->
        <footer class="page-footer font-small unique-color-dark" style="margin-top: 10%;">

            <div style="background-color: #006039; color: #ffffff">
                <div class="container">

                    <!-- Grid row-->
                    <div class="row py-4 d-flex align-items-center">

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                            <h6 class="mb-0">Página oficial de Rolex</h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-7 text-center text-md-right">

                            <!-- Facebook -->
                            <a class="fb-ic">
                                <i class="fab fa-facebook-f white-text mr-4"> </i>
                            </a>
                            <!-- Twitter -->
                            <a class="tw-ic">
                                <i class="fab fa-twitter white-text mr-4"> </i>
                            </a>
                            <!-- Google +-->
                            <a class="gplus-ic">
                                <i class="fab fa-google-plus-g white-text mr-4"> </i>
                            </a>
                            <!--Linkedin -->
                            <a class="li-ic">
                                <i class="fab fa-linkedin-in white-text mr-4"> </i>
                            </a>
                            <!--Instagram-->
                            <a class="ins-ic">
                                <i class="fab fa-instagram white-text"> </i>
                            </a>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row-->

                </div>
            </div>

            <!-- Footer Links -->
            <div class="container text-center text-md-left mt-5">

                <!-- Grid row -->
                <div class="row mt-3">

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                        <!-- Content -->
                        <h6 class="text-uppercase font-weight-bold">ROLEX</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>La siguiente selección de modelos Rolex proviene del catálogo oficial y no representa las existencias disponibles. Si quiere realizar una consulta sobre un reloj en particular, póngase en contacto con nosotros..</p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Products</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="inicio.php">Inicio</a>
                        </p>
                        <p>
                            <a href="login.php">login</a>
                        </p>
                        <p>
                            <a href="registro.php">Registro</a>
                        </p>
                        <p>
                            <a href="colecciones.php">Colecciones</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Contact</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i> rolex@rolex.com</p>
                        <p>
                            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p>
                            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>

        </footer>
        <!-- Footer -->
    </body>
</html>

