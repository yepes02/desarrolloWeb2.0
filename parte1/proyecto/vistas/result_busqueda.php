<?php
require("../conexionDB.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0?ver=1.0">
    <link rel="stylesheet" href="tabla.css">
    <title>Tabla De Productos</title>
    
</head>
<body>
    <h2>Tabla De Productos</h2>
    
    <table>
        <tr>
            <th>ID_PRODUCTO</th>
            <th>SECCION</th>
            <th>PRODUCTO</th>
            <th>ORIGEN</th>
            <th>IMPORTADO</th>
            <th>PRECIO</th>
        </tr>

        <?php

        $busqueda=$_GET["search"];
        $consulta="SELECT * FROM productos WHERE producto like '%$busqueda%'";

        $resultado=mysqli_query($conexion,$consulta);
       
        while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

                        
            echo "<tr>";
            echo "<td>{$fila['id_producto']}</td>";
            echo "<td>{$fila['seccion']}</td>";
            echo "<td>{$fila['producto']}</td>";
            echo "<td>{$fila['origen']}</td>";
            echo "<td>{$fila['importado']}</td>";
            echo "<td>{$fila['precio']}</td>";
            echo "</tr>";  
           
        }
        ?>
    </table>
    <br>
    <a href="form_busqueda.php" class="ir-button">Volver a buscar</a>
</body>
</html>