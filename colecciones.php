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

        <style type="text/css">
            .boton_personalizado{
                text-decoration: none;
                padding: 2px;
                font-weight: 600;
                font-size: 20px;
                color: #006039;
                background-color: #ffffff;
                border-radius: 6px;
                border: 2px solid #006039;
            }
            .boton_personalizado:hover{
                color: #ffffff;
                background-color: #006039;
            }
        </style>
        
 <?php
error_reporting(E_ERROR);
session_name('Rolex');
    session_start();
?>
        <?php $usuario = $_GET['usuario']; ?>
        

    </head>
    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid" style="background-color:#006039;">
                <div class="navbar-header" >
                    <a class="navbar-brand" href="inicio.php">ROLEX</a>
                </div>
                <ul class="nav navbar-nav">
                    <li ><a href="inicio.php">Inicio</a></li>
                    <li class="active"><a href="colecciones.php">Colecciones</a></li>
                    <li><a href="Accesorios.php">Accesorios</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                                        <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> <?php if(isset($_SESSION['usuario'])){ echo $_SESSION['usuario'];} else{ echo"Iniciar Sesion";} ?></a></li>
                    <li><a href="registro.php"><span class="glyphicon glyphicon-log-in"></span> Registrarse</a></li>
                    <li><a href="carro.php"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <table border CELLPADDING=10 style="margin: 0 auto; text-align:center;">
                <tr>
                    <td><img src="imagenes/reloj1.webp" width="300"></td>
                    <td><img src="imagenes/reloj2.webp" width="300"></td>
                    <td><img src="imagenes/reloj3.webp" width="300"></td>
                </tr>
                <tr>
                    <td>7.500 €</td>
                    <td>12.500 €</td>
                    <td>9.250 €</td>
                </tr>
                <tr>
                     <td><a href="carro.php?producto1=reloj1&precio1=7.500€">Añadido al carrito</a></td>
                     <td><a href="carro.php?producto2=reloj3&precio2=12.500€">Añadido al carrito</a></td>
                     <td><a href="carro.php?producto3=reloj2&precio3=9.250€">Añadido al carrito</a></td>
                </tr>
            </table>

            <table border CELLPADDING=10 style="margin: 0 auto; text-align:center; margin-top: 10%">
                <tr>
                    <td><img src="imagenes/reloj5.jpg" width="300"></td>
                    <td><img src="imagenes/reloj4.webp" width="300"></td>
                    <td><img src="imagenes/reloj6.jpg" width="300"></td>
                </tr>
                <tr>
                    <td>37.500 €</td>
                    <td>42.500 €</td>
                    <td>96.250 €</td>
                </tr>
               <tr>
                   <td><a href="carro.php">Añadido al carrito</a></td>
                      <td><a href="carro.php">Añadido al carrito</td>
                    <td><a href="carro.php">Añadido al carrito</td>
                </tr>
            </table>

            <table border CELLPADDING=10 style="margin: 0 auto; text-align:center; margin-top: 10%">
                <tr>
                    <td><img src="imagenes/reloj7.jpg" width="300"></td>
                    <td><img src="imagenes/reloj8.jpg" width="300"></td>
                    <td><img src="imagenes/reloj9.jpg" width="300"></td>
                </tr>
                <tr>
                    <td>17.500 €</td>
                    <td>22.500 €</td>
                    <td>9.250 €</td>
                </tr>
                <tr>
                     <td><a href="carro.php">Añadido al carrito</td>
                      <td><a href="carro.php">Añadido al carrito</td>
                    <td><a href="carro.php">Añadido al carrito</td>
                </tr>
            </table>
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


