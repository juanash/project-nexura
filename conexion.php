<?php

$server = "localhost"; /* 198.50.23.40*/
$user = "root";
$pass = "";
$db = "nexura";

$conexion = new mysqli($server,$user,$pass,$db);

if($conexion -> connect_error){
    die("No se conecto" . $conexion -> connect_error);
}

?>