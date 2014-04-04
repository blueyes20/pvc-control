<?php

/*
==========================================================
=========OBTENEMOS LAS VARIABLES DE CONEXIÓN==============
===ESTAS SOLO SE PONEN UNA VEZ EN TOOOOODO EL PROYECTO====
=========================================================
*/
define ('MYSQL_SERVER', "localhost");
define ('MYSQL_USER', "root");
define ('MYSQL_PASS', "");
define ('MYSQL_DB', "pvc-control");

/*
==========================================================
======= DEFINIMOS LA FUNCION DE CONECTAR A LA BBDD =======
==========================================================*/

function conectar(){
	$conexion= mysqli_connect (MYSQL_SERVER, MYSQL_USER, MYSQL_PASS, MYSQL_DB);
	//echo $conexion;
		if ($conexion==FALSE){
			echo  "error de conexion".mysqli_connect_error();
			exit();
			}else{
				return $conexion;
				}
}


/*
==========================================================
===== DEFINIMOS LA FUNCION DE DESCONECTAR A LA BBDD ======
==========================================================
*/

function desconectar($conexion){
	mysqli_close ($conexion);
}

/*
==========================================================
======= DEFINIMOS LA FUNCION DE CONSULTAR A LA BBDD ======
==========================================================
*/

function consulta_sql ($conexion, $sql) {
$resultado=mysqli_query ($conexion, $sql);
return $resultado;
}

/*
==========================================================
======= DEFINIMOS LA FUNCION DE LIBERAR VARIABLES ========
==========================================================
*/

function liberar($a){
mysqli_free_result ($a);
}

/*
==========================================================
FUNCIÓN QUE GENERA UN SELECT CON LAS CATEGORIAS DE LA BBDD
==========================================================

function generaCategorias($conexion){
	$sql="SELECT id_categoria, nombre FROM categorias";
	$resultado=consulta_sql($conexion,$sql);
 echo "<select name='categorias_id' id='categorias' class='input' onChange='cargaContenido(this.id)'>";
 echo "<option value='0'>Elige una categoría</option>";
while ($fila = mysqli_fetch_row($resultado))
{
     echo "<option value='".$fila[0]."'>".$fila[1]."</option>";
}
echo '</select>';
}

/*
==========================================================
FUNCIÓN QUE GENERA UN SELECT CON LAS PROVINCIAS DE LA BBDD
==========================================================

function generaProvincias($conexion)
{
	
	$consulta2=("SELECT id_provincia, provincia FROM provincias");
	$resultado2=consulta_sql($conexion,$consulta2);
	
	//desconectar();

	// Voy imprimiendo el primer select compuesto por los paises
	
	echo "<select name='provincias_id' id='provincias' class='input'>";
 echo "<option value='0'>Elige una provincia</option>";
while ($fila_dos = mysqli_fetch_row($resultado2))
{
     echo "<option value='".$fila_dos[0]."'>".$fila_dos[1]."</option>";
}
echo '</select>';
}


/*
=============================================================
 FUNCIÓN QUE LISTA LAS CATEGORIAS Y SUBCATEGORIAS DE LA BBDD
 ANIDADAS EN DOS DIVS Y CON ENLACES PARA ARTÍCULOS..........
=============================================================


function listarCategorias_articulos($conexion){
	//elecionamos los ids y los nombres de las categorias
	$sql="SELECT id_categoria, nombre FROM categorias";
	$resultado=consulta_sql($conexion,$sql);
	//mientras existan resultado mostrará la categorias y subcategorias...
	while ($categoria = mysqli_fetch_assoc($resultado))
	    {
	 	$id_cat=$categoria["id_categoria"];
		//categorias
		echo '<div id="categoria_listada">';
		//<a href="www.flashmania.es">asdsad</a>
        echo '<li><a href="articulos/articulos.php?categoria='.$categoria["id_categoria"].'">Artículos de '.$categoria ["nombre"].'</a></li>';
		//subcategorias
		$query='SELECT id_subcategoria, nombre FROM subcategorias where id_categoria='.$id_cat.' LIMIT 3';
		$resul=consulta_sql($conexion,$query);
		echo '<div id="subcategoria_listada">';
		while ($subcategorias = mysqli_fetch_assoc($resul)){
		;
		
		echo '<a href="articulos/articulos.php?subcategoria='.$subcategorias["id_subcategoria"].'">'.$subcategorias["nombre"].'</a>, ';
		}
		echo'</div></div>';
		}		
	}


/*
=============================================================
 FUNCIÓN QUE LISTA LAS CATEGORIAS Y SUBCATEGORIAS DE LA BBDD
 ANIDADAS EN DOS DIVS Y CON ENLACES PARA EMPRESAS..........
=============================================================


function listarCategorias_empresas($conexion){
	//elecionamos los ids y los nombres de las categorias
	$sql="SELECT id_categoria, nombre FROM categorias";
	$resultado=consulta_sql($conexion,$sql);
	//mientras existan resultado mostrará la categorias y subcategorias...
	while ($categoria = mysqli_fetch_assoc($resultado))
	    {
	 	$id_cat=$categoria['id_categoria'];
		//categorias
		echo '<div id="categoria_listada">';
		//<a href="www.flashmania.es">asdsad</a>
        echo '<li><a href="empresas.php?categoria='.$categoria['id_categoria'].'">'.$categoria ['nombre'].'</a></li>';
		//subcategorias
		$query='SELECT id_subcategoria, nombre FROM subcategorias where id_categoria='.$id_cat;
		$resul=consulta_sql($conexion,$query);
		echo '<div id="subcategoria_listada">';
		while ($subcategorias = mysqli_fetch_row($resul)){
		;
		
		echo '<a href="empresas.php?subcategoria='.$subcategorias[0].'">'.$subcategorias[1].'</a>, ';
		}
		echo'</div></div>';
		}		
	}

*/
?>