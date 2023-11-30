<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Sign up</title>
</head>
<body>
    <form action="val.php" method="POST">
    <div id=signup> 

        <h1> Sign up </h1>
        <p>Firstname:</p> <input type="text"  placeholder="Enter firstname" name="firstname">
        <p>Lastname:</p> <input type="text"  placeholder="Enter lastname" name="lastname">
        <p>school enrollment:</p> <input type="text"  placeholder="Enter enrollment" name="matricula">
        <p>Password:</p> <input type="password"  placeholder="Enter password" name="password">
        <p>Confirm password:</p> <input type="password"  placeholder="Repeat password" name="passwordc">
        <p></p>
        <input type="submit" value= "Sign up">
        <p></p>
        <a href="login.php"> Log in </a>

    </div>

    </form>

</body>


</html>