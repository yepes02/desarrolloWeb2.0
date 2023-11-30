<?php

require("../conexionDB.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabla.css">
    <title>Buscar Productos</title>
</head>
<body>
    <h2 align="center" >Buscar Productos</h2>
    <div class="main-content">
        <form class="form-search" method="get" action="result_busqueda.php" >
            <input type="search" name="search" placeholder="Buscar Productos ..." required autofocus> 
            <button type="submit">Enviar</button>            
            <i class="fa fa-searh"></i>
        </form>
    </div> 
    
   
</body>
</html>
