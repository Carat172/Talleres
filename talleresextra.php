<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="witdth-device-width, initial-scale-1.0">
    <title>Football</title>
    <link rel="stylesheet"  href="css/min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head> 
<body>
<?php include('nav.html')?>
<br>
    <section class="header">
        <h1>Football Club</h1>
        <h4>Vive el futbol con toda tu pasion</h4>
    </section>
    <hr>
    <section class="content-container">
        <div class="left-content">
            <h2>Club de Futbol</h2>
            <div class="articulo">
                <img src="img/LOGOFUT.jpeg" alt="">
                <p>Entrena en nuestro equipo ahora mismo!</p>
            </div>
            <h3>Entrena con nosotros</h3>
            <p>Tenemos como entrenador al Licenciado en Deportes Juan Ignacio de la Cruz el cual a dirijido a diferentes equipos de nivel Nacional como los Leones Negros de la Universidad de Guadalajara y que viene a nuestra Universidad a crear un equipo competitivo el cual llegue a nivel Nacional y generar una cuna para los equipos grandes que busquen jovenes talentos que puedan prosperar en este hermoso deporte.</p>
            <div class="otro-articulo">
                <h3>Ambicion</h3>
                <img src="img/balon.jpg" alt="">
                <p>La ambicion de este equipo sera ganar torneos a nivel Nacional entre Universidades grandes de Mexico.</p>
                
            </div>
        </div>
        <div class="right-content">
            <div class="btn-admin">
                <a  href="dbfutbol/admin-futbol.php">Administrar miembros</a>
            </div>
            <br>
        <div class="avatar-content">
            <img src="img/ninos.jpg" alt="">
            <p class = "author-caption">"No hay nada más peligroso que no arriesgarse", Pep Guardiola.</p>
        </div>
        <div class="newsletter">
            <h5>¿QUIERES UNIRTE A ESTE CLUB? MANDA TU SOLICITUD</h5>
            <form class="form" action="https://formspree.io/f/xbjwrbpj"
            method="POST">
                  <div class="divform">
                    <input type="text" name="Nombre" placeholder="Nombre:" required>
                    <input type="email" name="Correo" placeholder="Correo:" required>
                    <input type="text" name="Matricula" placeholder="Matricula:" required>
                    <input class="btn sub-btn" type="submit" value="Enviar">
                  </div>
                </form> 
        </div>
        <div class="newsletter">
            <h5>REGISTRATE PARA ADQUIRIR LA SUDADERA DEL EQUIPO</h5>
            <img src="img/sweter.png" alt="">
            <form class="form" action="https://formspree.io/f/xpzkgyze"
            method="POST">
                  <div class="divform">
                    <input type="text" name="Nombre" placeholder="Nombre:" required>
                    <input type="email" name="Correo" placeholder="Correo:" required>
                    <input type="text" name="Matricula" placeholder="Matricula:" required>
                    <input class="btn sub-btn" type="submit" value="Enviar">
                  </div>
                </form> 
        </div>
        <div class="popular-posts">
            <h5>BASES DEPORTIVAS</h5>
            <img src="img/prensa.jpg" alt="">
            <p class ="caption">Defensa colchonera de Diego Simeone</p>
            <img src="img/prensa2.jpg" alt="">
            <p class ="caption">Ataque vertical y mentalidad de Zinedine Zidane</p>  
        </div>
        </div>
    </section>


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


    <footer>
        Copyright reservado por Sebastian Mendoza
    </footer>


    <script id="dsq-count-scr" src="//sswi-1.disqus.com/count.js" async></script>
</body>
</html>  