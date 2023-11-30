<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/home.png">
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Club de canto</title>
</head>
<body>
    <?php include('nav.html')?>
    <br><br>
    <div class="todo">
        <main class="container">
            <div class="row">
                <div class="col-md-12" id="head">
                <h1>Taller de Canto</h1>
                <h4>Has del canto su vida, demuestra tu pasion</h4>
                </div>
                <hr>
                <div class="col-md-9">
                    <div>
                    <h2>Taller de Canto</h2>
                    <img src="img/LOGOCANTO.jpeg" alt="">
                    <h3>Porque elegir este taller?</h3>
            <p>Si deseas llegar a un nivel de canto alto o simplemente aprender a cantar, unete! nosotros te ayudaremos a realizar ese maraviloso sueño de una vez por todas, aquellas personas que desearian cantar como Elvis Presly o cantar como Bad Bunny no se preocupen tenemos a los mejores maestros que conocen todos los generos musicales, solo es cuestion que te inscribas!</p>
                    </div>

            <div>
            <h3>Nuestras metas</h3>
                <img src="img/tallerCanto1.jpeg" alt="">
                <p>La meta de este taller es dar una escencia artistica a los alumnos, que se puedan desarrollar como personas mediante este hermoso arte del canto.</p>
            </div>
                </div>

                <div class="col-md-3">
                    <div class="div-admin">
                    <a  href="dbcanto/admin-canto.php">Administrar miembros</a>
                    </div>
                    <div>
                    <img src="img/canto1.jpg" alt="">
            <p class = "author-caption">Siempre fui esa oveja negra que supo esquivar las piedras que le tiraban a dar, y entre más pasan los años más me aparto del rebaño porque no sé adonde va.</p>
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
                    <h5>REGISTRATE PARA ADQUIRIR LA SUDADERA DEL TALLER</h5>
            <img src="img/HOODIECANTO.PNG" alt="">
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
                    <h5>REFERENCIAS MUSICALES</h5>
            <img src="img/taylor.jpg" alt="">
            <p class ="caption">Canta como Taylor</p>
            <img src="img/gato.jpg" alt="">
            <p class ="caption">Alcanza las notas de Katy</p>  
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