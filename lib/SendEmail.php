<?php 

if (isset($_POST["imputName"])) {

	$email = $_POST["imputMail"];
	$name = $_POST["imputName"];
	$tel = $_POST["imputTel"];
	$message = $_POST["imputMessage"];

	$asunto = "Contactar a ".$name." ";

	//para el envío en formato HTML 
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

	//dirección del remitente 
	$headers .= "From: Diego Alexander Chacón González <dchacon@freelancediego.website>\r\n"; 

	//dirección de respuesta, si queremos que sea distinta que la del remitente 
	//$headers .= "Reply-To: diegochacon_08@hotmail.com\r\n"; 

	//ruta del mensaje desde origen a destino 
	//$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 

	//direcciones que recibián copia 
	//$headers .= "Cc: maria@desarrolloweb.com\r\n"; 

	//direcciones que recibirán copia oculta 
	//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n";

	$mensaje = "Cordial saludo <br><br> Por favor contactar a: $name al correo electronico $email o al telefono $tel <br><br> Asunto: $message <br><br> Gracias.";
		
	
	if(mail('dchacon@freelancediego.website', $asunto, $mensaje, $headers)){
		header("location:../SentEmail.php");
	} else {
		$error = "Error en el envío de su correo, intentarlo más tarde";
	}
}

?>