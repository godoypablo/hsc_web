<?php
 $smg = null;

 if (isset($_POST["phpmailer"]))
 {
 	$nombre = htmlspecialchars($_POST["nombre"]);
 	$email = htmlspecialchars($_POST["email"]); 	
 	$asunto = htmlspecialchars($_POST["asunto"]); 	 	
 	$mensaje = $_POST["mensaje"]; 	 	
 	$adjunto = $_FILES["adjunto"]; 	 	

    require "phpmailer/class.phpmailer.php";

    $mail = new PHPMailer;

    //indico a la clase que use SMTP
    $mail->IsSMTP();


    //permite modo debug para ver mensajes de las cosas que van ocurriendo
    //$mail->SMTPDebug = 2;

	//Debo de hacer autenticación SMTP
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";

	//indico el servidor de Gmail para SMTP
    //$mail->Host = "smtp.gmail.com";
    $mail->Host = "smtp.hsc.com.ar";

	//indico el puerto que usa Gmail
    //$mail->Port = 465;
    $mail->Port = 25;

	//indico un usuario / clave de un usuario de gmail
    //$mail->Username = "godoypablo@gmail.com";
    $mail->Username = "pgodoy@hsc.com.ar";
    $mail->Password = "Lpp1375A";
       
    $mail->From = "godoypablo@gmail.com";
        
    $mail->FromName = "Administrador";
        
    $mail->Subject = $asunto;
        
    $mail->addAddress($email, $nombre);
        
    $mail->MsgHTML($mensaje);


    if($adjunto["size"] > 0)
    {
    	$mail->addAttachment($adjunto["tmp_name"], $adjunto["name"]);
    }

    if($mail->Send())
    {
    	$msg = "Enhorabuena email enviado con éxito a $email";
    }
    else
    {
    	$msg = "Ha ocurrido un error al enviar el email a $email";
    }

 }
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<h1>Enviar Email a HSC S.A.</h1>
	<strong><?php echo $msg; ?></strong>
	<form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"]?>">
	<table>
		<tr>
			<td>Nombre del destinatario:</td>
			<td><input type="text" name="nombre"></td>
		</tr>
		<tr>
			<td>Email del destinatario:</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Asunto:</td>
			<td><input type="text" name="asunto"></td>
		</tr>		
		<tr>
			<td>Adjuntar archivo:</td>
			<td><input type="file" name="adjunto"></td>
		</tr>				
		<tr>
			<td>Mensaje:</td>
			<td><textarea name="mensaje" cols="30" rows="10"></textarea></td>
		</tr>		
	</table>
	<input type="hidden" name="phpmailer">
	<input type="submit" value="Enviar email">
	</form>
</body>
</html>