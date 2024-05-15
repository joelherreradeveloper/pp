<?php

include("../funciones.php");

$config = obtenerConfiguracion();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="./estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Oleo+Script:wght@400;700&family=WindSong:wght@400;500&display=swap" rel="stylesheet">

</head>
<body>
    <?php include("header_servicio.php"); ?>

    <section>
        <div class="box-1">
            <div class="box-1-1">
                <a href="maternidad.php">
                    <div class="warp-1">
                        <div class="warp-text">
                            <p>Sesion de maternidad</p>
                
                        </div>
                    </div>
                </a>
                
            </div>
            <div class="box-1-1">
                <a href="newborn.php">
                    <div class="warp-2">
                        <div class="warp-text">
                            <p>Sesion newborn</p>
                
                        </div>
                    </div>
                </a>
                
            </div>
            <div class="box-1-1">
                <a href="infantil.php">
                    <div class="warp-2-2">
                        <div class="warp-text">
                            <p>Sesion infantil</p>
                
                        </div>
                    </div>
                </a>
                
            </div>
        </div>
        <div class="box-2">
            <div class="box-2-2">
                <!--<img class="img" src="./imagenes/backend.webp" alt=""><h2>back-end</h2></img>
                <h2>back-end</h2>-->
                <a href="cumple.php">
                    <div class="warp-3">
                        <div class="warp-text">
                            <p>Sesion de cumple</p>
                
                        </div>
                    </div>
                </a>
                
            </div>
            <div class="box-2-2">
                <a href="minibaby.php">
                    <div class="warp-4">
                        <div class="warp-text">
                            <p>Sesion minibaby</p>
                
                        </div>
                    </div>
                </a>
                
            </div>

            <div class="box-2-2">
                <!--<img class="img" src="./imagenes/backend.webp" alt=""><h2>back-end</h2></img>
                <h2>back-end</h2>-->
                <a href="familiar.php">
                    <div class="warp-3-3">
                        <div class="warp-text">
                            <p>Sesion familiar</p>
                
                        </div>
                    </div>
                </a>
                
            </div>
        </div>
    </section>
    <?php include("../footer.php"); ?>

    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="contactanos.js"></script>
    <script src="https://kit.fontawesome.com/9b79d2379b.js" crossorigin="anonymous"></script>



    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-42WDY7884P"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-42WDY7884P');
    </script>
    
</body>
</html>