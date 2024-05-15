<?php
function obtenerConfiguracion()
{
    include("admin/conexion.php");
    //Comprobamos si existe el registro 1 que mantiene la configuraciòn
    //Añadimos un alias AS total para identificar mas facil
    $query = "SELECT COUNT(*) AS total FROM configuracion";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);


    if ($row['total'] == '0') {
        echo "Valor" . $row['total'];
        //No existe el registro 1 - DEBO INSERTAR el registro por primera vez
        $query = "INSERT INTO configuracion (id,user,password)
        VALUES (NULL, 'admin', 'admin')";

        if (mysqli_query($conn, $query)) { //Se insertó correctamente

        } else {
            echo "No se pudo insertar en la BD" . mysqli_error($conn);
        }
    }

    //El regist
    $query = "SELECT * FROM configuracion  WHERE id='1'";
    $result = mysqli_query($conn, $query);
    $config = mysqli_fetch_assoc($result);
    return $config;
}



function cargarPropiedades($limInferior){
    include("admin/conexion.php");
    $config = obtenerConfiguracion();
    if($config['tipo_visualizacion_propiedades']=="f"){ //Visualizamos por fecha de carga
        $query = "SELECT * FROM propiedades  ORDER BY id DESC LIMIT $limInferior,6";
        $result = mysqli_query($conn, $query);
        return $result;
    } else {//visualizamos las primeras prop. de forma personalizada
        $query = "SELECT * FROM propiedades where 
                id='$config[propiedad1]' or 
                id='$config[propiedad2]' or 
                id='$config[propiedad3]' or 
                id='$config[propiedad4]' or 
                id='$config[propiedad5]' or 
                id='$config[propiedad6]'
            UNION
            SELECT * FROM propiedades where 
                id!='$config[propiedad1]' and 
                id!='$config[propiedad2]' and
                id!='$config[propiedad3]' and
                id!='$config[propiedad4]' and
                id!='$config[propiedad5]' and
                id!='$config[propiedad6]' LIMIT $limInferior,6";
        $result = mysqli_query($conn, $query);
        return $result;
    }
}

function obtenerPropiedadPorId($id_propiedad)
{
    //Obtenemos la propiedad en base al id que recibimos por GET
    include("admin/conexion.php");

    //Armamos el query para seleccionar la propiedad
    $query = "SELECT * FROM propiedades WHERE id='$id_propiedad'";

    //Ejecutamos la consulta
    $resultado_propiedad = mysqli_query($conn, $query);
    $propiedad = mysqli_fetch_assoc($resultado_propiedad);
    return $propiedad;
}





function obtenerFotosGaleria($id_propiedad)
{
    include("admin/conexion.php");
    $query = "SELECT * FROM fotos WHERE id_propiedad='$id_propiedad'";

    //Ejecutamos la consulta
    $resultado_fotos = mysqli_query($conn, $query);
    return $resultado_fotos;
}


function obtenerEnlacePorIdPropiedad($id_propiedad)
{
    include("admin/conexion.php");
    // Realizamos una consulta para obtener el enlace asociado a la propiedad
    $query = "SELECT link_comprar FROM propiedades WHERE id = '$id_propiedad'";

    // Ejecutamos la consulta
    $result = mysqli_query($conn, $query);

    // Verificamos si se obtuvo un resultado
    if ($result) {
        // Obtenemos la fila de resultados
        $row = mysqli_fetch_assoc($result);

        // Retornamos el enlace
        return $row['link_comprar'];
    } else {
        // Si no se obtiene un resultado, retornamos un valor por defecto
        return '#'; // Puedes cambiar esto según tus necesidades
    }
}

?>