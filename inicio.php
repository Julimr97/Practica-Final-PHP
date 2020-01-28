<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
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

        <nav class="navbar navbar-inverse">
            <div class="container-fluid" style="background-color:#006039;">
                <div class="navbar-header" >
                    <a class="navbar-brand" href="inicio.php">ROLEX</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="inicio.php">Inicio</a></li>
                    <li><a href="colecciones.php">Colecciones</a></li>
                    <li><a href="ediciones.php">Ediciones</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Iniciar Sesión</a></li>
                    <li><a href="registro.php"><span class="glyphicon glyphicon-log-in"></span> Registrarse</a></li>
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
    </body>
</html>

