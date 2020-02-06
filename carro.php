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
    </head>
    <body>

        <?php
        session_start();
        error_reporting(E_ERROR);
        
        if(isset($_GET['producto1'])) {
            $_SESSION['producto1']=producto1;
            
        }
        if(isset($_GET['producto2'])) {
            $_SESSION['producto2']=producto2;
        }
        if(isset($_GET['producto3'])) {
            $_SESSION['producto3']=producto3;
        }
        if(isset($_GET['precio1'])) {
            $_SESSION['precio1']=precio1;
        }
        if(isset($_GET['precio2'])) {
            $_SESSION['precio2']=precio2;
        }
        if(isset($_GET['precio3']))
        
        ?>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid" style="background-color:#006039;">
                <div class="navbar-header" >
                    <a class="navbar-brand" href="inicio.php">ROLEX</a>
                </div>
                <ul class="nav navbar-nav">
                    <li ><a href="inicio.php">Inicio</a></li>
                    <li ><a href="colecciones.php">Colecciones</a></li>
                    <li><a href="Accesorios.php">Accesorios</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Iniciar Sesión</a></li>
                    <li><a href="registro.php"><span class="glyphicon glyphicon-log-in"></span> Registrarse</a></li>
                    <li class="active"><a href="carro.php"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>

                </ul>
            </div>
        </nav>

        <div class="container">
            
            <table border CELLPADDING=10 style="margin: auto; text-align:center;">
                <tr>
                    <td width="300">Articulo</td>
                    <td width="300">Precio</td>
                    <td width="300">Cantidad</td>
                </tr>
                
                <?php
                if(isset($_SESSION['producto1'])) {
                        echo '
                    <tr>
                        <td><img src = "imagenes/reloj1.webp" width = "300"></td>
                        <td>7.500 €</td>
                        <td>1</td>
                    </tr>';
                        
                    }
                ?>
                
                <?php
                if(isset($_SESSION['producto2'])) {
                        echo '
                    <tr>
                        <td><img src = "imagenes/reloj2.webp" width = "300"></td>
                        <td>12.500 €</td>
                        <td>1</td>
                    </tr>';
                        
                    }
                ?>
                
                <?php
                if(isset($_SESSION['producto3'])) {
                        echo '
                    <tr>
                        <td><img src = "imagenes/reloj3.webp" width = "300"></td>
                        <td>9.500 €</td>
                        <td>1</td>
                    </tr>';
                        
                    }
                ?>
                
            </table>
            
            <table  CELLPADDING=10 style="margin: auto; text-align:center; margin-top: 10%;">
                <tr>
                    <td width="300">Precio</td>
                </tr>
                
                <?php
                if(isset($_SESSION['precio1'])) {
                        echo '
                    <tr>
                        <td>7.500 €</td>
                    </tr>';
                        
                    }
                ?>
                
                <tr>
                    <td><button class="boton_personalizado">COMPRAR</button></td>
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




