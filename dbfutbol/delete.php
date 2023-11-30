<?php

    include('connection.php');

if(isset($_GET['id'])){

    $matricula = $_GET['id'];

    $sql = "DELETE FROM futbol WHERE matricula = $matricula";

    $delete = mysqli_query($conn, $sql);

    if(!$delete){
        die("SQL error");
    }
    

    header("Location: admin-futbol.php");
}
?>