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

  <body class="registrarse">
    <div class="container">

      <div class="banner">
        <img src="" alt="" class="logo">
             <ul class="nav nav-pills">
               <li class="nav-item">
                 <a class="nav-link active" href="especialidades.html"><img src="imagenes/logo/utile.png" class="logo" alt=""></a>
               </li>
                <li class="nav-item">
                 <a class="nav-link active" href="especialidades.html">Home</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link disabled" href="login.html">Login</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link disabled" href="preguntasfrecuentes.html">FAQ</a>
               </li>
             </ul>
       </div>


  <h1 class="tituloreg">registrarse</h1>

    <div class="formulario">
      <form class="form-horizontal" action="index.html" method="post">
        <div class="form-group">
          <label class="control-label col-md-2 introducir" for="nombre">Nombre y Apellido</label>
            <div class="col-md-8">
              <input type="text" class="form-control" id="nombre" placeholder="ingrese su nombre y apellido" value="" required>
            </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-2 introducir" for="email">E-mail</label>
          <div class="col-md-8">
          <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su email"  value="" required>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-2 introducir" for="password">Contraseña</label>
            <div class="col-md-8">
                <input type="password" class="form-control" name="password" id="contraseña" placeholder="contraseña"  value="" required>
            </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-2 introducir" for="password">Validar contraseña</label>
            <div class="col-md-8">
                <input type="password" class="form-control" name="password" id="contraseña" placeholder="password"  value="" required>
            </div>
        </div>

      <div class="form-group">
        <label class="control-label col-md-2 introducir" for="edad">Edad</label>
          <div class="col-md-8">
            <input type="number" class="form-control" id="edad" value="" required>
          </div>
      </div>

      <br>
      <div class="form-group">
        <div class="col-md-2 col-md-offset-2">
          <button type="button" name="Enviar" class="btn btn-primart">Enviar</button>
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-2 col-md-offset-2">
          <button type="button" name="facebook" class="btn btn-primary">Registrarse con facebook</button>
        </div>
      </div>

    </div>
  </div>

<br>

<footer class="footer">
  <div class="social">
    <a href="https://www.facebook.com/utile" >
      <img src="imagenes/footer/facebook.png" class="icon_footer" alt=""></a>
    <a href="https://www.twitter.com/utile" >
      <img src="imagenes/footer/twitter.png" class="icon_footer" alt=""></a>
  </div>
  <p class="txt_footer">&copy; UTILE 2017 - Todos los derechos reservados</p>
</footer>

    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
