<?php
$message='';
require 'con_db.php';
if(isset($_POST['register'])){
    if (strlen($_POST['id_trabajador']) >= 1 &&
        strlen($_POST['nombres']) >= 1 &&
        strlen($_POST['apellidos']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['contra']) >= 1 &&
        strlen($_POST['confirmar']) >= 1 &&
        strlen($_POST['carrera']) >= 1 &&
        strlen($_POST['perfil']) >= 1) {
            $id_trabajador = trim($_POST['id_trabajador']);
            $nombres = trim($_POST['nombres']);
            $apellidos = trim($_POST['apellidos']);
            $correo = trim($_POST['correo']);
            $contra = trim($_POST['contra']);
            $contra = md5($contra);
            $confirmar = trim($_POST['confirmar']);
            $confirmar = md5($confirmar);
            $carrera = trim($_POST['carrera']);
            $perfil = trim($_POST['perfil']);
            $consulta = "INSERT INTO datostutores(id_trabajador, nombres, apellidos, correo, contra, confirmar, carrera, perfil) VALUES ('$id_trabajador','$nombres','$apellidos', '$correo', '$contra', '$confirmar', '$carrera','$perfil')";
            if($contra == $confirmar){
                $resultado = $conn->prepare($consulta);
                if($resultado->execute()){
                    echo '<script language="javascript">';
                    echo 'alert("El registro se ha realizado exitosamente.")';
                    echo '</script>';
                } else {
                    echo '<script language="javascript">';
                    echo 'alert("El ID de trabajador o el correo ingresados ya están registrados.\nVuelva a intentarlo.")';
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
        <title>Registrarse - Tutor / Mentor</title>
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
            <div class="main">
                <form class="registro" method="post">
                    <h4>Crear una cuenta de<br>tutor o mentor</h4>
                    <input class="controls" type="text" name="id_trabajador" placeholder="Ingrese su ID de trabajador">
                    <input class="controls" type="text" name="nombres" placeholder="Ingrese sus nombres">
                    <input class="controls" type="text" name="apellidos" placeholder="Ingrese sus apellidos">
                    <input class="controls" type="mail" name="correo" placeholder="Ingrese su correo electrónico">
                    <input class="controls" type="password" name="contra" placeholder="Ingrese una contraseña">
                    <input class="controls" type="password" name="confirmar" placeholder="Confirme la contraseña">
                    <h5>Seleccione su carrera</h5>
                    <select class="controls" name="carrera">
                        <option>Sistemas Computacionales</option>
                        <option>Administración</option>
                        <option>Arquitectura</option>
                        <option>Biomédica</option>
                        <option>Electrónica</option>
                        <option>Ambiental</option>
                        <option>Informática</option>
                    </select>
                    <h5>¿Cumple con el perfil de mentor?</h5>
                    <select class="controls" name="perfil">
                        <option>Si</option>
                        <option>No</option>
                    </select>
                    <input class="botons" name="register" type="submit" value="Registrarse">
                    <h6><a href="logintutor.php">Ya tengo una cuenta</a></h6>
                </form>
            </div>
            <div class="footer">
            </div>     
    </body>
</html>