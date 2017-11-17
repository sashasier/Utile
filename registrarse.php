<?php
	include_once("soporte.php");
	require_once("php/classes/usuario.php");

	if ($auth->estaLogueado()) {
		header("Location:inicio.php");exit;
	}

/*	$emailDefault = "";
	$usernameDefault = ""; */
	$email= "";
	$username= "";
	$nombre= "";

	$_SESSION = ['errores'];
	unset($_SESSION['errores']);

	if ($_POST) {
		$_SESSION['errores'] = $validador->validarInformacion($_POST, $db);

		if (!isset($_SESSION["email"])) {
			$emailDefault = $_POST["email"];
		}

		if (!isset($_SESSION["username"])) {
			$usernameDefault = $_POST["username"];
		}

		if (count($_SESSION['errores']) == 0) {
			$usuario = new Usuario($_POST);
			$mail = $_POST["email"];
			$usuario->guardarImagen($mail);

			$usuario = $db->guardarUsuario($usuario);

			header("Location:home.php?mail=$mail");exit;
		}
	}
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

    	<?php include 'header.php'; ?>

	  	<div class="registrobox">
	      <div class="container">

	  			<div class="row main">
	  				<div class="main-login main-center">

	            <h1 class="tituloreg">Registrarse</h1>
	            <hr>

	            <?php if (count($_SESSION) > 1): ?>
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

<!--  						<form class="" action="php/controller/registro.controller.php" enctype="multipart/form-data" method="post" novalidate>  -->
								<form class="" action="registrarse.php" enctype="multipart/form-data" method="post" novalidate>

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
    </div>

    <?php include "footer.php"; ?>

    <!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
