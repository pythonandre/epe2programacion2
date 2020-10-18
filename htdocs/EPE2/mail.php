<?php
//Rescatar variables
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$header = "EPE taller de programación II";

$fullMessage= $message . "\nDe" . $name;

$destination = "andreph8071@gmail.com";

//Creando página de envío satisfactorio
mail($destination, $subject, $fullMessage, $header);
echo "<a href='registro.html'>Registro</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='gastosganancias.html'>Gastos y ganancias</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='productos.html'>Productos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='mail.html'>Contacto</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<hr>";
	echo "<link href='style1.css' rel='stylesheet' type='text/css'>";
	echo "<div class='form'>";
	echo "Correo enviado.<br>";
	echo "</div>";
?>