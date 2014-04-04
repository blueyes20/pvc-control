<?php
require_once ("dll/functions.php");
//echo $reglas["euros"];
//echo $num;
extract($_POST);
//Ahora hacemos el update
//isset($_POST["euros"])
//if ($_POST["euros"]> 0){
//UPDATE `reglas` SET `euros`=23,`puntos`=45 WHERE `id_regla`=1
//echo $euros;
//echo $puntos;
$conn= conectar();
$sqlupdate="UPDATE reglas SET euros=".$euros.", puntos=".$puntos." WHERE id_regla=1";
echo $sqlupdate;
consulta_sql($conn,$sqlupdate);
//header("Location:reglas.php");
//$sql = 'SELECT * FROM reglas';
//echo $sql;
//$result=consulta_sql($conec,$sql);
//$reglas= mysqli_fetch_assoc($result);
//$num = mysqli_num_rows($result); 

//}