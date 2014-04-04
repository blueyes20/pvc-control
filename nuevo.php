<div id="content_wrap">
<!--Notification Message-->
   <?php 
   require ("top-main.php");
   $sumado='<div class="msgbar msg_Info hide_onC"><span class="iconsweet">*</span><p>Thanks for choosing Dreamworks!</p></div>'; ?>
    

    <div class="one_wrap fl_left">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">r</span><h5>Alta de nuevo Cliente y Tarjeta</h5></div>
            <div class="widget_body">
				<!--Form fields-->
                <?php
//traemos todos los datos de la bbdd consultado el id solamente
				extract($_GET);
				//echo $id;
                $sq= 'select * from clientes where id_cliente=1';
				echo $sq;
				//echo $sq;
				$conectarse=conectar();
				$respuesta=consulta_sql($conectarse,$sq);
				$contenido=mysqli_fetch_assoc ($respuesta);
				//echo $contenido["id_cliente"];
						
				
				?>
               <form action="#" method="post" id="editar" name="editar"> 
               <ul class="form_fields_container">
                
                	<li><label>Nombre</label> <div class="form_input"><input name="" value="<?php echo $contenido["nombre_completo"]; ?>" type="text"></div></li>
                    <li><label>Email</label> <div class="form_input"><input name="" value="<?php echo $contenido["email"]; ?>" type="text"></div></li>
                    <li><label>Telefono</label> <div class="form_input"><input name="" value="<?php echo $contenido["telefono"]; ?>" type="text"></div></li>
                    <li><label>Tarjeta</label> <div class="form_input"><input name="" value="<?php echo $contenido["tarjeta"]; ?>" type="text"></div></li>
                    
                    <li style="text-align:center"><a class="button_big" href="javascript: submitform()"><span class="iconsweet">w</span>Actualizar</a> <a class="button_big" href="javascript: submitform()"><span class="iconsweet">X</span>Eliminar</a></li>
                    </form>          
                </ul>
            </div>
        </div>
    </div>  

</body>
</html>