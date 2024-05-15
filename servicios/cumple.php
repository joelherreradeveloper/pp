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
        <div class="portada-cumple">
            <h2 class="titulo-portada">
                &nbsp;&nbsp;Sesion <br>
                Cumple
            </h2>
        </div>

        <div class="descripcion">
            
            <p class="descripcion-texto">
                &nbsp;&nbsp;&nbsp;&nbsp;Estas fotos se realizan con motivo del próximo cumple de tu peque y es importante hacerlas con tiempo, se recomienda un mes antes ya que de esta forma podrán llegar con las fotos para el día del cumple.
                La sesión podrá realizarse
                en exterior en parque
                 (sin temática)
                o en interior
                en nuestro estudio
                 con la temática que elijas. <br>
                 &nbsp;&nbsp;&nbsp;&nbsp;incluye vestuario dependiendo de la edad
                 y  temática elegida
                También tendrán fotos con papas y hermanitos si los tuviere.
                La sesión tiene una duración de 40 minutos.
                incluye 25 fotos digitales
                
            </p>
        
        </div>




        <div>
            <h1>Galeria de imagenes</h1>
            <hr>
            <div class="galeria">
                <a href="#image1"><img src="./img/imgc1.jpg" alt=""></a>
                <a href="#image2"><img src="./img/imgc2.jpg" alt=""></a>
                <a href="#image3"><img src="./img/imgc3.jpg" alt=""></a>
                <a href="#image4"><img src="./img/imgc4.jpg" alt=""></a>
                <a href="#image5"><img src="./img/imgc5.jpg" alt=""></a>
            </div>
        </div>


        <article class="light-box" id="image1">
            <a href="#image5" class="next"><</a>
            <img src="./img/imgc1.jpg" alt="">
            <a href="#image2" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <article class="light-box" id="image2">
            <a href="#image1" class="next"><</a>
            <img src="./img/imgc2.jpg" alt="">
            <a href="#image3" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <article class="light-box" id="image3">
            <a href="#image2" class="next"><</a>
            <img src="./img/imgc3.jpg" alt="">
            <a href="#image4" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <article class="light-box" id="image4">
            <a href="#image3" class="next"><</a>
            <img src="./img/imgc4.jpg" alt="">
            <a href="#image5" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <article class="light-box" id="image5">
            <a href="#image4" class="next"><</a>
            <img src="./img/imgc5.jpg" alt="">
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