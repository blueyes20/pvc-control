<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="buscar.php">
  <table width="500" border="1" cellpadding="10" cellspacing="4">
    <tr>
      <td colspan="2">&gt;&gt; Buscador en la Base de datos</td>
    </tr>
    <tr>
      <td>¿que quiere que le busquemos?</td>
      <td><label>
        <input type="text" name="nombre" id="nombre" />
        <input type="submit" name="button" id="button" value="   GO  " />
      </label></td>
    </tr>
  </table>
</form>
<?php 
require ('functions.php');
extract($_POST); 

if (!isset ($nombre)){
//si no hay campo introducido, muere la aplicacion y muestra esas etiquetas para cerrar el documento
die('</body>'.'</html>');
}
?>
<table width="500" border="1">
  <tr>
    <td colspan="4"><div align="center"><strong>LISTADO DEFINITIVO</strong></div></td>
  </tr>
  <tr>
    <td width="25%"><div align="center"><strong>Id´s</strong></div></td>
    <td width="25%"><div align="center"><strong>Nombre</strong></div></td>
    <td width="25%"><div align="center"><strong>mail</strong></div></td>
    <td width="25%"><div align="center"><strong>título de url</strong></div></td>
  </tr>
  
  <?php
   $conexion=conectar ("sugerir");
   $sql="select id, nombre, mail, titulo_url from datos_clientes WHERE nombre like '".$nombre."%' " ;

//echo $sql;
if($resultado = consulta_sql($sql,$conexion)){ 
   while($fila=mysqli_fetch_array($resultado)){
   echo('<tr>'); 
   echo('<td width="25%">'.$fila ["id"].'</td>');
   echo('<td width="25%">'.$fila ["nombre"].'</td>');
   echo('<td width="25%">'.$fila ["mail"].'</td>');
   echo('<td width="25%">'.$fila ["titulo_url"].'</td>');
   echo('</tr>');
	}
	}; 
	echo('</table>');
	liberar($resultado);
	desconectar ($conexion);
?>
</body>
</html>
