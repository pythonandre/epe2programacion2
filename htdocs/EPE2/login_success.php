<?PHP
session_start();
if (!isset($_SESSION['username'])) {
    header('location:main_login.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
<!--- Direcciones para navegar la página --->
<link href="style1.css" rel="stylesheet" type="text/css">
</head>
	<a href="registro.html">Registro</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="gastosganancias.html">Gastos y ganancias</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="productos.html">Productos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="mail.html">Contacto</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<hr>
	
<!--- Rescatando nombre de usuario --->
  <div class="form" id="loginform">
		<p>Bienvenido:</p>
		<?php
		echo $_SESSION['username']
		?>
 </div>
<body>
</body>
</html>