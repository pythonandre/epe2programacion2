<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "epe2";

// Crear conección
$conn = new mysqli($servername, $username, $password, $dbname);
// Chequear conección
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Rescatar datos de la página
$item = mysql_real_escape_string($_POST['item']);
$descripcion = mysql_real_escape_string	($_POST['descripcion']);
$previsto = mysql_real_escape_string	($_POST['previsto']);
$real = mysql_real_escape_string	($_POST['real']);
$difer = mysql_real_escape_string	($_POST['difer']);
$item = stripslashes($item);
$descripcion = stripslashes($descripcion);
$previsto = stripslashes($previsto);
$real = stripslashes($real);
$difer = stripslashes($difer);

$sql = "insert into gasto values ('$item','$descripcion','$previsto','$real','$difer')";

// Revisar si se guardaron o no los datos
if ($conn->query($sql) === TRUE) {
    echo "<a href='registro.html'>Registro</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='gastosganancias.html'>Gastos y ganancias</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='productos.html'>Productos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='mail.html'>Contacto</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<hr>";
	echo "<link href='style1.css' rel='stylesheet' type='text/css'>";
	echo "<div class='form'>";
	echo "Datos Guardados Correctamente<br>";
	echo "</div>";
} else {
    echo "<a href='registro.html'>Registro</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='gastosganancias.html'>Gastos y ganancias</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='productos.html'>Productos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='mail.html'>Contacto</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<hr>";
	echo "<link href='style1.css' rel='stylesheet' type='text/css'>";
	echo "<div class='form'>";
	echo "<p>No se ha podido guardar</p>";
	echo "</div>";
}

$conn->close();
?>