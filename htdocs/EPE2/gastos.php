				<?php	
				// Rescatar variables
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "epe2";

				// Crear conección
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				// Chequear conección
				if (!$conn) {
				  die("Connection failed: " . mysqli_connect_error());
				}
				
				$sql = "SELECT * from gasto";
				$result = mysqli_query($conn, $sql);
				
				if(mysqli_num_rows($result) > 0) {
				  // Salida para cada row	
				echo "<a href='registro.html'>Registro</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo "<a href='gastosganancias.html'>Gastos y ganancias</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo "<a href='productos.html'>Productos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo "<a href='mail.html'>Contacto</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo "<hr>";
				echo "<link href='style1.css' rel='stylesheet' type='text/css'>";
				echo "<div class='form'>";
				echo "<table border='1' align='center' class ='redTable'>";
				echo "<th>Item</th><th>Descripcion</th><th>Previsto</th><th>Real</th><th>Differ</th>";
  				while($row = mysqli_fetch_assoc($result)) {
  				echo "<tr>";
				echo "<td>".$row['item']."</td>";
				echo "<td>".$row['descripcion']."</td>";
				echo "<td>".$row['previsto']."</td>";
				echo "<td>".$row['reala']."</td>";
				echo "<td>".$row['difer']."</td>";
				echo "<tr>";
  				}
  				echo "</table>";
  				echo "</div>";
  				} else {
				echo "<a href='registro.html'>Registro</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo "<a href='gastosganancias.html'>Gastos y ganancias</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo "<a href='productos.html'>Productos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo "<a href='mail.html'>Contacto</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo "<hr>";
				echo "<link href='style1.css' rel='stylesheet' type='text/css'>";
  				echo "<div class='form'>";
  				echo "0 results";
  				echo "</div>";
				}
				
				echo "</table></div>";
				
				mysqli_close($conn);
				
		?>