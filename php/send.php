<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ideas Inmobiliarias</title>
</head>
<body>
<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$actions = $_POST['actions'];
	$desarrollosEnPuebla = join(", ", $_POST['desarrollosEnPuebla']);
	$desarrollosEnMexico = join(", ", $_POST['desarrollosEnMexico']);

	$to = 'gerardo@orangeboutiquecreativa.com, al.martinez.alva@gmail.com';
	$title = 'Ideas Inmobiliarias Landing Page';
	$from = "No-Reply";

	$headers = 'From: ' . $from . "\r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

	$message = '<html><body><head><meta charset="UTF-8"></head>';
	$message .= '<strong>ID: Ideas Inmobiliarias </strong><br><br>';
	$message .= 'Nombre de Cliente: ' . '<strong>' . $name . '</strong><br><br>';
	$message .= 'Email: ' . '<strong>' . $email . "</strong><br><br>";	
	$message .= 'Teléfono ' . '<strong>' . $phone . "</strong><br><br>";	
	$message .= 'El Cliente desea: ' . '<strong>' . $actions . "</strong><br><br>";	
	$message .= 'Desarrollos en Puebla: ' . '<strong>' . $desarrollosEnPuebla . "</strong><br><br>";
	$message .= 'Desarrollos en México: ' . '<strong>' . $desarrollosEnMexico . "</strong><br><br>";
	$message .= '</body></html>';

  
	if ($_POST['submit']) {
	if (mail($to, $title, $message, $headers )) {

	echo '
	<script type="text/javascript">		
			alert("Gracias, en breve nos comunicaremos con usted.");
	</script>
		<!-- Google Code for REGISTRO IDEAS Conversion Page -->
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 949786323;
		var google_conversion_language = "en";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "iggZCLPF414Q063yxAM";
		var google_remarketing_only = false;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/949786323/?label=iggZCLPF414Q063yxAM&amp;guid=ON&amp;script=0"/>
		</div>
		</noscript>
	<script type="text/javascript">
		window.location.href = "http://ideasinmobiliarias.com.mx";
	</script>
		'
	; 
		} else { 
			echo 'Ops!, algo ha salido mal :('; } 
		}
?>
</body>
</html>

