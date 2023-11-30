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
        <h1>Taller de Canto</h1>
        <h4>Has del canto su vida, demuestra tu pasion</h4>
    </section>
    <hr>
    <section class="content-container">
        <div class="left-content">
            <h2>Taller de Canto</h2>
            <div class="articulo">
                <img src="img/LOGOCANTO.jpeg" alt="">
                
            </div>
            <h3>Porque elegir este taller?</h3>
            <p>Si deseas llegar a un nivel de canto alto o simplemente aprender a cantar, unete! nosotros te ayudaremos a realizar ese maraviloso sueño de una vez por todas, aquellas personas que desearian cantar como Elvis Presly o cantar como Bad Bunny no se preocupen tenemos a los mejores maestros que conocen todos los generos musicales, solo es cuestion que te inscribas!</p>
            <div class="otro-articulo">
                <h3>Nuestras metas</h3>
                <img src="img/tallerCanto1.jpeg" alt="">
                <p>La meta de este taller es dar una escencia artistica a los alumnos, que se puedan desarrollar como personas mediante este hermoso arte del canto.</p>
                
            </div>
        </div>
        <div class="right-content">
        <div class="btn-admin">
                <a  href="dbcanto/admin-canto.php">Administrar miembros</a>
            </div>
            <br>
        <div class="avatar-content">
            <img src="img/canto1.jpg" alt="">
            <p class = "author-caption">Siempre fui esa oveja negra que supo esquivar las piedras que le tiraban a dar, y entre más pasan los años más me aparto del rebaño porque no sé adonde va.</p>
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
            <h5>REGISTRATE PARA ADQUIRIR LA SUDADERA DEL TALLER</h5>
            <img src="img/HOODIECANTO.PNG" alt="">
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
            <h5>REFERENCIAS MUSICALES</h5>
            <img src="img/taylor.jpg" alt="">
            <p class ="caption">Canta como Taylor</p>
            <img src="img/gato.jpg" alt="">
            <p class ="caption">Alcanza las notas de Katy</p>  
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