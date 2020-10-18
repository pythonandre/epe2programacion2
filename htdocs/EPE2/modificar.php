<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "epe2";

$link = mysqli_connect($servername, $username, $password, $dbname);
// Crear conección
$conn = new mysqli($servername, $username, $password, $dbname);

// Chequear connección
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string	($_POST['password']);
$email = mysql_real_escape_string	($_POST['email']);
$username = stripslashes($username);
$password = stripslashes($password);
$email = stripslashes($email);

// Intentando actualizar ejecución de la query
$sql = "UPDATE user SET mail='$email', password='$password' WHERE username='$username'";
if(mysqli_query($link, $sql)){
    echo "<a href='registro.html'>Registro</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='gastosganancias.html'>Gastos y ganancias</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='productos.html'>Productos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='mail.html'>Contacto</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<hr>";
	echo "<link href='style1.css' rel='stylesheet' type='text/css'>";
	echo "<div class='form'>";
	echo "Datos Actualizados Correctamente<br>";
	echo "</div>";
} else {
    echo "<a href='registro.html'>Registro</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='gastosganancias.html'>Gastos y ganancias</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='productos.html'>Productos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='mail.html'>Contacto</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<hr>";
	echo "<link href='style1.css' rel='stylesheet' type='text/css'>";
	echo "<div class='form'>";
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	echo "</div>";
}
 
// Cerrar conección
mysqli_close($link);
?>