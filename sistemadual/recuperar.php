<?php
    session_start();
    require 'con_db.php';
    if(isset($_SESSION['nombre'])){
        header('Location: inicio.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <title>Recuperar contraseña</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/recuperar.css"/>
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
                <form class="recu" action="recuperacion.php" method="post">
                    <h4>Recuperar la contraseña</h4>
                    <input class="controls" type="mail" name="correo" placeholder="Ingrese su correo electrónico">
                    <input class="botons" name="enviar" type="submit" value="Enviar">
                </form>
            </div>
            <div class="footer">
            </div>     
    </body>
</html>