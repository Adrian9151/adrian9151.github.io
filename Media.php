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
    <title>Media MIC</title>
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
        <i class="bx bx-user"></i>
        <h4>Maintenance Information Center (MIC)</h4>
    </div>

    <div class="options-menu">

        <a href="./index.html">
         <div class="option">
            <i class="bx bx-home" title="Inicio"></i>
            <h4>Inicio</h4>
         </div>
        </a>

        <a href="./Documentacion.html">
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
               <i class="bx bx-data" title="Proyectos"></i>
               <h4>Proyectos</h4>
            </div>
        </a>   

        <a href="#">
            <div class="option">
               <i class="bx bx-cart" title="Requerimientos"></i>
               <h4>Requerimientos</h4>
            </div>
        </a>   

        <a href="#" class="selected">
            <div class="option">
               <i class="bx bx-play-circle" title="Media"></i>
               <h4>Media</h4>
            </div>
        </a>   

        <a href="#">
            <div class="option">
               <i class="bx bx-microchip" title="Voz del Tecnico"></i>
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
  
   <h1></h1>      
        
    </main>
	<script src="js/script.js"></script>
</body>
</html>