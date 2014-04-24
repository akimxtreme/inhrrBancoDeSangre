<?php
session_start();
?>


<?php

$codigo = $_SESSION['estatus'];
$usuario =$_SESSION['usuario'];

if($codigo == '4'){
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=administracion.php"></head></html>';
}

include "config.php";
			
			$sql="SELECT * FROM datos_de_banco_sangre WHERE usuario='$usuario'";
			$seleccion=mysql_query($sql,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
				$sector=$row['sector_pertenece'];
				$nombre=$row['nombre'];
				$rif=$row['nro_rif'];
				$nit=$row['nro_nit'];
				$tipo_situacion=$row['tipo_institucion'];
				$inmueble=$row['situacion_propiedad_inmueble'];
				$telefono=$row['nro_telefono'];
				$fax=$row['nro_fax'];
				$correo_electronico=$row['correo_electronico'];
				$pagina_web=$row['pagina_web'];
				
$q=mysql_query($sql,$conexion);

		}
		
$sql2="SELECT * FROM establecimiento_medico_asistencial WHERE usuario='$usuario'";
			$seleccion=mysql_query($sql2,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
				$es_razon_social=$row['razon_social'];
				$es_registro_sanitario=$row['nro_registro_sanitario'];
				$es_rif=$row['nro_rif'];
				$es_nit=$row['nro_nit'];
				$es_tipo_situacion=$row['tipo_institucion'];
				$es_inmueble=$row['situacion_propiedad_inmueble'];
				$es_telefono=$row['nro_telefono'];
				$es_fax=$row['nro_fax'];
				$es_correo_electronico=$row['correo_electronico'];
				$es_pagina_web=$row['pagina_web'];
				
$q=mysql_query($sql2,$conexion);
			}

$sql3="SELECT * FROM datos_del_responsable WHERE usuario='$usuario'";
			$seleccion=mysql_query($sql3,$conexion);
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
				
$q=mysql_query($sql3,$conexion);
			}
			
$sql4="SELECT * FROM unidades_transfusionales WHERE usuario='$usuario'";
			$seleccion=mysql_query($sql4,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
				$ut_seccion_donacion=$row['ut_seccion_donacion'];
				$ut_registro_recepcion=$row['ut_registro_recepcion'];
				$ut_examen_medico=$row['ut_examen_medico'];
				$ut_recuperacion=$row['ut_recuperacion'];
				$ut_cantina=$row['ut_cantina'];
				$ut_seccion_procesamiento=$row['ut_seccion_procesamiento'];
				$ut_seccion_laboratorio=$row['ut_seccion_laboratorio'];
				$ut_serologia=$row['ut_serologia'];
				$ut_inmunohematologia=$row['ut_inmunohematologia'];
				$ut_seccion_conservacion_almacen=$row['ut_seccion_conservacion_almacen'];
				$ut_seccion_estadisticas=$row['ut_seccion_estadisticas'];
				$ut_seccion_secretaria=$row['ut_seccion_secretaria'];
				$pregunta=$row['pregunta'];
				
$q=mysql_query($sql4,$conexion);
			}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Planilla de Inscripción - Bancos de Sangre </title>
<link href="css/estilos_banco_de_sangre.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="tcal.css">
<script type="text/javascript" src="js/formulario.js"></script>
<script type="text/javascript" src="tcal.js"></script> 
</head>

<body class="bs">
<div class="contenedor">
<form id="datos_solicitud" name="planilla_inscripcion_bs" onsubmit="" action="procesar_formulario.php" method="post">
<h1>Planilla de Inscripción de Bancos de Sangre</h1>

<div class="bs">
<span>
<label class="bs">Número de solicitud</label>
<input class="bs" value="BS-XXXX-2011" type="text" disabled="disabled"/>
</span>
<span>
<label class="bs">Fecha de solicitud</label>
<input class="bs" type="text" value="<?php echo date("d-m-Y");?>"  disabled="disabled"/>
</span>
</div>


<!--***************************** Recuadro A ********************************-->
<!--***************************** Recuadro A ********************************-->
<!--***************************** Recuadro A ********************************-->
<!--***************************** Recuadro A ********************************-->
<h2>Datos del Banco de Sangre</h2>
<div class="bs">

<span>
<label class="bs">Nombre del banco</label>
<input class="bs" id="nombre" name="nombre" type="text" disabled="disabled" title="Indicar el nombre del banco de sangre, si aplica." onkeypress="return permite(event, "car")"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this);" value="<?php echo $nombre;?>"/>
</span>

<span class="bs">
<label class="bs">Sector al que pertenece:</label>
<input class="bs" type="text" disabled="disabled" title="Indicar el nombre del banco de sangre, si aplica." onkeypress="return permite(event, "car")"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this);" value="<?php echo $sector;?>"/>
</span>

<span class="bs">
<label class="bs">Dirección</label>
<input class="bs" id="nombre" name="nombre" type="text" disabled="disabled" title="Indicar el nombre del banco de sangre, si aplica." onkeypress="return permite(event, "car")"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this);" value=""/>
</span>

<span>
<label class="bs">Nº de Rif</label>
<input class="bs" id="rif" name="rif" title="Indicar el número de registro fiscal (RIF) del establecimiento solicitante (Si aplica)" type="text" maxlength="9" onfocus="entroEnFoco(this)" value="<?php echo $rif;?>" onblur="salioDeFoco(this); revisarObligatorio(this)" disabled="disabled" />
</span>

<span>
<label class="bs">Nº de Nit</label>
<input class="bs" id="nit" name="nit" title="Indicar el número de información tributaria de la empresa solicitante (NIT) - (Si aplica)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)" value="<?php echo $nit;?>" disabled="disabled" />
</span>

<span>
<label class="bs">Teléfono</label>
<input class="bs" id="telefono" name="telefono" title="Indicar el código de área y teléfono de ubicación del banco de sangre" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)" value="<?php echo $telefono; ?>" disabled="disabled" />
</span>

<span>
<label class="bs">Fax</label>
<input class="bs" id="fax" name="fax" title="Indicar el número de fax de ubicación del representante Legal del establecimiento" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)" value="<?php echo $fax; ?>" disabled="disabled" />
</span>

<span>
<label class="bs">Correo electrónico</label>
<input class="bs" id="correo_electronico" name="correo_electronico" title="Indicar la dirección de correo electrónico de contacto para envío de información oficial al representante legal del establecimiento" type="text" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarEmail(this);" value="<?php echo $correo_electronico; ?>" disabled="disabled" />
</span>

<span>
<label class="bs">Página web</label>
<input class="bs" id="pagina_web" name="pagina_web" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)" value="<?php echo $pagina_web; ?>" disabled="disabled" />
</span>

<span class="bs">
<label class="bs">Tipo de institución</label>
<input class="bs" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)" value="<?php echo $tipo_situacion; ?>" disabled="disabled" />
</span>

<span class="bs">
<label class="radio">Situación de la propiedad del inmueble</label>
<input class="bs" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)" value="<?php echo $inmueble; ?>" disabled="disabled" />
</span>




</div>

<!--***************************** Recuadro B ********************************-->
<!--***************************** Recuadro B ********************************-->
<!--***************************** Recuadro B ********************************-->
<!--***************************** Recuadro B ********************************-->

<h2>Datos del Establecimiento Médico Asistencial donde funciona el Banco de Sangre</h2>
<div class="bs">

<span class="bs">
<label class="bs">Razón social</label>
<input class="bs" type="text"  value="<?php echo $es_razon_social; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Nº de registro sanitario</label>
<input class="bs" type="text" value="<?php echo $es_registro_sanitario; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Nº de Rif</label>
<input class="bs" type="text" value="<?php echo $es_rif; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Nº de Nit</label>
<input class="bs" type="text" value="<?php echo $es_nit; ?>" disabled="disabled"/>
</span>


<span>
<label class="bs">Teléfono</label>
<input class="bs" type="text" value="<?php echo $es_telefono; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Fax</label>
<input class="bs" type="text" value="<?php echo $es_fax; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Correo electrónico</label>
<input class="bs" type="text" value="<?php echo $es_correo_electronico; ?>" />
</span>

<span>
<label class="bs">Página web</label>
<input class="bs" type="text" value="<?php echo $es_pagina_web; ?>" disabled="disabled"/>
</span>

<span class="bs"><label class="bs">Tipo de situación</label>
<input class="bs" type="text" value="<?php echo $es_tipo_situacion; ?>" disabled="disabled" /></span>

<span class="bs">
<label class="bs">Situación del inmueble</label>
<input class="bs" type="text" value="<?php echo $es_inmueble; ?>" disabled="disabled" />
</span>

</div>


<!--***************************** Recuadro C ********************************-->
<!--***************************** Recuadro C ********************************-->
<!--***************************** Recuadro C ********************************-->
<!--***************************** Recuadro C ********************************-->

<h2>Datos del Responsable</h2>
<div class="bs">
<h3>Director médico responsable del establecimiento médico asistencial</h3>

<span>
<label class="bs">Nombre(s) y apellido(s)</label>
<input class="bs" type="text" value="<?php echo $rs_nombre; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Cédula de identidad</label>
<input class="bs" type="text" value="<?php echo $rs_cedula; ?>" disabled="disabled"/>
</span>


<span>
<label class="bs">Profesión</label>
<input class="bs" type="text" value="<?php echo $rs_profesion; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Expedido por</label>
<input class="bs" type="text" value="<?php echo $rs_expedido; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Especialidad</label>
<input class="bs" type="text" value="<?php echo $rs_especialidad; ?>"/>
</span>

<span>
<label class="bs">Matricula del MPPS</label>
<input class="bs" type="text" value="<?php echo $rs_matricula; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Registro colegio</label>
<input class="bs" type="text" value="<?php echo $rs_colegio; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Nº Rif</label>
<input class="bs" type="text" value="<?php echo $rs_rif; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Correo electrónico</label>
<input class="bs" type="text" value="<?php echo $rs_correo_electronico; ?>" disabled="disabled"/>
</span>


<span>
<label class="bs">Nº telefónico (local)</label>
<input class="bs" type="text" maxlength="12" value="<?php echo $rs_tlf_local; ?>" disabled="disabled"/>
</span>


<span>
<label class="bs">Nº telefónico (movil)</label>
<input class="bs" type="text" maxlength="12" value="<?php echo $rs_tlf_movil; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Fax</label>
<input class="bs" type="text" maxlength="12" value="<?php echo $rs_fax; ?>" disabled="disabled"/>
</span>

<h3>Director Médico responsable del banco de sangre y unidades transfusionales (Director Médico)</h3>

<span>
<label class="bs">Nombre(s) y apellido(s)</label>
<input class="bs" type="text" value="<?php echo $dm_nombre; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Cédula de identidad</label>
<input class="bs" type="text" value="<?php echo $dm_cedula; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Profesión</label>
<input class="bs" type="text" value="<?php echo $dm_profesion; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Expedido por</label>
<input class="bs" type="text" value="<?php echo $dm_expedido; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Especialidad</label>
<input class="bs" type="text" value="<?php echo $dm_especialidad; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Matricula del MPPS</label>
<input class="bs" type="text" value="<?php echo $dm_matricula; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Registro colegio</label>
<input class="bs" type="text" value="<?php echo $dm_colegio; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Nº Rif</label>
<input class="bs" type="text" value="<?php echo $dm_rif; ?>" disabled="disabled"/>
<p class="obligatorio" id="obligatorio_dm_rif">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Correo electrónico</label>
<input class="bs" type="text" value="<?php echo $dm_correo_electronico; ?>" disabled="disabled"/>
</span>


<span>
<label class="bs">Nº telefónico (local)</label>
<input class="bs" type="text" value="<?php echo $dm_tlf_local; ?>" disabled="disabled"/>
</span>


<span>
<label class="bs">Nº telefónico (movil)</label>
<input class="bs" type="text" value="<?php echo $dm_tlf_movil; ?>" disabled="disabled"/>
</span>


<span>
<label class="bs">Fax</label>
<input class="bs" type="text" value="<?php echo $dm_fax; ?>" disabled="disabled"/>
</span>


<h3>Coordinador responsable del banco de sangre y unidades transfusionales</h3>

<span>
<label class="bs">Nombre(s) y apellido(s)</label>
<input class="bs" type="text" value="<?php echo $cr_nombre; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Cédula de identidad</label>
<input class="bs" type="text" value="<?php echo $cr_cedula; ?>" disabled="disabled"/>
</span>


<span>
<label class="bs">Profesión</label>
<input class="bs" type="text" value="<?php echo $cr_profesion; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Expedido por</label>
<input class="bs" type="text" value="<?php echo $cr_expedido; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Especialidad</label>
<input class="bs" type="text" value="<?php echo $cr_especialidad; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Matricula del MPPS</label>
<input class="bs" type="text" value="<?php echo $cr_matricula; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Registro colegio</label>
<input class="bs" type="text" value="<?php echo $cr_colegio; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Nº Rif</label>
<input class="bs" type="text" value="<?php echo $cr_rif; ?>" disabled="disabled"/>
</span>

<span>
<label class="bs">Correo electrónico</label>
<input class="bs" type="text" value="<?php echo $cr_correo_electronico; ?>" disabled="disabled"/>
</span>


<span>
<label class="bs">Nº telefónico (local)</label>
<input class="bs" type="text" value="<?php echo $cr_tlf_local; ?>" disabled="disabled"/>
</span>


<span>
<label class="bs">Nº telefónico (movil)</label>
<input class="bs" type="text" value="<?php echo $cr_tlf_movil; ?>" disabled="disabled"/>
</span>


<span>
<label class="bs">Fax</label>
<input class="bs" type="text" value="<?php echo $cr_fax; ?>" disabled="disabled"/>
</span>

</div>




<h2>Banco de Sangre y Unidades Transfusionales</h2>
<!-- Recuadro D -->
<div class="bs">

<h3 class="contenedor_c">Ambientes</h3>

<span class="ud">
<label class="radio">Sección de donación:<input class="radio" type="checkbox" value="seccion donacion <?php if(strpos($ut_seccion_donacion,"seccion donacion")!== false)print('checked'); ?>" disabled="disabled" /></label>
<span class="sub_radio"><input class="radio" type="checkbox" value="registro y recepcion <?php if(strpos($ut_registro_recepcion,"registro y recepcion")!== false)print('checked'); ?>" disabled="disabled" /><p class="radio">Registro y Recepción.</p></span>
<span class="sub_radio"><input class="radio" type="checkbox" value="examen medico <?php if(strpos($ut_examen_medico,"examen medico")!== false)print('checked'); ?>" disabled="disabled" /><p class="radio">Examen Médico.</p></span>
<span class="sub_radio"><input class="radio" type="checkbox" value="recuperacion<?php if(strpos($ut_recuperacion,"recuperacion")!== false)print('checked'); ?>" disabled="disabled" /><p class="radio">Recuperación</p></span>
<span class="sub_radio"><input class="radio" type="checkbox" value="cafetin<?php if(strpos($ut_cantina,"cafetin")!== false)print('checked'); ?>" disabled="disabled" /><p class="radio">Cafetín</p></span>
</span>

<span class="ud">
<label class="radio">Sección de procesamiento.<input class="radio" type="checkbox" value="seccion de procesamiento<?php if(strpos($ut_seccion_procesamiento,"seccion de procesamiento")!== false)print('checked'); ?>" disabled="disabled"/></label>
</span>


<span class="ud">
<label class="radio">Sección de laboratorio:<input class="radio" type="checkbox" value="seccion de laboratorio<?php if(strpos($ut_seccion_laboratorio,"seccion de laboratorio")!== false)print('checked'); ?>" disabled="disabled"/></label>
<span class="sub_radio"><input class="radio" type="checkbox" value="serologia<?php if(strpos($ut_serologia,"serologia")!== false)print('checked'); ?>" disabled="disabled"/><p class="radio">Serología.</p></span>
<span class="sub_radio"><input class="radio" type="checkbox" value="inmunohematología<?php if(strpos($ut_inmunohematologia,"inmunohematología")!== false)print('checked'); ?>" disabled="disabled"/><p class="radio">Inmunohematología.</p></span>
</span>


<span class="ud">
<label class="radio">Sección de conservación y almacenamiento.<input class="radio" type="checkbox" value="seccion de conservación y almacenamiento<?php if(strpos($ut_seccion_conservacion_almacen,"seccion de conservación y almacenamiento")!== false)print('checked'); ?>" disabled="disabled"/></label>
</span>


<span class="ud">
<label class="radio">Sección de estadísticas.<input class="radio" type="checkbox" value="seccion de estadisticas<?php if(strpos($ut_seccion_estadisticas,"seccion de estadisticas")!== false)print('checked'); ?>" disabled="disabled"/></label>
</span>

<span class="ud">
<label class="radio">Sección de Secretaría.<input class="radio" type="checkbox" value="seccion de secretaria<?php if(strpos($ut_seccion_secretaria,"seccion de secretaria")!== false)print('checked'); ?>" disabled="disabled"/></label>
</span>
</div>

<div class="bs">
<span class="sub_radio"><label class="bs">Participación en el programa nacional de control de calidad en serología</label></span>
<span class="bs_pregunta"><input class="radio" id="si" name="pregunta" type="radio" value="si" onclick="visible(this)" /><p class="radio">Si</p>
<input class="radio" id="no" name="pregunta"  type="radio" value="no" onclick="no_visible(this);" /><p class="radio">No/Especifique</p><input class="bs_otros" title="Especifique" id="no_especifique" name="no_especifique" type="text" onkeypress="return permite(event, 'car')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/></span>

<span class="pregunta" id="pregunta">
<label class="bs">Ciclo de participación</label>
<select class="bs" name="si_ciclo"><script type="text/javascript">fechas(2006,6);</script></select>
</span>

</div>

</form>
</div>


</body>
</html>

