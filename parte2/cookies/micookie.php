<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEER COOKIE</title>
</head>
<body>
    <?php

    if (isset($_COOKIE["micookie"])){

        echo $_COOKIE["micookie"]."<br>";
        
    }else{

        echo "UD NO HA CREADO UNA COOKIE AÚN". "<br>";
    }

    #echo $_COOKIE["micookie"]."<br>";

    
    

    ?>
    
</body>
</html>