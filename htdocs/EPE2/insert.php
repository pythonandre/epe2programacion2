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


//Rescatar variables
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string	($_POST['password']);
$email = mysql_real_escape_string	($_POST['email']);
$username = stripslashes($username);
$password = stripslashes($password);
$email = stripslashes($email);

$sql = "insert into user values ('$username','$password','$email')";

//chequear si conecta
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