<?php session_start();
    include('connection.php');

    if(!isset($_SESSION['firstname']))
    {
        header("location:../Login/login.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/crud1.css">
    <link rel="shortcut icon" href="img/home.png">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <title>Administrar miembros</title>
</head>
<body>
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-4">
                <?php if(isset($_SESSION['message'])){?>

                <div class="alert fade show alert-dismissible alert-success" role="alert">
                    <?= $_SESSION['message']; ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php session_unset(); }?>
                <div class="formulario">
                    <form action="save.php" method="POST">
                        <div>
                            <p>AGREGAR ALUMNO</p>
                        </div>
                        <div>
                            <input type="text" name="matricula" placeholder="Matricula" autofocus required>
                        </div>
                        <div>
                            <input type="text" name="nombre" placeholder="Nombre" autofocus required>
                        </div>
                        <div>
                            <input type="text" name="correo" placeholder="Correo" autofocus required>
                        </div>
                           
                        <input type="submit" name="save_data" value="Agregar">

                    </form>
                    <div>
                        <br>
                        <a href="../tallerajedrez.php">Regresar</a><br>
                        <a href="../Login/logout.php">Cerrar sesion</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Matricula</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM ajedrez";
                        
                        $get_data = mysqli_query($conn, $sql);

                        while($row = mysqli_fetch_array($get_data)){ ?>

                            <tr>
                                <td><?php echo $row['matricula'];?></td>
                                <td><?php echo $row['nombre'];?></td>
                                <td><?php echo $row['correo'];?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['matricula'];?>">Editar</a>
                                    <a href="delete.php?id=<?php echo $row['matricula'];?>">Eliminar</a>
                                </td>
                            </tr>
                       <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>