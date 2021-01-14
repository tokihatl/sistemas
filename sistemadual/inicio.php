<?php
	session_start();
	if(!isset($_SESSION['nombre'])){
		header('Location: index.php');
	}elseif(isset($_SESSION['nombre'])){
		include 'con_db.php';
		$sentencia = $conn->query('SELECT * FROM datosalumnos, datosempresas, datostutores;');
		$datos = $sentencia->fetchAll(PDO::FETCH_OBJ);
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <title>Perfil</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="inicio.css"/>
    </head>
    <body background="img/fondotesi.png" class="grid-container">
            <header class="header">
                <nav class="menu">
                    <ul>
                    <li><a href="">inicio</a></li>
                    <li><a href="">visualiza manual</a></li>
                    <li><a href=""><img src="img/bajar.png" width = "35" height= "35" alt=""></a></li>
                    <li><a href="subirarchivosalum.php"><img src="img/subir.png" width = "35" height= "35" alt=""></a></li>
                    <li><a href="">visualiza su proceso</a></li>
                    <li><a href="">visualiza su calificacion</a></li>
                    <li><a href="logout.php"><img src="img/cesion.jpg" width = "35" height= "35" alt=""></a></li>
                </ul>
            </nav>
            </header>
            <div class="main">
            <h2>Binvenido <?php echo $_SESSION['nombre']; ?> </h2>
            <h4>Ya has iniciado sesión</h4>
             <br>
    </body>
</html>


 
  