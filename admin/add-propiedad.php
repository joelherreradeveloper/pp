<?php




//nos conectamos a la base de datos
//include("conexion.php");






/******************************************************* */
//GUARDAMOS LA PROPIEDAD
if (isset($_POST['agregar'])) {
    //nos conectamos a la base de datos
    include("conexion.php");

    //tomamos los datos que vienen del formulario
    $titulo = $_POST['titulo'];
    //$comprar = $_POST['comprar'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $moneda = $_POST['moneda'];
    $link_comprar = $_POST['link_comprar'];
    $link_pdf = $_POST['link_pdf'];
    $url_foto_principal = "url";
    $url_galeria = "url";
    
    
    
    //armamos el query para insertar en la tabla propiedades
    $query = "INSERT INTO propiedades (id, fecha_alta, titulo,  descripcion, precio, moneda, link_comprar, link_pdf, url_foto_principal)
    VALUES (NULL,CURRENT_TIMESTAMP, '$titulo', '$descripcion', '$precio', '$moneda',  '$link_comprar', '$link_pdf', '$url_foto_principal')";

    //insertamos en la tabla propiedades
    if (mysqli_query($conn, $query)) { //Se insertó correctamente
        include("procesar-foto-principal.php");
        include("procesar-fotos-galeria.php");
        $mensaje = "La propiedad se inserto correctamente";
    } else {
        $mensaje = "No se pudo insertar en la BD" . mysqli_error($conn);
    }
}


/******************************************************* */


?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAAF - Admin</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    
</head>

<body>
    

    <div id="contenedor-admin">
        <?php include("contenedor-menu.php"); ?>

        <div class="contenedor-principal">
            <div id="nueva-propiedad">
                <h2>Nueva propiedad</h2>
                <hr>

                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="post">
                    <div class="fila-una-columna">
                        <label for="titulo">Título de la Propiedad</label>
                        <input type="text" name="titulo" required class="input-entrada-texto">
                    </div>

                    <div class="fila-una-colummna">
                        <label for="descripcion">Descripción de la Propiedad</label>
                        <textarea name="descripcion" id="" cols="30" rows="10" class="input-entrada-texto"></textarea>
                    </div>

                    

                    

                    <div class="fila">
                        

                        <div class="box">
                            <label for="precio">Precio </label>
                            <input type="text" name="precio" class="input-entrada-texto" required>
                        </div>
                    </div>
                    
                    <div class="fila">
                        <div class="box">
                            <label for="moneda">Moneda</label>
                            <input type="text" name="moneda" class="input-entrada-texto" required value="$">
                        </div>
                    </div>

                    <div class="fila">
                        <div class="box">
                            <label for="link_comprar">comprar</label>
                            <input type="text" name="link_comprar" class="input-entrada-texto" >
                        </div>
                    </div>
                    <div class="fila">
                        <div class="box">
                            <label for="link_pdf">link</label>
                            <input type="text" name="link_pdf" class="input-entrada-texto" >
                        </div>
                    </div>


                    <div>
                        <h2>Galería de fotos</h2>

                        <label for="foto1" class="btn-fotos"> Foto Principal</label>
                        <output id="list" class="contenedor-foto-principal">
                            <img src="<?php echo $propiedad['url_foto_principal'] ?>" alt="">
                        </output>
                        <input type="file" id="foto1" accept="image/*" name="foto1" style="display:none">
                    </div>

                    <div>
                        <label for="fotos" class="btn-fotos"> Galería de Fotos </label>

                        <div id="contenedor-fotos-publicacion">

                        </div>


                        <input type="file" id="fotos" accept="image/*" name="fotos[]" value="Foto" multiple="" required style="display:none">
                    </div>


                    
                    



                    


                    <hr>
                    <input type="submit" value="Agregar Propiedad" name="agregar" class="btn-accion">

                </form>

            </div>
        </div>
    </div>

    <?php if (isset($_POST['agregar'])) : ?>
        <script>
            alert("<?php echo $mensaje ?>");
            window.location.href = 'index.php';
        </script>
    <?php endif ?>

    <script>
        $('#link-add-propiedad').addClass('pagina-activa');
    </script>

    <script src="subirfoto.js"></script>
    <script src="scriptFotos.js"></script>
</body>

</html>