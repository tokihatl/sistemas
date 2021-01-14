<?php
$message='';
require 'con_db.php';
if(isset($_POST['register'])){
    if (strlen($_POST['razonsocial']) >= 1 &&
        strlen($_POST['rfc']) >= 1 &&
        strlen($_POST['domicilio']) >= 1 &&
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['cargo']) >= 1 &&
        strlen($_POST['contacto']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['empleados']) >= 1 &&
        strlen($_POST['contra']) >= 1 &&
        strlen($_POST['confirmar']) >= 1) {
            $razonsocial = trim($_POST['razonsocial']);
            $rfc = trim($_POST['rfc']);
            $domicilio = trim($_POST['domicilio']);
            $nombre = trim($_POST['nombre']);
            $cargo = trim($_POST['cargo']);
            $contacto = trim($_POST['contacto']);
            $correo = trim($_POST['correo']);
            $empleados = trim($_POST['empleados']);
            $contra = trim($_POST['contra']);
            $contra = md5($contra);
            $confirmar = trim($_POST['confirmar']);
            $confirmar = md5($confirmar);
            $consulta = "INSERT INTO datosempresas(razonsocial, rfc, domicilio, nombre, cargo, contacto, correo, empleados, contra, confirmar) VALUES ('$razonsocial','$rfc','$domicilio','$nombre','$cargo','$contacto','$correo','$empleados','$contra', '$confirmar')";
            if($contra == $confirmar){
                $resultado = $conn->prepare($consulta);
                if($resultado->execute()){
                    echo '<script language="javascript">';
                    echo 'alert("El registro se ha realizado exitosamente.")';
                    echo '</script>';
                } else {
                    echo '<script language="javascript">';
                    echo 'alert("El RFC de la UE o el correo ingresados ya están registrados.\nVuelva a intentarlo.")';
                    echo '</script>';
                }
            }else{
                echo '<script language="javascript">';
                echo 'alert("Las contraseñas no coinciden")';
                echo '</script>';
            }
            
    }   else{
            echo '<script language="javascript">';
            echo 'alert("Hay campos vacíos")';
            echo '</script>';
}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <title>Registrarse - UE</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/registro.css"/>
        <link rel="stylesheet" type="text/css" href="fonts.css"/>
    </head>
    <body background="img/fondotesi.png" class="grid-container">
            <header class="header">
                <img src="img/tecnm.png" alt="">
                <img src="img/tesi.png" alt="">
                    SISTEMA DE MODELO DE EDUCACIÓN DUAL
                <img src="img/edomex.png" alt="">
                <img src="img/gobierno.png" alt="">
            </header>

            <?php if(!empty($message)): ?>
                <p><?= $message ?></p>
            <?php endif; ?>

            <div class="main">
                <form class="registro" method="post">
                    <h4>Crear una cuenta de<br>Unidad Económica</h4>
                    <input class="controls" type="text" name="razonsocial" placeholder="Ingrese la razón social de la UE">
                    <input class="controls" type="text" name="rfc" placeholder="Ingrese el RFC de la UE">
                    <input class="controls" type="text" name="domicilio" placeholder="Ingrese el domicilio de la UE">
                    <input class="controls" type="text" name="nombre" placeholder="Ingrese su nombre completo">
                    <input class="controls" type="text" name="cargo" placeholder="Ingrese su cargo">
                    <input class="controls" type="text" name="contacto" placeholder="Ingrese un número de contacto">
                    <input class="controls" type="mail" name="correo" placeholder="Ingrese un correo electrónico">
                    <input class="controls" type="text" name="empleados" placeholder="Ingrese el número de empleados">
                    <input class="controls" type="password" name="contra" placeholder="Ingrese una contraseña">
                    <input class="controls" type="password" name="confirmar" placeholder="Confirme la contraseña">
                    <input class="botons" name="register" type="submit" value="Registrarse">
                    <h6><a href="loginempresa.php">Ya tengo una cuenta</a></h6>
                </form>
            </div>
            <div class="footer">
            </div>     
    </body>
</html>