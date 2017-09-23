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

  <body class="loginbody">

    <div class="banner">
      <img src="" alt="" class="logo">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active" href="especialidades.php"><img src="imagenes/logo/utile.png" class="logo" alt=""></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="registrarse.php">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="home.php">Home</a>
        </li>
      </ul>
    </div>


   <div class="container">
         <div class="row main">
             <h1 class="tituloreg">Login</h1>
           <div class="main-login main-center">
             <form class="" method="post" action="#">




               <div class="form-group">
                 <label for="username" class="cols-sm-2 control-label">Username</label>
                 <div class="cols-sm-10">
                   <div class="input-group">
                     <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                     <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                   </div>
                 </div>
               </div>

               <div class="form-group">
                 <label for="password" class="cols-sm-2 control-label">Password</label>
                 <div class="cols-sm-10">
                   <div class="input-group">
                     <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                     <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                   </div>
                 </div>
               </div>



               <div class="form-group ">
                 <a href="" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Login</a>
               </div>

               <div class="form-group login-group-checkbox">
                   <input type="checkbox" id="lg_remember" name="lg_remember"><p class="registrotxt">Recordar password</p>
               </div>

             </form>
           </div>
         </div>
       </div>



    <footer class="footer">
      <div class="social">
        <a href="https://www.facebook.com/utile" >
          <img src="imagenes/footer/facebook.png" class="icon_footer" alt=""></a>
        <a href="mailto:utile@utile.com" >
          <img src="imagenes/footer/twitter.png" class="icon_footer" alt=""></a>
        <!-- <a href="tel:" class="icon-phone"></a> -->
      </div>
      <p class="txt_footer">&copy; UTILE 2017 - Todos los derechos reservados</p>
    </footer>

    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
