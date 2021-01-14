<?php
	session_start();
	include_once 'con_db.php';
	$usuario = $_POST['rfc'];
	$pass = $_POST['contra'];
	$password = md5($pass);
	$sentencia = $conn->prepare('SELECT * FROM datosempresas WHERE rfc = ? and contra = ?;');
	$sentencia->execute([$usuario, $password]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	if($datos === false){
		header('Location: loginempresa.php');
	}elseif($sentencia->rowCount()==1){
		$_SESSION['nombre'] = $datos->razonsocial;
		header('Location: inicio.php');
	}
?>