<?php

session_start();

if(!isset($_SESSION['firstname']))
{
    header("location:login.php");
    die();
}
else
{
echo  '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Login</title>
</head>
<body>
    
<h1>Hello admin</h1>
<h2>'.$_SESSION['firstname'].'</h2>

    <a href="logout.php" class="btn btn-success">Log out</a>

</body>
</html>';
}

?>