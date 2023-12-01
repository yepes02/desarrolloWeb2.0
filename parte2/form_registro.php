<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css?ver=1.2">

    <title>Registro</title>
</head>
<body>
    <H1 class="titulo">Formulario Registro de Productos</H1>
    <div class="caja">
        <form action="insertar_productos.php" method="get" class="form_registro">
         <div class="caja2">
         <h2 class="subtitulo">Agregar Producto</h> 
         
         <br><br>
         <input type="text" name="id_producto" placeholder="Digite el Codigo" class="inputs">
         <br><br>
         <input type="text" name="seccion" placeholder="Digite la Seccion" class="inputs">
         <br><br>
         <input type="text" name="producto" placeholder="Digite Nombre del Producto" class="inputs">
         <br><br>
         <input type="text" name="origen" placeholder="Digite el Origen" class="inputs">
         <br><br>

         <h3 class="importaciones">Importaciones</h3>
         <select name="importado" class="imputs2">
            <option>Verdadero</option>
            <option>Falso</option>
         </select>
         <br><br>
         <input type="text" name="precio" placeholder="Digite el Precio" class="inputs">
         <br><br>
         <input type="submit" value="Guardar" class="guardar">
         <input type="reset" value="Limpiar" class="Limpiar"> 
         </div>
        </form>

       

    </div>
    
</body>
</html>