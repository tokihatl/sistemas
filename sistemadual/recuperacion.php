<?php
	require 'mail/PHPMailer.php';
	require 'mail/SMTP.php';
	require 'mail/Exception.php';
	require 'mail/OAuth.php';
	include_once 'con_db.php';
	$correo = $_POST['correo'];
	$sentencia = $conn->prepare('SELECT * FROM datosalumnos WHERE correo = ?;');
	$sentencia->execute([$correo]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	if($datos === false){
		echo '<script language="javascript">';
        echo 'alert("El correo ingresado no se encuentra asociado a ninguna cuenta.\nVuelva a intentarlo.")';
        echo '</script>';
	}elseif($sentencia->rowCount()==1){
		try {
			$emailTo = $correo;
			$subject = 'Recuperación de la contraseña';
			$body = 'La contraseña asociada a la cuenta de este correo electrónico es: $datos->contra';
			$fromemail = 'giovanniperezibarra@gmail.com';
			$fromname = 'Giovanni Pérez Ibarra';
			$passwordemail = 'Temetountiro';
			$mail = new PHPMailer\PHPMailer\PHPMailer();
			$mail->isSMTP();
			$mail->SMTPDebug = 1;                                  
	    	$mail->Host = 'smtp.gmail.com';                           
	    	$mail->Port = 587; 
	    	$mail->SMTPAuth = 'login';
	    	$mail->SMTPSecure = 'tls';
	    	$mail->Username = $fromemail;
	    	$mail->Password = $passwordemail;
	    	$mail->setFrom($fromemail, $fromname);
	    	$mail->addAddress($emailTo);
	    	$mail->isHTML(true);
	    	$mail->Subject = $subject;
	    	$mail->Body = $body;
	    	$mail->send();
	    	if(!$mail->send()){
	    		echo '<script language="javascript">';
	    		echo 'alert("El correo no pudo ser enviado.")';
                echo '</script>';
	    	}else{
	    		echo '<script language="javascript">';
                echo 'alert("EL correo fue enviado exitosamente.\nRevise su bandeja de entrada.")';
                echo '</script>';
	    	}
		} catch (Exception $e) {
				
		}
	}
?>