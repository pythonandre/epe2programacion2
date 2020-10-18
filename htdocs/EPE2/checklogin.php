<?PHP
//configuraciones de servidores y bases de datos
session_start();
ob_start();
$host       = "localhost";
$username   = "root";
$password   = "";
$db_name    = "epe2";
$tbl_name   = "user";

//Conectarse el servidor y seleccionar de la tablas
mysql_connect("$host", "$username", "$password") or die ("cannot connect");
mysql_select_db("$db_name") or die ("cannot select DB");

//Obtener nombre de usuario y password del formulario de login
//Prevenir inyecciones SQL
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string	($_POST['password']);
$username = stripslashes($username);
$password = stripslashes($password);
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);
$sql = "SELECT * FROM $tbl_name WHERE username = '$username'
and password = '$password'";
$result = mysql_query($sql);

//Contar las row de la tabla. 0 = No existe usuario
$count = mysql_num_rows($result);

//Si $result es 1 el usuario existe
if($count == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header('location:login_success.php');
}

/*  //Si el resultado calza el $username && $password, la row va a ser 1
if($count == 1) {
    session_register('username');
    session_register('password');
    header('location:login_success.php');
}*/

//Si no calza, devuelve un mensaje devuelta.
else {
    echo 'Wrong Username or Password';
}
ob_end_flush();
?>