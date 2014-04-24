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
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Planilla de Inscripción - Bancos de Sangre </title>
<link href="css/estilos_banco_de_sangre.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/formulario_2.js"></script>
</head>
<?php
include "config.php";
// Verifica si el usuario llenó la planilla de ser true enviar a la consulta
$sql3="SELECT * FROM usuarios WHERE usuario='$usuario'";
	$seleccion=mysql_query($sql3,$conexion);
		while ($row = mysql_fetch_array($seleccion)){
				$cod=$row['cod'];
				if($cod=='1'){
					?><script>alert("Consulta de la Planilla de Inscripción de Bancos de Sangre");</script><?
					echo '<html><head><meta http-equiv="REFRESH" content="0; url=consulta_planilla.php"></head></html>';
					}
	}
// Selecciona los Datos de la tabla usuarios
$sql="SELECT * FROM usuarios  WHERE usuario='$usuario'";
	$seleccion=mysql_query($sql,$conexion);
		while ($row = mysql_fetch_array($seleccion)){
				$nombrebs =$row['nombrebs'];
				
			}
// Selecciona los Datos de la tabla tmp_datos_de_banco_sangre
$sql="SELECT * FROM tmp_datos_de_banco_sangre  WHERE usuario='$usuario'";
	$seleccion=mysql_query($sql,$conexion);
		while ($row = mysql_fetch_array($seleccion)){
				$nombre=$row['nombre'];
				$sector_pertenece=$row['sector_pertenece'];
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
				$dependiente =$row['dependiente'];
				$fecha=$row['fecha'];
				$nro_solicitud=$row['nro_solicitud'];
				}
// Selecciona los Datos de la tabla tmp_establecimiento_medico_asistencial
$sql="SELECT * FROM tmp_establecimiento_medico_asistencial  WHERE usuario='$usuario'";
	$seleccion=mysql_query($sql,$conexion);
		while ($row = mysql_fetch_array($seleccion)){
				$razon_social=$row['razon_social'];
				$nro_registro_sanitario=$row['nro_registro_sanitario'];
				$nro_rif_es=$row['nro_rif'];
				$nro_nit_es=$row['nro_nit'];
				$tipo_institucion_es=$row['tipo_institucion'];
				$situacion_propiedad_inmueble_es=$row['situacion_propiedad_inmueble'];
				$nro_telefono_es=$row['nro_telefono'];
				$nro_fax_es=$row['nro_fax'];
				$correo_electronico_es=$row['correo_electronico'];
				$pagina_web_es=$row['pagina_web'];
		}
// Selecciona los Datos de la tabla tmp_datos_del_responsable
$sql="SELECT * FROM tmp_datos_del_responsable WHERE usuario='$usuario'";
	$seleccion=mysql_query($sql,$conexion);
		while ($row = mysql_fetch_array($seleccion)){
				$rs_nombre=$row['rs_nombre'];
				$rs_apellido=$row['rs_apellido'];
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
				$dm_apellido=$row['dm_apellido'];
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
				$cr_apellido=$row['cr_apellido'];
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
// Selecciona los Datos de la tabla tmp_unidades_transfusionales
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
// verificar si la fecha está almacenada en la bd de lo contrario generara un valor a la fecha
if($fecha==""){
		$fecha= date("d-m-Y");
		}
	// Genera el nro de solicitud
	if($nro_solicitud==""){		
	$sql2 = "SELECT * FROM usuarios WHERE estatus='1'";
	$cantidad =mysql_query($sql2,$conexion);
	$cantidad = mysql_num_rows($cantidad);// obtenemos el número de filas
	$nro_solicitud = "BS00".$cantidad.date('Y');
		}
/* Verifica que todos los campos obligatorios ubicados en las tablas temporales esten llenos de ser true almacenarlos
en sus respectivas tablas. 
Se cambia el campo cod de la tabla usuarios a 1
*/
if(@$_POST['planilla_completa']=='Agregar'){
	if($nombrebs!='' & $sector_pertenece!='' & $nro_rif!='' & $nro_nit!='' & $tipo_institucion!='' & $situacion_propiedad_inmueble!='' & $nro_telefono!='' & $correo_electronico!='' & $dependiente !='' & $fecha!='' & $nro_solicitud!=''){
		$sql="UPDATE datos_de_banco_sangre SET nombre='$nombre', sector_pertenece='$sector_pertenece', nro_rif='$nro_rif', nro_nit='$nro_nit', nro_telefono='$nro_telefono', nro_telefono_2='$nro_telefono_2', correo_electronico='$correo_electronico', correo_electronico_2='$correo_electronico_2', nro_fax='$nro_fax', pagina_web='$pagina_web', tipo_institucion='$tipo_institucion', situacion_propiedad_inmueble='$situacion_propiedad_inmueble', fecha='$fecha', nro_solicitud='$nro_solicitud', dependiente='$dependiente' WHERE usuario='$usuario'";	
		$ingreso=mysql_query($sql,$conexion);
		
		}
	if($razon_social!='' & $nro_registro_sanitario!='' & $nro_rif_es!='' & $nro_nit_es!='' & $tipo_institucion_es!='' & $situacion_propiedad_inmueble_es!='' & $nro_telefono_es!='' & $correo_electronico_es!=''){
		$sql="UPDATE establecimiento_medico_asistencial SET razon_social='$razon_social', nro_registro_sanitario='$nro_registro_sanitario', nro_rif='$nro_rif_es', nro_nit='$nro_nit_es', nro_telefono='$nro_telefono_es', nro_fax='$nro_fax_es', correo_electronico='$correo_electronico_es', pagina_web='$pagina_web_es', tipo_institucion='$tipo_institucion_es', situacion_propiedad_inmueble='$situacion_propiedad_inmueble_es' WHERE usuario='$usuario'";
	$ingreso=mysql_query($sql,$conexion);
		
		}
	if($rs_nombre!='' & $rs_apellido!='' & $rs_cedula!='' & $rs_profesion!='' & $rs_expedido!='' & $rs_especialidad!='' & $rs_matricula!='' & $rs_colegio!='' & $rs_correo_electronico!='' & $rs_tlf_local!='' & $rs_tlf_movil!=''){
		$sql="UPDATE datos_del_responsable SET rs_nombre='$rs_nombre', rs_apellido='$rs_apellido', rs_cedula='$rs_cedula', rs_profesion='$rs_profesion', rs_expedido='$rs_expedido', rs_especialidad='$rs_especialidad', rs_matricula='$rs_matricula', rs_colegio='$rs_colegio', rs_rif='$rs_rif', rs_correo_electronico='$rs_correo_electronico', rs_tlf_local='$rs_tlf_local', rs_tlf_movil='$rs_tlf_movil', rs_fax='$rs_fax' WHERE usuario='$usuario'";	
	$ingreso=mysql_query($sql,$conexion);
		
		}
	if($dm_nombre!='' & $dm_apellido!='' & $dm_cedula!='' & $dm_profesion!='' & $dm_expedido!='' & $dm_especialidad!='' & $dm_matricula!='' & $dm_colegio!='' & $dm_correo_electronico!='' & $dm_tlf_local!='' & $dm_tlf_movil!=''){
		$sql="UPDATE datos_del_responsable SET dm_nombre='$dm_nombre', dm_apellido='$dm_apellido', dm_cedula='$dm_cedula', dm_profesion='$dm_profesion', dm_expedido='$dm_expedido', dm_especialidad='$dm_especialidad', dm_matricula='$dm_matricula', dm_colegio='$dm_colegio', dm_rif='$dm_rif', dm_correo_electronico='$dm_correo_electronico', dm_tlf_local='$dm_tlf_local', dm_tlf_movil='$dm_tlf_movil', dm_fax='$dm_fax' WHERE usuario='$usuario'";	
	$ingreso=mysql_query($sql,$conexion);
		
		}
	if($cr_nombre!='' & $cr_apellido!='' & $cr_cedula!='' & $cr_profesion!='' & $cr_expedido!='' & $cr_especialidad!='' & $cr_matricula!='' & $cr_colegio!='' & $cr_correo_electronico!='' & $cr_tlf_local!='' & $cr_tlf_movil!=''){
		$sql="UPDATE datos_del_responsable SET cr_nombre='$cr_nombre', cr_apellido='$cr_apellido', cr_cedula='$cr_cedula', cr_profesion='$cr_profesion', cr_expedido='$cr_expedido', cr_especialidad='$cr_especialidad', cr_matricula='$cr_matricula', cr_colegio='$cr_colegio', cr_rif='$cr_rif', cr_correo_electronico='$cr_correo_electronico', cr_tlf_local='$cr_tlf_local', cr_tlf_movil='$cr_tlf_movil', cr_fax='$cr_fax' WHERE usuario='$usuario'";	
	$ingreso=mysql_query($sql,$conexion);
		$sql= "UPDATE usuarios SET cod='1' WHERE usuario='$usuario'";
	$ingreso=mysql_query($sql,$conexion);
		}
	if($ut_seccion_donacion!='' & $ut_seccion_laboratorio!='' & $ut_seccion_estadisticas!='' & $ut_seccion_procesamiento!='' & $ut_seccion_conservacion_almacen!='' & $ut_seccion_secretaria!='' & $participacion_programa_inhrr!=''){
		$sql="UPDATE unidades_transfusionales SET ut_seccion_donacion='$ut_seccion_donacion', ut_registro_recepcion='$ut_registro_recepcion', ut_examen_medico='$ut_examen_medico', ut_recuperacion='$ut_recuperacion', ut_cafetin='$ut_cafetin'  WHERE usuario='$usuario'";	
		$ingreso=mysql_query($sql,$conexion);
	
		$sql="UPDATE unidades_transfusionales SET ut_seccion_laboratorio='$ut_seccion_laboratorio', ut_serologia='$ut_serologia', ut_inmunohematologia='$ut_inmunohematologia'  WHERE usuario='$usuario'";	
		$ingreso=mysql_query($sql,$conexion);
		
		$sql="UPDATE tmp_unidades_transfusionales SET ut_seccion_estadisticas='$ut_seccion_estadisticas', ut_seccion_procesamiento='$ut_seccion_procesamiento', ut_seccion_conservacion_almacen='$ut_seccion_conservacion_almacen', ut_seccion_secretaria='$ut_seccion_secretaria'  WHERE usuario='$usuario'";	
				$ingreso=mysql_query($sql,$conexion);
					
		$sql="UPDATE unidades_transfusionales SET participacion_programa_inhrr='$participacion_programa_inhrr', nro_participaciones_inhrr='$nro_participaciones_inhrr', participacion_descripcion_inhrr='$participacion_descripcion_inhrr' WHERE usuario='$usuario'";	
				$ingreso=mysql_query($sql,$conexion);
				?><script>alert("Planilla Almacenada Existosamente - Consulte la Planilla");</script><?
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=espacio_usuario.php"></head></html>';
	}
}	
?>

<body class="bs">
<div class="contenedor">
<div class="encabezado"></div>
<div class="usuario">
<p class="usuario">Usuario: <?php echo $usuario; ?></p>
<a href="destruir_sesion.php"><p class="usuario">Cerrar sesión</p></a>
</div>
<?php
switch($codigo){
			case '1': echo '
<div class="bs_java_admin"><a class="bs_java_2" href="espacio_usuario.php" onclick="pedir_cta_visible(this);">Principal</a></div>
<div class="bs_java_admin"><a class="bs_java_2" href="datos_usuario.php" onclick="pedir_cta_visible(this);">Datos de la Cuenta</a></div>
<div class="bs_java_admin"><a class="bs_java_2" href="formulario_banco_de_sangre_2.php" title="Planilla de Incripción de Bancos de Sangre" onclick="pedir_cta_visible(this);">Planilla de Inscripción</a></div>';break;
			case '3': echo '<h1>Acceso Denegado</h1>';
	echo '<div class="bs_java"><a class="bs_java_2" href="index.php" onclick="pedir_cta_visible(this);">Volver a principal</a></div>';break;
			case '4': echo '<h1>Acceso Denegado</h1>';
	echo '<div class="bs_java"><a class="bs_java_2" href="index.php" onclick="pedir_cta_visible(this);">Volver a principal</a></div>';break;
			case '5': echo '<h1>Acceso Denegado</h1>';
	echo '<div class="bs_java"><a class="bs_java_2" href="index.php" onclick="pedir_cta_visible(this);">Volver a principal</a></div>';break;
}
?>
<!-- Planilla de Inscripción -->
<!--<form id="" name="planilla_inscripcion_bs" onsubmit="return validar(this);" action="" method="post">-->

<!--<form id="datos_solicitud" name="planilla_inscripcion_bs" action="consulta_planilla.php" method="post">-->
<h1>Planilla de Inscripción de Bancos de Sangre</h1>
<!-- ************************************************** -->
<!-- ************************************************** -->
            <!-- DATOS DEL BANCO DE SANGRE -->
<!-- ************************************************** -->
<!-- ************************************************** -->
<form name="datos_de_banco_sangre" method="post" action="procesar_formulario_2.php" onsubmit="return valida_envia(this);">
<!-- Numero de Solicitud y Fecha de Solicitud -->
<div class="bs">
<span>
<label class="bs">Número de solicitud</label>
<input class="bs" name="nro_solicitud" id="nro_solicitud" value=" <?php echo $nro_solicitud; ?>" type="text" readonly="readonly"	/>
</span>
<span>
<label class="bs">Fecha de solicitud</label>
<input class="bs" type="text" name="fecha" id="fecha" readonly="readonly" value="<?php echo $fecha;?>"/>
</span>
</div>
<h2>Datos del Banco de Sangre</h2>
<div class="bs">
<!-- Seccion: nombre -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nombre del Banco de Sangre</label>
<input class="bs" name="nombre" type="text" readonly="readonly" value="<?php echo $nombrebs; ?>"/>
</span>
<!-- Seccion: sector_pertenece -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Sector al que pertenece:</label>
<select class="bs" name="sector_pertenece" id="sector" onchange="revisarObligatorio(this,'sector_pertenece','sector_pertenece','obligatorio_sector_pertenece');Obligatorio(this);">
<?php if ($sector_pertenece!='') echo "<option class='bs'value='"; echo $sector_pertenece; echo "'>"; echo $sector_pertenece; echo "</option>"; ?>
<?php
			$sql1="SELECT * FROM sector_pertenece";
			$seleccion=mysql_query($sql1,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$sector_pertenece_bd=$row['sector_pertenece'];
				
?>
<option class="bs" value="<?php echo $sector_pertenece_bd;?>"><?php echo $sector_pertenece_bd;?></option>
<?php
}
?>
</select>
<input class="opcion_otros" id="sector_pertenece" name="otros_sector_pertenece" type="text" title="Indique el sector al que pertenece el Banco de Sangre" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this);Obligatorio(this);"/>
 <p class="obligatorio" id="obligatorio_sector_pertenece">Obligatorio: Seleccione el Sector</p>
</span>
<!-- Seccion: nro_rif -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nº de Rif</label>
<input class="bs" id="nro_rif" name="nro_rif" type="text" onfocus="entroEnFoco(this)" value="<?php echo $nro_rif;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_nro_rif">Obligatorio - Ej: G-010000101-1</p>
</span>
<!-- Seccion: nro_nit -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nº de Nit</label>
<input class="bs" id="nro_nit" name="nro_nit" type="text" onfocus="entroEnFoco(this)" value="<?php echo $nro_nit;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_nro_nit">Obligatorio - Ej: G-20000101-4</p>
</span>
<!-- Seccion: nro_telefono -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nº de Teléfono</label>
<input class="bs" id="nro_telefono" name="nro_telefono" type="text" onfocus="entroEnFoco(this)" maxlength="12" value="<?php echo $nro_telefono;?>" onblur="salioDeFoco(this);Obligatorio(this);" onkeypress="return permite(event, 'num');"/>
<p class="obligatorio" id="obligatorio_nro_telefono">Obligatorio - Ej: 04262225655</p>
</span>
<!-- Seccion: nro_telefono_2 -->
<span>
<label class="bs">Nº de Teléfono (Opcional)</label>
<input class="bs" id="nro_telefono_2" name="nro_telefono_2" type="text" onfocus="entroEnFoco(this)" maxlength="12"  value="<?php echo $nro_telefono_2;?>" onblur="salioDeFoco(this);Obligatorio(this);" onkeypress="return permite(event, 'num');"/>
<p class="obligatorio" id="obligatorio_nro_telefono_2">Opcional - Ej: 02121112233</p>
</span>
<!-- Seccion: nro_fax -->
<span>
<label class="bs">Nº de Fax (Opcional)</label>
<input class="bs" id="nro_fax" name="nro_fax" type="text" onfocus="entroEnFoco(this)" maxlength="12"  value="<?php echo $nro_fax;?>" onblur="salioDeFoco(this);Obligatorio(this);" onkeypress="return permite(event, 'num');"/>
<p class="obligatorio" id="obligatorio_nro_fax">Opcional - Ej: 02125614578</p>
</span>
<!-- Seccion: correo_electronico -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Correo Electrónico</label>
<input class="bs" id="correo_electronico" name="correo_electronico" type="text" onfocus="entroEnFoco(this)" maxlength="35"  value="<?php echo $correo_electronico;?>" onblur="salioDeFoco(this); Obligatorio(this); revisarEmail(this);"/>
<p class="obligatorio" id="obligatorio_correo_electronico">Obligatorio - Ej: pruebo@inhrr.gob.ve</p>
</span>
<!-- Seccion: correo_electronico_2 -->
<span>
<label class="bs">Correo Nº 2 (Opcional)</label>
<input class="bs" id="correo_electronico_2" name="correo_electronico_2" type="text" onfocus="entroEnFoco(this)" maxlength="35"  value="<?php echo $correo_electronico_2;?>" onblur="salioDeFoco(this);Obligatorio(this); revisarEmail(this);"/>
<p class="obligatorio" id="obligatorio_correo_electronico_2">Opcional - Ej: opcional@inhrr.gob.ve</p>
</span>
<!-- Seccion: pagina_web -->
<span>
<label class="bs">Página Web</label>
<input class="bs" id="pagina_web" name="pagina_web" type="text" onfocus="entroEnFoco(this)" maxlength="35"  value="<?php echo $pagina_web;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_pagina_web">Opcional - Ej: www.prueba.com</p>
</span>
<!-- Seccion: tipo_institucion -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Tipo de Institución:</label>
<select class="bs" name="tipo_institucion" id="institucion" onchange="revisarObligatorio(this,'tipo_institucion','tipo_institucion','obligatorio_tipo_institucion');Obligatorio(this);">
<?php if ($tipo_institucion!='') echo "<option class='bs'value='"; echo $tipo_institucion; echo "'>"; echo $tipo_institucion; echo "</option>"; ?>
<?php
			$sql1="SELECT * FROM tipo_institucion";
			$seleccion=mysql_query($sql1,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$tipo_institucion_bd=$row['tipo_institucion'];
			//utf8
			$tipo_institucion_bd = utf8_encode ($tipo_institucion_bd);
				
?>
<option class="bs" value="<?php echo $tipo_institucion_bd;?>"><?php echo $tipo_institucion_bd;?></option>
<?php
}
?>
</select>
<input class="opcion_otros" id="tipo_institucion" name="otros_tipo_institucion" type="text" title="Indique el sector al que pertenece el Banco de Sangre" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this);Obligatorio(this);"/>
 <p class="obligatorio" id="obligatorio_tipo_institucion">Obligatorio: Tipo de Institución</p>
</span>
<!-- Seccion: situacion_propiedad_inmueble -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Situación del Inmueble:</label>
<select class="bs" name="situacion_propiedad_inmueble" id="inmueble" onchange="revisarObligatorio(this,'situacion_propiedad_inmueble','situacion_propiedad_inmueble','obligatorio_situacion_propiedad_inmueble');Obligatorio(this);">
<?php if ($situacion_propiedad_inmueble!='') echo "<option class='bs'value='"; echo $situacion_propiedad_inmueble; echo "'>"; echo $situacion_propiedad_inmueble; echo "</option>"; ?>
<?php
			$sql1="SELECT * FROM situacion_propiedad_inmueble";
			$seleccion=mysql_query($sql1,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$situacion_propiedad_inmueble_bd=$row['situacion_propiedad_inmueble'];
			//utf8
			$situacion_propiedad_inmueble_bd = utf8_encode ($situacion_propiedad_inmueble_bd);
				
?>
<option class="bs" value="<?php echo $situacion_propiedad_inmueble_bd;?>"><?php echo $situacion_propiedad_inmueble_bd;?></option>
<?php
}
?>
</select>
<input class="opcion_otros" id="situacion_propiedad_inmueble" name="otros_situacion_propiedad_inmueble" type="text" title="Indique el sector al que pertenece el Banco de Sangre" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this);Obligatorio(this);"/>
 <p class="obligatorio" id="obligatorio_situacion_propiedad_inmueble">Obligatorio: Situación de la Propiedad</p>
</span>
<button class="boton" type="submit" name="datos_de_banco_sangre" value="Agregar">Guardar Datos del Banco de Sangre</button>
</div>
</form>
<!-- ************************************************** -->
<!-- ************************************************** -->
<!-- Datos del Establecimiento Médico Asistencial donde funciona el Banco de Sangre -->
<!-- ************************************************** -->
<!-- ************************************************** -->
<form id="" name="establecimiento_asistencial" method="post" action="procesar_formulario_2.php" onsubmit="return valida_envia_2(this);">
<!-- ¿El Banco de Sangre es dependiente de un Centro Asistencial? -->
<div class="bs">
<label class="bs"><strong class="bs_form">*</strong>¿El Banco de Sangre es dependiente de un Centro Asistencial?</label>
<input class="radio" id="dependiente_si" name="dependiente" type="radio" value="si"<?php if($dependiente=='si') echo 'checked'?>  onclick="Obligatorio(this);" /><p class="radio">Si</p>
<input class="radio" id="dependiente_no" name="dependiente"  type="radio" value="no" <?php if($dependiente=='no' || $dependiente=='') echo 'checked'?> onclick="Obligatorio(this);" /><p class="radio">No</p>
<p class="obligatorio" id="obligatorio_dependiente">Obligatorio: seleccione una opción</p>
</div>
<h2 id="titulo_establecimiento_asistencial">Datos del Establecimiento Médico Asistencial donde funciona el Banco de Sangre</h2>
<div class="bs" id="establecimiento_asistencial">
<!--<h2 id="">Datos del Establecimiento Médico Asistencial donde funciona el Banco de Sangre</h2>
<div class="bs" id="">-->
<!-- Seccion: razon_social -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Razón Social</label>
<input class="bs" name="razon_social" type="text" value="<?php echo $razon_social;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_razon_social">Obligatorio - Razón del Establecimiento</p>
</span>
<!-- Seccion: nro_registro_sanitario -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nº de Registro Sanitario</label>
<input class="bs" name="nro_registro_sanitario" onfocus="entroEnFoco(this)" type="text" maxlength="25" value="<?php echo $nro_registro_sanitario;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_nro_registro_sanitario">Obligatorio - Nº Registro Sanitario</p>
</span>
<!-- Seccion: nro_rif_es -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nº de Rif</label>
<input class="bs" name="nro_rif_es" onfocus="entroEnFoco(this)" type="text" value="<?php echo $nro_rif_es; ?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_nro_rif_es">Obligatorio - Ej: J-000545450-2</p>
</span>
<!-- Seccion: nro_nit_es -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nº de Nit</label>
<input class="bs" name="nro_nit_es" onfocus="entroEnFoco(this)" type="text" value="<?php echo $nro_nit_es; ?>"onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_nro_nit_es">Obligatorio - Ej: G-0002323230-0</p>
</span>
<!-- Seccion: nro_telefono_es -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nº de Teléfono</label>
<input class="bs" name="nro_telefono_es" onfocus="entroEnFoco(this)" type="text" maxlength="12" value="<?php echo $nro_telefono_es; ?>"onblur="salioDeFoco(this);Obligatorio(this);" onkeypress="return permite(event, 'num');"/>
<p class="obligatorio" id="obligatorio_nro_telefono_es">Obligatorio - Ej: 04267988878</p>
</span>
<!-- Seccion: nro_fax_es -->
<span>
<label class="bs">Nº Fax (Opcional)</label>
<input class="bs" name="nro_fax_es" onfocus="entroEnFoco(this)" type="text" maxlength="14" value="<?php echo $nro_fax_es; ?>"onblur="salioDeFoco(this);Obligatorio(this);" onkeypress="return permite(event, 'num');"/>
<p class="obligatorio" id="obligatorio_nro_fax_es">Opcional - Ej: 02123214578</p>
</span>
<!-- Seccion: correo_electronico_es -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Correo Electrónico</label>
<input class="bs" name="correo_electronico_es" onfocus="entroEnFoco(this)" type="text" maxlength="35" value="<?php echo $correo_electronico_es; ?>" onblur="salioDeFoco(this);Obligatorio(this);revisarEmail(this);"/>
<p class="obligatorio" id="obligatorio_correo_electronico_es">Obligatorio - Ej: medico@inhrr.gob.ve</p>
</span>
<!-- Seccion: pagina_web_es -->
<span>
<label class="bs">Pagina Web</label>
<input class="bs" name="pagina_web_es" onfocus="entroEnFoco(this)" type="text" maxlength="35" value="<?php echo $pagina_web_es; ?>" onblur="salioDeFoco(this);Obligatorio(this);revisarEmail(this);"/>
<p class="obligatorio" id="obligatorio_pagina_web_es">Obligatorio - Ej: www.inhrr.gob.ve</p>
</span>
<!-- Seccion: tipo_institucion_es -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Tipo de Institución:</label>
<select class="bs" name="tipo_institucion_es" id="institucion_es" onchange="revisarObligatorio(this,'tipo_institucion_es','tipo_institucion_es','obligatorio_tipo_institucion_es');Obligatorio(this);">
<?php if ($tipo_institucion_es!='') echo "<option class='bs'value='"; echo $tipo_institucion_es; echo "'>"; echo $tipo_institucion_es; echo "</option>"; ?>
<?php
			$sql1="SELECT * FROM tipo_institucion";
			$seleccion=mysql_query($sql1,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$tipo_institucion_bd=$row['tipo_institucion'];
			//utf8
			$tipo_institucion_bd = utf8_encode ($tipo_institucion_bd);
				
?>
<option class="bs" value="<?php echo $tipo_institucion_bd;?>"><?php echo $tipo_institucion_bd;?></option>
<?php
}
?>
</select>
<input class="opcion_otros" id="tipo_institucion_es" name="otros_tipo_institucion_es" type="text" title="Indique el tipo de institución" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this);Obligatorio(this);"/>
 <p class="obligatorio" id="obligatorio_tipo_institucion_es">Obligatorio: Tipo de Institución</p>
</span>
<!-- Seccion: situacion_propiedad_inmueble_es -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Situación del Inmueble:</label>
<select class="bs" name="situacion_propiedad_inmueble_es" id="inmueble_es" onchange="revisarObligatorio(this,'situacion_propiedad_inmueble_es','situacion_propiedad_inmueble_es','obligatorio_situacion_propiedad_inmueble_es');Obligatorio(this);">
<?php if ($situacion_propiedad_inmueble_es!='') echo "<option class='bs'value='"; echo $situacion_propiedad_inmueble_es; echo "'>"; echo $situacion_propiedad_inmueble_es; echo "</option>"; ?>
<?php
			$sql1="SELECT * FROM situacion_propiedad_inmueble";
			$seleccion=mysql_query($sql1,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$situacion_propiedad_inmueble_bd=$row['situacion_propiedad_inmueble'];
			//utf8
			$situacion_propiedad_inmueble_bd = utf8_encode ($situacion_propiedad_inmueble_bd);
				
?>
<option class="bs" value="<?php echo $situacion_propiedad_inmueble_bd;?>"><?php echo $situacion_propiedad_inmueble_bd;?></option>
<?php
}
?>
</select>
<input class="opcion_otros" id="situacion_propiedad_inmueble_es" name="otros_situacion_propiedad_inmueble_es" type="text" title="Indique el sector al que pertenece el Banco de Sangre" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this);Obligatorio(this);"/>
 <p class="obligatorio" id="obligatorio_situacion_propiedad_inmueble_es">Obligatorio: Situación de la Propiedad</p>
</span>

<button class="boton" type="submit" name="establecimiento_asistencial" value="Agregar">Guardar Datos del Establecimiento Médico Asistencial</button>
</div>
</form>
<!-- ************************************************** -->
<!-- ************************************************** -->
            <!-- DATOS DEL RESPONSABLE -->
<!-- ************************************************** -->
<!-- ************************************************** -->
<!-- Director(a) médico responsable del establecimiento médico asistencial -->
<form name="datos_del_responsable_director_1" method="post" action="procesar_formulario_2.php" onsubmit="return valida_envia_3(this);">
<h2>Datos del Responsable</h2>
<h3>Director(a) médico responsable del establecimiento médico asistencial</h3>
<div class="bs">
<!-- Seccion: rs_nombre -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nombre(s)</label>
<input class="bs" id="rs_nombre" name="rs_nombre" type="text" onfocus="entroEnFoco(this)" value="<?php echo $rs_nombre;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_rs_nombre">Obligatorio - Ingrese Nombre(s)</p>
</span>
<!-- Seccion: rs_apellido -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Apellidos(s)</label>
<input class="bs" id="rs_apellido" name="rs_apellido" type="text" onfocus="entroEnFoco(this)" value="<?php echo $rs_apellido;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_rs_apellido">Obligatorio - Ingrese Apellido(s)</p>
</span>
<!-- Seccion: rs_cedula -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Cédula de Identidad</label>
<input class="bs" id="rs_cedula" name="rs_cedula" type="text" onfocus="entroEnFoco(this)" maxlength="10" value="<?php echo $rs_cedula;?>" onblur="salioDeFoco(this);Obligatorio(this);" onkeypress="return permite(event, 'num');"/>
<p class="obligatorio" id="obligatorio_rs_cedula">Obligatorio - Ej: 28504780</p>
</span>
<!-- Seccion: rs_profesion -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Profesión</label>
<input class="bs" id="rs_profesion" name="rs_profesion" type="text" onfocus="entroEnFoco(this)" value="<?php echo $rs_profesion;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_rs_profesion">Obligatorio - Indique la Profesión</p>
</span>
<!-- Seccion: rs_expedido -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Expedido por:</label>
<input class="bs" id="rs_expedido" name="rs_expedido" type="text" onfocus="entroEnFoco(this)" value="<?php echo $rs_expedido;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_rs_expedido">Obligatorio Univ. que otorga el Título</p>
</span>
<!-- Seccion: rs_especialidad -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Especialidad</label>
<input class="bs" id="rs_especialidad" name="rs_especialidad" type="text" onfocus="entroEnFoco(this)" value="<?php echo $rs_especialidad;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_rs_especialidad">Obligatorio Indicar la Especialidad</p>
</span>
<!-- Seccion: rs_matricula -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nº Matrícula de MPPS</label>
<input class="bs" id="rs_matricula" name="rs_matricula" type="text" onfocus="entroEnFoco(this)" value="<?php echo $rs_matricula;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_rs_matricula">Obligatorio Nº matrícula del MPPS</p>
</span>
<!-- Seccion: rs_colegio -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nº Registro del Colegio</label>
<input class="bs" id="rs_colegio" name="rs_colegio" type="text" onfocus="entroEnFoco(this)" value="<?php echo $rs_colegio;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_rs_colegio">Obligatorio Nº otorgado por el Colegio</p>
</span>
<!-- Seccion: rs_rif -->
<span>
<label class="bs">Nº Rif (Opcional)</label>
<input class="bs" id="rs_rif" name="rs_rif" type="text" onfocus="entroEnFoco(this)" value="<?php echo $rs_rif;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_rs_rif">Opcional - Indique el Nº de Rif</p>
</span>
<!-- Seccion: rs_correo_electronico -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Correo Electrónico</label>
<input class="bs" id="rs_correo_electronico" name="rs_correo_electronico" type="text" onfocus="entroEnFoco(this)" value="<?php echo $rs_correo_electronico;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_rs_correo_electronico">Obligatorio - Ej: prueba@inhrr.gob.ve</p>
</span>
<!-- Seccion: rs_tlf_local -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nº Teléfono Local</label>
<input class="bs" id="rs_tlf_local" name="rs_tlf_local" type="text" onfocus="entroEnFoco(this)" value="<?php echo $rs_tlf_local;?>" maxlength="12" onblur="salioDeFoco(this);Obligatorio(this);" onkeypress="return permite(event, 'num');"/>
<p class="obligatorio" id="obligatorio_rs_tlf_local">Obligatorio - Ej: 02121124488</p>
</span>
<!-- Seccion: rs_tlf_movil -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nº Teléfono Movil</label>
<input class="bs" id="rs_tlf_movil" name="rs_tlf_movil" type="text" onfocus="entroEnFoco(this)" value="<?php echo $rs_tlf_movil;?>" maxlength="12" onblur="salioDeFoco(this);Obligatorio(this);" onkeypress="return permite(event, 'num');"/>
<p class="obligatorio" id="obligatorio_rs_tlf_movil">Obligatorio - Ej: 041621123377</p>
</span>
<!-- Seccion: rs_fax -->
<span>
<label class="bs">Nº de Fax (Opcional)</label>
<input class="bs" id="rs_fax" name="rs_fax" type="text" onfocus="entroEnFoco(this)" value="<?php echo $rs_fax;?>" maxlength="12" onblur="salioDeFoco(this);Obligatorio(this);" onkeypress="return permite(event, 'num');"/>
<p class="obligatorio" id="obligatorio_rs_fax">Obligatorio - Ej: 02127770011</p>
</span>

<button class="boton" type="submit" name="datos_del_responsable_director_1" value="Agregar">Guardar Datos - Director(a) médico responsable del establecimiento médico asistencial</button>
</div>
</form>
<!-- Director(a) Médico responsable del banco de sangre y unidades transfusionales (Director Médico) -->
<form name="datos_del_responsable_director_2" method="post" action="procesar_formulario_2.php" onsubmit="return valida_envia_4(this);">
<h3>Director(a) médico responsable del establecimiento médico asistencial</h3>
<div class="bs">
<!-- Seccion: dm_nombre -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nombre(s)</label>
<input class="bs" id="dm_nombre" name="dm_nombre" type="text" onfocus="entroEnFoco(this)" value="<?php echo $dm_nombre;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_dm_nombre">Obligatorio - Ingrese Nombre(s)</p>
</span>
<!-- Seccion: dm_apellido -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Apellidos(s)</label>
<input class="bs" id="dm_apellido" name="dm_apellido" type="text" onfocus="entroEnFoco(this)" value="<?php echo $dm_apellido;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_dm_apellido">Obligatorio - Ingrese Apellido(s)</p>
</span>
<!-- Seccion: dm_cedula -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Cédula de Identidad</label>
<input class="bs" id="dm_cedula" name="dm_cedula" type="text" onfocus="entroEnFoco(this)" maxlength="10" value="<?php echo $dm_cedula;?>" onblur="salioDeFoco(this);Obligatorio(this);" onkeypress="return permite(event, 'num');"/>
<p class="obligatorio" id="obligatorio_dm_cedula">Obligatorio - Ej: 28504780</p>
</span>
<!-- Seccion: dm_profesion -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Profesión</label>
<input class="bs" id="dm_profesion" name="dm_profesion" type="text" onfocus="entroEnFoco(this)" value="<?php echo $dm_profesion;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_dm_profesion">Obligatorio - Indique la Profesión</p>
</span>
<!-- Seccion: dm_expedido -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Expedido por:</label>
<input class="bs" id="dm_expedido" name="dm_expedido" type="text" onfocus="entroEnFoco(this)" value="<?php echo $dm_expedido;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_dm_expedido">Obligatorio Univ. que otorga el Título</p>
</span>
<!-- Seccion: dm_especialidad -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Especialidad</label>
<input class="bs" id="dm_especialidad" name="dm_especialidad" type="text" onfocus="entroEnFoco(this)" value="<?php echo $dm_especialidad;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_dm_especialidad">Obligatorio Indicar la Especialidad</p>
</span>
<!-- Seccion: dm_matricula -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nº Matrícula de MPPS</label>
<input class="bs" id="dm_matricula" name="dm_matricula" type="text" onfocus="entroEnFoco(this)" value="<?php echo $dm_matricula;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_dm_matricula">Obligatorio Nº matrícula del MPPS</p>
</span>
<!-- Seccion: dm_colegio -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nº Registro del Colegio</label>
<input class="bs" id="dm_colegio" name="dm_colegio" type="text" onfocus="entroEnFoco(this)" value="<?php echo $dm_colegio;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_dm_colegio">Obligatorio Nº otorgado por el Colegio</p>
</span>
<!-- Seccion: dm_rif -->
<span>
<label class="bs">Nº Rif (Opcional)</label>
<input class="bs" id="dm_rif" name="dm_rif" type="text" onfocus="entroEnFoco(this)" value="<?php echo $dm_rif;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_dm_rif">Opcional - Indique el Nº de Rif</p>
</span>
<!-- Seccion: dm_correo_electronico -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Correo Electrónico</label>
<input class="bs" id="dm_correo_electronico" name="dm_correo_electronico" type="text" onfocus="entroEnFoco(this)" value="<?php echo $dm_correo_electronico;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_dm_correo_electronico">Obligatorio - Ej: prueba@inhrr.gob.ve</p>
</span>
<!-- Seccion: dm_tlf_local -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nº Teléfono Local</label>
<input class="bs" id="dm_tlf_local" name="dm_tlf_local" type="text" onfocus="entroEnFoco(this)" value="<?php echo $dm_tlf_local;?>" maxlength="12" onblur="salioDeFoco(this);Obligatorio(this);" onkeypress="return permite(event, 'num');"/>
<p class="obligatorio" id="obligatorio_dm_tlf_local">Obligatorio - Ej: 02121124488</p>
</span>
<!-- Seccion: dm_tlf_movil -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nº Teléfono Movil</label>
<input class="bs" id="dm_tlf_movil" name="dm_tlf_movil" type="text" onfocus="entroEnFoco(this)" value="<?php echo $dm_tlf_movil;?>" maxlength="12" onblur="salioDeFoco(this);Obligatorio(this);" onkeypress="return permite(event, 'num');"/>
<p class="obligatorio" id="obligatorio_dm_tlf_movil">Obligatorio - Ej: 041621123377</p>
</span>
<!-- Seccion: dm_fax -->
<span>
<label class="bs">Nº de Fax (Opcional)</label>
<input class="bs" id="dm_fax" name="dm_fax" type="text" onfocus="entroEnFoco(this)" value="<?php echo $dm_fax;?>" maxlength="12" onblur="salioDeFoco(this);Obligatorio(this);" onkeypress="return permite(event, 'num');"/>
<p class="obligatorio" id="obligatorio_dm_fax">Obligatorio - Ej: 02127770011</p>
</span>

<button class="boton" type="submit" name="datos_del_responsable_director_2" value="Agregar">Guardar Datos - Director(a) Médico responsable del banco de sangre y unidades transfusionales</button>
</div>
</form>
<!-- Coordinador(a) responsable del banco de sangre y unidades transfusionales -->
<form name="datos_del_responsable_coord" method="post" action="procesar_formulario_2.php" onsubmit="return valida_envia_5(this);">
<h3>Coordinador(a) responsable del banco de sangre y unidades transfusionales</h3>
<div class="bs">
<!-- Seccion: cr_nombre -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nombre(s)</label>
<input class="bs" id="cr_nombre" name="cr_nombre" type="text" onfocus="entroEnFoco(this)" value="<?php echo $cr_nombre;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_cr_nombre">Obligatorio - Ingrese Nombre(s)</p>
</span>
<!-- Seccion: cr_apellido -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Apellidos(s)</label>
<input class="bs" id="cr_apellido" name="cr_apellido" type="text" onfocus="entroEnFoco(this)" value="<?php echo $cr_apellido;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_cr_apellido">Obligatorio - Ingrese Apellido(s)</p>
</span>
<!-- Seccion: cr_cedula -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Cédula de Identidad</label>
<input class="bs" id="cr_cedula" name="cr_cedula" type="text" onfocus="entroEnFoco(this)" maxlength="10" value="<?php echo $cr_cedula;?>" onblur="salioDeFoco(this);Obligatorio(this);" onkeypress="return permite(event, 'num');"/>
<p class="obligatorio" id="obligatorio_cr_cedula">Obligatorio - Ej: 28504780</p>
</span>
<!-- Seccion: cr_profesion -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Profesión</label>
<input class="bs" id="cr_profesion" name="cr_profesion" type="text" onfocus="entroEnFoco(this)" value="<?php echo $cr_profesion;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_cr_profesion">Obligatorio - Indique la Profesión</p>
</span>
<!-- Seccion: cr_expedido -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Expedido por:</label>
<input class="bs" id="cr_expedido" name="cr_expedido" type="text" onfocus="entroEnFoco(this)" value="<?php echo $cr_expedido;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_cr_expedido">Obligatorio Univ. que otorga el Título</p>
</span>
<!-- Seccion: cr_especialidad -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Especialidad</label>
<input class="bs" id="cr_especialidad" name="cr_especialidad" type="text" onfocus="entroEnFoco(this)" value="<?php echo $cr_especialidad;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_cr_especialidad">Obligatorio Indicar la Especialidad</p>
</span>
<!-- Seccion: cr_matricula -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nº Matrícula de MPPS</label>
<input class="bs" id="cr_matricula" name="cr_matricula" type="text" onfocus="entroEnFoco(this)" value="<?php echo $cr_matricula;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_cr_matricula">Obligatorio Nº matrícula del MPPS</p>
</span>
<!-- Seccion: cr_colegio -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nº Registro del Colegio</label>
<input class="bs" id="cr_colegio" name="cr_colegio" type="text" onfocus="entroEnFoco(this)" value="<?php echo $cr_colegio;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_cr_colegio">Obligatorio Nº otorgado por el Colegio</p>
</span>
<!-- Seccion: cr_rif -->
<span>
<label class="bs">Nº Rif (Opcional)</label>
<input class="bs" id="cr_rif" name="cr_rif" type="text" onfocus="entroEnFoco(this)" value="<?php echo $cr_rif;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_cr_rif">Opcional - Indique el Nº de Rif</p>
</span>
<!-- Seccion: cr_correo_electronico -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Correo Electrónico</label>
<input class="bs" id="cr_correo_electronico" name="cr_correo_electronico" type="text" onfocus="entroEnFoco(this)" value="<?php echo $cr_correo_electronico;?>" onblur="salioDeFoco(this);Obligatorio(this);"/>
<p class="obligatorio" id="obligatorio_cr_correo_electronico">Obligatorio - Ej: prueba@inhrr.gob.ve</p>
</span>
<!-- Seccion: cr_tlf_local -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nº Teléfono Local</label>
<input class="bs" id="cr_tlf_local" name="cr_tlf_local" type="text" onfocus="entroEnFoco(this)" value="<?php echo $cr_tlf_local;?>" maxlength="12" onblur="salioDeFoco(this);Obligatorio(this);" onkeypress="return permite(event, 'num');"/>
<p class="obligatorio" id="obligatorio_cr_tlf_local">Obligatorio - Ej: 02121124488</p>
</span>
<!-- Seccion: cr_tlf_movil -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nº Teléfono Movil</label>
<input class="bs" id="cr_tlf_movil" name="cr_tlf_movil" type="text" onfocus="entroEnFoco(this)" value="<?php echo $cr_tlf_movil;?>" maxlength="12" onblur="salioDeFoco(this);Obligatorio(this);" onkeypress="return permite(event, 'num');"/>
<p class="obligatorio" id="obligatorio_cr_tlf_movil">Obligatorio - Ej: 041621123377</p>
</span>
<!-- Seccion: cr_fax -->
<span>
<label class="bs">Nº de Fax (Opcional)</label>
<input class="bs" id="cr_fax" name="cr_fax" type="text" onfocus="entroEnFoco(this)" value="<?php echo $cr_fax;?>" maxlength="12" onblur="salioDeFoco(this);Obligatorio(this);" onkeypress="return permite(event, 'num');"/>
<p class="obligatorio" id="obligatorio_cr_fax">Obligatorio - Ej: 02127770011</p>
</span>

<button class="boton" type="submit" name="datos_del_responsable_coord" value="Agregar">Guardar Datos - Coordinador(a) responsable del banco de sangre y unidades transfusionales</button>
</div>
</form>
<!-- ************************************************** -->
<!-- ************************************************** -->
            <!-- BANCO DE SANGRE Y UNIDADES TRANSFUSIONALES -->
<!-- ************************************************** -->
<!-- ************************************************** -->
<form name="ambientes" method="post" action="procesar_formulario_2.php" onsubmit="return valida_envia_6(this);">
<h2>Banco de Sangre y Unidades Transfusionales</h2>
<h3>Ambientes</h3>
<div class="bs">
<!-- Seccion: ut_seccion_donacion -->
<span class="ud">
<label class="bs"><strong class="bs_form">*</strong>¿Posee sección de donación?</label>
<select class="bs" name="ut_seccion_donacion" id="seccion_donacion" onchange="revisarObligatorio_2(this,'ut_seccion_donacion','ut_seccion_donacion','obligatorio_ut_seccion_donacion');Obligatorio(this);">
<?php if ($ut_seccion_donacion!='') echo "<option class='bs'value='"; echo $ut_seccion_donacion; echo "'>"; echo $ut_seccion_donacion; echo "</option>"; ?>
<?php
			$sql1="SELECT * FROM ambientes";
			$seleccion=mysql_query($sql1,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$ambientes=$row['ambientes'];
				
?>
<option class="bs" value="<?php echo $ambientes;?>"><?php echo $ambientes;?></option>
<?php
}
?>
</select>
<p class="obligatorio" id="obligatorio_ut_seccion_donacion">Obligatorio: Seleccione si o no</p>
<span class="opcion_otros" id="ut_seccion_donacion">
<input class="radio" name="ut_registro_recepcion" type="checkbox" value="Registro y Recepción" <?php if($ut_registro_recepcion=='Registro y Recepción') echo 'checked'?>/><p class="radio">Registro y Recepción</p>
<input class="radio" name="ut_examen_medico" type="checkbox" value="Examen Médico" <?php if($ut_examen_medico=='Examen Médico') echo 'checked'?>/><p class="radio">Examen Médico</p>
<input class="radio" name="ut_recuperacion" type="checkbox" value="Recuperación" <?php if($ut_recuperacion=='Recuperación') echo 'checked'?>/><p class="radio">Recuperación</p>
<input class="radio" name="ut_cafetin" type="checkbox" value="Cafetín" <?php if($ut_cafetin=='Cafetín') echo 'checked'?>/><p class="radio">Cafetín</p>
</span>
</span>
<!-- Seccion: ut_seccion_laboratorio -->
<span class="ud">
<label class="bs"><strong class="bs_form">*</strong>¿Posee sección de Laboratorio?</label>
<select class="bs" name="ut_seccion_laboratorio" id="seccion_laboratorio" onchange="revisarObligatorio_2(this,'ut_seccion_laboratorio','ut_seccion_laboratorio','obligatorio_ut_seccion_laboratorio');Obligatorio(this);">
<?php if ($ut_seccion_laboratorio!='') echo "<option class='bs'value='"; echo $ut_seccion_laboratorio; echo "'>"; echo $ut_seccion_laboratorio; echo "</option>"; ?>
<?php
			$sql1="SELECT * FROM ambientes";
			$seleccion=mysql_query($sql1,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$ambientes=$row['ambientes'];
				
?>
<option class="bs" value="<?php echo $ambientes;?>"><?php echo $ambientes;?></option>
<?php
}
?>
</select>
<p class="obligatorio" id="obligatorio_ut_seccion_laboratorio">Obligatorio: Seleccione si o no</p>
<span class="opcion_otros" id="ut_seccion_laboratorio">
<input class="radio" name="ut_serologia" type="checkbox" value="Serología" <?php if($ut_serologia=='Serología') echo 'checked'?>/><p class="radio">Serología</p>
<input class="radio" name="ut_inmunohematologia" type="checkbox" value="Inmunohematología" <?php if($ut_inmunohematologia=='Inmunohematología') echo 'checked'?>/><p class="radio">Inmunohematología</p>
</span>
</span>
<!-- Seccion: ut_seccion_estadisticas -->
<span class="ud">
<label class="bs"><strong class="bs_form">*</strong>¿Cuenta con una Sección de Estadísticas?</label>
<select class="bs" name="ut_seccion_estadisticas" id="seccion_estadisticas" onchange="Obligatorio(this);">
<?php if ($ut_seccion_estadisticas!='') echo "<option class='bs'value='"; echo $ut_seccion_estadisticas; echo "'>"; echo $ut_seccion_estadisticas; echo "</option>"; ?>
<?php
			$sql1="SELECT * FROM ambientes";
			$seleccion=mysql_query($sql1,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$ambientes=$row['ambientes'];
				
?>
<option class="bs" value="<?php echo $ambientes;?>"><?php echo $ambientes;?></option>
<?php
}
?>
</select>
<p class="obligatorio" id="obligatorio_ut_seccion_estadisticas">Obligatorio: Seleccione si o no</p>
</span>
<!-- Seccion: ut_seccion_procesamiento -->
<span class="ud">
<label class="bs"><strong class="bs_form">*</strong>¿Cuenta con una sección de Procesamiento?</label>
<select class="bs" name="ut_seccion_procesamiento" id="seccion_procesamiento" onchange="Obligatorio(this);">
<?php if ($ut_seccion_procesamiento!='') echo "<option class='bs'value='"; echo $ut_seccion_procesamiento; echo "'>"; echo $ut_seccion_procesamiento; echo "</option>"; ?>
<?php
			$sql1="SELECT * FROM ambientes";
			$seleccion=mysql_query($sql1,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$ambientes=$row['ambientes'];
				
?>
<option class="bs" value="<?php echo $ambientes;?>"><?php echo $ambientes;?></option>
<?php
}
?>
</select>
<p class="obligatorio" id="obligatorio_ut_seccion_procesamiento">Obligatorio: Seleccione si o no</p>
</span>
<!-- Seccion: ut_seccion_conservacion_almacen -->
<span class="ud">
<label class="bs"><strong class="bs_form">*</strong>¿Posee una sección de Conservación y Almacenamiento?</label>
<select class="bs" name="ut_seccion_conservacion_almacen" id="seccion_conservacion_almacen" onchange="Obligatorio(this);">
<?php if ($ut_seccion_conservacion_almacen!='') echo "<option class='bs'value='"; echo $ut_seccion_conservacion_almacen; echo "'>"; echo $ut_seccion_conservacion_almacen; echo "</option>"; ?>
<?php
			$sql1="SELECT * FROM ambientes";
			$seleccion=mysql_query($sql1,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$ambientes=$row['ambientes'];
				
?>
<option class="bs" value="<?php echo $ambientes;?>"><?php echo $ambientes;?></option>
<?php
}
?>
</select>
<p class="obligatorio" id="obligatorio_ut_seccion_conservacion_almacen">Obligatorio: Seleccione si o no</p>
</span>
<!-- Seccion: ut_seccion_secretaria -->
<span class="ud">
<label class="bs"><strong class="bs_form">*</strong>¿Cuenta con una Sección de Secretaría?</label>
<select class="bs" name="ut_seccion_secretaria" id="seccion_secretaria" onchange="Obligatorio(this);">
<?php if ($ut_seccion_secretaria!='') echo "<option class='bs'value='"; echo $ut_seccion_secretaria; echo "'>"; echo $ut_seccion_secretaria; echo "</option>"; ?>
<?php
			$sql1="SELECT * FROM ambientes";
			$seleccion=mysql_query($sql1,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$ambientes=$row['ambientes'];
				
?>
<option class="bs" value="<?php echo $ambientes;?>"><?php echo $ambientes;?></option>
<?php
}
?>
</select>
<p class="obligatorio" id="obligatorio_ut_seccion_secretaria">Obligatorio: Seleccione si o no</p>
</span>
<!-- Seccion: participacion_programa_inhrr -->
<span class="ud">
<label class="bs" id="pregunta"><strong class="bs_form">*</strong>¿Ha participado en el programa nacional de control de calidad en serología, coordinado por el Instituto Nacional de Higiene Rafael Rangel?</label>
<select class="bs" name="participacion_programa_inhrr" id="inhrr" onchange="revisarObligatorio_3(this,'participacion_programa_inhrr','participacion_programa_inhrr','obligatorio_participacion_programa_inhrr','participacion_programa_inhrr_2');Obligatorio(this);">
<?php if ($participacion_programa_inhrr!='') echo "<option class='bs'value='"; echo $participacion_programa_inhrr; echo "'>"; echo $participacion_programa_inhrr; echo "</option>"; ?>
<?php
			$sql1="SELECT * FROM ambientes";
			$seleccion=mysql_query($sql1,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$ambientes=$row['ambientes'];
				
?>
<option class="bs" value="<?php echo $ambientes;?>"><?php echo $ambientes;?></option>
<?php
}
?>
</select>
<p class="obligatorio" id="obligatorio_participacion_programa_inhrr">Obligatorio: Seleccione si o no</p>
<span class="opcion_otros" id="participacion_programa_inhrr">
<label class="bs">¿Cuantas veces a participado?</label>
<select class="bs" name="nro_participaciones_inhrr" onblur="Obligatorio(this);">
<?php if ($nro_participaciones_inhrr!='') echo "<option class='bs' value='"; echo $nro_participaciones_inhrr; echo "'>"; echo $nro_participaciones_inhrr; echo "</option>"; ?>
<?php
for($valor=1; $valor<=15; $valor++){
	echo "<option class='bs' value='"; echo $valor; echo "'>"; echo $valor; echo "</option>";
	}
?>
</select>
<label class="bs">Descripción: Indique la fecha de la participación</label>
<textarea class="bs" name="participacion_descripcion_inhrr"><?php if($participacion_programa_inhrr=='si'){ echo $participacion_descripcion_inhrr; } ?></textarea>
</span>
<span class="opcion_otros" id="participacion_programa_inhrr_2">
<label class="bs">Especifique:</label>
<textarea class="bs" name="participacion_descripcion_inhrr_2"><?php if($participacion_programa_inhrr=='no'){ echo $participacion_descripcion_inhrr; } ?></textarea>
</span>
</span>
<button class="boton" type="submit" name="ambientes" value="Agregar">Guardar Banco de Sangre y Unidades Transfusionales</button>
</div>
</form>
<div class="bs">
<form action="" method="post">
<button class="boton" type="submit" name="planilla_completa" value="Agregar">GUARDAR PLANILLA COMPLETA</button>
</form>
</div>


</body>
</html>

