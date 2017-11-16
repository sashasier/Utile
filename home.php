<?php
		require_once("soporte.php");

		$usuarioLogueado = $auth->usuarioLogueado($db);

		if ($usuarioLogueado == null) {
			$nombre = "Invitado";
		} else {
			$nombre = $usuarioLogueado->getUsername();
		}
		$usuarios = $db->traerTodos();

	?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Stylesheets -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/docs.theme.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!--link rel="stylesheet" href="css/style01.css"-->

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.js"></script>

	  <title>Especialidades</title>

  </head>

  <body>
		<div class="container">

        <?php include 'header.php'; ?>


		<section class="form-banner">
			<div class="row">
				<form class="form-inline col-md-8 col-md-offset-2" action="index.html" method="post">
					<div class="form-group col-md-3">
						<input type="text" class="form-control" id="direccion" placeholder="Donde es?" value="">
					</div>
					<div class="form-group col-md-3">
						<input type="text" class="form-control" id="horario" placeholder="A que hora es?" value="">
					</div>
					<div class="form-group col-md-3">
							<input type="text" class="form-control" id="personas" placeholder="Cuantos son?" value="">
					</div>
					<div class="form-group col-md-3">
						<button class="button btn success col-xs-12" type="button" name="enviar">Enviar</button>
					</div>
				</form>
			</div>
	  </section>
    <section id="catering">
      <div class="row">
        <div class="large-12 columns">
        	<h2 style="text-align: center" id="c">Catering</h2>
        	<h4 style="text-align: right">Ver todo</h4>
          <div class="owl-carousel owl-theme">
            <div class="item">
              <img src="imagenes/catering/cat1.jpg" alt="Catering1" >
              <h4>PICADITAS</h4>
            </div>
            <div class="item">
              <img src="imagenes/catering/cat3.jpg" alt="Catering3" >
              <h4>EAT</h4>
            </div>
            <div class="item">
              <img src="imagenes/catering/cat4.jpg" alt="Catering4" >
              <h4>LAS BRAZAS</h4>
            </div>
            <div class="item">
              <img src="imagenes/catering/cat5.jpg" alt="Catering5" >
              <h4>EMPACHADOS</h4>
            </div>
            <div class="item">
              <img src="imagenes/catering/cat6.jpg" alt="Catering6" >
              <h4>DULZONES</h4>
            </div>
          </div>

          <script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: false,
                responsive: {
                  0: {
                    items: 2,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: false
                  },
                  1000: {
                    items: 3,
                    nav: true,
                    loop: false,
                    margin: 20
                  }
                }
              })
            })
          </script>
        </div>
      </div>
    </section>

		<section id="barras">
	    <div class="row">
	      <div class="large-12 columns">
    		<h2 style="text-align: center" id="b">Barras</h2>
          	<h4 style="text-align: right">Ver todo</h4>
	        <div class="owl-carousel owl-theme">
	          <div class="item">
	            <img src="imagenes/barra/barra1.jpg" alt="Barra1" >
	            <h4>SHAKE IT</h4>
	          </div>
	          <div class="item">
	            <img src="imagenes/barra/barra2.jpg" alt="Barra2" >
	            <h4>VODKA TONIFICA</h4>
	          </div>
	          <div class="item">
	            <img src="imagenes/barra/barra3.jpg" alt="Barra3" >
	            <h4>MANDALA</h4>
	          </div>
	          <div class="item">
	            <img src="imagenes/barra/barra4.jpg" alt="Barra4" >
	            <h4>TEQUILA</h4>
	          </div>
	          <div class="item">
	            <img src="imagenes/barra/barra5.jpg" alt="Barra5" >
	            <h4>MOJIÑO</h4>
	          </div>
	          <div class="item">
	            <img src="imagenes/barra/barra6.jpg" alt="Barra6" >
	            <h4>ESKA</h4>
	          </div>
	          <div class="item">
	            <img src="imagenes/barra/barra7.jpg" alt="Barra7" >
	            <h4>MASTERS</h4>
	          </div>
	          <div class="item">
	            <img src="imagenes/barra/barra8.jpg" alt="Barra8" >
	            <h4>Barra8</h4>
	          </div>
	        </div>

	        <script>
	          $(document).ready(function() {
	            $('.owl-carousel').owlCarousel({
	              loop: true,
	              margin: 10,
	              responsiveClass: false,
	              responsive: {
	                0: {
	                  items: 2,
	                  nav: true
	                },
	                600: {
	                  items: 3,
	                  nav: false
	                },
	                1000: {
	                  items: 3,
	                  nav: true,
	                  loop: false,
	                  margin: 20
	                }
	              }
	            })
	          })
	        </script>
	      </div>
	    </div>
	  </section>


        <section id="dj">
          <div class="row">
            <div class="large-12 columns">
            	<h2 style="text-align: center" id="d">Dj's</h2>
            	<h4 style="text-align: right">Ver todo</h4>
              <div class="owl-carousel owl-theme">
                <div class="item">
                  <img src="imagenes/djs/dj1.jpg" alt="dj1" >
                  <h4>SOLOMUN</h4>
                </div>
                <div class="item">
                  <img src="imagenes/djs/dj2.jpg" alt="dj2" >
                  <h4>SKRILLEX</h4>
                </div>
                <div class="item">
                  <img src="imagenes/djs/dj3.jpg" alt="dj3" >
                  <h4>SEPH</h4>
                </div>
                <div class="item">
                  <img src="imagenes/djs/dj4.jpg" alt="dj4" >
                  <h4>MATADOR</h4>
                </div>
                <div class="item">
                  <img src="imagenes/djs/dj5.jpg" alt="dj5" >
                  <h4>MACEO PLEX</h4>
                </div>
                <div class="item">
                  <img src="imagenes/djs/dj6.jpg" alt="dj6" >
                  <h4>LUCSON</h4>
                </div>
              </div>

              <script>
                $(document).ready(function() {
                  $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    responsiveClass: false,
                    responsive: {
                      0: {
                        items: 2,
                        nav: true
                      },
                      600: {
                        items: 3,
                        nav: false
                      },
                      1000: {
                        items: 3,
                        nav: true,
                        loop: false,
                        margin: 20
                      }
                    }
                  })
                })
              </script>
            </div>
          </div>
        </section>

  <?php include "footer.php"; ?>


  </div>

	</div>
	<script>$(document).ready(function(){$("#myCarousel").carousel("pause");});</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
