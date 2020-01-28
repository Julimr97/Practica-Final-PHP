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
        <style>
            @import url(http://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css);

body {
  font: 12px/20px 'Lucida Grande', Verdana, sans-serif;
  color: #404040;
  background: #75649b;
}

.plans {
  margin: 20px auto;
  width: 660px;
  zoom: 1;
}

.plans:before, .plans:after {
  content: '';
  display: table;
}

.plans:after {
  clear: both;
}

.plan {
  float: left;
  width: 220px;
  margin: 10px 0;
  padding: 20px;
  text-align: center;
  background: #fafafa;
  background-clip: padding-box;
  border: solid #453b5d;
  border-width: 2px 0 2px 2px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}

.plan:first-child {
  border-top-left-radius: 7px;
  border-bottom-left-radius: 7px;
}

.plan:last-child {
  border-width: 2px;
  border-top-right-radius: 7px;
  border-bottom-right-radius: 7px;
}

.plan-title {
  position: relative;
  margin: -20px -10px 20px;
  padding: 20px;
  line-height: 1;
  font-size: 16px;
  font-weight: bold;
  color: #595f6b;
  border-bottom: 1px dashed #d2d2d2;
}

.plan-title:before {
  content: '';
  position: absolute;
  bottom: -1px;
  left: 0;
  right: 0;
  height: 1px;
  background-size: 3px 1px;
  background-image: -webkit-linear-gradient(left, white, white 33%, #d2d2d2 34%, #d2d2d2);
  background-image: -moz-linear-gradient(left, white, white 33%, #d2d2d2 34%, #d2d2d2);
  background-image: -o-linear-gradient(left, white, white 33%, #d2d2d2 34%, #d2d2d2);
  background-image: linear-gradient(to right, white, white 33%, #d2d2d2 34%, #d2d2d2);
}

.plan-price {
  margin: 0 auto 20px;
  width: 90px;
  height: 90px;
  line-height: 90px;
  font-size: 19px;
  font-weight: bold;
  color: white;
  background: #595f6b;
  border-radius: 45px;
}

.plan-price > span {
  font-size: 12px;
  font-weight: normal;
  color: rgba(255, 255, 255, 0.9);
}

.plan-features {
  margin-bottom: 20px;
  line-height: 2;
  font-size: 12px;
  color: #999;
  text-align: center;
}

.plan-features > li > strong {
  font-weight: bold;
  color: #888;
}

.plan-button {
  display: inline-block;
  vertical-align: top;
  padding: 0 15px;
  line-height: 30px;
  font-weight: bold;
  color: white;
  text-transform: uppercase;
  text-decoration: none;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.7);
  background: #7c69a3;
  border: 1px solid #222;
  border-bottom-color: black;
  border-radius: 3px;
  background-image: -webkit-linear-gradient(top, #9780cc, #6f5e96);
  background-image: -moz-linear-gradient(top, #9780cc, #6f5e96);
  background-image: -o-linear-gradient(top, #9780cc, #6f5e96);
  background-image: linear-gradient(to bottom, #9780cc, #6f5e96);
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), inset 0 2px rgba(255, 255, 255, 0.1), 0 1px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), inset 0 2px rgba(255, 255, 255, 0.1), 0 1px rgba(0, 0, 0, 0.1);
}

.plan-button:active {
  color: rgba(255, 255, 255, 0.95);
  background: #6f5e96;
  border-color: black #222 #222;
  background-image: -webkit-linear-gradient(top, #6f5e96, #8770b9);
  background-image: -moz-linear-gradient(top, #6f5e96, #8770b9);
  background-image: -o-linear-gradient(top, #6f5e96, #8770b9);
  background-image: linear-gradient(to bottom, #6f5e96, #8770b9);
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);
}

.plan-tall {
  margin: 0;
  background-color: white;
  border-width: 2px;
  border-radius: 7px;
}

.plan-tall > .plan-title {
  font-size: 18px;
}

.plan-tall > .plan-price {
  width: 100px;
  height: 100px;
  line-height: 100px;
  font-size: 21px;
  border-radius: 50px;
}

.plan-tall > .plan-features {
  font-size: 13px;
}

.plan-tall > .plan-button {
  padding: 0 16px;
  line-height: 32px;
}

.plan-tall + .plan {
  border-left: 0;
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
            <div class="plans">
    <div class="plan">
      <h2 class="plan-title">Clasico de </h2>
      <p class="plan-price">$19.000</p>
      <ul class="plan-features">
        <li><strong>1</strong> user</li>
        <li><strong>Unlimited</strong> projects</li>
        <li><strong>2GB</strong> storage</li>
      </ul>
      <a href="#" class="plan-button">Start Now</a>
    </div>
    <div class="plan plan-tall">
      <h2 class="plan-title">Team</h2>
      <p class="plan-price">$49<span>/mo</span></p>
      <ul class="plan-features">
        <li><strong>10</strong> users</li>
        <li><strong>Unlimited</strong> projects</li>
        <li><strong>20GB</strong> storage</li>
      </ul>
      <a href="#" class="plan-button">Start Now</a>
    </div>
    <div class="plan">
      <h2 class="plan-title">Agency</h2>
      <p class="plan-price">$99<span>/mo</span></p>
      <ul class="plan-features">
        <li><strong>Unlimited</strong> users</li>
        <li><strong>Unlimited</strong> projects</li>
        <li><strong>100GB</strong> storage</li>
      </ul>
      <a href="#" class="plan-button">Start Now</a>
    </div>
  </div>
</div>
        <div class="plans">
    <div class="plan">
      <h2 class="plan-title">Solo</h2>
      <p class="plan-price">$19<span>/mo</span></p>
      <ul class="plan-features">
        <li><strong>1</strong> user</li>
        <li><strong>Unlimited</strong> projects</li>
        <li><strong>2GB</strong> storage</li>
      </ul>
      <a href="#" class="plan-button">Start Now</a>
    </div>
    <div class="plan plan-tall">
      <h2 class="plan-title">Team</h2>
      <p class="plan-price">$49<span>/mo</span></p>
      <ul class="plan-features">
        <li><strong>10</strong> users</li>
        <li><strong>Unlimited</strong> projects</li>
        <li><strong>20GB</strong> storage</li>
      </ul>
      <a href="#" class="plan-button">Start Now</a>
    </div>
    <div class="plan">
      <h2 class="plan-title">Agency</h2>
      <p class="plan-price">$99<span>/mo</span></p>
      <ul class="plan-features">
        <li><strong>Unlimited</strong> users</li>
        <li><strong>Unlimited</strong> projects</li>
        <li><strong>100GB</strong> storage</li>
      </ul>
      <a href="#" class="plan-button">Start Now</a>
    </div>
  </div>
</div>
        </div>
    </body>
</html>




