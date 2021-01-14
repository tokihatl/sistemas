<?php
	session_start();
	include_once 'con_db.php';
	$usuario = $_POST['id_trabajador'];
	$pass = $_POST['contra'];
	$password = md5($pass);
	$sentencia = $conn->prepare('SELECT * FROM datostutores WHERE id_trabajador = ? and contra = ?;');
	$sentencia->execute([$usuario, $password]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	if($datos === false){
		header('Location: logintutor.php');
	}elseif($sentencia->rowCount()==1){
		$_SESSION['nombre'] = $datos->nombres;
		header('Location: inicio.php');
	}
?>