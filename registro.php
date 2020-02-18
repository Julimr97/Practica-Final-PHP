


<title>ROLEX</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Minified JS library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<!------ Include the above in your HEAD tag ---------->
<head>


    <style>
        body {
            font-family: "Lato", sans-serif;
        }



        .main-head{
            height: 150px;
            background: #006039;

        }

        .sidenav {
            height: 100%;
            background-color: #006039;
            overflow-x: hidden;
            padding-top: 20px;
        }


        .main {
            padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 10px;}
        }

        @media screen and (max-width: 450px) {
            .login-form{
                margin-top: 3%;
            }

            .register-form{
                margin-top: 3%;
            }
        }

        @media screen and (min-width: 768px){
            .main{
                margin-left: 40%; 
            }

            .sidenav{
                width: 40%;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
            }

            .login-form{
                margin-top: 40%;

            }

            .register-form{
                margin-top: 10%;
            }
        }


        .login-main-text{
            margin-top: 20%;
            padding: 60px;
            color: #A37E2C;
        }

        .login-main-text h2{
            font-weight: 300;
        }

        .btn-black{
            background-color: #A37E2C !important;
            color: #006039;
        }

        .btn-secondary{
            background-color: #A37E2C !important;
            color: #006039;
        }

    </style>
</head>

<?php
error_reporting(E_ERROR);
?>

<div class="sidenav">
    <div class="login-main-text">

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
                    <img src="imagenes/reloj1.webp" alt="">
                </div>
                <div class="item">
                    <img src="imagenes/reloj2.webp" alt="">
                </div>
                <div class="item">
                    <img src="imagenes/reloj3.webp" alt="">
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div class="main">
    <div class="col-md-4 col-sm-15">
        <div class="login-form">
            <img src="imagenes/post_7_6485.jpg" height="27%" right="10%">
            <form method="POST" action="pagina_alta.php">
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" class="form-control" placeholder="Usuario" name="name">
                </div>
                <div class="form-group">
                    <label>Correo</label>
                    <input type="text" class="form-control" placeholder="Correo" name="correo">
                </div>
                <div class="form-group">
                    <label>Dirección</label>
                    <input type="text" class="form-control" placeholder="Dirección" name="direccion">
                </div>
                <div class="form-group">
                    <label>Codigo postal</label>
                    <input type="text" class="form-control" placeholder="Codigo Postal" name="codpostal">
                </div>
                <div class="form-group">
                    <label>Telefono</label>
                    <input type="text" class="form-control" placeholder="Telefono" name="telefono">
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>               
            </form>
        </div>
    </div>
</div>
