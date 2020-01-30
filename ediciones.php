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

        <nav class="navbar navbar-inverse">
            <div class="container-fluid" style="background-color:#006039;">
                <div class="navbar-header" >
                    <a class="navbar-brand" href="inicio.php">ROLEX</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="inicio.php">Inicio</a></li>
                    <li><a href="colecciones.php">Colecciones</a></li>
                    <li class="active"><a href="ediciones.php">Ediciones</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Iniciar Sesión</a></li>
                    <li><a href="registro.php"><span class="glyphicon glyphicon-log-in"></span> Registrarse</a></li>
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
                    <td><button class="boton_personalizado">Añadido al carrito</button></td>
                    <td><button class="boton_personalizado">Añadido al carrito</button></td>
                    <td><button class="boton_personalizado">Añadido al carrito</button></td>
                </tr>
            </table>
            
            <table border CELLPADDING=10 style="margin: 0 auto; text-align:center; margin-top: 10%">
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
                    <td><button class="boton_personalizado">Añadido al carrito</button></td>
                    <td><button class="boton_personalizado">Añadido al carrito</button></td>
                    <td><button class="boton_personalizado">Añadido al carrito</button></td>
                </tr>
            </table>
            
            <table border CELLPADDING=10 style="margin: 0 auto; text-align:center; margin-top: 10%">
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
                    <td><button class="boton_personalizado">Añadido al carrito</button></td>
                    <td><button class="boton_personalizado">Añadido al carrito</button></td>
                    <td><button class="boton_personalizado">Añadido al carrito</button></td>
                </tr>
            </table>
</div>
        </div>
    </body>
</html>




