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
    <title>Documentacion CTS</title>
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

        <a href="./Documentacion.php" class="selected">
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

        <a href="#">
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
  

   <div class="container__box">
    <a href="#">
    <div class="box">
        <img src="./img/manual2.png" width="130px" alt="" srcset="">
        <h5>Manuales</h5>
        <h4>Manuales</h4>
    </div></a>

    <a href="./diagramas_electricos_cts.php">
    <div class="box">
        <img src="./img/electrical_circuit.png" width="135px" alt="">    
        <h5>Diagramas <br> Electricos</h5>
        <h4>Diagramas <br> Electricos</h4>
    </div></a>
    <a href="diagramas_neumaticos_cts.php">
        <div class="box">
        <img src="./img/piston.png" width="120" alt="" srcset="">
        <br><br><br><h5>Diagramas <br> Neumaticos</h5>
        <h4>Diagramas <br> Neumaticos</h4>
    </div></a>
   <!-- <a href="./Kst_autosub.php"></a>
    <div class="box">
        <img src="./img/KST.png" width="130px" alt="">
        <h5>KST</h5>
        <h4>KST</h4>
    </div></a>-->
    <a href="./mantenimiento_preventivo_cts.php"> <div class="box">
        <img src="./img/engranes.png" width="170" alt="" srcset="">
        <h5>MANTENIMIENTOS</h5>
        <h4>MANTENIMIENTOS</h4>
    </div></a>
    <a href="#"></a>
    <div class="box">
        <img src="./img/WI.png" width="150px" alt="">
        <h5>Work <br> Instruction</h5>
        <h4>Work <br> Instruction</h4>
    </div> 
    <!--<div class="box">
        <a href="./Documentacion.php"><i class="lni lni-exit"></i></a>
        <h5>Salida</h5>
        <h4>Salida</h4>
    </div> -->
   </div>      
        
    </main>
	<script src="js/script.js"></script>
</body>
</html>