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
        <div class="portada-familiar">
            <h2 class="titulo-portada">
                &nbsp;&nbsp;Sesion <br>
                Familiar
            </h2>
        </div>

        <div class="descripcion">
            
            <p class="descripcion-texto">
                &nbsp;&nbsp;&nbsp;&nbsp;Esta sesión
                puede realizarse en interior en nuestro estudio o en exterior en parque a coordinar. <br>
                &nbsp;&nbsp;&nbsp;&nbsp;puede participar la familia central pero también podemos hacer participar abuelos en caso de que así lo deseen en parque. <br>
                &nbsp;&nbsp;&nbsp;&nbsp;la sesión tiene una duración de 40 minutos
                incluye 20 fotos digitales.
                
            </p>
        
        </div>



        <div>
            <h1>Galeria de imagenes</h1>
            <hr>
            <div class="galeria">
                <a href="#image1"><img src="./img/imgf1.jpg" alt=""></a>
                <a href="#image2"><img src="./img/imgf2.jpg" alt=""></a>
                <a href="#image3"><img src="./img/imgf3.jpg" alt=""></a>
                <a href="#image4"><img src="./img/imgf4.jpg" alt=""></a>
                <a href="#image5"><img src="./img/imgf5.jpg" alt=""></a>
            </div>
        </div>


        <article class="light-box" id="image1">
            <a href="#image5" class="next"><</a>
            <img src="./img/imgf1.jpg" alt="">
            <a href="#image2" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <article class="light-box" id="image2">
            <a href="#image1" class="next"><</a>
            <img src="./img/imgf2.jpg" alt="">
            <a href="#image3" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <article class="light-box" id="image3">
            <a href="#image2" class="next"><</a>
            <img src="./img/imgf3.jpg" alt="">
            <a href="#image4" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <article class="light-box" id="image4">
            <a href="#image3" class="next"><</a>
            <img src="./img/imgf4.jpg" alt="">
            <a href="#image5" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <article class="light-box" id="image5">
            <a href="#image4" class="next"><</a>
            <img src="./img/imgf5.jpg" alt="">
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