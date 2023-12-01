<?php

require_once("../parte1/proyecto/conexionDB.php");

    if(mysqli_connect_errno()){
        echo "la conexion ha fallado";
        exit();
    }
    mysqli_select_db($conexion,$db_nombre) or die ("no se encontro la bd");


    $consulta="SELECT * FROM productos WHERE producto LIKE '%ferreteria%'";
    #$consulta="INSERT INTO productos(id_producto,seccion,producto,origen,importado,precio) VALUES('ar40','FERRETERIA','alicates','China','VERDADERO', 12000)";
    $resultado=mysqli_query($conexion,$consulta); 

    
    mysqli_close($conexion);

    ?>