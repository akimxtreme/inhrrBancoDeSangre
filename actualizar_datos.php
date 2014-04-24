<?php
session_start();
?>

<?php

$codigo = $_SESSION['estatus'];
if($codigo == '1'){
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=index.php"></head></html>';
}else {

include "config.php";
$pd_cedula=$_POST['ced'];
$contrasenia=$_POST['txtCampoPassword'];
$contrasenia= md5 ($contrasenia);
$estatus=$_POST['estatus'];
$usuario =$_POST['pd_usuario'];




$sql="UPDATE usuarios SET contrasenia='$contrasenia', estatus='$estatus', cod='0' WHERE cedula='$pd_cedula'";
$ingreso=mysql_query($sql,$conexion);




$sql2 = "SELECT * FROM datos_del_responsable WHERE usuario='$usuario'";
$q=mysql_query($sql2,$conexion);
		$cont=mysql_num_rows($q);
		if($cont>=1){ 
		$sql2="UPDATE datos_del_responsable SET usuario='$usuario', cod='1' WHERE usuario='$usuario'";
$ingreso=mysql_query($sql2,$conexion);
			}else {
			$sql2="INSERT INTO datos_del_responsable (usuario,cod) VALUE ('$usuario','1')";
$ingreso=mysql_query($sql2,$conexion);
			}
/* temporal */
$sql2 = "SELECT * FROM tmp_datos_del_responsable WHERE usuario='$usuario'";
$q=mysql_query($sql2,$conexion);
		$cont=mysql_num_rows($q);
		if($cont>=1){ 
		$sql2="UPDATE tmp_datos_del_responsable SET usuario='$usuario', cod='1' WHERE usuario='$usuario'";
$ingreso=mysql_query($sql2,$conexion);
			}else {
			$sql2="INSERT INTO tmp_datos_del_responsable (usuario,cod) VALUE ('$usuario','1')";
$ingreso=mysql_query($sql2,$conexion);
			}



$sql3 = "SELECT * FROM datos_de_banco_sangre WHERE usuario='$usuario'";
$q=mysql_query($sql3,$conexion);
		$cont=mysql_num_rows($q);
		if($cont>=1){ 
		$sql3="UPDATE datos_de_banco_sangre SET usuario='$usuario', cod='1' WHERE usuario='$usuario'";
$ingreso=mysql_query($sql3,$conexion);
			}else {
			$sql3="INSERT INTO datos_de_banco_sangre (usuario,cod) VALUE ('$usuario','1')";
$ingreso=mysql_query($sql3,$conexion);
			}
/* temporal */
$sql3 = "SELECT * FROM tmp_datos_de_banco_sangre WHERE usuario='$usuario'";
$q=mysql_query($sql3,$conexion);
		$cont=mysql_num_rows($q);
		if($cont>=1){ 
		$sql3="UPDATE tmp_datos_de_banco_sangre SET usuario='$usuario', cod='1' WHERE usuario='$usuario'";
$ingreso=mysql_query($sql3,$conexion);
			}else {
			$sql3="INSERT INTO tmp_datos_de_banco_sangre (usuario,cod) VALUE ('$usuario','1')";
$ingreso=mysql_query($sql3,$conexion);
			}
			
$sql4 = "SELECT * FROM establecimiento_medico_asistencial WHERE usuario='$usuario'";
$q=mysql_query($sql4,$conexion);
		$cont=mysql_num_rows($q);
		if($cont>=1){ 
		$sql4="UPDATE establecimiento_medico_asistencial SET usuario='$usuario', cod='1' WHERE usuario='$usuario'";
$ingreso=mysql_query($sql4,$conexion);
			}else {
			$sql4="INSERT INTO establecimiento_medico_asistencial (usuario,cod) VALUE ('$usuario','1')";
$ingreso=mysql_query($sql4,$conexion);
			}
/* temporal */
$sql4 = "SELECT * FROM tmp_establecimiento_medico_asistencial WHERE usuario='$usuario'";
$q=mysql_query($sql4,$conexion);
		$cont=mysql_num_rows($q);
		if($cont>=1){ 
		$sql4="UPDATE tmp_establecimiento_medico_asistencial SET usuario='$usuario', cod='1' WHERE usuario='$usuario'";
$ingreso=mysql_query($sql4,$conexion);
			}else {
			$sql4="INSERT INTO tmp_establecimiento_medico_asistencial (usuario,cod) VALUE ('$usuario','1')";
$ingreso=mysql_query($sql4,$conexion);
			}
			
			
$sql5 = "SELECT * FROM unidades_transfusionales WHERE usuario='$usuario'";
$q=mysql_query($sql5,$conexion);
		$cont=mysql_num_rows($q);
		if($cont>=1){ 
		$sql5="UPDATE unidades_transfusionales SET usuario='$usuario', cod='1' WHERE usuario='$usuario'";
$ingreso=mysql_query($sql5,$conexion);
			}else {
			$sql5="INSERT INTO unidades_transfusionales (usuario,cod) VALUE ('$usuario','1')";
$ingreso=mysql_query($sql5,$conexion);
			}
/* temporal */
$sql5 = "SELECT * FROM tmp_unidades_transfusionales WHERE usuario='$usuario'";
$q=mysql_query($sql5,$conexion);
		$cont=mysql_num_rows($q);
		if($cont>=1){ 
		$sql5="UPDATE tmp_unidades_transfusionales SET usuario='$usuario', cod='1' WHERE usuario='$usuario'";
$ingreso=mysql_query($sql5,$conexion);
			}else {
			$sql5="INSERT INTO tmp_unidades_transfusionales (usuario,cod) VALUE ('$usuario','1')";
$ingreso=mysql_query($sql5,$conexion);
			}
			
echo '<html><head><meta http-equiv="REFRESH" content="0; url=administracion_solicitud_cta.php"></head></html>';
}

?>

