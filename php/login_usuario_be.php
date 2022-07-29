<?php
    session_start();

    include'conexion_be.php';

    $user= $_POST['user'];
    $contrasena= $_POST['contrasena'];
    

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE user= '$user' 
    and contrasena= '$contrasena'");

    if(mysqli_num_rows($validar_login) >0){
        $_SESSION['usuario'] = $user;
        header("location: ../home.php");
        exit();
    }
    else{
        echo '
        <script>
        alert("Usuario no existe o datos incorrectos,verifica e intenta de nuevo");
        window.location= "../index.php";
        </script>
        ';
        exit();
    }



?>