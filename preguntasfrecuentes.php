<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awsome: poner iconos de fontawsome.io-->
    <!-- Latest compiled and minified CSS -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <title>Preguntas Frecuentes</title>
  </head>

  <body class="preguntasfrecuentes">

        <?php include 'header.php'; ?>


      <div class="contenidocentropreguntas" >


       <div class="panel-group" id="accordion">
           <div class="panel panel-primary">
                 <div class="panel-heading">
                    <h4 class="panel-title">
                       <a data-toggle="collapse" href="#section1">
                         ¿Cual es capacidad total del salón?
                       </a>
                     </h4>
                 </div>

                 <div class="panel-collapse collapse in" id="section1">
                     <div class="panel-body">
                       Las capacidades del salón son: Sin carpa 300 personas, con carpa 600 personas
                     </div>
                  </div>
            </div>
        </div>

         <div class="panel-group" id="accordion">
             <div class="panel panel-primary">
                   <div class="panel-heading">
                      <h4 class="panel-title">
                         <a data-toggle="collapse" href="#section3">
                           ¿Cuál es el horario máximo de finalización del evento?
                         </a>
                       </h4>
                   </div>

                   <div class="panel-collapse collapse " id="section3">
                       <div class="panel-body">
                         El horario de cierre y finalización del evento es hasta las 6 am
                       </div>
                    </div>
              </div>
          </div>

          <div class="panel-group" id="accordion">
              <div class="panel panel-primary">
                    <div class="panel-heading">
                       <h4 class="panel-title">
                          <a data-toggle="collapse" href="#section4">
                            ¿Cuáles son los requisitos para reservar la fecha para realizar mi evento?
                          </a>
                        </h4>
                    </div>

                    <div class="panel-collapse collapse " id="section4">
                        <div class="panel-body">
                          Para asegurarse la fecha para realizar tu evento, se debe entregar la seña económica (valor del salón)
                        </div>
                     </div>
               </div>
           </div>

           <div class="panel-group" id="accordion">
               <div class="panel panel-primary">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a data-toggle="collapse" href="#section5">
                             Si tu pregunta no fue contestada ponete en contacto:
                           </a>
                         </h4>
                     </div>

                     <div class="panel-collapse collapse " id="section5">
                         <div class="panel-body">
                           Podes encontrarnos en facebook: utileeventos o nuestro instagram: utileoficial
                         </div>
                      </div>
                </div>
            </div>
      </div>


  <?php include "footer.php"; ?>



  </body>
</html>
