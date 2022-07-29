<?php
$error;

if(!empty($_POST['nickname']) && !empty($_POST['password']))
{
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    if($nickname == "usuario" && $password == "123"){
        $error = "OK";
        echo "Accedio";
        
    }
    else{
        $error = "incorrecto";
        header("Location: index.php?error=$error");
    }



}
else
{
    $error = "vacio";
    header("Location: index.php?error=$error");

}

