<?php
include("funciones.php");
include("admin/conexion.php");
$limiteInferior = $_GET['c'];
$limiteInferior = $limiteInferior + 6;
$result_propiedades = cargarPropiedades($limiteInferior);

?>

<?php while ($propiedad = mysqli_fetch_assoc($result_propiedades)) : ?>

    <div class="fila">
        <form action="publicacion.php" method="get" id="<?php echo $propiedad['id'] ?>">
            <input type="hidden" value="<?php echo $propiedad['id'] ?>" name="idPropiedad"> 
            <div class="contenedor-propiedad" onclick="document.getElementById('<?php echo $propiedad['id'] ?>').submit();">
                <div class="contenedor-img">
                    <img src="<?php echo 'admin/' . $propiedad['url_foto_principal'] ?>" alt="">
                    
                </div>
                <div class="info">
                    <h4><?php echo $propiedad['titulo'] ?></h4>
                    
                    <span class="precio"><?php echo $propiedad['moneda']?> <?php echo number_format($propiedad['precio'],0,'','.') ?></span>
                    
                    
                </div>
            </div>
        </form>

        <?php if ($propiedad = mysqli_fetch_assoc($result_propiedades)) : ?>
            <form action="publicacion.php" method="get" id="<?php echo $propiedad['id'] ?>">
            <input type="hidden" value="<?php echo $propiedad['id'] ?>" name="idPropiedad"> 
            <div class="contenedor-propiedad" onclick="document.getElementById('<?php echo $propiedad['id'] ?>').submit();">
                <div class="contenedor-img">
                    <img src="<?php echo 'admin/' . $propiedad['url_foto_principal'] ?>" alt="">
                    
                </div>
                <div class="info">
                    <h4><?php echo $propiedad['titulo'] ?></h4>
                    
                    <span class="precio"><?php echo $propiedad['moneda']?> <?php echo number_format($propiedad['precio'],0,'','.') ?></span>
                    
                    
                </div>
            </div>
            </form>
        <?php endif ?>

        <?php if ($propiedad = mysqli_fetch_assoc($result_propiedades)) : ?>
            <form action="publicacion.php" method="get" id="<?php echo $propiedad['id'] ?>">
            <input type="hidden" value="<?php echo $propiedad['id'] ?>" name="idPropiedad"> 
            <div class="contenedor-propiedad" onclick="document.getElementById('<?php echo $propiedad['id'] ?>').submit();">
                <div class="contenedor-img">
                    <img src="<?php echo 'admin/' . $propiedad['url_foto_principal'] ?>" alt="">
                    
                </div>
                <div class="info">
                    <h4><?php echo $propiedad['titulo'] ?></h4>
                    
                    <span class="precio"><?php echo $propiedad['moneda']?> <?php echo number_format($propiedad['precio'],0,'','.') ?></span>
                    
                    
                </div>
            </div>
            </form>
        <?php endif ?>
    </div>

<?php endwhile ?>