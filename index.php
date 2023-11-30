<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/home.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ej.css">
    <title>Social Service Web Information</title>
    <meta name="description" content="Informate sobre las actividades deportivas y talleres creativos de tu universidad, consulta y contacta para registrarte">
</head>
<body>

  <div class="all">
    <?php include('nav.html')?>
    <br><br>
    <main class="container-fluid">
        <div class="row">
            <div class="col-md-9" id="content">
              <br>
              <div class="carrusel">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <a href="Talleres.php"><img src="img/talleres.png" class="d-block w-100" alt="Talleres, actividades deportivas"></a>
                        <div class="carousel-caption d-none d-md-block" id="fondo-letras">
                          <h4>ACTIVIDADES</h4>
                          <p>Encuentra los talleres y actividades de tu gusto</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <a href="informacion.php"><img src="img/info.png" class="d-block w-100" alt="Busqueda de informacion"></a>
                        <div class="carousel-caption d-none d-md-block" id="fondo-letras">
                          <h4>INFORMACION</h4>
                          <p>Encuentra mas informacion que podria interesarte</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <a href="tallerfutbol.php"><img src="img/mostrated.png" class="d-block w-100" alt="..."></a>
                        <div class="carousel-caption d-none d-md-block" id="fondo-letras">
                          <h4>TENDENCIA</h4>
                          <p>Echa un vistazo al club mas solicitado actualmente</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
                <br>
                <div class="motivacion">
                  <h1>ENCUENTRA LO QUE BUSCAS</h1>
                </div>
                <br>
                <div class="con">
                <h1>Servicio Social</h1>
                
                  <div class="fill">
                    <p>El Servicio social son prácticas que realiza un estudiante para su formación profesional, contribuyendo a la comunidad para un bienestar social, a su vez el estudiante va adquiriendo conocimientos durante el transcurso del servicio social para que estos puedan ser aplicados fuera del ámbito escolar, favoreciendo el desarrollo de los valores, sirve como una experiencia de vida</p>

                    <img src="img/ss.png" alt="Servicio Social">
                  </div>
                
                <h2>Objetivo</h2>
                <p>El objetivo principal es implementar una red donde cualquiera pueda consultar información detallada de las actividades para la realización del servicio social, así mismo obtener información sobre el proceso de liberación de las horas necesarias. Igualmente se puede hacer una solicitud a cada uno de los talleres para unirse y comentar libremente en la zona de comentarios</p>
              <br><br>
                <h2>Contacto</h2>

                <div class="formulario">
                <form class="form" action="https://formspree.io/f/moqyoepe"
                method="POST">
                  <div class="divform">
                    <input type="text" name="Nombre" placeholder="Nombre:" required>
                    <input type="email" name="Correo" placeholder="Correo:" required>
                    <textarea name="Mensaje" placeholder="Mensaje:" required></textarea>
                    <input class="boton" type="submit" value="Enviar">
                  </div>
                </form>
                <a name="contact"></a>
              </div>

              </div>
            </div>

            <div class="col-md-3" id="sidebar">
              <br>
              <h2>Feed Noticias</h2>
              <p>
                El club de ajedrez esta buscando miembros. Consulta cualquier club que te interese en el apartado de actividades o talleres
              </p>
              <a href="tallerajedrez.php"><img src="noticias/chess.jpg" alt="Ajedrez"></a>
              <hr>

              <p>¿Te apasiona la música? El club de canto cuenta con distintos tipos de estrategias y instrumentos para todo tipo de genero. Consulta cualquier club que te interese en el apartado de actividades o talleres
              </p>
              <a href="tallercanto2.php"><img src="noticias/musica.jpg" alt="Musica, instrumentos musicales"></a>
              <hr>

              <p>¿Te gusta dibujar? ¿Los dibujos animados te entretienen? Ven y echa un vistazo al taller de animacion 2D. Consulta cualquier club que te interese en el apartado de actividades o talleres
              </p>
              <a href="taller2D.php"><img src="noticias/animacion.jpg" alt="Dibujo, Animacion 2D"></a>
              <hr>
              <p>Sabemos que a todos le gusta el futbol, pero no a todos les apaciona como a nosotros, unetenos al club de futbol. Consulta cualquier club que te interese en el apartado de actividades o talleres
              </p>
              <a href="tallerfutbol.php"><img src="noticias/futbol.jpg" alt="Futbol"></a>
              <hr>

                
            </div>
        </div>
    </main>

    <footer>
      <div>
        <p>Social Service Web Information ©</p>
      </div>
        <div>
            <a href="https://www.facebook.com/SSWebInfo"><img src="img/facebooklogo.png" alt="Logo facebook png"></a>
            
            <a href="https://teams.microsoft.com/l/team/19%3ax5JIAMhbrzFpOxuxJ06XdOBFpl_emGKVu0Wg-yVIVLc1%40thread.tacv2/conversations?groupId=9df34556-0e2f-420e-bf66-385fd1b1067a&tenantId=41cf737b-c815-404a-9895-ea78fa37944c"><img src="img/teamslogo22.png" alt="Logo twitter png"></a>
            <a href="https://api.whatsapp.com/qr/XKXR7P4LX3RCE1"><img src="img/whatsapplogo.png" alt="Logo whatsapp png"></a>
        </div>
    </footer>
  </div>



    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>