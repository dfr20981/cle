<?php
function random_password(){
	$longitud = 10;// longituda del password
	$pass = substr(md5(rand()),0,$longitud )
	return($pass);
}

$texto_mail=$_POST["contraseña"];
$usuario_destino=$_POST["email"];
$asunto=$_POST["contraseña"];

$mandalo=mail($usuario_destino, $texto_mail, $asunto);
if ($mandalo) {
	# code...
	echo "mensaje enviado";
}else{
	echo "fallo";
}
?>