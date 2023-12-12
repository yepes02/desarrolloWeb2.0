<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="style/login_estilo.css">
</head>
<body>

<?php
require_once("conexion.php");
$autenticar=false;
if (isset($_POST["enviar"])) {
    $sql = "SELECT * FROM datos_usuario WHERE usuario = :login AND password = :password";
    $resultado = $conexion->prepare($sql);
    $login = htmlentities(addslashes($_POST["correo"]));
    $password = htmlentities(addslashes($_POST["password"]));
    $resultado->bindValue(":login", $login);
    $resultado->bindValue(":password", $password);
    $resultado->execute();
    $numero_registro = $resultado->rowCount();
    if ($numero_registro != 0) {
        session_start();
        $autenticar = true;
        $_SESSION["usuario"] = $_POST["correo"];
        if (isset($_POST["recordarme"])) {
            setcookie("user", $_POST["correo"], time() + 60 * 60 * 24 * 30);
        }
        header("Location: perfil_usuario.php");
    } else {
        echo "Los datos de usuario son incorrectos";
    }
}
if($autenticar==false){
    if(!isset($_COOKIE["datos_usuario"])){
        include('forma_acceso.php');
    }
}
?>
    <div class="login">
    <h1>ACCESO AL SISTEMA</h1>
        <h2>Iniciar Sesión</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            
            <label>Usuario</label>
            <input type="email" name="correo" required><br><br>
            <label>Contraseña</label>
            <input type="password" name="password" required> <br><br>
            <label >Recordarme en este equipo</label>
            <input type="checkbox" name="recordarme"><br><br>
            

            <input type="submit" name="enviar" value="Enviar">
        </form>
    </div>
</body>
</html>
