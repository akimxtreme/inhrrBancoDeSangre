<?php
session_start();
?>
<?php
$codigo = $_SESSION['estatus'];
$usuario =$_SESSION['usuario'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta - Planilla de Incripcion</title>
<link href="css/estilos_banco_de_sangre.css" rel="stylesheet" type="text/css" />
<?php
include "config.php";
?>
<?php
$sql1="SELECT * FROM datos_de_banco_sangre WHERE usuario='$usuario'";
			$seleccion=mysql_query($sql1,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
				$sector_pertenece=$row['sector_pertenece'];
				$nombre=$row['nombre'];
				$direccion=$row['direccion'];
				$nro_rif=$row['nro_rif'];
				$nro_nit=$row['nro_nit'];
				$tipo_institucion=$row['tipo_institucion'];
				$situacion_propiedad_inmueble=$row['situacion_propiedad_inmueble'];
				$nro_telefono=$row['nro_telefono'];
				$nro_telefono_2=$row['nro_telefono_2'];
				$nro_fax=$row['nro_fax'];
				$correo_electronico=$row['correo_electronico'];
				$correo_electronico_2=$row['correo_electronico_2'];
				$pagina_web=$row['pagina_web'];
				$nro_solicitud=$row['nro_solicitud'];
				$dependiente=$row['dependiente'];
				$fecha=$row['fecha'];
			}
?>
<?php
$sql1="SELECT * FROM establecimiento_medico_asistencial WHERE usuario='$usuario'";
			$seleccion=mysql_query($sql1,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
				$es_razon_social=$row['razon_social'];
				$es_nro_registro_sanitario=$row['nro_registro_sanitario'];
				$es_nro_rif=$row['nro_rif'];
				$es_nro_nit=$row['nro_nit'];
				$es_tipo_institucion=$row['tipo_institucion'];
				$es_situacion_propiedad_inmueble=$row['situacion_propiedad_inmueble'];
				$es_nro_telefono=$row['nro_telefono'];
				$es_nro_fax=$row['nro_fax'];
				$es_correo_electronico=$row['correo_electronico'];
				$es_pagina_web=$row['pagina_web'];
			}
?>
<?php
$sql1="SELECT * FROM datos_del_responsable WHERE usuario='$usuario'";
			$seleccion=mysql_query($sql1,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
				$rs_nombre=$row['rs_nombre'];
				$rs_cedula=$row['rs_cedula'];
				$rs_profesion=$row['rs_profesion'];
				$rs_expedido=$row['rs_expedido'];
				$rs_especialidad=$row['rs_especialidad'];
				$rs_matricula=$row['rs_matricula'];
				$rs_colegio=$row['rs_colegio'];
				$rs_rif=$row['rs_rif'];
				$rs_correo_electronico=$row['rs_correo_electronico'];
				$rs_tlf_local=$row['rs_tlf_local'];
				$rs_tlf_movil=$row['rs_tlf_movil'];
				$rs_fax=$row['rs_fax'];
				
				$dm_nombre=$row['dm_nombre'];
				$dm_cedula=$row['dm_cedula'];
				$dm_profesion=$row['dm_profesion'];
				$dm_expedido=$row['dm_expedido'];
				$dm_especialidad=$row['dm_especialidad'];
				$dm_matricula=$row['dm_matricula'];
				$dm_colegio=$row['dm_colegio'];
				$dm_rif=$row['dm_rif'];
				$dm_correo_electronico=$row['dm_correo_electronico'];
				$dm_tlf_local=$row['dm_tlf_local'];
				$dm_tlf_movil=$row['dm_tlf_movil'];
				$dm_fax=$row['dm_fax'];
				
				$cr_nombre=$row['cr_nombre'];
				$cr_cedula=$row['cr_cedula'];
				$cr_profesion=$row['cr_profesion'];
				$cr_expedido=$row['cr_expedido'];
				$cr_especialidad=$row['cr_especialidad'];
				$cr_matricula=$row['cr_matricula'];
				$cr_colegio=$row['cr_colegio'];
				$cr_rif=$row['cr_rif'];
				$cr_correo_electronico=$row['cr_correo_electronico'];
				$cr_tlf_local=$row['cr_tlf_local'];
				$cr_tlf_movil=$row['cr_tlf_movil'];
				$cr_fax=$row['cr_fax'];
			}
?>
<?php
$sql="SELECT * FROM tmp_unidades_transfusionales  WHERE usuario='$usuario'";
	$seleccion=mysql_query($sql,$conexion);
		while ($row = mysql_fetch_array($seleccion)){
				$ut_seccion_donacion=$row['ut_seccion_donacion'];
					$ut_registro_recepcion=$row['ut_registro_recepcion'];
					$ut_examen_medico=$row['ut_examen_medico'];
					$ut_recuperacion=$row['ut_recuperacion'];
					$ut_cafetin=$row['ut_cafetin'];
				$ut_seccion_laboratorio=$row['ut_seccion_laboratorio'];
					$ut_serologia=$row['ut_serologia'];
					$ut_inmunohematologia=$row['ut_inmunohematologia'];
				$ut_seccion_estadisticas=$row['ut_seccion_estadisticas'];
				$ut_seccion_procesamiento=$row['ut_seccion_procesamiento'];
				$ut_seccion_conservacion_almacen=$row['ut_seccion_conservacion_almacen'];
				$ut_seccion_secretaria=$row['ut_seccion_secretaria'];				
				
				$participacion_programa_inhrr=$row['participacion_programa_inhrr'];
				$nro_participaciones_inhrr=$row['nro_participaciones_inhrr'];
				$participacion_descripcion_inhrr=$row['participacion_descripcion_inhrr'];				
			}
?>

<body>
<h4 class="consulta">Planilla de Inscripción de Bancos de Sangre</h4>
<div class="bs">
<div class="sub_consulta_2"><p class="consulta"><strong class="consulta">Nombre de Usuario:</strong><?php echo $usuario;?></p></div>
<div class="sub_consulta_1"><p class="consulta"><strong class="consulta"><a href=javascript:window.print();><img src="imagenes/imprimir.png" title="Imprimir Planilla" alt="Imprimir Planilla" /></a></p></div>
</div>
<div class="bs">
<div class="consulta"><!-- consulta inicio -->
<div class="sub_consulta_2"><p class="consulta"><strong class="consulta">Número de Solicitud:</strong><?php echo $nro_solicitud;?></p></div>
<div class="sub_consulta_1"><p class="consulta"><strong class="consulta">Fecha de Solicitud:</strong><?php echo $fecha;?></p></div>
</div><!-- consulta fin -->
<h3 class="contenedor_c">Datos de Banco de Sangre</h3>
<div class="consulta"><!-- consulta inicio -->
<!-- sub_consulta_1 -->
<div class="sub_consulta_1">
<p class="consulta"><strong class="consulta">Nombre del Banco de Sangre:</strong><?php echo $nombre;?></p>
<p class="consulta"><strong class="consulta">Sector al que pertenece:</strong><?php echo $sector_pertenece;?></p>
<p class="consulta"><strong class="consulta">Dirección:</strong><?php echo $direccion;?></p>
<p class="consulta"><strong class="consulta">Teléfono:</strong><?php echo $nro_telefono;?></p>
<p class="consulta"><strong class="consulta">Teléfono Opcional:</strong><?php echo $nro_telefono_2;?></p>
<p class="consulta"><strong class="consulta">Número de Fax:</strong><?php echo $nro_fax;?></p>
</div><!-- fin sub_consulta_1 -->
<!-- sub_consulta_2 -->

<div class="sub_consulta_2">
<p class="consulta"><strong class="consulta">Número de Rif:</strong><?php echo $nro_rif;?></p>
<p class="consulta"><strong class="consulta">Número de Rif:</strong><?php echo $nro_nit;?></p>
<p class="consulta"><strong class="consulta">Correo Electrónico:</strong><?php echo $correo_electronico;?></p>
<p class="consulta"><strong class="consulta">Correo Opcional:</strong><?php echo $correo_electronico_2;?></p>
<p class="consulta"><strong class="consulta">Página Web:</strong><?php echo $pagina_web;?></p>
<p class="consulta"><strong class="consulta">Situación de la propiedad de institución:</strong><?php echo $tipo_institucion;?></p>
<p class="consulta"><strong class="consulta">Situación de la propiedad del inmueble:</strong><?php echo $situacion_propiedad_inmueble;?></p>
</div><!-- fin sub_consulta_2 -->

</div><!-- consulta -->

</div><!-- bs -->
<div class="bs">
<h3 class="contenedor_c">Datos del Establecimiento Médico Asistencial donde funciona el Banco de Sangre</h3>
<div class="consulta"><!-- consulta inicio -->
<!-- sub_consulta_1 -->
<div class="sub_consulta_1">
<p class="consulta"><strong class="consulta">Razón social del establecimiento al que pertenece el banco de sangre:</strong><?php echo $es_razon_social;?></p>
<p class="consulta"><strong class="consulta">Nº de registro sanitario:</strong><?php echo $es_nro_registro_sanitario;?></p>
<p class="consulta"><strong class="consulta">Número de Rif:</strong><?php echo $es_nro_rif;?></p>
<p class="consulta"><strong class="consulta">Número de Rif:</strong><?php echo $es_nro_nit;?></p>
<p class="consulta"><strong class="consulta">Teléfono:</strong><?php echo $es_nro_telefono;?></p>
<p class="consulta"><strong class="consulta">Número de Fax:</strong><?php echo $es_nro_fax;?></p>
</div><!-- fin sub_consulta_1 -->
<!-- sub_consulta_2 -->
<div class="sub_consulta_2">
<p class="consulta"><strong class="consulta">Correo electrónico:</strong><?php echo $es_correo_electronico;?></p>
<p class="consulta"><strong class="consulta">Página Web:</strong><?php echo $es_pagina_web;?></p>
<p class="consulta"><strong class="consulta">Tipo de Institución</strong><?php echo $es_tipo_institucion;?></p>
<p class="consulta"><strong class="consulta">Situación de la propiedad del inmueble:</strong><?php echo $es_situacion_propiedad_inmueble;?></p>
</div><!-- fin sub_consulta_2 -->

</div><!-- consulta -->

</div><!-- bs -->
<div class="bs">
<h3 class="contenedor_c">Director(a) médico responsable del establecimiento médico asistencial</h3>
<div class="consulta"><!-- consulta inicio -->
<!-- sub_consulta_1 -->
<div class="sub_consulta_1">
<p class="consulta"><strong class="consulta">Nombre(s) y apellido(s):</strong><?php echo $rs_nombre;?></p>
<p class="consulta"><strong class="consulta">Cédula de identidad:</strong><?php echo $rs_cedula;?></p>
<p class="consulta"><strong class="consulta">Profesión:</strong><?php echo $rs_profesion;?></p>
<p class="consulta"><strong class="consulta">Expedido por:</strong><?php echo $rs_expedido;?></p>
<p class="consulta"><strong class="consulta">Especialidad:</strong><?php echo $rs_especialidad;?></p>
<p class="consulta"><strong class="consulta">Matricula del MPPS:</strong><?php echo $rs_matricula;?></p>
</div><!-- fin sub_consulta_1 -->
<!-- sub_consulta_2 -->

<div class="sub_consulta_2">
<p class="consulta"><strong class="consulta">Registro colegio:</strong><?php echo $rs_colegio;?></p>
<p class="consulta"><strong class="consulta">Número de Rif:</strong><?php echo $rs_rif;?></p>
<p class="consulta"><strong class="consulta">Correo electrónico:</strong><?php echo $rs_correo_electronico;?></p>
<p class="consulta"><strong class="consulta">Número de teléfono-(local):</strong><?php echo $rs_tlf_local;?></p>
<p class="consulta"><strong class="consulta">Número de teléfono-(movil):</strong><?php echo $rs_tlf_movil;?></p>
<p class="consulta"><strong class="consulta">Número de Fax:</strong><?php echo $rs_fax;?></p>
</div><!-- fin sub_consulta_2 -->

</div><!-- consulta -->

</div><!-- bs -->
<div class="bs">
<h3 class="contenedor_c">Director(a) Médico responsable del banco de sangre y unidades transfusionales (Director Médico)</h3>
<div class="consulta"><!-- consulta inicio -->
<!-- sub_consulta_1 -->
<div class="sub_consulta_1">
<p class="consulta"><strong class="consulta">Nombre(s) y apellido(s):</strong><?php echo $dm_nombre;?></p>
<p class="consulta"><strong class="consulta">Cédula de identidad:</strong><?php echo $dm_cedula;?></p>
<p class="consulta"><strong class="consulta">Profesión:</strong><?php echo $dm_profesion;?></p>
<p class="consulta"><strong class="consulta">Expedido por:</strong><?php echo $dm_expedido;?></p>
<p class="consulta"><strong class="consulta">Especialidad:</strong><?php echo $dm_especialidad;?></p>
<p class="consulta"><strong class="consulta">Matricula del MPPS:</strong><?php echo $dm_matricula;?></p>
</div><!-- fin sub_consulta_1 -->
<!-- sub_consulta_2 -->

<div class="sub_consulta_2">
<p class="consulta"><strong class="consulta">Registro colegio:</strong><?php echo $dm_colegio;?></p>
<p class="consulta"><strong class="consulta">Número de Rif:</strong><?php echo $dm_rif;?></p>
<p class="consulta"><strong class="consulta">Correo electrónico:</strong><?php echo $dm_correo_electronico;?></p>
<p class="consulta"><strong class="consulta">Número de teléfono-(local):</strong><?php echo $dm_tlf_local;?></p>
<p class="consulta"><strong class="consulta">Número de teléfono-(movil):</strong><?php echo $dm_tlf_movil;?></p>
<p class="consulta"><strong class="consulta">Número de Fax:</strong><?php echo $dm_fax;?></p>
</div><!-- fin sub_consulta_2 -->

</div><!-- consulta -->

</div><!-- bs -->
<div class="bs">
<h3 class="contenedor_c">Coordinador(a) responsable del banco de sangre y unidades transfusionales</h3>
<div class="consulta"><!-- consulta inicio -->
<!-- sub_consulta_1 -->
<div class="sub_consulta_1">
<p class="consulta"><strong class="consulta">Nombre(s) y apellido(s):</strong><?php echo $cr_nombre;?></p>
<p class="consulta"><strong class="consulta">Cédula de identidad:</strong><?php echo $cr_cedula;?></p>
<p class="consulta"><strong class="consulta">Profesión:</strong><?php echo $cr_profesion;?></p>
<p class="consulta"><strong class="consulta">Expedido por:</strong><?php echo $cr_expedido;?></p>
<p class="consulta"><strong class="consulta">Especialidad:</strong><?php echo $cr_especialidad;?></p>
<p class="consulta"><strong class="consulta">Matricula del MPPS:</strong><?php echo $cr_matricula;?></p>
</div><!-- fin sub_consulta_1 -->
<!-- sub_consulta_2 -->

<div class="sub_consulta_2">
<p class="consulta"><strong class="consulta">Registro colegio:</strong><?php echo $cr_colegio;?></p>
<p class="consulta"><strong class="consulta">Número de Rif:</strong><?php echo $cr_rif;?></p>
<p class="consulta"><strong class="consulta">Correo electrónico:</strong><?php echo $cr_correo_electronico;?></p>
<p class="consulta"><strong class="consulta">Número de teléfono-(local):</strong><?php echo $cr_tlf_local;?></p>
<p class="consulta"><strong class="consulta">Número de teléfono-(movil):</strong><?php echo $cr_tlf_movil;?></p>
<p class="consulta"><strong class="consulta">Número de Fax:</strong><?php echo $cr_fax;?></p>
</div><!-- fin sub_consulta_2 -->

</div><!-- consulta -->

</div><!-- bs -->
<div class="bs">
<h3 class="contenedor_c">Banco de Sangre y Unidades Transfusionales</h3>
<div class="consulta"><!-- consulta inicio -->
<!-- sub_consulta_1 -->
<div class="sub_consulta_1">
<?php if ($ut_seccion_donacion=='si') {
	echo '<p class="consulta"><strong class="consulta">Cuenta con una Sección de donación que posee lo siguiente:</strong></p>';
	if($ut_registro_recepcion!=''){
		echo "<p class='consulta'>" . $ut_registro_recepcion . "</p>";
		}
	if($ut_examen_medico!=''){
		echo "<p class='consulta'>" . $ut_examen_medico . "</p>";
		}
	if($ut_recuperacion!=''){
		echo "<p class='consulta'>" . $ut_recuperacion . "</p>";
		}
	if($ut_cafetin!=''){
		echo "<p class='consulta'>" . $ut_cafetin . "</p>";
		}
	
	
	} ?>
</div><!-- fin sub_consulta_1 -->
<div class="sub_consulta_1">
<?php if ($ut_seccion_estadisticas=='si') {
	echo '<p class="consulta"><strong class="consulta">Cuenta con una Sección de Estadísticas.</strong></p>';
	} ?>
</div><!-- fin sub_consulta_1 -->
<div class="sub_consulta_1">
<?php if ($ut_seccion_procesamiento=='si') {
	echo '<p class="consulta"><strong class="consulta">Cuenta con una Sección de Procesamiento.</strong></p>';
	} ?>
</div><!-- fin sub_consulta_1 -->
<div class="sub_consulta_1">
<?php if ($ut_seccion_conservacion_almacen=='si') {
	echo '<p class="consulta"><strong class="consulta">Cuenta con una Sección de Conservación y Almacenamiento.</strong></p>';
	} ?>
</div><!-- fin sub_consulta_1 -->
<div class="sub_consulta_1">
<?php if ($ut_seccion_secretaria=='si') {
	echo '<p class="consulta"><strong class="consulta">Cuenta con una Sección de Secretaría.</strong></p>';
	} ?>
</div><!-- fin sub_consulta_1 -->
<!-- sub_consulta_2 -->
<div class="sub_consulta_2">
<?php if ($ut_seccion_laboratorio=='si') {
	echo '<p class="consulta"><strong class="consulta">Cuenta con una Sección de laboratorio que posee lo siguiente:</strong></p>';
	if($ut_serologia!=''){
		echo "<p class='consulta'>" . $ut_serologia . "</p>";
		}
	if($ut_inmunohematologia!=''){
		echo "<p class='consulta'>" . $ut_inmunohematologia . "</p>";
		}
	} ?>
</div><!-- fin sub_consulta_2 -->


</div><!-- consulta -->
</div><!-- bs -->
<div class="bs">
<h3 class="contenedor_c">Participación en el programa nacional de control de calidad en serología, coordinado por el Instituto Nacional de Higiene Rafael Rangel</h3>
<div class="consulta"><!-- consulta inicio -->
<!-- sub_consulta_1 -->
<div class="sub_consulta_1">
<?php 
if($participacion_programa_inhrr=='si'){
	echo '<p class="consulta">'. '<strong class="consulta">' . 'Participación:</strong>' . "Si Participó en el programa" . '</p>';
	echo '<p class="consulta">'. '<strong class="consulta">' . 'Cantidad de participaciones:</strong>' . $nro_participaciones_inhrr . '</p>';
	if($participacion_descripcion_inhrr!="" & $participacion_programa_inhrr=='si'){
				echo '<p class="consulta">'. '<strong class="consulta">' . 'Descripción:</strong>' . $participacion_descripcion_inhrr . '</p>';
		}
	}
?>
<?php 
if($participacion_programa_inhrr=='no'){
	echo '<p class="consulta">'. '<strong class="consulta">' . 'Participación:</strong>' . "No Participó en el programa" . '</p>';
	if($participacion_descripcion_inhrr!="" & $participacion_programa_inhrr=='no'){
				echo '<p class="consulta">'. '<strong class="consulta">' . 'Descripción:</strong>' . $participacion_descripcion_inhrr . '</p>';
		}
	}
?>
</div><!-- fin sub_consulta_1 -->
</div><!-- consulta -->

</div><!-- bs -->

</body>
</html>