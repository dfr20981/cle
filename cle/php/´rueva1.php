<?php
//conectamos Con el servidor
	$connect = mysqli_connect("localhost","root","");
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysql_select_db('cel');
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
$nombre=$_POST['nombre'];
$apaterno=$_POST['apaterno'];
$amaterno=$_POST['amaterno'];
$numcontrol=$_POST['numcontrol'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$id=$_POST['id'];
	//hacemos la sentencia de sql
$sql="INSERT INTO datos VALUES('$nombre',
							   '$apaterno',
							   '$amaterno',
							   '$numcontrol',
							   '$tel',
							   '$email',
							   '$id')";
//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
 ?>