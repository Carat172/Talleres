<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/home.png">
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Club de futbol</title>
</head>
<body>
    <?php include('nav.html')?>
    <br><br>
    <div class="todo">
        <main class="container">
            <div class="row">
                <div class="col-md-12" id="head">
                    <h1>Football Club</h1>
                    <h4>Vive el futbol con toda tu pasion</h4>
                </div>
                <hr>
                <div class="col-md-9">
                    <div>
                        <h2>Club de Futbol</h2>
                    <img src="img/LOGOFUT.jpeg" alt="">
                    <h3>Entrena con nosotros</h3>
            <p>Tenemos como entrenador al Licenciado en Deportes Juan Ignacio de la Cruz el cual a dirijido a diferentes equipos de nivel Nacional como los Leones Negros de la Universidad de Guadalajara y que viene a nuestra Universidad a crear un equipo competitivo el cual llegue a nivel Nacional y generar una cuna para los equipos grandes que busquen jovenes talentos que puedan prosperar en este hermoso deporte.</p>
                    </div>

            <div>
                <h3>Ambicion</h3>
                <img src="img/balon.jpg" alt="">
                <p>La ambicion de este equipo sera ganar torneos a nivel Nacional entre Universidades grandes de Mexico.</p>
            </div>
                </div>

                <div class="col-md-3">
                    <div class="div-admin">
                        <a  href="dbfutbol/admin-futbol.php">Administrar miembros</a>
                    </div>
                    <div>
                        <img src="img/ninos.jpg" alt="">
                        <p>"No hay nada más peligroso que no arriesgarse", Pep Guardiola.</p>
                    </div>

                    <div class="div-form">
                        <h5>¿QUIERES UNIRTE A ESTE CLUB? MANDA TU SOLICITUD</h5>
            <form class="form" action="https://formspree.io/f/xbjwrbpj"
            method="POST">
                  <div class="divform">
                    <input type="text" name="Nombre" placeholder="Nombre:" required>
                    <input type="email" name="Correo" placeholder="Correo:" required>
                    <input type="text" name="Matricula" placeholder="Matricula:" required>
                    <input class="boton" type="submit" value="Enviar">
                  </div>
                </form> 
                    </div>

                    <div class="div-form">
                        <h5>REGISTRATE PARA ADQUIRIR LA SUDADERA DEL EQUIPO</h5>
            <img src="img/sweter.png" alt="">
            <form class="form" action="https://formspree.io/f/xbjwrbpj"
            method="POST">
                  <div class="divform">
                    <input type="text" name="Nombre" placeholder="Nombre:" required>
                    <input type="email" name="Correo" placeholder="Correo:" required>
                    <input type="text" name="Matricula" placeholder="Matricula:" required>
                    <input class="boton" type="submit" value="Enviar">
                  </div>
                </form>
                    </div>

                    <div>
                        <h5>BASES DEPORTIVAS</h5>
            <img src="img/prensa.jpg" alt="">
            <p class ="caption">Defensa colchonera de Diego Simeone</p>
            <img src="img/prensa2.jpg" alt="">
            <p class ="caption">Ataque vertical y mentalidad de Zinedine Zidane</p>
                    </div>



                </div>

                <div class="col-md-12">
                    <div id="disqus_thread">
                        <div class="disqus-size">
                            <script>
                                (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document, s = d.createElement('script');
                                s.src = 'https://sswi-1.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                                })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                        </div>
                </div>

            </div>

        </main>
    </div>
</body>
</html>