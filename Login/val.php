<?php

error_reporting(0);

$firstname = $_POST['firstname'];
$password = $_POST['password'];

include('connection.php');

$sql = " SELECT * FROM users WHERE firstname = '$firstname' AND password ='$password'";

$res = mysqli_query($conn, $sql );

$row = mysqli_fetch_array($res);

if($row['id_user_level'] == 1) 
{
    session_start();

    $_SESSION['firstname'] = $row['firstname'];

    header("location:../dbfutbol/admin-futbol.php");
} 
else if($row['id_user_level'] == 2 )
{
    session_start();

    $_SESSION['firstname'] = $row['firstname'];

    header("location:../dbajedrez/admin-ajedrez.php");
}
else if($row['id_user_level'] == 3 )
{
    session_start();

    $_SESSION['firstname'] = $row['firstname'];

    header("location:../dbcanto/admin-canto.php");
}

else if($row['id_user_level'] == 4 )
{
    session_start();

    $_SESSION['firstname'] = $row['firstname'];

    header("location:../dbanimacion/admin-animacion.php");
}


else 
{
    
   ?>
    <div class="bg-info p-5">

    
    
    <center> Authentication error, try again </center >
    
    </div>

    <?php include("login.php");

    ?>

    <?php
}

    mysqli_free_result($res);

    mysqli_close($conn);

?>
