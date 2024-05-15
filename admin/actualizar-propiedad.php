<?php
session_start();

if (!$_SESSION['usuarioLogeado']) {
    header("Location:login.php");
}



//funcion que me perimete obtener una propiedad por id

function obtenerPropiedadPorId($id_propiedad)
{
    //Obtenemos la propiedad en base al id que recibimos por GET
    include("conexion.php");

    //Armamos el query para seleccionar la propiedad
    $query = "SELECT * FROM propiedades WHERE id='$id_propiedad'";

    //Ejecutamos la consulta
    $resultado_propiedad = mysqli_query($conn, $query);
    $propiedad = mysqli_fetch_assoc($resultado_propiedad);
    return $propiedad;
}
//tomo el id que me recibí y busco la propiedad
$id_propiedad = $_GET['id'];
$propiedad = obtenerPropiedadPorId($id_propiedad);

/************************************************************* */

function obtenerFotosGaleriaDePropiedad($id_propiedad)
{
    include("conexion.php");

    //Armamos el query para seleccionar las fotos
    $query = "SELECT * FROM fotos WHERE id_propiedad='$id_propiedad'";

    //Ejecutamos la consulta
    $galeria = mysqli_query($conn, $query);
    return $galeria;
}

/********************************************************/

/******************************************************/

/********************************************************/

/********************************************************/

/********************************************************/

/********************************************************/


/******************************************************* */
//GUARDAMOS LA PROPIEDAD
if (isset($_POST['actualizar'])) {
    //nos conectamos a la base de datos
    include("conexion.php");

    //tomamos los datos que vienen del formulario
    $id_propiedad = $_POST['id'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    
   
    $precio = $_POST['precio'];
    $moneda = $_POST['moneda'];
    $link_comprar = $_POST['link_comprar'];
    $link_pdf = $_POST['link_pdf'];
    $url_galeria = "url";
    


    //armamos el query para insertar en la tabla propiedades
    ///S E G U I R A Q U I!!!!!!!!!!!!!!!!!!!!
    $query = "UPDATE propiedades SET
     titulo='$titulo', 
     descripcion='$descripcion', 
     
     
     precio='$precio',
     moneda='$moneda', 
     
     link_comprar='$link_comprar',
     link_pdf='$link_pdf'
     WHERE id='$id_propiedad'";

    //insertamos en la tabla propiedades
    if (mysqli_query($conn, $query)) { //Se insertó correctamente

        //Actualizamos la foto principal en caso que la haya cambiado
        if ($_POST['fotoPrincipalActualizada'] == "si") {
            include("actualizar-foto-principal.php");
        }

        if ($_POST['fotosGaleriaActualizada'] == "si") {
            //Agrego las fotos nuevas
            $id_ultima_propiedad = $id_propiedad;
            include("procesar-fotos-galeria.php");
        }

        //Prgunto si se eliminarion fotos
        $idsFotos =  $_POST['fotosAEliminar'];
        if ($idsFotos != "") {
            include("eliminar-fotos-de-galeria.php");
        }

        $mensaje = "La propiedad se actualizó correctamente";
    } else {
        $mensaje = "No se pudo insertar en la BD" . mysqli_error($conn);
    }
}


/******************************************************* */


?>


<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAPI - ADMIN</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="estilo.css">
    
        
</head>

<body>

    

    <div id="contenedor-admin">
        <?php include("contenedor-menu.php"); ?>

        <div class="contenedor-principal">
            
            <div id="actualizar-propiedad">
                <h2>Actualizar propiedad</h2>
                <hr>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="id" value="<?php echo $propiedad['id'] ?>">
                    <div class="fila-una-columna">
                        <label for="titulo">Título de la Propiedad</label>
                        <input type="text" name="titulo" value="<?php echo $propiedad['titulo'] ?>" required class="input-entrada-texto">
                    </div>

                    <div class="fila-una-columna">
                        <label for="descripcion">Descripción de la Propiedad</label>
                        <textarea name="descripcion" id="" cols="30" rows="10" class="input-entrada-texto"><?php echo $propiedad['descripcion'] ?></textarea>
                    </div>

                    


                    


                    <div class="fila">
                        

                        <div class="box">
                            <label for="precio">Precio </label>
                            <input type="text" name="precio" value="<?php echo $propiedad['precio'] ?>" class="input-entrada-texto">
                        </div>
                    </div>

                    <div class="fila">
                        <div class="box">
                            <label for="moneda">Moneda</label>
                            <input type="text" name="moneda" class="input-entrada-texto" required value="<?php echo $propiedad['moneda'] ?>">
                        </div>
                    </div>
                    <div class="fila">
                        <div class="box">
                            <label for="link_comprar">link comprar</label>
                            <input type="text" name="link_comprar" class="input-entrada-texto" required value="<?php echo $propiedad['link_comprar'] ?>">
                        </div>
                    </div>
                    <div class="fila">
                        <div class="box">
                            <label for="link_pdf">link</label>
                            <input type="text" name="link_pdf" class="input-entrada-texto" required value="<?php echo $propiedad['link_pdf'] ?>">
                        </div>
                    </div>

                    <h2>Galería de Fotos</h2>
                    <div class="">
                        
                        <p>Foto principal (<label for="foto1" class="btn-cambiar-foto">Cambiar foto</label>)</p>
                        <output id="list" class="contenedor-foto-principal">
                            <img src="<?php echo $propiedad['url_foto_principal'] ?>" alt="">
                        </output>
                        
                        <input type="file" id="foto1" accept="image/*" name="foto1" style="display:none">
                        <input type="hidden" id="fotoPrincipalActualizada" name="fotoPrincipalActualizada">
                    </div>

                    <div>
                        <p>Galería ( <label for="fotos" class="btn-cambiar-foto">Agregar mas Fotos</label>)</p>
                        <input type="hidden" id="fotosAEliminar" name="fotosAEliminar">
                        <div id="contenedor-fotos-publicacion">
                            <?php
                            $galeria = obtenerFotosGaleriaDePropiedad($propiedad['id']);
                            $i = 1; ?>
                            <?php while ($foto = mysqli_fetch_assoc($galeria)) : ?>
                                <output class="contenedor-foto-galeria" id="<?php echo $i ?>">
                                    <img src="fotos/<?php echo $propiedad['id'] . "/" . $foto['nombre_foto'] ?>" class="foto-galeria">

                                    <span class="eliminar" id="<?php echo $foto['id'] ?>" onclick="eliminarFoto(<?php echo $foto['id'] ?>, <?php echo $i ?>)"> Eliminar</i></span>
                                </output>
                            <?php
                                $i++;
                            endwhile
                            ?>
                        </div>

                        <div id="contenedor-fotos-nuevas">
            
                        </div>

                        <input type="file" id="fotos" accept="image/*" name="fotos[]" value="Foto" multiple="" style="display:none">
                        <input type="hidden" id="fotosGaleriaActualizada" name="fotosGaleriaActualizada">

                    </div>


                    


                    <input type="submit" value="Actualizar Datos" name="actualizar" class="btn-accion">

                </form>
            </div>
        </div>

    </div>


    <?php if (isset($_POST['actualizar'])) : ?>

        <script>
            alert("<?php echo $mensaje ?>");
            window.location.href = 'listado-propiedades.php';
        </script>

    <?php endif ?>

    <script src="script.js"></script>
    <script src="subirFoto.js"></script>
    <script src="scriptFotosNuevas.js"></script>
</body>

</html>