<div id="content_wrap">
	<!--Notification Message-->
   <?php 
   require ("top-main.php");
   require_once ("dll/functions.php");
   extract($_POST);
   $sumado='<div class="msgbar msg_Info hide_onC"><span class="iconsweet">*</span><p>Thanks for choosing Dreamworks!</p></div>'; ?>
   <!--One_TWO-->
 	<div class="one_two_wrap fl_left">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">j</span><h5>Añadir Puntos a Tarjeta</h5></div>
            <div class="widget_body">
            	<!--OBJETO AJAX--> 
<script language="javascript">
function objetoAjax()
	{
	var xmlhttp=false;
	try {xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");}
	catch (e)
		{
		try {xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");}
		catch (E) {xmlhttp = false;}
		}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined')
		{
		xmlhttp = new XMLHttpRequest();  
		}
	return xmlhttp;  
	}
	
function mostrar_datos_ajax(){
	var pepe= objetoAjax();
	var resultado= document.getElementById('tarjeta');
	//var cod= document.getElementById('codigo').value;

	//pepe.open("GET", "2.php?code="+cod,true);
	//pepe.open("GET","3.php", true);
	//pepe.open("POST","traer_datos.php", true);
	pepe.onreadystatechange=function() {
		// cuando ha cargado todooo
		if (pepe.readyState==4) {
		//alert ('pepe');		
		preloader.innerHTML = "";
        preloader.style.background = "none";
resultado.innerHTML = pepe.responseText
	 	}
		if (pepe.readyState==1){
			<!--alert ('soy uno');-->
			preloader.innerHTML = "   Cargando...";
    //modificamos el estilo de la div, mostrando una imagen de fondo
    preloader.style.background = "url('images/loaders/load3.gif') no-repeat"; 
						}	
			}
	pepe.send(null);
		}
</script>
               <form action="#" method="post" name="meter_puntos" id="meter_puntos"> <ul class="form_fields_container">             
                	<li><label>Nº Tarjeta</label> <div class="form_input"><input name="tarjeta" id="tarjeta" type="text" onBlur="meter_puntos.submit()"></div></li>
                    <li><label>Importe €</label> <div class="form_input"><input name="" type="text"></div></li>
                    <li style="text-align:center"><a class="button_big" href="javascript: submitform()"><span class="iconsweet">w</span>Guardar Cambios</a></li>
                    </ul>
            </div>
        </div>
    </div>
	<!--One_TWO-->
    <?php
	//echo $tarjeta;
	if (isset ($tarjeta)){
	//$sentencia="select * from clientes where tarjeta='".$tarjeta."'";
//	$sentencia="select * from clientes where tarjeta=1998";
 $comp="SELECT * FROM clientes c, tarjetas t WHERE c.tarjeta = t.num_tarjeta AND c.tarjeta =".$tarjeta;
	//echo $sentencia;
	//echo $comp;
    $conex=conectar();
	$datos=consulta_sql($conex,$comp);
	$array=mysqli_fetch_assoc ($datos);
	//echo "hola esto es......tarjeta......". $array["telefono"];
	
	//otra
//	 $suma="select SUM(puntos) as total_puntos from tarjetas WHERE tarjeta=".$tarjeta;
	 $suma="SELECT SUM( puntos ) AS total_puntos FROM tarjetas t WHERE t.num_tarjeta =".$tarjeta;
	 //echo $suma;
				$conex=conectar();
				$c=consulta_sql($conex,$suma);
				$contenido=mysqli_fetch_assoc($c);
             //   echo $contenido["total_puntos"];
	}?>
 		<div class="one_two_wrap fl_right">
        <div class="widget">
        	<div class="widget_title"><span class="iconsweet">t</span><h5>Resumen de Tarjeta</h5></div>
            <div class="widget_body">
            	<!--Stastics-->
            	<ul class="dw_summary">
                <ul class="form_fields_container">
                <li> <span class="percentage_done">Nº Tarjeta </span><div class="form_input"><input name="tarjeta" id="tarjeta" type="text" onBlur="meter_puntos.submit()" value="<?php if (isset ($tarjeta)){echo $tarjeta;} ?>"></div></li> 
                </ul>
                <li><span class="percentage_done">Nº Tarjeta:</span><span class="black_lines_n"><?php  if (isset ($array)){ echo $array["tarjeta"]; } else {echo '';}?></span></li>
    			<li><span class="percentage_done">Nombre:  </span> <span class="black_lines_n"> <?php if (isset ($array)){  echo $array["nombre_completo"]; } else {echo '';}?></span></li>
				<li><span class="percentage_done">Saldo Puntos:  </span> <span class="black_lines_n"> <?php if (isset ($array)){echo $contenido["total_puntos"]." Ptos";}  else {echo '';}?> </span></li>
                <li><div style="text-align:center"><a class="button_big" href="#" align="center" ><span class="iconsweet">w</span>Notificar Puntos al Cliente</a></div></ul>
            	</div>
			    <p></p>
        </div>
      
        </div> 