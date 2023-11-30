
<?php

require("./proyecto/conexionDB.php");

if (!$conexion) {
    die("LA CONEXIÓN FALLO: " . mysqli_connect_error());
}

#Consulta BD

$consulta="SELECT * FROM datospersonales";
$resultado=mysqli_query($conexion,$consulta);

while($fila=mysqli_fetch_row($resultado)){

    echo "<br>";
    echo "CONSULTA DATOS PERSONALES: ";
    echo "<br><br>";
    echo $fila[0]. " ";
    echo $fila[1]. " ";
    echo $fila[2]. " ";
    echo $fila[3]. " ";
    echo "<br><br><br>";
}


#crear filtros

/*$consulta="SELECT * FROM productos WHERE seccion ='CERÁMICA'";
$resultado=mysqli_query($conexion,$consulta);

while($fila=mysqli_fetch_row($resultado)){

    echo "<br>";
    echo $fila[0]. " ";
    echo $fila[1]. " ";
    echo $fila[2]. " ";
    echo $fila[3]. " ";
    echo $fila[4]. " ";
    echo $fila[5]. " ";
    echo "<br><br><br>";
}*/

#consultas con ARRAY

$consulta="SELECT * FROM productos WHERE seccion ='CERÁMICA' ";
$resultado=mysqli_query($conexion,$consulta);
while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

    echo "<table><tr><td>";
    echo $fila['id_producto']."<td>";
    echo $fila['producto']."<td>";
    echo $fila['precio']."<tr><table>";  
    echo "<br><br>"; 

}



#mysqli_close($conexion);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tabla.css">
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
        $consulta="SELECT * FROM productos WHERE seccion ='CERÁMICA'";
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
</body>
</html>