<?php

include 'conexion_be.php';

$user = $_POST ['user'];
$contrasena= $_POST ['contrasena'];



//encriptado de contrasena
$contrasena=hash('sha512',$contrasena);



$query = "INSERT INTO usuarios(user,contrasena)
values('$user','$contrasena')";

//verificar que usuario no se repita
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE user= '$user'");

if(empty(trim($_POST["user"]))){
    echo '
    <script>
        alert("Porfavor ingrese usuario");
        window.location = "../index.php";
    </script>
    ';
    exit();
} 
else if(mysqli_num_rows($verificar_usuario) > 0) {
echo '
    <script>
        alert("Este usuario ya esta registrado, intenta con otro");
        window.location = "../index.php";
    </script>

';
exit();
}

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar)
{
    echo '
    <script>
    alert("usuario almacenado exitosamente");
    window.location = "../index.php";
    </script>
    ';
}
else
{
    echo '
    <script>
    alert("intentalo de nuevo, usuario no almacenado");
    window.location = "../index.php";
    </script>
    ';
}

mysqli_close($conexion);
?>