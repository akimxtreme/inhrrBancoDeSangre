<?php
session_start();
?>
<link href="css/estilos_banco_de_sangre.css" rel="stylesheet" type="text/css" />
<?php
include "config.php";
?>
<?php
/*Validacion del formulario para solicitar cuenta */
// Obtencion de variables
$usuario= $_POST['usuario'];
$contrasenia= $_POST['contrasenia'];

//minusculas
$usuario = strtolower ($usuario);
$contrasenia = strtolower ($contrasenia);
//validando si esta registrado en sistema
$sql = "SELECT * FROM usuarios";
$q=mysql_query($sql,$conexion);

while ($fila = mysql_fetch_array($q)){
	$usuario_bd = $fila['usuario'];
	$contrasenia_bd = $fila['contrasenia'];
	$estatus_bd = $fila['estatus'];
	$codigo_bd = $fila['cod'];
	if($usuario == $usuario_bd & $contrasenia == $contrasenia_bd){
		$_SESSION['usuario']= $usuario;
		$_SESSION['contrasenia']= $contrasenia;
		$_SESSION['estatus']= $estatus_bd;
		$_SESSION['cod']= $codigo_bd;
		//Estatus de los usuarios del sistema
		
		
		switch($estatus_bd){
			case '1': echo '<html><head><meta http-equiv="REFRESH" content="0; url=formulario_banco_de_sangre.php"></head></html>'; break;
			case '2': echo '<html><head><meta http-equiv="REFRESH" content="0; url=administracion.php"></head></html>';break;
			case '3': echo '<html><head><meta http-equiv="REFRESH" content="0; url=administracion.php"></head></html>';break;
			case '4': echo '<html><head><meta http-equiv="REFRESH" content="0; url=administracion.php"></head></html>';break;
			case '5': echo '<html><head><meta http-equiv="REFRESH" content="0; url=administracion.php"></head></html>';break;
		}
		
		
		}
}
?>
<div class="bs_java"><a class="bs_java_2" href="index.php">Datos incorrectos / Regresar a la principal</a></div>



