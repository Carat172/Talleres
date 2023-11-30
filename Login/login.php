<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/home.png">
    <link rel="stylesheet" href="login1.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Login</title>
</head>
<body>
    <div class="container">
       <div class="row">
       <div class="col-md-12" id="div-form">
        <form action="val.php" method="POST">
        <h1> INICIAR SESION </h1>
        <p>User:</p> 
        <input type="text"  placeholder="Enter username" name="firstname" required>
        <p>Password:</p> 
        <input class="passinput" type="password"  placeholder="Enter password" name="password" required>
        <input class="boton" type="submit" value= "Entrar">
    </form>
</div>
       </div>
    </div>
    
</body>


</html>