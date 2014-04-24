<?php
session_start();
?>

<?php

$codigo = $_SESSION['estatus'];
if($codigo == '1'){
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=index.php"></head></html>';
}else {

include "config.php";
$pd_nombre=$_POST['pd_nombre'];
$pd_apellidos=$_POST['pd_apellidos'];
$pd_correo=$_POST['pd_correo'];
$pd_usuario=$_POST['pd_usuario'];
$pd_telefono=$_POST['pd_telefono'];
$contrasenia=$_POST['txtCampoPassword'];
$estatus=$_POST['estatus'];
$pd_nombre= utf8_decode($pd_nombre);
$pd_apellidos=utf8_decode($pd_apellidos);
$pd_correo=utf8_decode($pd_correo);
$pd_usuario=utf8_decode($pd_usuario);
$pd_telefono=utf8_decode($pd_telefono);
$contrasenia=utf8_decode($contrasenia);
$contrasenia= md5 ($contrasenia);

$sql="UPDATE administradores SET nombre='$pd_nombre', apellido='$pd_apellidos', correo='$pd_correo', telefono='$pd_telefono', contrasenia='$contrasenia', estatus='$estatus' WHERE usuario='$pd_usuario'";
$ingreso=mysql_query($sql,$conexion);
?><script>alert("Datos modificados exitosamente");</script><?
echo '<html><head><meta http-equiv="REFRESH" content="0; url=cuentas_privilegios.php"></head></html>';
}
?>

