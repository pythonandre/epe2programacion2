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


// Rescatando variables
$item = mysql_real_escape_string($_POST['item']);
$item = stripslashes($item);
$sql = "DELETE FROM gasto WHERE item='$item'";

// Viendo si la query se ejecutó o no
if ($conn->query($sql) === TRUE) {
    echo "<a href='registro.html'>Registro</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='gastosganancias.html'>Gastos y ganancias</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='productos.html'>Productos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='mail.html'>Contacto</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<hr>";
	echo "<link href='style1.css' rel='stylesheet' type='text/css'>";
	echo "<div class='form'>";
	echo "Datos Eliminados Correctamente<br>";
	echo "</div>";
} else {
    echo "<a href='registro.html'>Registro</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='gastosganancias.html'>Gastos y ganancias</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='productos.html'>Productos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='mail.html'>Contacto</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<hr>";
	echo "<link href='style1.css' rel='stylesheet' type='text/css'>";
	echo "<div class='form'>";
	echo "<p>No se ha podido eliminar</p> . $conn->error";
	echo "</div>";
}

$conn->close();
?>