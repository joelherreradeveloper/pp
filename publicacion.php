<?php

include("funciones.php");

$i = 0;

$config = obtenerConfiguracion();

$id_propiedad = $_GET['idPropiedad'];

$propiedad = obtenerPropiedadPorId($id_propiedad);

$restul_fotos_galeria = obtenerFotosGaleria($id_propiedad);

$link_comprar = obtenerEnlacePorIdPropiedad($id_propiedad);


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAAF</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Oleo+Script:wght@400;700&family=WindSong:wght@400;500&display=swap" rel="stylesheet">

</head>

<body class="page-publicacion">
    <div class="container">
        <?php include("header.php"); ?>

        <div class="contenedor-principal">
            <div class="info-publicacion">
                <section class="info-principal-galeria">
                    <div class="dato1">
                        
                        <span class="precio"><?php echo $propiedad['moneda']?> <?php echo number_format($propiedad['precio'], 0, '', '.') ?></span>
                    </div>
                    
                    <h4><?php echo $propiedad['titulo'] ?></h4>
                  
                    <div class="contenedor-imagen-principal">
                        <img src="<?php echo "admin/" . $propiedad['url_foto_principal'] ?>" alt="">
                    </div>
                    <div class="galeria" id="galeria">
                        <!-- Utilizo la variable i, para saber el numero de foto. Lo usare luego cuando tenga que recorrer las fotos una por una en el modal -->
                        <?php $i = 0; ?>
                        <?php while ($foto = mysqli_fetch_assoc($restul_fotos_galeria)) : ?>
                            <img src="<?php echo 'admin/fotos/' . $foto['id_propiedad'] . '/' . $foto['nombre_foto'] ?>" onclick="abrirModal(this,<?php echo $i ?>)" alt="s">
                            <?php $i++; ?>
                        <?php endwhile ?>
                    </div>
                </section>
                <section class="descripcion">
                    <h3>Descripción</h3>

                    <?php
                    //Cambiamos los saltos de linea que vienen en la descripcion
                    //por la etiqueta br para producir el salto de linea.
                    $descripcion = str_replace("\n", "<br>", $propiedad['descripcion']);
                    ?>

                    <div class="detalle"><?php echo $descripcion ?></div>

                    <a href="<?php echo $link_comprar; ?>" target="_blank"><button class="comprar-link">COMPRAR</button></a>
                </section>
                
            </div>
            

            <!-- The Modal para visualizar la galería de fotos -->
            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <img src="" alt="" id="fotoModal">
                    <hr>
                    <span class="close">&times;</span>
                    <span onclick="anterior()"><i class="fa-solid fa-angles-left"></i></span>
                    <span onclick="proxima()"><i class="fa-solid fa-angles-right"></i></span>
                </div>
            </div>
        </div>

    </div>

    <?php include("footer.php"); ?>

    <script src="script.js"></script>
</body>

</html>