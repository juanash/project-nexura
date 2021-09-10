<?php

include("conexion.php");

$table = htmlspecialchars($_GET["table"]);
$nombre = htmlspecialchars($_GET["nombre"]);
$area_id = htmlspecialchars($_GET["area_id"]);
$boletin = htmlspecialchars($_GET["boletin"]);
$desc = htmlspecialchars($_GET["desc"]);
$email = htmlspecialchars($_GET["email"]);
$sexo = htmlspecialchars($_GET["sexo"]);

try{

    switch ($table) {
        case 0:
            mysqli_query($conexion,"INSERT INTO area(nombre) VALUES('$nombre')");
            echo("algo" + $nombre);
            break;
        case 1:
            mysqli_query($conexion,"INSERT INTO empleados(area_id,boletin,descripccion,email,nombre,sexo) VALUES('$area_id','$boletin','$desc','$email','$nombre','$sexo')");
            break;
        case 2:
            mysqli_query($conexion,"INSERT INTO roles(nombre) VALUES('$nombre')");
            break;
    }

}catch (Exception $ex){
    echo($ex);
}




?>