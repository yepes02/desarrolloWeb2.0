<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Productos</title>
</head>
<body>
    <?php
    $id=$_GET["id_producto"];
    $sec=$_GET["seccion"];
    $prod=$_GET["producto"];
    $org=$_GET["origen"];
    $imp=$_GET["importado"];
    $prec=$_GET["precio"];


    require_once("../parte1/proyecto/conexionDB.php");

    if(mysqli_connect_errno()){
        echo "la conexion ha fallado";
        exit();
    }
    mysqli_select_db($conexion,$db_nombre) or die ("no se encontro la bd");

    $consulta="INSERT INTO productos(id_producto,seccion,producto,origen,importado,precio) VALUES('$id','$sec','$prod','$org','$imp','$prec')";
    $resultado=mysqli_query($conexion,$consulta);

    if($resultado == false){
        echo "Error en EJECUCION . . .";       
    }else{
        echo "EL producto fue almacenado correctamente con los siguientes datos: <br><br>";
        echo "CODIGO: ". "$id" . "<br>";
        echo "SECCION: ". "$sec" . "<br>";
        echo "PRODUCTO: ". "$prod" . "<br>";
        echo "PAIS ORIGEN: ". "$org" . "<br>";
        echo "¿IMPORTADO?: ". "$imp" . "<br>";
        echo "PRECIO: ". "$prec" . "<br>";
    }
    mysqli_close($conexion);

    ?>
    
</body>
</html>