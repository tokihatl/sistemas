<?php
	session_start();
	include_once 'con_db.php';
	$usuario = $_POST['matricula'];
	$pass = $_POST['contra'];
	$password = md5($pass);
	$sentencia = $conn->prepare('SELECT * FROM datosalumnos WHERE matricula = ? and contra = ?;');
	$sentencia->execute([$usuario, $password]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	if($datos === false){
		header('Location: loginalumno.php');
	}elseif($sentencia->rowCount()==1){
		$_SESSION['nombre'] = $datos->nombres;
		header('Location: inicio.php');
	}
?>