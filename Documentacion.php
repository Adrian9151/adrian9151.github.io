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
    <title>Documentacion MIC</title>
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/41bcae2ae3.js " crossorigin="anonymus"></script>
    

</head>
<body id="body">

   <header>

    
    <div class="icon-menu">
        <i class='bx bx-menu' id="btn-open"></i>
    </div>
    
   </header> 

   <div class="menu-side" id="menu-side">
    <div class="name-page">
        <a href="./home.php">
            <img src="./FLEXLOGO.png" width="32px" alt="">
        </a>
        <h4>Maintenance Information Center (MIC)</h4>
    </div>

    <div class="options-menu">

        <a href="./home.php">
         <div class="option">
            <i class="bx bx-home" title="Inicio"></i>
            <h4>Inicio</h4>
         </div>
        </a>

        <a href="#" class="selected">
            <div class="option">
               <i class="bx bx-book-open" title="Documentacion"></i>
               <h4>Documentacion</h4>
            </div>
        </a>   

        <a href="#">
            <div class="option">
               <i class="bx bx-microchip" title="Spare Parts"></i>
               <h4>Spare Parts</h4>
            </div>
        </a>   

        <a href="#">
            <div class="option">
               <i class="bx bx-pie-chart" title="D.T."></i>
               <h4>D.T.</h4>
            </div>
        </a>   

        <a href="#">
            <div class="option">
               <i class="bx bx-rocket" title="Proyectos"></i>
               <h4>Proyectos</h4>
            </div>
        </a>   

        <a href="#">
            <div class="option">
               <i class="bx bx-cart" title="Requerimientos"></i>
               <h4>Requerimientos</h4>
            </div>
        </a>   

        <a href="#">
            <div class="option">
               <i class="bx bx-play-circle" title="Media"></i>
               <h4>Media</h4>
            </div>
        </a>   

        <a href="#">
            <div class="option">
               <i class="bx bx-microphone" title="Voz del Tecnico"></i>
               <h4>Voz del Tecnico</h4>
            </div>
        </a>   

        <a href="php/cerrar_sesion.php">
            <div class="option">
               <i class="bx bx-log-out" title="Log Out"></i>
               <h4>Log Out</h4>
            </div>
        </a>   

        

    </div>
   </div>

<main> 
  
  <!--<h1> MIC Documentacion</h1>-->
   <div class="container__box">
    <a href="./Documentacion_autosub.php">
    <div class="box">
        <img src="img/Autosub.png" width="90px" alt="" srcset="">
        <h5>Autosub</h5>
        <h4>Autosub</h4>
    </div></a>
    <a href="./Documentacion_lpkf.php">
    <div class="box">
        <img src="img/Lpkf.png" width="70px" alt="" srcset="">
        <h5>Lpkf</h5>
        <h4>Lpkf</h4>
    </div></a>
    <a href="#">
    <div class="box">
        <img src="./img/ginolis1.png" width="150px" alt="">
        <h5>Ginolis 1ra <br> Generacion</h5>
        <h4>Ginolis 1ra <br> Generacion</h4>
    </div></a>
    <a href="#">
    <div class="box">
        <img src="./img/ginolis1.png" width="150px" alt="">
       <h5>Ginolis 2da <br> Generacion</h5>
        <h4>Ginolis 2da <br> Generacion</h4>
    </div></a>
    <a href="./Documentacion_cts.php">
    <div class="box">
        <img src="./img/cts.png" width="100px" alt="">
       <br> <h5>Cts</h5>
        <br><h4>Cts</h4>
    </div></a>
    <a href="./Documentacion_multivac.php">
    <div class="box">
        <img src="./img/Multivac.png" width="110" alt="" srcset="">
        <h5>Multivac</h5>
        <h4>Multivac</h4>
    </div></a>
    
   </div>      
        
    </main>
	<script src="js/script.js"></script>
</body>
</html>