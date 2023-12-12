<?php 
    $db_host = "localhost";
    $db_nombre = "datos";
    $db_usuario = "root";
    $db_contra = "";
    $conexion = new PDO("mysql:host=$db_host;dbname=$db_nombre", $db_usuario, $db_contra);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
