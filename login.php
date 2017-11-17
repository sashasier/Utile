<?php

/*require_once 'php/controller/logincontroller.php';*/
include_once("soporte.php");

  if ($auth->estaLogueado()) {
		header("Location:inicio.php");exit;
	}

	$errores = [];
	if ($_POST) {
		$errores = $validador->validarLogin($_POST, $db);
		if (count($errores) == 0) {
			// LOGUEAR
      $auth->loguear($_POST["email"]);
			if (isset($_POST["remember"])) {
				//Quiere que lo recuerde
				$auth->recordame($_POST["email"]);
			}
      header("Location:inicio.php");
		}
	}
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awsome: poner iconos de fontawsome.io-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
  </head>

  <body>

    <?php include 'header.php'; ?>

    <div class="container">
         <div class="row main">
           <div class="main-login main-center">
                 <h1 class="tituloreg">Login</h1>
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

             <form class="" method="POST" action="login.php">
               <div class="form-group">
                 <label for="username" class="cols-sm-2 control-label">Username</label>
                 <div class="cols-sm-10">
                   <div class="input-group">
                     <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                     <input type="text" class="form-control" name="username" placeholder="Enter your Username" id='username' value="<?php echo $username;?>"/><span class="help-block"></span>
                   </div>
                 </div>
               </div>

               <div class="form-group">
                 <label for="password" class="cols-sm-2 control-label">Password</label>
                 <div class="cols-sm-10">
                   <div class="input-group">
                     <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                     <input type="password" class="form-control" value="" name="password" id="password"  placeholder="Enter your Password"/>
                   </div>
                 </div>
               </div>

               <div class="form-group ">
                 <button type="submit" name="button" class="btn btn-primary btn-lg btn-block login-button">Login</button>
               </div>

               <div class="form-group login-group-checkbox">
                   <input type="checkbox" id="lg_remember" name="lg_remember"><p class="registrotxt">Recordar password</p>
               </div>

             </form>
           </div>
         </div>
       </div>

    <?php include "footer.php"; ?>

    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
