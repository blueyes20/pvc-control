<?php
function conectar()
{
	mysql_connect("localhost", "root", "");
	mysql_select_db("pvc_control");
}

function desconectar()
{
	mysql_close();
}
?>