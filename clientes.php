<div id="content_wrap">
	<!--Activity Stats-->
    <!--Quick Actions-->
    <!--Notification Message-->
    
   <?php 
   require ("top-main.php");
   $sumado='<div class="msgbar msg_Info hide_onC"><span class="iconsweet">*</span><p>Thanks for choosing Dreamworks!</p></div>'; ?>

   <div class="one_wrap">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">f</span><h5>Listado de Clientes en Gestión de Puntos</h5></div>
            <div class="widget_body">
            	<!--Activity Table-->
            	<table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
                    <tr>
                        <th width="6%">ID</th>
                        <th width="10%">FECHA-ALTA</th>
                        <th width="15%">Nª TARJETA</th>
                        <th width="30%">NOMBRE</th>
                        <th width="31%">EMAIL</th>
                        <th width="28%">ACCIONES</th>
                    </tr>
                    
                    
                   
                    
                    <?php
                    $sql = 'SELECT * FROM clientes ORDER BY id_cliente DESC';
					//echo $sql;
					$conec= conectar();
					
					if ($result=consulta_sql($conec,$sql)){
						while($reglas=mysqli_fetch_array($result)){
						   echo('<tr>'); 
						   echo('<td><div align="center">'.$reglas["id_cliente"].'</div></td>');
						  	$date= $reglas['alta'];
							$sqldate=date('d-m-Y',strtotime($date));
						   echo('<td><div align="center"><span class="blue_highlight pj_cat">'.$sqldate.'</span></div></td>');
						   echo('<td><div align="center">'.$reglas["tarjeta"].'</div></td>');
						   echo('<td><div align="center">'.$reglas["nombre_completo"].'</div></td>');
						   echo('<td><div align="center">'.$reglas["email"].'</div></td>');
						   echo('<td align="center"><span class="data_actions iconsweet"><a class="tip_north" original-title="Editar Cliente" href="
						   index.php?detalle=editar&id='.$reglas["id_cliente"].'">C</a><a class="tip_north" original-title="Borrar Cliente" href="borrar.php?id=ajax">X</a></span></td>');
						   echo('</tr>');
						}
						};
						echo'</table>'
					//$reglas= mysqli_fetch_assoc($result);
					?>
                    
                    
                    
                  <!--  
                    
                    <tr>
                    
                        <td align="center"><?php //echo $reglas["id_cliente"]; ?></td>
                        <td align="center"><span class="blue_highlight pj_cat"><?php echo $reglas["alta"]; ?></span></td>
                        <td align="center"><?php //echo strtoupper($reglas["tarjeta"]); ?></td>
                        <td align="center"><?php //echo strtoupper($reglas["nombre_completo"]); ?></td>
                        <td align="center"><?php //echo strtoupper($reglas["email"]); ?></td>
                        <td align="center"><span class="data_actions iconsweet"><a class="tip_north" original-title="Edit" href="#">C</a><a class="tip_north" original-title="Delete" href="#">X</a></span></td>
                    </tr>-->
                     <tr>
                        <td align="center">4923</td>
                        <td align="center"><span class="green_highlight pj_cat">Android</span></td>
                        <td align="center">soy la tarjeta 2512</td>
                        <td align="center">JUAN GARCIA DELICADO</td>
                        <td align="center">hola@cashuba.com</td>
                        <td align="center"><span class="data_actions iconsweet"><a class="tip_north" original-title="Edit" href="#">C</a><a class="tip_north" original-title="Delete" href="#">X</a></span></td>
                    </tr>
                    
                                 
                </table>
				<div class="action_bar">
                    <a class="button_small whitishBtn" href="#"><span class="iconsweet">l</span>Export Table</a>
                </div>
            </div>
        </div>
    </div>  

</body>
</html>