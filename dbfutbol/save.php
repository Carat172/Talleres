<?php

    include('connection.php');

if(isset($_POST['save_data'])){

    $matricula = $_POST['matricula'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];


    $sql = "INSERT INTO futbol(matricula, nombre, correo) VALUES ('$matricula', '$nombre','$correo')";

    $save = mysqli_query($conn, $sql);

    if(!$save){
        die("SQL error");
    }
    

    $_SESSION['message'] = "Alumno agregado correctamente";

    header("Location: admin-futbol.php");
}
?>