<?php
session_start();

if (!$_SESSION['usuarioLogeado']) {
    header("Location:login.php");
}

//Obtenemos la propiedad en base al id que recibimos por GET
include("conexion.php");
$id_propiedad = $_GET['id'];

//Armamos el query para seleccionar la propiedad
$query = "SELECT * FROM propiedades WHERE id='$id_propiedad'";

//Ejecutamos la consulta
$resultado_propiedad = mysqli_query($conn, $query);
$propiedad = mysqli_fetch_assoc($resultado_propiedad);
/************************************************************* */




function obtenerFotosGaleria($id_propiedad)
{
    include("conexion.php");
    $query = "SELECT * FROM fotos WHERE id_propiedad='$id_propiedad'";

    //Ejecutamos la consulta
    $resultado_fotos = mysqli_query($conn, $query);
    return $resultado_fotos;
}



?>






<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <title>SAWPI - Admin</title>
</head>

<body>
    
    <div id="contenedor-admin">
        <?php include("contenedor-menu.php"); ?>

        <div class="contenedor-principal">
            <div id="detalle-propiedad">
                <h2>Detalle de Propiedad</h2>
                <hr>
                <div class="contenedor-tabla">
                    <h3>Descripción de la propiedad</h3>
                    <table class="descripcion">
                        <tr>
                            <td>ID de la Propiedad</td>
                            <td><?php echo $propiedad['id'] ?></td>
                        </tr>
                        <tr>
                            <td>Título de la Propiedad:</td>
                            <td> <?php echo $propiedad['titulo'] ?> </td>
                        </tr>

                        <tr>
                            <td>Descripción de la Propiedad</td>
                            <td> <?php echo $propiedad['descripcion'] ?> </td>
                        </tr>

                        <tr>
                            <td>Precio </td>
                            <td> <?php echo $propiedad['moneda'] ." ". $propiedad['precio'] ?> </td>
                        </tr>
                        <tr>
                            <td>link comprar</td>
                            <td> <?php echo $propiedad['link_comprar'] ?> </td>
                        </tr>
                        <tr>
                            <td>link</td>
                            <td> <?php echo $propiedad['link_pdf'] ?> </td>
                        </tr>
                    </table>
                </div>

                <div class="contenedor-tabla">
                    <h3>Galería de Fotos</h3>
                    <table class="descripcion">
                        <tr>
                            <td>Foto Principal</td>
                            <td><img src="<?php echo $propiedad['url_foto_principal'] ?>" alt=""></td>
                        </tr>

                        <tr>
                            <td> Galería</td>
                            <td><?php $resultFotos = obtenerFotosGaleria($propiedad['id']); ?>
                                <?php while ($foto = mysqli_fetch_assoc($resultFotos)) : ?>

                                    <img src="fotos/<?php echo $propiedad['id'] . "/" . $foto['nombre_foto'] ?>">

                                <?php endwhile ?>
                            </td>
                        </tr>
                    </table>
                </div>


                


            </div>
        </div>
    </div>
</body>

</html>