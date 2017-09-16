<?php 
	$correo_destino="jorge_sixto@outlook.com";
	$asunto = $_POST['InputAsunto'];
	$nombre = $_POST['InputName'];
	$correo = $_POST['InputEmail'];
	$mensaje = $_POST['InputMessage'];

	$contenido = "Nombre: ".$nombre. "\nCorreo: ". $correo. "\Datos: " .$mensaje;

	if(mail('jorge_sixto@outlook.com',$asunto,"Contacto: ".$contenido)){
		echo "mail enviado";
	}else{
		echo "uyuyuyuyuy";
	}
 ?>
