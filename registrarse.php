<?php
session_start();

$nombre = $_SESSION['inputsValues']['nombre'] ?? '';
$email = $_SESSION['inputsValues']['email'] ?? '';
$password = $_SESSION['inputsValues']['password'] ?? '';
$username = $_SESSION['inputsValues']['username'] ?? '';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- font awsome: poner iconos de fontawsome.io-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Registrarse</title>
  </head>

  <body>

    <div class="container">

      <div class="banner">
        <img src="" alt="" class="logo">
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

        <div class="form-banner">
          <form class="col-md-8" action="index.html" method="post">
            <div class="form-group col-md-3">
              <input type="text" class="form-control" id="direccion" placeholder="Donde es?" value="" required>
            </div>
          <form class="col-md-8" action="index.html" method="post">
            <div class="form-group col-md-3">
              <input type="text" class="form-control" id="horario" placeholder="A que hora es?" value="" required>
            </div>
          <form class="col-md-8" action="index.html" method="post">
            <div class="form-group col-md-3">
                <input type="text" class="form-control" id="personas" placeholder="Cuantos son?" value="" required>
            </div>
          <button class="button" type="button" name="enviar">enviar</button>
          <br>
        </div>
        
      </div>



  <div class="registrobox">
      <div class="container">

  			<div class="row main">
  				<div class="main-login main-center">

              <h1 class="tituloreg">Registrarse</h1>
              <hr>
            <?php if (!empty($_SESSION['errores'])): ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            <?php foreach ($_SESSION['errores'] as $value): ?>
                                <p><?php echo $value; ?></p>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            <?php endif ?>
            <?php unset($_SESSION['errores']); //resetea la posicion de errores ?>

  					<form class="" action="php/registro.controller.php" enctype="multipart/form-data" method="post" novalidate>

  						<div class="form-group">
  							<label for="name" class="cols-sm-2 control-label">Nombre y apellido</label>
  							<div class="cols-sm-10">
  								<div class="input-group">
  									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
  									<input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Enter your Name" value="<?php echo $nombre ?>"/><span class="help-block"></span>
  								</div>
  							</div>
  						</div>

  						<div class="form-group">
  							<label for="email" class="cols-sm-2 control-label">Email</label>
  							<div class="cols-sm-10">
  								<div class="input-group">
  									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
  									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" value="<?php echo $email ?>"/><span class="help-block"></span>
  								</div>
  							</div>
  						</div>

  						<div class="form-group">
  							<label for="username" class="cols-sm-2 control-label">Username</label>
  							<div class="cols-sm-10">
  								<div class="input-group">
  									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
  									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username" value="<?php echo $username ?>"/><span class="help-block"></span>
  								</div>
  							</div>
  						</div>

  						<div class="form-group">
  							<label for="password" class="cols-sm-2 control-label">Password</label>
  							<div class="cols-sm-10">
  								<div class="input-group">
  									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
  									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/><span class="help-block"></span>
  								</div>
  							</div>
  						</div>

  						<div class="form-group">
  							<label for="confirm" class="cols-sm-2 control-label">Confirmar Password</label>
  							<div class="cols-sm-10">
  								<div class="input-group">
  									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
  									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/><span class="help-block"></span>
  								</div>
  							</div>
  						</div>

              <div class="form-group" class="cols-sm-2 control-label">
                <div class="cols-sm-10">
                  <div class="input-group">
                    <label for="avatar">Avatar: </label><br/>
                    <input type="file" class="form-control" name="avatar" id="avatar" value="" />
                    <span class="help-block"></span>
                  </div>
                </div>
              </div>

  						<div class="form-group ">
                <button class="btn btn-primary btn-lg btn-block login-button" type="submit" class="btn btn-default">Enviar</button>
  						</div>
              <p class="registrotxt"><a href="login.php">Ya tenes una cuenta? Click aqui</a></p>

  					</form>
  				</div>
  			</div>
  		</div>

    </div>
    <footer class="footer" style="background-color: midnightblue; text-align: center; color: white; width: 900px;  margin: auto;margin-top: 20px; position: relative; bottom: -2vh">
      <div class="social">
        <a href="https://www.facebook.com/utile" >
          <img src="imagenes/footer/facebook.png" class="icon_footer" style="height: 100px" alt=""></a>
        <a href="https://www.twitter.com/utile" >
          <img src="imagenes/footer/twitter.png" class="icon_footer" style="height: 100px" alt=""></a>
      </div>
      <p class="txt_footer">&copy; UTILE 2017 - Todos los derechos reservados</p>
    </footer>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
