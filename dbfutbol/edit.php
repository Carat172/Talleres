<?php 

    include('connection.php');

    if(isset($_GET['id'])){

        $id = $_GET['id'];

    
        $sql = "SELECT * FROM futbol WHERE matricula = $id";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res) == 1){

            $row = mysqli_fetch_array($res);

            $matricula = $row['matricula'];
            $nombre = $row['nombre'];
            $correo = $row['correo'];
        }

        if(isset($_POST['update'])){
            $id = $_GET['id'];

            $matricula = $_POST['matricula'];
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];

            $sql = "UPDATE futbol SET matricula = '$matricula', nombre = '$nombre', correo = '$correo' WHERE matricula = $id";

            mysqli_query($conn,$sql);

            $_SESSION['message'] = "Datos actualizados correctamente";

            header('location: admin-futbol.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/crud1.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <script src="js/bootstrap.min.js"></script>
    <title>CRUD Example</title>
</head>
<body>

    <div class="container pt-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="form-edit">
                    <div>
                        <p>INGRESAR DATOS ACTUALIZADOS</p>
                    </div>
                    <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div>
                            <input type="text" name="matricula" placeholder="Matricula" required autofocus value="<?php echo $matricula;?>">
                        </div>
                        <div>
                            <input type="text" name="nombre" placeholder="Nombre" required autofocus value="<?php echo $nombre;?>">
                        </div>
                        <div>
                            <input type="text" name="correo" placeholder="Correo" required autofocus value="<?php echo $correo;?>">
                        </div>
                        <button name="update">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>