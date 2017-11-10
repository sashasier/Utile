<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="banner">
      <div>
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active" href="home.php"><img src="imagenes/logo/utile.png" class="logo" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="registrarse.php">Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="preguntasfrecuentes.php">FAQ</a>
          </li>
        </ul>
      </div>
      <div>
      <?php include 'php/cookie_lectura.php'; ?>
        <a class="not-login"><?php echo $wellcome ?></a>
<!--    			<a class="not-login">Usted no se ha identificado</a>	-->
      </div>

      <div class="form-banner">
        <form class="col-md-8" action="index.html" method="post">
          <div class="form-group col-md-3">
            <input type="text" class="form-control" id="direccion" placeholder="Donde es?" value="">
          </div>
        <form class="col-md-8" action="index.html" method="post">
          <div class="form-group col-md-3">
            <input type="text" class="form-control" id="horario" placeholder="A que hora es?" value="">
          </div>
        <form class="col-md-8" action="index.html" method="post">
          <div class="form-group col-md-3">
              <input type="text" class="form-control" id="personas" placeholder="Cuantos son?" value="">
          </div>
          <button class="button" type="button" name="enviar">enviar</button>
        <br>
      </div>
    </div>
  </body>
</html>
