<?php

include("../funciones.php");

$config = obtenerConfiguracion();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Oleo+Script:wght@400;700&family=WindSong:wght@400;500&display=swap" rel="stylesheet">


</head>
<body>
    
    <?php include("header_servicio.php"); ?>
    <section>
        <div class="portada-maternidad">
            <h2 class="titulo-portada">
                &nbsp;&nbsp;Sesion <br>
                Maternidad
            </h2>
        </div>

        <div class="descripcion">
            
            <p class="descripcion-texto">
                &nbsp;&nbsp;&nbsp;&nbsp;La sesion de embarazo 
                se realiza desde la semana 26 y preferiblemente hasta 
                la semana 34 en nuestro estudio o en exterior a convenir con la mamá.
                pueden utilizar nuestro vestuario o traer el propio. <br>
                &nbsp;&nbsp;&nbsp;&nbsp;La sesión tiene una duración de una hora e incluye dos cambios de vestuario.
                pueden participar de la sesión Papá y hermanitos si los tuviere; cualquier persona extra que necesiten en la sesión debe ser consultado con la fotografa.
                se incluyen 20 fotos digitales
           
            </p>
        
        </div>


        <div>
            <h1>Galeria de imagenes</h1>
            <hr>
            <div class="galeria">
                <a href="#image1"><img src="./img/imgm1.jpg" alt=""></a>
                <a href="#image2"><img src="./img/imgm2.jpg" alt=""></a>
                <a href="#image3"><img src="./img/imgm3.jpg" alt=""></a>
                <a href="#image4"><img src="./img/imgm4.jpg" alt=""></a>
                <a href="#image5"><img src="./img/imgm5.jpg" alt=""></a>
            </div>
        </div>


        <article class="light-box" id="image1">
            <a href="#image5" class="next"><</a>
            <img src="./img/imgm1.jpg" alt="">
            <a href="#image2" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <article class="light-box" id="image2">
            <a href="#image1" class="next"><</a>
            <img src="./img/imgm2.jpg" alt="">
            <a href="#image3" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <article class="light-box" id="image3">
            <a href="#image2" class="next"><</a>
            <img src="./img/imgm3.jpg" alt="">
            <a href="#image4" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <article class="light-box" id="image4">
            <a href="#image3" class="next"><</a>
            <img src="./img/imgm4.jpg" alt="">
            <a href="#image5" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <article class="light-box" id="image5">
            <a href="#image4" class="next"><</a>
            <img src="./img/imgm5.jpg" alt="">
            <a href="#image1" class="next">></a>
            <a href="#" class="close">x</a>
        </article>


    </section>
    <?php include("../footer.php"); ?>

    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="contactanos.js"></script>
    <script src="https://kit.fontawesome.com/9b79d2379b.js" crossorigin="anonymous"></script>
    
</body>
</html>