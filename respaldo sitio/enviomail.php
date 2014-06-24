<?php

	$nombre=$_POST['nom'];
	$mail=$_POST['correo'];
	$tel=$_POST['tel'];
	$ciudad=$_POST['ciu'];
	$comentario=$_POST['mensaje'];

	$para="contacto@tandemlegal.mx";
	
	$fecha = date("d-M-Y, H:i");
	$mymail = $para;
	$subject = "Mensaje de pagina web";
	$contenido = "Mensaje escrito el ".$fecha."\n\n";
	$contenido .= "Nombre: ".$nombre."\nTeléfono: ".$tel."\nCiudad: ".$ciudad."\n\nEscribió:\n";
	$contenido .= $comentario."\n\n";
	$header = "From:".$mail."\nReply-To:".$mail."\n";
	$header .= "X-Mailer:PHP/".phpversion()."\n";
	$header .= "Mime-Version: 1.0\n";
	$header .= "Content-Type: text/plain charset=iso-8859-1";

	@mail($mymail, $subject, $contenido ,$header);

?>
<div align="center" style="font-family:Arial, Helvetica, sans-serif; color:#666;">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>Enviando correo electrónico</p>
  <p><img src="img/ajax-loader.gif" width="220" height="19"></p>
</div>
<script>
alert("Correo enviado correctamente, gracias por escribir");
location.href="index.php";
</script>
