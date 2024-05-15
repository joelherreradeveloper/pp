<?php
//datos del servidor
/*$server		="localhost";
$username	="u774725739_ara";
$password	="MOTOG4play+888";
$bd			="u774725739_db_arafoto";*/
$server		="localhost";
$username	="root";
$password	="";
$bd			="bd_link";


//creamos una conexión
$conn = mysqli_connect($server, $username, $password, $bd);

//Chequeamos la conexión
if(!$conn){
	die("Conexión fallida:" . mysqli_connect_error());
}

//Chequeamos la conexión
if(!$conn){
	die("Conexión fallida:" . mysqli_connect_error());
}
?>