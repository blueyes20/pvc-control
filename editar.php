<?php
$conect=conectar();
// de $GET cojemos el id de cliente
extract($_GET);
// de $POST los datos de este formulario
extract($_POST);

    if (isset($_POST["actualizar"])){
		echo "actualizo";
		
/*UPDATE `pvc-control`.`clientes` SET `nombre_completo` = 'JUANICO PREUBA',
`email` = 'sdgfsd@dfgdgf.com',
`telefono` = '9525222',
`tarjeta` = '1596' WHERE `clientes`.`id_cliente` =3;*/
		$actualizar="UPDATE clientes SET nombre_completo='". $nombre."',";
		$actualizar.=" email = '".$mail."',";
		$actualizar.=" telefono = '".$tel."',";
		$actualizar.=" tarjeta = '".$tarjeta."' WHERE id_cliente=".$id;
		consulta_sql($conect,$actualizar);
		
		//sdgfsd@dfgdgf.com', "
		echo $actualizar;
		?> <script language="javascript"> alert("cambios realizados");</script>
						<?php
		/*
		if(isset($euros)&& isset($puntos) && $euros>0){
$conn= conectar();

$sqlupdate="UPDATE reglas SET euros=".$euros.", puntos=".$puntos." WHERE id_regla=1";
//$sqlupdate="UPDATE reglas SET 'euros'=".$euros.", 'puntos'=".$puntos." WHERE id_regla=1";
//echo $sqlupdate;
consulta_sql($conn,$sqlupdate);
}*/
		
		
		
		
		
		}
	if (isset($_POST["borrar"])){
		echo "delete";
		}
	?>
<div id="content_wrap"><!--Activity Stats-->
                     
        <!--Quick Actions-->
        <div id="quick_actions">
        	<a class="button_big" href="#"><span class="iconsweet">+</span>Añadir Nuevo Cliente y Tarjeta</a>
                    </div>
	<!--Notification Message-->
   <?php $sumado='<div class="msgbar msg_Info hide_onC"><span class="iconsweet">*</span><p>Thanks for choosing Dreamworks!</p></div>'; ?>
    

    <div class="one_wrap fl_left">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">r</span><h5>Editar Cliente</h5></div>
            <div class="widget_body">
				<!--Form fields-->
                <?php
//traemos todos los datos de la bbdd consultado el id solamente
				
				//echo $id;
                $sq= 'select * from clientes where id_cliente='.$id;
				//echo $sq;
				$conectarse=conectar();
				$respuesta=consulta_sql($conectarse,$sq);
				$contenido=mysqli_fetch_assoc ($respuesta);
				//echo $contenido["id_cliente"];
				?>
               <form action="#" method="post" id="editar" name="editar"> 
               <ul class="form_fields_container">
                
                	<li><label>Nombre</label> <div class="form_input"><input name="nombre" value="<?php echo $contenido["nombre_completo"]; ?>" type="text"></div></li>
                    <li><label>Email</label> <div class="form_input"><input name="mail" value="<?php echo $contenido["email"]; ?>" type="text"></div></li>
                    <li><label>Telefono</label> <div class="form_input"><input name="tel" value="<?php echo $contenido["telefono"]; ?>" type="text"></div></li>
                    <li><label>Tarjeta</label> <div class="form_input"><input name="tarjeta" value="<?php echo $contenido["tarjeta"]; ?>" type="text"></div></li>
                    
                    <li style="text-align:center">
                    <input class="button_big" type="submit" name="actualizar" value ="actualizar">
                    <input class="button_big" type="submit" name="borrar" value ="Borrar">
                   </li>
                    </form>          
                </ul>
            </div>
        </div>
    </div>  


</body>
</html>