<?php

include("funciones.php");

$config = obtenerConfiguracion();



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Oleo+Script:wght@400;700&family=WindSong:wght@400;500&display=swap" rel="stylesheet">

</head>
<body>
    <?php include("header.php"); ?>

    <section>
        <div class="section">
            <div class="box-1">
                <div class="whatsapp">
                    <p class="txtwhatsapp">Envieneos su consulta por Whatsapp</p>
                    <button class="buttonwhatsapp"><a href="https://wa.me/351xxxxxxx?text=hola escribi tu mensaje." class="awhatsapp">Enviar</a></button>
                </div>
                <div class="redes">
                    <p class="txtredes">Siganos en nuestras Redes</p>
                    <div class="iconosredes">
                        <a class="iconosredes" href="http://www.facebook.com/?locale=es_LA" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i></a>
                        <a class="iconosredes" href="http://" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
                        <a class="iconosredes" href="http://www.youtube.com/@PHONKONAUT" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                    
    
                </div>
            </div>
            <div class="box-2">
                <h2>Contacto por email!</h2>
                <form>
                    <div class="input-box1">
                        <!-- Seccion de nombre-->
                        <div class="input-field field">
                            <input type="text" placeholder="Nombre Completo" id="name" class="item" autocomplete="off">
                        <div class="error-txt">Ingresa tu nombre completo</div>
                        </div>
                        <!-- Seccion de email-->
                        <div class="input-field field">
                            <input type="text" placeholder="Tu Email" id="email" class="item" autocomplete="off">
                        <div class="error-txt email">Completa con tu email</div>
                        </div>
                    </div>
                    <div class="input-box2">
                        <!-- Seccion de numero de telefono-->
                        <div class="input-field field">
                            <input type="number" placeholder="Numero de Telefono" id="phone" class="item" autocomplete="off">
                        <div class="error-txt">Ingresa tu numero de contacto</div>
                        </div>
                        <!-- Seccion de asunto-->
                        <div class="input-field field">
                            <input type="text" placeholder="Asunto" id="subject" class="item" autocomplete="off">
                        <div class="error-txt">Ingresa un asunto</div>
                        </div>
                    </div>
                <div class="input-box3">
                    <!-- Seccion de texto-->
                    <div class="tectarea-field field">
                        <textarea name="" id="message"  placeholder="Mensaje" class="item" autocomplete="off"></textarea>
                    <div class="error-txt">Escribinos tu consulta</div>
                    </div>
                    <button type="submit">Enviar</button>
                </div>
                </form>
            </div>
        </div>
    </section>

    <?php include("footer.php"); ?>

    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="contactanos.js"></script>
    <script src="https://kit.fontawesome.com/9b79d2379b.js" crossorigin="anonymous"></script>
    
</body>
</html>