<?php 

    session_start();
    if(!isset($_SESSION['usuario']))
    {
        echo'
        <script>
        alert("Inicie sesion");
        window.location= "index.php";
        </script>
        ';
        //header("location: login.php");
        session_destroy();
        die();
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIC LOGIN</title>
</head>
<body>
    <h1>LOGIN MIC</h1>
    <form action="usuarios.php" method="POST">
        <label for="User">Usuario</label>
        <input type="text" name="User" id="User">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <button>Ingresar</button>

    </form>
</body>
</html>