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
    <title>Documentos Autosub</title>
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/estilosdocumentos.css">
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
  
        <right>
            <a  href="./Documentacion_autosub.php" class="volver"  >⏎ back</a> 
        </right>
        <br>
    <!--<a href="./Documentacion_autosub.php"> 
        <div class="regresar">
             <h5>⏎ Regresar</h5>
         </div>
    </a>-->
    <!--
        https://www.youtube.com/watch?v=_dLdrTU7pOQ   (link entre ahref y iframe)
        <object data="" class="pdfview" type="application/pdf"></object>
  <h1> MIC Documentacion</h1>
  <iframe width="100%" height="500" name="visualizador"></iframe>-->
  <iframe width="100%" height="400" name="visualizador" allowfullscreen></iframe>
  <br>
    
        <div class="container__box">
             <a href="autosub/Diagramas Electricos/18079-E-801.pdf" target="visualizador">
                    <div class="box">
                        <img src="./img/electrical_circuit.png" width="135px" alt="">
                     <h5>18079-E-801</h5>
                     <h4>18079-E-801</h4>
                 </div> </a>
                 <a href="autosub/Diagramas Electricos/18079-E-802.pdf" target="visualizador">   
                 <div class="box">
                    <img src="./img/electrical_circuit.png" width="135px" alt="">
                     <h5>18079-E-802</h5>
                     <h4>18079-E-802</h4>
                 </div></a>
                 <a href="autosub/Diagramas Electricos/18079-E-803.pdf" target="visualizador">
                 <div class="box">
                    <img src="./img/electrical_circuit.png" width="135px" alt="">
                     <h5>18079-E-803</h5>
                     <h4>18079-E-803</h4>
                 </div></a>
                 <a href="autosub/Diagramas Electricos/18079-E-804.pdf" target="visualizador">
                 <div class="box">
                    <img src="./img/electrical_circuit.png" width="135px" alt="">
                      <h5>18079-E-804</h5>
                      <h4>18079-E-804</h4>
                  </div></a>
                     <!--<a href="Autosub.html"><h4>⏎ Regresar</h4></a>-->
                     <a href="autosub/Diagramas Electricos/18079-E-805.pdf" target="visualizador">
                     <div class="box">
                        <img src="./img/electrical_circuit.png" width="135px" alt="">
                          <h5>18079-E-805</h5>
                          <h4>18079-E-805</h4>
                      </div></a>
                      <a href="autosub/Diagramas Electricos/18079-E-806.pdf" target="visualizador">
                      <div class="box">
                        <img src="./img/electrical_circuit.png" width="135px" alt="">
                          <h5>18079-E-806</h5>
                          <h4>18079-E-806</h4>
                      </div></a>
                      <a href="autosub/Diagramas Electricos/18079-E-807.pdf" target="visualizador"> 
                      <div class="box">
                        <img src="./img/electrical_circuit.png" width="135px" alt="">
                          <h5>18079-E-807</h5>
                          <h4>18079-E-807</h4>
                      </div></a>
                      <a href="autosub/Diagramas Electricos/18079-E-808.pdf" target="visualizador"> 
                      <div class="box">
                        <img src="./img/electrical_circuit.png" width="135px" alt="">
                          <h5>18079-E-808</h5>
                          <h4>18079-E-808</h4>
                      </div></a>
                      <a href="autosub/Diagramas Electricos/18079-E-809.pdf" target="visualizador"> 
                      <div class="box">
                        <img src="./img/electrical_circuit.png" width="135px" alt="">
                          <h5>18079-E-809</h5>
                          <h4>18079-E-809</h4>
                      </div></a>
                      <a href="autosub/Diagramas Electricos/18079-E-810.pdf" target="visualizador"> 
                      <div class="box">
                        <img src="./img/electrical_circuit.png" width="135px" alt="">
                          <h5>18079-E-810</h5>
                          <h4>18079-E-810</h4>
                      </div></a>
                      
                      <a href="autosub/Diagramas Electricos/18079-E-811.pdf" target="visualizador"> 
                      <div class="box">
                        <img src="./img/electrical_circuit.png" width="135px" alt="">
                          <h5>18079-E-811</h5>
                          <h4>18079-E-811</h4>
                      </div></a>
                      <a href="autosub/Diagramas Electricos/18079-E-812.pdf" target="visualizador"> 
                         <div class="box">
                            <img src="./img/electrical_circuit.png" width="135px" alt="">
                          <h5>18079-E-812</h5>
                          <h4>18079-E-812</h4>
                      </div></a>
                     <a href="autosub/Diagramas Electricos/18079-E-813.pdf" target="visualizador"> 
                      <div class="box">
                        <img src="./img/electrical_circuit.png" width="135px" alt="">
                          <h5>18079-E-813</h5>
                          <h4>18079-E-813</h4>
                      </div></a>
                      <a href="autosub/Diagramas Electricos/18079-E-814.pdf" target="visualizador"> 
                      <div class="box">
                        <img src="./img/electrical_circuit.png" width="135px" alt="">
                          <h5>18079-E-814</h5>
                          <h4>18079-E-814</h4>
                      </div></a>
                     <a href="autosub/Diagramas Electricos/18079-E-815.pdf" target="visualizador">  
                      <div class="box">
                        <img src="./img/electrical_circuit.png" width="135px" alt="">
                          <h5>18079-E-815</h5>
                          <h4>18079-E-815</h4>
                      </div></a>
                      <a href="autosub/Diagramas Electricos/18079-E-816.pdf" target="visualizador"> 
                      <div class="box">
                        <img src="./img/electrical_circuit.png" width="135px" alt="">
                          <h5>18079-E-816</h5>
                          <h4>18079-E-816</h4>
                      </div></a>
                      <a href="autosub/Diagramas Electricos/18079-E-817.pdf" target="visualizador"> 
                      <div class="box">
                        <img src="./img/electrical_circuit.png" width="135px" alt="">
                          <h5>18079-E-817</h5>
                          <h4>18079-E-817</h4>
                      </div></a>
                      <a href="autosub/Diagramas Electricos/18079-E-818.pdf" target="visualizador"> 
                      <div class="box">
                        <img src="./img/electrical_circuit.png" width="135px" alt="">
                          <h5>18079-E-818</h5>
                          <h4>18079-E-818</h4>
                      </div></a>
                      <a href="autosub/Diagramas Electricos/18079-E-819.pdf" target="visualizador">  
                      <div class="box">
                        <img src="./img/electrical_circuit.png" width="135px" alt="">
                          <h5>18079-E-819</h5>
                          <h4>18079-E-819</h4>
                      </div></a>
                     <a href="autosub/Diagramas Electricos/18079-E-820.pdf" target="visualizador">
                     <div class="box">
                        <img src="./img/electrical_circuit.png" width="135px" alt="">
                          <h5>18079-E-820</h5>
                          <h4>18079-E-820</h4>
                      </div></a>
                      <a href="autosub/Diagramas Electricos/18079-E-821.pdf" target="visualizador"> 
                      <div class="box">
                        <img src="./img/electrical_circuit.png" width="135px" alt="">
                          <h5>18079-E-821</h5>
                          <h4>18079-E-821</h4>
                      </div></a> 
                      <br> <br>
            
                 
         </div> 
    
    </main>
	<script src="js/script.js"></script>
</body>
</html>