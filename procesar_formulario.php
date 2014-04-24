<?php
session_start();
?>
<?php
$codigo = $_SESSION['estatus'];
$usuario = $_SESSION['usuario'];
$cod_bd = $_SESSION['cod'];
?>
<?php
include "config.php";

/*Numero de Solicitud y Fecha de Solicitud*/
$nro_solicitud = $_POST['nro_solicitud'];
$fecha= $_POST['fecha'];
/*Datos del Banco de Sangre*/
// Nombre
$nombre=$_POST['nombre'];
// Sector
$sector_otros=$_POST['sector_otros'];
$sector=$_POST['sector'];
if ($sector=="otros"){
	$sector=$sector_otros;
	}	
// Dirección
$procedencia=$_POST['procedencia'];
$ls_producto=$_POST['ls_producto'];
$ciudad=$_POST['ciudad'];
$detalles=$_POST['detalles'];
$sql="SELECT * FROM estado WHERE codestado='$procedencia'";
	$seleccion=mysql_query($sql,$conexion);
		while ($row = mysql_fetch_array($seleccion)){
				$estado=$row['estado'];
				}
$sql="SELECT * FROM ciudad WHERE cod_ciudad='$ls_producto'";
	$seleccion=mysql_query($sql,$conexion);
		while ($row = mysql_fetch_array($seleccion)){
				$des_ciudad=$row['des_ciudad'];
				}
$estado = ucwords($estado);	
$des_ciudad = ucwords($des_ciudad);				
$direccion=$estado.", ".$des_ciudad.", ".$ciudad." ".$detalles;
// Rif
$rif= $_POST['rif'];
// Nit
$nit= $_POST['nit'];
//Validar si los campos Rif y Nit estan llenos
$sql="SELECT * FROM datos_de_banco_sangre WHERE nombre='$nombre'";
	$seleccion=mysql_query($sql,$conexion);
		while ($row = mysql_fetch_array($seleccion)){
				$nro_rif=$row['nro_rif'];
				$nro_nit=$row['nro_nit'];
				}
			if($nro_rif==""){
			$sql="UPDATE datos_de_banco_sangre SET nro_rif='$rif' WHERE usuario='$usuario'";
			$q=mysql_query($sql,$conexion);
			}
			if($nro_nit==""){
			$sql="UPDATE datos_de_banco_sangre SET nro_nit='$nit' WHERE usuario='$usuario'";
			$q=mysql_query($sql,$conexion);
			}
// Telefono
$telefono= $_POST['telefono'];
// Telefono 2
$telefono_2= $_POST['telefono_2'];
// Fax
$fax= $_POST['fax'];
// Correo Electrónico
$correo_electronico= $_POST['correo_electronico'];
// Correo Electrónico 2
$correo_electronico_2= $_POST['correo_electronico_2'];
// Página Web
$pagina_web= $_POST['pagina_web'];
// Tipo de Institución
$tipo_situacion_otros=$_POST['tipo_situacion_otros'];
$tipo_situacion= $_POST['tipo_situacion'];
if ($tipo_situacion=="otros"){
	$tipo_situacion=$tipo_situacion_otros;
	}
// Inmueble
$tipo_inmueble_otros=$_POST['tipo_inmueble_otros'];
$inmueble= $_POST['inmueble'];
if ($inmueble=="otros"){
	$inmueble=$tipo_inmueble_otros;
	}
$sql0="UPDATE datos_de_banco_sangre SET  nombre='$nombre',nro_rif='$rif',nro_solicitud='$nro_solicitud',fecha='$fecha',sector_pertenece='$sector',direccion='$direccion',nro_telefono='$telefono',nro_telefono_2='$telefono_2',nro_fax='$fax',correo_electronico='$correo_electronico',correo_electronico_2='$correo_electronico_2',pagina_web='$pagina_web',tipo_institucion='$tipo_situacion',situacion_propiedad_inmueble='$inmueble' WHERE usuario='$usuario'";
$q=mysql_query($sql0,$conexion);
/*Datos del Establecimiento Médico Asistencial donde funciona el Banco de Sangre*/
$dependiente=$_POST['dependiente'];
$razon_social=$_POST['es_razon_social'];
$nro_registro_sanitario=$_POST['es_registro_sanitario'];
$nro_rif=$_POST['es_rif'];
$nro_nit=$_POST['es_nit'];
$nro_telefono=$_POST['es_telefono'];
$nro_fax=$_POST['es_fax'];
$correo_electronico=$_POST['es_correo_electronico'];
$pagina_web=$_POST['es_pagina_web'];
$tipo_institucion=$_POST['es_tipo_situacion'];
$tipo_institucion_otros=$_POST['es_tipo_situacion_otros'];
if($tipo_institucion=="otros"){
	$tipo_institucion=$tipo_institucion_otros;
	}
$situacion_propiedad_inmueble=$_POST['es_inmueble'];
$situacion_propiedad_inmueble_otros=$_POST['es_tipo_inmueble_otros'];
if($situacion_propiedad_inmueble=="otros"){
	$situacion_propiedad_inmueble=$situacion_propiedad_inmueble_otros;
	}
$sql0="UPDATE datos_de_banco_sangre SET  dependiente='$dependiente' WHERE usuario='$usuario'";
$q=mysql_query($sql0,$conexion);
if($dependiente=="si"){
	$sql0="UPDATE establecimiento_medico_asistencial SET  razon_social='$razon_social',nro_registro_sanitario='$nro_registro_sanitario',nro_rif='$nro_rif',nro_nit='$nro_nit',nro_telefono='$nro_telefono',nro_fax='$nro_fax',correo_electronico='$correo_electronico',pagina_web='$pagina_web',tipo_institucion='$tipo_institucion',situacion_propiedad_inmueble='$situacion_propiedad_inmueble' WHERE usuario='$usuario'";
	$q=mysql_query($sql0,$conexion);
		}
/*Datos del Responsable*/
	/*Director médico responsable del establecimiento médico asistencial*/
$rs_nombre=$_POST['rs_nombre'];
$rs_cedula=$_POST['rs_cedula'];
$rs_profesion=$_POST['rs_profesion'];
$rs_expedido=$_POST['rs_expedido'];
$rs_especialidad=$_POST['rs_especialidad'];
$rs_matricula=$_POST['rs_matricula'];
$rs_colegio=$_POST['rs_colegio'];
$rs_rif=$_POST['rs_rif'];
$rs_correo_electronico=$_POST['rs_correo_electronico'];
$rs_tlf_local=$_POST['rs_tlf_local'];
$rs_tlf_movil=$_POST['rs_tlf_movil'];
$rs_fax=$_POST['rs_fax'];
/*Director Médico responsable del banco de sangre y unidades transfusionales (Director Médico)*/
$dm_nombre=$_POST['dm_nombre'];
$dm_cedula=$_POST['dm_cedula'];
$dm_profesion=$_POST['dm_profesion'];
$dm_expedido=$_POST['dm_expedido'];
$dm_especialidad=$_POST['dm_especialidad'];
$dm_matricula=$_POST['dm_matricula'];
$dm_colegio=$_POST['dm_colegio'];
$dm_rif=$_POST['dm_rif'];
$dm_correo_electronico=$_POST['dm_correo_electronico'];
$dm_tlf_local=$_POST['dm_tlf_local'];
$dm_tlf_movil=$_POST['dm_tlf_movil'];
$dm_fax=$_POST['dm_fax'];
/*Coordinador responsable del banco de sangre y unidades transfusionales*/
$cr_nombre=$_POST['cr_nombre'];
$cr_cedula=$_POST['cr_cedula'];
$cr_profesion=$_POST['cr_profesion'];
$cr_expedido=$_POST['cr_expedido'];
$cr_especialidad=$_POST['cr_especialidad'];
$cr_matricula=$_POST['cr_matricula'];
$cr_colegio=$_POST['cr_colegio'];
$cr_rif=$_POST['cr_rif'];
$cr_correo_electronico=$_POST['cr_correo_electronico'];
$cr_tlf_local=$_POST['cr_tlf_local'];
$cr_tlf_movil=$_POST['cr_tlf_movil'];
$cr_fax=$_POST['cr_fax'];
$sql3 = "UPDATE datos_del_responsable SET rs_nombre='$rs_nombre',rs_cedula='$rs_cedula',rs_profesion='$rs_profesion',rs_expedido='$rs_expedido',rs_especialidad='$rs_especialidad',rs_matricula='$rs_matricula',rs_colegio='$rs_colegio',rs_rif='$rs_rif',rs_correo_electronico='$rs_correo_electronico',rs_tlf_local='$rs_tlf_local',rs_tlf_movil='$rs_tlf_movil',rs_fax='$rs_fax',dm_nombre='$dm_nombre',dm_cedula='$dm_cedula',dm_profesion='$dm_profesion',dm_expedido='$dm_expedido',dm_especialidad='$dm_especialidad',dm_matricula='$dm_matricula',dm_colegio='$dm_colegio',dm_rif='$dm_rif',dm_correo_electronico='$dm_correo_electronico',dm_tlf_local='$dm_tlf_local',dm_tlf_movil='$dm_tlf_movil',dm_fax='$dm_fax',cr_nombre='$cr_nombre',cr_cedula='$cr_cedula',cr_profesion='$cr_profesion',cr_expedido='$cr_expedido',cr_especialidad='$cr_especialidad',cr_matricula='$cr_matricula',cr_colegio='$cr_colegio',cr_rif='$cr_rif',cr_correo_electronico='$cr_correo_electronico',cr_tlf_local='$cr_tlf_local',cr_tlf_movil='$cr_tlf_movil',cr_fax='$cr_fax' WHERE usuario='$usuario'";
$q=mysql_query($sql3,$conexion);
/*Banco de Sangre y Unidades Transfusionales*/

$ut_seccion_donacion=$_POST['ut_seccion_donacion'];
$ut_registro_recepcion=$_POST['ut_registro_recepcion'];
$ut_examen_medico=$_POST['ut_examen_medico'];
$ut_recuperacion=$_POST['ut_recuperacion'];
$ut_cantina=$_POST['ut_cantina'];
$ut_seccion_procesamiento=$_POST['ut_seccion_procesamiento'];
$ut_seccion_laboratorio=$_POST['ut_seccion_laboratorio'];
$ut_serologia=$_POST['ut_serologia'];
$ut_inmunohematologia=$_POST['ut_inmunohematologia'];
$ut_seccion_conservacion_almacen=$_POST['ut_seccion_conservacion_almacen'];
$ut_seccion_estadisticas=$_POST['ut_seccion_estadisticas'];
$ut_seccion_secretaria=$_POST['ut_seccion_secretaria'];
$pregunta=$_POST['pregunta'];
$si_ciclo=$_POST['si_ciclo'];
$no_especifique=$_POST['no_especifique'];

if($ut_seccion_donacion='Seccion de donación'){
$sql4 = "UPDATE unidades_transfusionales SET ut_seccion_donacion='$ut_seccion_donacion',ut_registro_recepcion='$ut_registro_recepcion',ut_examen_medico='$ut_examen_medico',ut_recuperacion='$ut_recuperacion',ut_cantina='$ut_cantina' WHERE usuario='$usuario'";
$q=mysql_query($sql4,$conexion);
}
if($ut_seccion_laboratorio='Seccion de laboratorio'){
$sql4 = "UPDATE unidades_transfusionales SET ut_seccion_laboratorio='$ut_seccion_laboratorio',ut_serologia='$ut_serologia',ut_inmunohematologia='$ut_inmunohematologia' WHERE usuario='$usuario'";
$q=mysql_query($sql4,$conexion);
}
$sql4 = "UPDATE unidades_transfusionales SET ut_seccion_donacion='$ut_seccion_donacion',ut_registro_recepcion='$ut_registro_recepcion',ut_examen_medico='$ut_examen_medico',ut_recuperacion='$ut_recuperacion',ut_cantina='$ut_cantina',ut_seccion_procesamiento='$ut_seccion_procesamiento',ut_seccion_laboratorio='$ut_seccion_laboratorio',ut_serologia='$ut_serologia',ut_inmunohematologia='$ut_inmunohematologia',ut_seccion_conservacion_almacen='$ut_seccion_conservacion_almacen',ut_seccion_estadisticas='$ut_seccion_estadisticas',ut_seccion_secretaria='$ut_seccion_secretaria',pregunta='$pregunta' WHERE usuario='$usuario'";
$q=mysql_query($sql4,$conexion);

$sql4 = "UPDATE usuarios SET cod='1' WHERE usuario='$usuario'";
$q=mysql_query($sql4,$conexion);
?><script>alert("datos almacenados");</script><?
echo '<html><head><meta http-equiv="REFRESH" content="0; url=index.php"></head></html>';
?>

</body>
</html>

