<?php 
 	//Preguntar si los valores existen
	$oculto = ""; //inicializando la variable
	$usuario = "";
	$nombre = "";
	$clave = "";
	$tipo = "";
	
	if (isset($_POST["txtOculto"])) //si trae valores
	{
		$oculto =  $_POST["txtOculto"];
	}

	if (isset($_POST["txtUsuario"])) //si trae valores
	{
		$oculto =  $_POST["txtUsuario"];
	}

	if (isset($_POST["txtNombre"])) //si trae valores
	{
		$oculto =  $_POST["txtNombre"];
	}

	if (isset($_POST["txtClave"])) //si trae valores
	{
		$oculto =  $_POST["txtClave"];
	}

	if (isset($_POST["txtTipo"])) //si trae valores
	{
		$oculto =  $_POST["txtTipo"];
	}

	function guardaUsusario($usuario,$nombre,$clave,$tipo)
	{
		//conectarse al servidor de MySQL
		//mysql_connect (servidor,usuario,contraseña)
		$conexion = mysql_connect("localhost","root","")
		//seleccionamos la Base de Datos
		mysql_select_db("bd2163");
		$consulta = "insert into usuarios values('".$usuario."','".$nombre."','".$clave."','".$tipo."')"
		//Ejecutamos la consulta
		mysql_query($consulta);
		//Preguntamos si hubi inserción
		if (msql_affected_rows() > 0) 
		{
			print "Registro guardado";
			print "<a href='ejemplo.php'>Regresar</a>";
		}
		else
		{
			print "No se pudo guardar el registro":
		}
	}

	switch ($oculto) {
		case 'guardaUsuario':
			guardaUsuario($usuario,$nombre,$clave,$tipo)

			break;
		
		default:
			# code...
			break;
	}
 ?>
