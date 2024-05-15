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
        <div class="portada-minibaby">
            <h2 class="titulo-portada">
                &nbsp;&nbsp;Sesion <br>
                Minibaby
            </h2>
        </div>

        <div class="descripcion">
            
            <p class="descripcion-texto">
                &nbsp;&nbsp;&nbsp;&nbsp;Esta sesión
                esta recomendada
                 para los bebes
                de 3 meses a 10 meses...
                se realiza en interior
                 en nuestro estudio
                 o en exterior en parque... <br>
                 &nbsp;&nbsp;&nbsp;&nbsp;incluye vestuario para el bebe y
                también fotos con los papis
                la duración de la sesión es de 40 minutos.
                incluye  20 fotos digitales              
            </p>
        
        </div>


        <div>
            <h1>Galeria de imagenes</h1>
            <hr>
            <div class="galeria">
                <a href="#image1"><img src="./img/imgmb1.jpg" alt=""></a>
                <a href="#image2"><img src="./img/imgmb2.jpg" alt=""></a>
                <a href="#image3"><img src="./img/imgmb3.jpg" alt=""></a>
                <a href="#image4"><img src="./img/imgmb4.jpg" alt=""></a>
                <a href="#image5"><img src="./img/imgmb5.jpg" alt=""></a>
            </div>
        </div>


        <article class="light-box" id="image1">
            <a href="#image5" class="next"><</a>
            <img src="./img/imgmb1.jpg" alt="">
            <a href="#image2" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <article class="light-box" id="image2">
            <a href="#image1" class="next"><</a>
            <img src="./img/imgmb2.jpg" alt="">
            <a href="#image3" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <article class="light-box" id="image3">
            <a href="#image2" class="next"><</a>
            <img src="./img/imgmb3.jpg" alt="">
            <a href="#image4" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <article class="light-box" id="image4">
            <a href="#image3" class="next"><</a>
            <img src="./img/imgmb4.jpg" alt="">
            <a href="#image5" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <article class="light-box" id="image5">
            <a href="#image4" class="next"><</a>
            <img src="./img/imgmb5.jpg" alt="">
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