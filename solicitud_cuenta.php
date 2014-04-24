<?php
@session_start();
$key=$_SESSION['result'];
$imag = $_POST['number'];
//echo "$key=======$imag";
		
{
 
}
?>
<?php
include "config.php";
/*Validacion del formulario para solicitar cuenta */
$pd_nombre= $_POST['pd_nombre'];
$pd_apellidos= $_POST['pd_apellidos'];
$pd_cedula= $_POST['pd_cedula'];
$pd_nacionalidad= $_POST['pd_nacionalidad'];
$pd_correo= $_POST['pd_correo'];
$pd_usuario= $_POST['pd_usuario'];
$pd_nombre_bs= $_POST['pd_nombre_bs'];
$pd_telefono= $_POST['pd_telefono'];
$pd_rif= $_POST['pd_rif'];
$pd_nit= $_POST['pd_nit'];
//Mayusculas y minusculas
$pd_nombre = ucwords ($pd_nombre);
$pd_apellidos = ucwords ($pd_apellidos);
$pd_cedula = strtoupper ($pd_cedula);
$pd_correo = strtolower ($pd_correo);
$pd_usuario = strtolower ($pd_usuario);
$pd_nombre_bs = ucwords ($pd_nombre_bs);
$pd_rif = strtoupper ($pd_rif);
$pd_nit = strtoupper ($pd_nit);
//utf8
$pd_nombre = utf8_decode ($pd_nombre);
$pd_apellidos = utf8_decode($pd_apellidos);
$pd_cedula = strtoupper ($pd_cedula);
$pd_correo = utf8_decode ($pd_correo);
$pd_usuario = utf8_decode ($pd_usuario);
$pd_nombre_bs = utf8_decode ($pd_nombre_bs);
$pd_rif = strtoupper ($pd_rif);
$pd_nit = strtoupper ($pd_nit);
//validando si esta registrado la cedula
if($imag==$key)	{
$sql = "SELECT * FROM usuarios WHERE cedula='$pd_cedula' or usuario='$pd_usuario' or rif_bs='$pd_rif'";
$q=mysql_query($sql,$conexion);
		$cont=mysql_num_rows($q);
		if($cont>=1){ 
			?><script>alert("datos usados en sistema");</script><?
			include 'index.php';
		}else {
			$sql="INSERT INTO usuarios (usuario,nombres,apellidos,cedula,telefono,correo,nombrebs,rif_bs,nit_bs,estatus,cod) VALUE ('$pd_usuario','$pd_nombre','$pd_apellidos','$pd_cedula','$pd_telefono','$pd_correo','$pd_nombre_bs','$pd_rif','$pd_nit','0','0')";
			$ingreso=mysql_query($sql,$conexion);
			include"index.php";
			?><script>alert("Datos enviados exitosamente, recibira a traves del correo electronico la clave de ingreso al sistema de inscripcion de bancos de sangre");</script><?
			}
}else {
	?><script>alert("Código Incorrecto");</script><?
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=index.php"></head></html>';
	}
?>