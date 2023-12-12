<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<?php 
function validar_clave($clave,&$error_clave){
    if(strlen($clave)< 6){
        $error_clave = "La contraseña debe tener al menos 6 caracteres";
        return false;
    }
    if(strlen($clave)>16){
        $error_clave = "La contraseña no puede tener más de 16 caracteres";
        return false;
    }
    if(!preg_match('`[a-z]`', $clave)){
        $error_clave = "La contraseña debe tener al menos una letra minúscula";
        return false;
    }
    if(!preg_match('`[A-Z]`', $clave)){
        $error_clave = "La contraseña debe tener al menos una letra mayuscula";
        return false;
    }
    if (!preg_match('`[0-9]`', $clave)){
        $error_clave = "La contraseña debe tener al menos un caracter numérico";
        return false;
    }
    $error_clave = "";
    return true;
}

if(isset($_POST["registrar"])){
    $error_encontrado="";
    if(validar_clave($_POST["password"], $error_encontrado)){
        echo "CONTRASEÑA SEGURA";
    }else{
        echo "SU CONTRASEÑA ES INSEGURA: " . $error_encontrado;
    }
}
?>
<body>
    <div class="login-box">
        <h1 class="titulo">Registrate Aqui</h1>
        <hr>
        <form  id="myform" class="form-register" role="form" action="validacion_contrasena.php" method="POST" autocomplete="off">
            <div id="signupalert" style="display:none" class="alert alert-danger">
                <p>Error:</p>
                <span></span>
            </div>
            <div class="con1">
                <div class="con2">
                    <div class="divicion1">
                        <!--NOMBRE-->
                        <div class="form-row">
                            <label for="FirstName">Nombre</label>
                            <input type="text" name="nombre" placeholder="Nombres" required>
                        </div>
                        <!--APELLIDO-->
                        <div class="form-row">
                            <label for="Apellido">Apellido</label>
                            <input type="text" name="apellido" placeholder="Apellidos..." required>
                        </div>
                        <!--TIPO DOCUMENTO-->
                        <div class="form-row" name="tipodocumento">
                            <label id="tpDoc" for="tpDocumento">Tipo de Documeto</label>
                            <select  class="from_row" name="tpDocumento" 
                            value="<?php if(isset($tpDocumento)) echo $tpDocumento;?>">
                            <option>Tarjeta de Identidad</option>
                            <option>Cédula de Ciudadanía</option>
                            <option>Cédula de Extranjería</option>
                            <option>Pasaporte</option>
                        </select>
                        </div>
                        <!--# DOCUMENTO-->
                        <div class="form-row">
                            <label for="cedula">N.Cédula: </label>
                            <input type="text" name="cedula" placeholder="Número de Cédula" required>
                        </div>

                        <!-- CORREO-->
                        <div class="form-row">
                            <label for="email">Correo </label>
                            <input type="email" name="email" placeholder="Correo Electronico" required>
                        </div>

                        <!-- CONTRASEÑA-->
                        <div class="form-row">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" placeholder="Contraseña" id="myPassword"  required>
                        </div>
                        
                    </div>
                    <div>
                        <!-- BOTON-->
                        <div class="form-row">
                            <input class="buttom" type="submit" name="registrar" value="Registrar" >
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="http://localhost/desarrollo-web/parte3.2/contraseña/JS/strength.js "></script>
<script>
    $(document).ready(function ($){
        $('#myPassword', '').strength({
            strengthClass: 'strength',
            strengthMeterClass: 'strength_meter',
            strengthButtonClass: 'button_strength',
            strengthButtonText: 'Mostrar Contraseña',
            strengthButtonTextToggle: 'Esconder Contraseña'
        });
    });
</script>
</body>
</html>