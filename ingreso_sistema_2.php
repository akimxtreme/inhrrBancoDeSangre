<?php
session_start();
?>
<?php
include "config.php";
/*Validacion del formulario para solicitar cuenta */
// Obtencion de variables
$usuario= $_POST['usuario'];
$contrasenia= $_POST['contrasenia'];
//minusculas
$usuario = strtolower ($usuario);
$contrasenia = strtolower ($contrasenia);
// encriptando la contraseña en md5
$contrasenia = md5 ( $contrasenia ); 
//validando accesos
// Administradores
$sql = "SELECT * FROM administradores where usuario='$usuario' and contrasenia='$contrasenia'";
$q=mysql_query($sql,$conexion);
$cont=mysql_num_rows($q);
if($cont>=1){
	
	while ($fila = mysql_fetch_array($q)){
	$usuario_bd = $fila['usuario'];
	$contrasenia_bd = $fila['contrasenia'];
	$estatus_bd = $fila['estatus'];
		$_SESSION['usuario']= $usuario;
		$_SESSION['contrasenia']= $contrasenia;
		$_SESSION['estatus']= $estatus_bd;
		echo '<html><head><meta http-equiv="REFRESH" content="0; url=administracion.php"></head></html>';
		?><script>alert("Espacio - Administraci\u00f3n");</script><?
}
}else{
// Usuario Común
$sql = "SELECT * FROM usuarios where usuario='$usuario' and contrasenia='$contrasenia'";
$r=mysql_query($sql,$conexion);
$cont_r=mysql_num_rows($r);
if($cont_r>=1){
	while ($fila = mysql_fetch_array($r)){
	$usuario_bd = $fila['usuario'];
	$contrasenia_bd = $fila['contrasenia'];
	$estatus_bd = $fila['estatus'];
	$codigo_bd = $fila['cod'];
		$_SESSION['usuario']= $usuario;
		$_SESSION['contrasenia']= $contrasenia;
		$_SESSION['estatus']= $estatus_bd;
		$_SESSION['cod']= $codigo_bd;
		echo '<html><head><meta http-equiv="REFRESH" content="0; url=espacio_usuario.php"></head></html>';
		?><script>alert("Sistema de Inscripci\u00f3n de Bancos de Sangre");</script><?
	
	}
  }else{
	  echo '<html><head><meta http-equiv="REFRESH" content="0; url=index.php"></head></html>';
		?><script>alert("Datos No V\u00e1lidos");</script><?
	  }
}
?>




