<?php
session_start();
$password=0;
extract ($_POST);
//echo 'con post'.$_POST["password"];
//echo 'sin post'.$password;
//echo $password;


echo 'La contraseña del cliente es:' . $password;
//echo "hola";
if ($password == "") {
header("Location:login.php");
exit;
} 

require_once ("/dll/functions.php");

//$usuario = $_POST["usuario"];
//$password = $_POST["password"];

$_SESSION["password"]=$password;

$conec= conectar();
$sql = 'SELECT * FROM users	WHERE password ='.$password;
//echo $sql;
$result=consulta_sql($conec,$sql);
$num = mysqli_num_rows($result); 
//echo $num;


if ($num != 0) { 
$_SESSION["autentificado"]= 'SI';
// echo 'existe alguien con esta clave';
 header("Location: index.php?detalle=inicio");
   // exit;
   } else { 
//   echo 'no hay nadie con esta clave...';
echo 'no existe el usuario con esta clave... será redirigido en 3 segundos...';
//echo '<meta http-equiv="refresh" content="3;URL=login.html" />';
$_SESSION["mensaje"]="Clave ERRONEA...";
header("Location:mensajes.php");
	//exit;
	
   }

?> 
