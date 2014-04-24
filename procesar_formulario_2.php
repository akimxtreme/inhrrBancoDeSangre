<?php
session_start();
?>
<?php
$codigo = $_SESSION['estatus'];
$usuario =$_SESSION['usuario'];
include "config.php";
$datos_de_banco_sangre=$_POST['datos_de_banco_sangre'];
isset($datos_de_banco_sangre);
$establecimiento_asistencial=$_POST['establecimiento_asistencial'];
isset($establecimiento_asistencial);
$dependiente=$_POST['dependiente'];
isset($dependiente);
$datos_del_responsable_director_1=$_POST['datos_del_responsable_director_1'];
isset($datos_del_responsable_director_1);
$datos_del_responsable_director_2=$_POST['datos_del_responsable_director_2'];
isset($datos_del_responsable_director_2);
$datos_del_responsable_coord=$_POST['datos_del_responsable_coord'];
isset($datos_del_responsable_coord);
$ambientes=$_POST['ambientes'];
isset($ambientes);
?>

<?php
if($datos_de_banco_sangre == 'Agregar'){
				# inicio - validaciones
				$nombre=$_POST['nombre'];
				$sector_pertenece=$_POST['sector_pertenece'];
				$otros_sector_pertenece=$_POST['otros_sector_pertenece'];
				if ($sector_pertenece=="Otros/Especifique"){
				$sector_pertenece=$otros_sector_pertenece;
				}	
				$direccion=$_POST['direccion'];
				$nro_rif=$_POST['nro_rif'];
				$nro_nit=$_POST['nro_nit'];
				$tipo_institucion=$_POST['tipo_institucion'];
				$otros_tipo_institucion=$_POST['otros_tipo_institucion'];
				if ($tipo_institucion=="Otros/Especifique"){
				$tipo_institucion=$otros_tipo_institucion;
				}
				$situacion_propiedad_inmueble=$_POST['situacion_propiedad_inmueble'];
				$otros_situacion_propiedad_inmueble=$_POST['otros_situacion_propiedad_inmueble'];
				if ($situacion_propiedad_inmueble=="Otros/Especifique"){
				$situacion_propiedad_inmueble=$otros_situacion_propiedad_inmueble;
				}
				$nro_telefono=$_POST['nro_telefono'];
				$nro_telefono_2=$_POST['nro_telefono_2'];				
				$nro_fax=$_POST['nro_fax'];
				$correo_electronico=$_POST['correo_electronico'];
				$correo_electronico_2=$_POST['correo_electronico_2'];
				$pagina_web=$_POST['pagina_web'];
				$dependiente =$_POST['dependiente'];
				$fecha=$_POST['fecha'];
				$nro_solicitud=$_POST['nro_solicitud'];
				
	$sql="UPDATE tmp_datos_de_banco_sangre SET nombre='$nombre', sector_pertenece='$sector_pertenece', nro_rif='$nro_rif', nro_nit='$nro_nit', nro_telefono='$nro_telefono', nro_telefono_2='$nro_telefono_2', correo_electronico='$correo_electronico', correo_electronico_2='$correo_electronico_2', nro_fax='$nro_fax', pagina_web='$pagina_web', tipo_institucion='$tipo_institucion', situacion_propiedad_inmueble='$situacion_propiedad_inmueble', fecha='$fecha', nro_solicitud='$nro_solicitud' WHERE usuario='$usuario'";	
	$ingreso=mysql_query($sql,$conexion);
	
	?><script>alert("Datos del Banco de Sangre Almacenados Exitosamente");</script><?
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=formulario_banco_de_sangre_2.php"></head></html>';
			}
?>
<?php
if($establecimiento_asistencial == 'Agregar' & $dependiente =='si'){
				# inicio - validaciones
				$razon_social=$_POST['razon_social'];
				$nro_registro_sanitario=$_POST['nro_registro_sanitario'];
				$nro_rif_es=$_POST['nro_rif_es'];
				$nro_nit_es=$_POST['nro_nit_es'];
				$nro_telefono_es=$_POST['nro_telefono_es'];
				$nro_fax_es=$_POST['nro_fax_es'];
				$correo_electronico_es=$_POST['correo_electronico_es'];
				$pagina_web_es=$_POST['pagina_web_es'];
				$tipo_institucion_es=$_POST['tipo_institucion_es'];
				$otros_tipo_institucion_es=$_POST['otros_tipo_institucion_es'];
				if ($tipo_institucion_es=="Otros/Especifique"){
				$tipo_institucion_es=$otros_tipo_institucion_es;
				}				
				$situacion_propiedad_inmueble_es=$_POST['situacion_propiedad_inmueble_es'];
				$otros_situacion_propiedad_inmueble_es=$_POST['otros_situacion_propiedad_inmueble_es'];
				if ($situacion_propiedad_inmueble_es=="Otros/Especifique"){
				$situacion_propiedad_inmueble_es=$otros_situacion_propiedad_inmueble_es;
				}
				
				
				
				
				
	$sql="UPDATE tmp_establecimiento_medico_asistencial SET razon_social='$razon_social', nro_registro_sanitario='$nro_registro_sanitario', nro_rif='$nro_rif_es', nro_nit='$nro_nit_es', nro_telefono='$nro_telefono_es', nro_fax='$nro_fax_es', correo_electronico='$correo_electronico_es', pagina_web='$pagina_web_es', tipo_institucion='$tipo_institucion_es', situacion_propiedad_inmueble='$situacion_propiedad_inmueble_es' WHERE usuario='$usuario'";
	$ingreso=mysql_query($sql,$conexion);
	$sql="UPDATE tmp_datos_de_banco_sangre SET dependiente='$dependiente' WHERE usuario='$usuario'";
	$ingreso=mysql_query($sql,$conexion);
				
				
	
	?><script>alert("Datos del Establecimiento Medico Asistencial Almacenados Exitosamente");</script><?
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=formulario_banco_de_sangre_2.php"></head></html>';
	
			}else {
				echo '<html><head><meta http-equiv="REFRESH" content="0; url=formulario_banco_de_sangre_2.php"></head></html>';	
				}
?>
<?php
if($datos_del_responsable_director_1 == 'Agregar'){
				# inicio - validaciones
				$rs_nombre=$_POST['rs_nombre'];				
				$rs_apellido=$_POST['rs_apellido'];
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
				
				
	$sql="UPDATE tmp_datos_del_responsable SET rs_nombre='$rs_nombre', rs_apellido='$rs_apellido', rs_cedula='$rs_cedula', rs_profesion='$rs_profesion', rs_expedido='$rs_expedido', rs_especialidad='$rs_especialidad', rs_matricula='$rs_matricula', rs_colegio='$rs_colegio', rs_rif='$rs_rif', rs_correo_electronico='$rs_correo_electronico', rs_tlf_local='$rs_tlf_local', rs_tlf_movil='$rs_tlf_movil', rs_fax='$rs_fax' WHERE usuario='$usuario'";	
	$ingreso=mysql_query($sql,$conexion);
	?><script>alert("Datos del Responsable Almacenados Exitosamente");</script><?
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=formulario_banco_de_sangre_2.php"></head></html>';
			}
?>
<?php
if($datos_del_responsable_director_2 == 'Agregar'){
				# inicio - validaciones
				$dm_nombre=$_POST['dm_nombre'];				
				$dm_apellido=$_POST['dm_apellido'];
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
				
				
	$sql="UPDATE tmp_datos_del_responsable SET dm_nombre='$dm_nombre', dm_apellido='$dm_apellido', dm_cedula='$dm_cedula', dm_profesion='$dm_profesion', dm_expedido='$dm_expedido', dm_especialidad='$dm_especialidad', dm_matricula='$dm_matricula', dm_colegio='$dm_colegio', dm_rif='$dm_rif', dm_correo_electronico='$dm_correo_electronico', dm_tlf_local='$dm_tlf_local', dm_tlf_movil='$dm_tlf_movil', dm_fax='$dm_fax' WHERE usuario='$usuario'";	
	$ingreso=mysql_query($sql,$conexion);
	?><script>alert("Datos del Responsable Almacenados Exitosamente");</script><?
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=formulario_banco_de_sangre_2.php"></head></html>';
			}
?>
<?php
if($datos_del_responsable_coord == 'Agregar'){
				# inicio - validaciones
				$cr_nombre=$_POST['cr_nombre'];				
				$cr_apellido=$_POST['cr_apellido'];
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
				
				
	$sql="UPDATE tmp_datos_del_responsable SET cr_nombre='$cr_nombre', cr_apellido='$cr_apellido', cr_cedula='$cr_cedula', cr_profesion='$cr_profesion', cr_expedido='$cr_expedido', cr_especialidad='$cr_especialidad', cr_matricula='$cr_matricula', cr_colegio='$cr_colegio', cr_rif='$cr_rif', cr_correo_electronico='$cr_correo_electronico', cr_tlf_local='$cr_tlf_local', cr_tlf_movil='$cr_tlf_movil', cr_fax='$cr_fax' WHERE usuario='$usuario'";	
	$ingreso=mysql_query($sql,$conexion);
	?><script>alert("Datos del Responsable Almacenados Exitosamente");</script><?
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=formulario_banco_de_sangre_2.php"></head></html>';
			}
?>
<?php
if($ambientes == 'Agregar'){
				# inicio - validaciones
				$ut_seccion_donacion=$_POST['ut_seccion_donacion'];
					$ut_registro_recepcion=$_POST['ut_registro_recepcion'];
					$ut_examen_medico=$_POST['ut_examen_medico'];
					$ut_recuperacion=$_POST['ut_recuperacion'];
					$ut_cafetin=$_POST['ut_cafetin'];
					if($ut_seccion_donacion== 'no'){
						$sql="UPDATE tmp_unidades_transfusionales SET ut_seccion_donacion='$ut_seccion_donacion', ut_registro_recepcion='', ut_examen_medico='', ut_recuperacion='', ut_cafetin=''  WHERE usuario='$usuario'";	
						$ingreso=mysql_query($sql,$conexion);
	
						}else{
					$sql="UPDATE tmp_unidades_transfusionales SET ut_seccion_donacion='$ut_seccion_donacion', ut_registro_recepcion='$ut_registro_recepcion', ut_examen_medico='$ut_examen_medico', ut_recuperacion='$ut_recuperacion', ut_cafetin='$ut_cafetin'  WHERE usuario='$usuario'";	
					$ingreso=mysql_query($sql,$conexion);
						}			
				$ut_seccion_laboratorio=$_POST['ut_seccion_laboratorio'];
					$ut_serologia=$_POST['ut_serologia'];
					$ut_inmunohematologia=$_POST['ut_inmunohematologia'];
						if($ut_seccion_laboratorio== 'no'){
						$sql="UPDATE tmp_unidades_transfusionales SET ut_seccion_laboratorio='$ut_seccion_laboratorio', ut_serologia='', ut_inmunohematologia='' WHERE usuario='$usuario'";	
						$ingreso=mysql_query($sql,$conexion);
	
						}else{
					$sql="UPDATE tmp_unidades_transfusionales SET ut_seccion_laboratorio='$ut_seccion_laboratorio', ut_serologia='$ut_serologia', ut_inmunohematologia='$ut_inmunohematologia'  WHERE usuario='$usuario'";	
					$ingreso=mysql_query($sql,$conexion);
						}
				$ut_seccion_estadisticas=$_POST['ut_seccion_estadisticas'];
				$ut_seccion_procesamiento=$_POST['ut_seccion_procesamiento'];
				$ut_seccion_conservacion_almacen=$_POST['ut_seccion_conservacion_almacen'];
				$ut_seccion_secretaria=$_POST['ut_seccion_secretaria'];
					$sql="UPDATE tmp_unidades_transfusionales SET ut_seccion_estadisticas='$ut_seccion_estadisticas', ut_seccion_procesamiento='$ut_seccion_procesamiento', ut_seccion_conservacion_almacen='$ut_seccion_conservacion_almacen', ut_seccion_secretaria='$ut_seccion_secretaria'  WHERE usuario='$usuario'";	
				$ingreso=mysql_query($sql,$conexion);
				$participacion_programa_inhrr=$_POST['participacion_programa_inhrr'];
				$nro_participaciones_inhrr=$_POST['nro_participaciones_inhrr'];
				$participacion_descripcion_inhrr=$_POST['participacion_descripcion_inhrr'];
				$participacion_descripcion_inhrr_2=$_POST['participacion_descripcion_inhrr_2'];
				if ($participacion_programa_inhrr=="no"){
					$participacion_descripcion_inhrr=$participacion_descripcion_inhrr_2;
					}
					$sql="UPDATE tmp_unidades_transfusionales SET participacion_programa_inhrr='$participacion_programa_inhrr', nro_participaciones_inhrr='$nro_participaciones_inhrr', participacion_descripcion_inhrr='$participacion_descripcion_inhrr' WHERE usuario='$usuario'";	
				$ingreso=mysql_query($sql,$conexion);
				?><script>alert("Datos del Banco Unidades Transfusionales Almacenados Exitosamente");</script><?
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=formulario_banco_de_sangre_2.php"></head></html>';
			}
?>
