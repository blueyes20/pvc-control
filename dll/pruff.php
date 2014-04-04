<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

function saludar ($mensaje){
	$bienvenida='hola primo'.$mensaje;
return $bienvenida;
	}
	
	saludar(juan);
	$mensaje2=234;
	echo $bienvenida.$mensaje2;

?>
</body>
</html>