<?php
require_once ("/dll/functions.php");
//echo $reglas["euros"];
//echo $num;
//Ahora hacemos el update
//isset($_POST["euros"])
//if ($_POST["euros"]> 0){
//UPDATE `reglas` SET `euros`=23,`puntos`=45 WHERE `id_regla`=1
//echo $euros;
//echo $puntos;
extract($_POST);
if(isset($euros)&& isset($puntos) && $euros>0){
$conn= conectar();

$sqlupdate="UPDATE reglas SET euros=".$euros.", puntos=".$puntos." WHERE id_regla=1";
//$sqlupdate="UPDATE reglas SET 'euros'=".$euros.", 'puntos'=".$puntos." WHERE id_regla=1";
//echo $sqlupdate;
consulta_sql($conn,$sqlupdate);
}
//otra sql
$sql = 'SELECT * FROM reglas';
//echo $sql;
$conec= conectar();
$result=consulta_sql($conec,$sql);
$reglas= mysqli_fetch_assoc($result);
//$num = mysqli_num_rows($result); 
//}
?>

<div id="content_wrap">	<!--Activity Stats-->
                     
        <!--Quick Actions-->
        	<!--Notification Message-->
   <?php 
   require ("top-main.php");
   $sumado='<div class="msgbar msg_Info hide_onC"><span class="iconsweet">*</span><p>La regla de Puntos y Euros se ha Guardado Correctamente!</p></div>'; 
   
   if(isset($euros)){
    echo $sumado;
	}else{
	  }

   ?>
   
    
	<!--One_TWO-->
 	<div class="one_two_wrap fl_left">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">j</span><h5>Establecer Regla de Puntos</h5></div>
            <div class="widget_body">
            	<!--Projects Graph--> 
               <form action="#" method="post" name="meter_puntos" id="meter_puntos"> <ul class="form_fields_container">             
                	<li><label>€ Compra</label> <div class="form_input"><input name="euros" id="euros" type="text" name="euros" value="<?php echo $reglas["euros"]; ?>" ></div></li>
                   <li><label>Puntos</label> <div class="form_input"><input name="puntos" id="puntos" type="text" value="<?php echo $reglas["puntos"]; ?>"></div></li>
                   <li style="text-align:center"><a class="button_big" href="javascript: submitform()"><span class="iconsweet">w</span>Guardar Cambios</a></li>
                  
                   
                    </ul>
                    </form>
            </div>
        </div>
    </div>
	<!--One_TWO-->
 	
    </div>   

</body>
</html>