<?php
//conexion.php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'practica_4_yhn');
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Verifica la conexión
if($mysqli->connect_error){
die("Falló la conexión a MySQL: " . $mysqli->connect_error);
}
?>