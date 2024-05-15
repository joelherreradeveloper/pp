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
        <div class="portada-newborn">
            <h2 class="titulo-portada">
                &nbsp;&nbsp;Sesion <br>
                Newborn
            </h2>
        </div>

        <div class="descripcion">
            
            <p class="descripcion-texto">
                &nbsp;&nbsp;&nbsp;&nbsp;La sesión newborn se realiza los primeros 20 días del bebé ya que es cuando mejor duermen y se pueden fotografiar mejor; en algunas ocasiones las realizamos hasta el primer mes de vida....
                se hacen en interior en nuestro estudio ambientado para que tu bebe este cómodo. <br>
                &nbsp;&nbsp;&nbsp;&nbsp;La sesión puede tener una duración de 1 a 3 hs... esto va a depender de como este tu bebe ese día; se incluyen 2 cambios de vestuario para tu bebe (podes utilizar el nuestro o traer propio). <br>
                &nbsp;&nbsp;&nbsp;&nbsp;De la sesión participa mamá, papá y hermanitos si los tuviere.
                El bebe posa dormido, pero hay ocasiones en las que no quieren dormir.
                se incluyen 20 fotos digitales
        
            </p>
        
        </div>

        <div>
            <h1>Galeria de imagenes</h1>
            <hr>
            <div class="galeria">
                <a href="#image1"><img src="./img/img1.jpg" alt=""></a>
                <a href="#image2"><img src="./img/img2.jpg" alt=""></a>
                <a href="#image3"><img src="./img/img3.jpg" alt=""></a>
                <a href="#image4"><img src="./img/img4.jpg" alt=""></a>
                <a href="#image5"><img src="./img/img5.jpg" alt=""></a>
            </div>
        </div>


        <article class="light-box" id="image1">
            <a href="#image5" class="next"><</a>
            <img src="./img/img1.jpg" alt="">
            <a href="#image2" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <article class="light-box" id="image2">
            <a href="#image1" class="next"><</a>
            <img src="./img/img2.jpg" alt="">
            <a href="#image3" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <article class="light-box" id="image3">
            <a href="#image2" class="next"><</a>
            <img src="./img/img3.jpg" alt="">
            <a href="#image4" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <article class="light-box" id="image4">
            <a href="#image3" class="next"><</a>
            <img src="./img/img4.jpg" alt="">
            <a href="#image5" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <article class="light-box" id="image5">
            <a href="#image4" class="next"><</a>
            <img src="./img/img5.jpg" alt="">
            <a href="#image1" class="next">></a>
            <a href="#" class="close">x</a>
        </article>
        <!--<div class="galeria">
        <h1>Galeria Efecto Overlay</h1>
        <div class="linea"></div>
        <div class="contenedor-imagenes">
            <div class="imagen">
                <img src="./img/img1.jpg" alt="">
                <div class="overlay">
                    <h2>Suscribete</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="./img/img2.jpg" alt="">
                <div class="overlay">
                    <h2>Suscribete</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="./img/img3.jpg" alt="">
                <div class="overlay">
                    <h2>Suscribete</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="./img/img4.jpg"alt="">
                <div class="overlay">
                    <h2>Suscribete</h2>
                </div>
            </div>
        </div>-->
    </div>


    </section>
    <?php include("../footer.php"); ?>

    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="contactanos.js"></script>
    <script src="https://kit.fontawesome.com/9b79d2379b.js" crossorigin="anonymous"></script>
    
</body>
</html>