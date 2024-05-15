<?php

include("funciones.php");

$config = obtenerConfiguracion();



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="./estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Oleo+Script:wght@400;700&family=WindSong:wght@400;500&display=swap" rel="stylesheet">

</head>
<body>
    <?php include("header.php"); ?>

    <section>
        <div class="box-a">
            <div class="slider">
                    <ul>
                        <li>
                            <img src="imagenes/foto1.jpg" alt="">
                        </li>
                        <li>
                            <img src="imagenes/foto2.jpg" alt="" class="img-red">
                        </li>
                        <li>
                            <img src="imagenes/foto1.jpg" alt="" >
                        </li>
                        <li>
                            <img src="imagenes/foto3.jpg" alt="">

                        </li>
                    </ul>
            </div>
        </div>
        <hr>
        <div>
            <h3 class="indicador">Acerca de mi</h3>
            <div class="box-1-1">
                <p class="conocenos">
                    &nbsp;&nbsp;&nbsp;Hola mi nombre es Laura Araceli Herrera 
                    Fotografa Profecional , desde ya algunos años me especializo 
                    en convertir esos momentos mas especiales en momentos
                    inolvidables.
                </p>
            
                <img class="imagen-1" src="./imagenes/perfil2.webp" alt="">
            </div>
            <div class="box-2-2">
                <img class="imagen-2" src="./imagenes/perfil2.jpg" alt="">
                <p class="conocenos">&nbsp;&nbsp;&nbsp;   Pueden ver algunos de esos momentos inolvidables en la 
                    seccion de servicio donde se detalla cada tipo sesion con 
                    algunos de mis <br>
                    &nbsp;&nbsp;&nbsp;   Claro que cada cliente es una historia unica la cual me gusta 
                    reflejar en mis fotografias.
            </div>
        </div>
        <hr>
        <div class="cuadroref">
            <h3 class="indicador">Referencias</h3>
            <div class="cuadroref1">
                <div class="cuadroref1-1">
                    Ara hermoso trabajo como siempre..
                    una vez mas gracias por captar cada momento de nuestro bebe.. mas q felices.. 🥳​👏​🥰​
                </div>
                <div class="cuadroref1-2">
                    Besos miles SOS excelente y voy a recomendarte con mis contactos! Exitos
                </div>
            </div>

        </div>
        <hr>
        <div>
            <h3 class="indicador">Contacto</h3>
        </div>
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