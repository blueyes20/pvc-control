<?php
 /*require_once ("dll/functions.php");
    extract($_POST);
	//echo $tarjeta;
	$sentencia="select * from clientes where tarjeta='".$tarjeta."'";
//	$sentencia="select * from clientes where tarjeta=1998";
 $comp="SELECT * FROM clientes c, tarjetas t WHERE c.tarjeta = t.num_tarjeta
AND c.tarjeta ='".$tarjeta."'";
	//echo $sentencia;
	//echo $comp;
    $conex=conectar();
	$datos=consulta_sql($conex,$comp);
	$array=mysqli_fetch_assoc ($datos);
	//echo "hola esto es......tarjeta......". $array["telefono"];
	
	//otra
//	 $suma="select SUM(puntos) as total_puntos from tarjetas WHERE tarjeta=".$tarjeta;
	 $suma="SELECT SUM( puntos ) AS total_puntos
FROM tarjetas t
WHERE t.num_tarjeta =".$tarjeta;
//echo $suma;
				$conex=conectar();
				$c=consulta_sql($conex,$suma);
				$contenido=mysqli_fetch_assoc($c);
                echo $contenido["total_puntos"];*/
  ?>
	 <!--<div class="widget">
        	<div class="widget_title"><span class="iconsweet">t</span><h5>Resumen de Tarjeta</h5></div>
            <div class="widget_body">
            	
            	<ul class="dw_summary">
                <li><span class="percentage_done">Nº Tarjeta: </span><span class="black_lines_n"><?php// echo $array["tarjeta"]; ?></span></li>
                <li><span class="percentage_done">Nombre: </span><span class="black_lines_n"><?php //echo $array["nombre_completo"]; ?></span></li>
				<?php
               
				?>
                <li><span class="percentage_done">Saldo Puntos: </span><span class="black_lines_n"><?php // echo $contenido["total_puntos"]; ?> Ptos</span></li>
                
                         <li><div style="text-align:center"><a class="button_big" href="#" align="center" ><span class="iconsweet">w</span>Notificar Puntos al Cliente</a></div></ul>
            </div>-->
	
	 
   