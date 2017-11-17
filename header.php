<div class="banner">
  <div class="logoo">
    <a class="nav-link active" href="home.php"><img src="imagenes/logo/utile.png" class="logo" alt=""></a>
  </div>

  <ul class="nav nav-pills">
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

  <div class= "not-login">
  <?php include 'php/cookie_lectura.php'; ?>
    <a class="not-login"><?php echo $wellcome ?></a>
<!--    			<a class="not-login">Usted no se ha identificado</a>	-->
  </div>
</div>
