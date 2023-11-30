<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/home.png">
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Club de ajedrez</title>
</head>
<body>
    <?php include('nav.html')?>
    <br><br>
    <div class="todo">
        <main class="container">
            <div class="row">
                <div class="col-md-12" id="head">
                <h1>Club de Ajedrez</h1>
                <h4>Demuestrar tus habilidades y razonamiento</h4>
                </div>
                <hr>
                <div class="col-md-9">
                    <div>
                    <h2>Club de Ajedrez</h2>
                    <img src="img/LOGOAJE.jpeg" alt="">
                    <h3>Tienes el suficiente IQ?</h3>
            <p>Tienes la vision necesaria para jugar ajedrez? si no, no te procupes con nostros aprenderas las bases de un jugador de este hermoso juego donde las mentes mas agiles son las triunfadoras, unete a nosotros ya que contamos con la ayuda del Maestro Anatoly Karpov que se conecta con nostros para compartir su experiencia como campeon del mundo.</p>
                    </div>

            <div>
            <h3>Entender las aperturas</h3>
                <img src="img/ajedrez2.jpg" alt="">
                <p> La apertura son las jugadas iniciales. Partiendo de la posición inicial, se han clasificado las distintas posibilidades que tienen cada uno de los bandos para conducir sus piezas. Se ha estudiado cada movimiento de las blancas, tras ése, cada posible respuesta de las negras, tras ése otra vez el de las blancas y así sucesivamente. En algunas líneas se han estudiado hasta la jugada 20 o más, se han clasificado, y están disponibles los análisis en los libros de aperturas de ajedrez.</p>
            </div>
                </div>

                <div class="col-md-3">
                    <div class="div-admin">
                    <a  href="dbajedrez/admin-ajedrez.php">Administrar miembros</a>
                    </div>
                    <div>
                    <img src="img/chessT.png" alt="">
            <p class = "author-caption">De pocas partidas he aprendido tanto como de la mayoría de mis derrotas.</p>
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
            <img src="img/hoodiechess.PNG" alt="">
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
                    <h5>POPULAR POSTS</h5>
            <img src="img/magnus.jpg" alt="">
            <p class ="caption">Magnus Carlsen</p>
            <img src="img/FabianoCaruana.jpeg" alt="">
            <p class ="caption">Fabiano Caruana</p>  
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