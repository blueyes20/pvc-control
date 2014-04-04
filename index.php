<?php
session_start();
require_once ("/dll/functions.php");
header('Content-Type: text/html; UTF-8');
?>
<!DOCTYPE html>
<html>
<head>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title>Gestión de Puntos y Fidelización de Clientes - Cashuba.com</title>

<link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">
<!--Stylesheets-->
<link rel="stylesheet" href="./css/reset.css" />
<link rel="stylesheet" href="./css/main.css" />
<link rel="stylesheet" href="./css/typography.css" />
<link rel="stylesheet" href="./css/tipsy.css" />
<link rel="stylesheet" href="./js/cl_editor/jquery.cleditor.css" />
<link rel="stylesheet" href="./uploadify/uploadify.css" />
<link rel="stylesheet" href="./css/jquery.ui.all.css" />
<link rel="stylesheet" href="./css/fullcalendar.css" />
<link rel="stylesheet" href="./css/bootstrap.css" />
<link rel="stylesheet" href="./js/fancybox/jquery.fancybox-1.3.4.css" />
<link rel="stylesheet" href="./css/highlight.css" />
<!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->
<!--Javascript-->-->

<script type="text/javascript" src="./js/jquery.min.js"> </script>
<script type="text/javascript" src="./js/highcharts.js"> </script>
<script type="text/javascript" src="./js/exporting.js"> </script>
<script type="text/javascript" src="./js/jquery.quicksand.js"> </script>
<script type="text/javascript" src="./js/jquery.easing.1.3.js"> </script>
<script type="text/javascript" src="./js/jquery.tipsy.js"> </script>
<script type="text/javascript" src="./js/cl_editor/jquery.cleditor.min.js"> </script>
<script type="text/javascript" src="./uploadify/swfobject.js"></script>
<script type="text/javascript" src="./uploadify/jquery.uploadify.v2.1.4.min.js"></script>
<script type="text/javascript" src="./js/jquery.autogrowtextarea.js"></script>
<script type="text/javascript" src="./js/form_elements.js"></script>
<script type="text/javascript" src="./js/jquery.ui.core.js"></script>
<script type="text/javascript" src="./js/jquery.ui.widget.js"></script>
<script type="text/javascript" src="./js/jquery.ui.mouse.js"></script>
<script type="text/javascript" src="./js/jquery.ui.slider.js"></script>
<script type="text/javascript" src="./js/jquery.ui.progressbar.js"></script>
<script type="text/javascript" src="./js/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="./js/jquery.ui.tabs.js"></script>
<script type="text/javascript" src="./js/fullcalendar.js"></script>
<script type="text/javascript" src="./js/gcal.js"></script>
<script type="text/javascript" src="./js/bootstrap-modal.js"></script>
<script type="text/javascript" src="./js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="./js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="./js/highlight.js"></script>
<script type="text/javascript" src="./js/main.js"> </script>
<script language="javascript"> 
function submitform()
{
     var theForm = document.forms['meter_puntos'];
     if (!theForm) {
         theForm = document.meter_puntos;
     }
     theForm.submit();
	 
}
</script>
<meta charset="UTF-8"></head>
<body>
<!--Header-->
<header>
    <!--Logo-->
    <div id="logo"><a href=""><img src="images/loginform-logo.png" alt="" /></a></div>
    <!--Search-->
    <div style="text-align:right">
<?php
$_SESSION["mensaje"]="Ha salido Correctamente <br\> Cashuba.com";
?>
<a class="button_big" href="mensajes.php"><span class="iconsweet">w</span>Salir de Gestión de Puntos</a>
        </div>
    </header>
<!--Dreamworks Container-->
<div id="dreamworks_container">
    <!--Primary Navigation-->
      <nav id="primary_nav">
        <ul>
            <li class="nav_dashboard active"><a href="./index.html">Resumen</a></li>
          <!--  <li class="nav_graphs"><a href="./charts.html">Graphs</a></li>
            <li class="nav_forms"><a href="./forms.html">Forms</a></li>
            <li class="nav_typography"><a href="./typography.html">Typography</a></li>
            <li class="nav_uielements"><a href="./ui_elements.html">UI Elements</a></li>
            <li class="nav_pages"><a href="./pages.html">Pages</a></li>-->
        </ul>
    </nav>
<!--Main Content-->
<section id="main_content">
<!--Secondary Navigation-->
<?php
require ("menu_in.php");
//esto funciona a modo de interruptor. 
//si se quiere modificar o ampliar el numero de secciones del menú deberemos de modificar esto.
                switch($_GET['detalle']){
                
                        case "inicio" : 
                            require "inicio.php";
                            break; 
							
                        case "nuevo" : 
                            require "nuevo.php";
                            break;	
							
                        case "clientes" : 
                            require "clientes.php";
                            break;
							
                        case "reglas" : 
                            require "reglas.php";
                            break;
							
                        case "premios" : 
                            require "premios.php";
                            break;
							
                        case "recuperar-tarjeta" : 
                            require "recuperar-tarjeta.php";
                            break;
							
                        case "soporte" : 
                            require "soporte.php";
                            break;
						
						case "editar" : 
						    require "editar.php";
                            break;
							
                        default : 
                          // require "inicio.php";
                }
				
//require ("inicio.php");
?>
<!--Content Wrap-->
<!--Content Wrap-->

	<!--Activity Stats-->
                     
        <!--Quick Actions-->

      

</body>
</html>