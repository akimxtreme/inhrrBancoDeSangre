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
<div class="encabezado"></div>
<form id="" name="planilla_inscripcion_bs" onsubmit="return validar();" action="consulta_bs.php" method="post">
<h1>Planila de Inscripción de Bancos de Sangre</h1>

<!-- Instructivo , Numero de Solicitud , Fecha de Solicitud -->
<div class="bs">
<span class="instructivo"><h2 class="instructivo">Lea el siguiente instructivo antes de continuar</h2></span>
<span>
<label class="bs">Número de solicitud</label>
<input class="bs" name="nro_solicitud" title="Representa un número proporcionado por el sistema con el fin de dar un seguimiento a la solicitud" value="BS-XXXX-2011" type="text" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this);" disabled="disabled"/>
<p class="obligatorio" >Campo obligatorio - Datos incorrectos</p>
</span>
<span>
<label class="bs">Fecha de solicitud</label>
<input class="bs" type="text" title="Indique dia, mes y año de introducción de la solicitud de aprobación de proyecto para establecimiento de salud" name="date" rel="tcal" value=""/>
<p class="obligatorio" id="obligatorio_date">Campo obligatorio - Datos incorrectos</p>
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
<input class="bs" id="nombre" name="nombre" type="text" title="Indicar el nombre del banco de sangre, si aplica." onkeypress="return permite(event, 'car')"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_nombre">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="radio">
<label class="radio">Sector al que pertenece:</label>
<span class="sub_radio"><input class="radio" title="Seleciona aquí si pertenece al Ministerio del Poder Popular para la Educación" id="mpps" name="sector" type="radio" value="mpps" onclick="no_visible(this)" /><p class="radio">MPPS</p></span>
<span class="sub_radio"><input class="radio" title="Seleciona aquí si pertenece a Sanidad Militar" id="sanidad_militar" name="sector" type="radio" value="sanidad militar" onclick="no_visible(this)" /><p class="radio">Sanidad militar</p></span>
<span class="sub_radio"><input class="radio" title="Seleciona aquí si pertenece al Instituto Venezolano del Seguro Social" id="ivss" name="sector" type="radio" value="ivss" onclick="no_visible(this)" /><p class="radio">IVSS</p></span>
<span class="sub_radio"><input class="radio" title="Selecciona esta opción, si no pertenece a los sectores mencionados" id="otros" name="sector" type="radio" value="otros" onclick="visible(this);"/><p class="radio">Otros</p>
<p class="radio">/ Especifique:</p><input class="bs_otros" title="Ingrese el sector en donde pertenece" id="bs_otros" name="sector_otros" type="text" onkeypress="return permite(event, 'car')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/></span>
<span class="obligatorio"><p class="obligatorio" id="obligatorio_sector">Campo obligatorio - Datos incorrectos</p></span>
</span>



<span>
<label class="bs">* Nº de registro sanitario</label>
<input class="bs" id="nro_registro_sanitario" name="nro_registro_sanitario" title="Indica si el banco de Sangre posee algún registro Individual (Si aplica)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_nro_registro_sanitario">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">* Dirección</label>
<input class="bs" id="direccion" name="direccion" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_direccion">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Nº de rif</label>
<input class="bs" id="rif" name="rif" title="Indicar el número de registro fiscal (RIF) del establecimiento solicitante (Si aplica)" type="text" maxlength="9" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rif">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Nº de nit</label>
<input class="bs" id="nit" name="nit" title="Indicar el número de información tributaria de la empresa solicitante (NIT) - (Si aplica)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_nit">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Teléfono</label>
<input class="bs" id="telefono" name="telefono" title="Indicar el código de área y teléfono de ubicación del banco de sangre" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_telefono">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Fax</label>
<input class="bs" id="fax" name="fax" title="Indicar el número de fax de ubicación del representante Legal del establecimiento" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_fax">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Correo electrónico</label>
<input class="bs" id="correo_electronico" name="correo_electronico" title="Indicar la dirección de correo electrónico de contacto para envío de información oficial al representante legal del establecimiento" type="text" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarEmail(this);"/>
<p class="obligatorio" id="obligatorio_correo_electronico">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Página web</label>
<input class="bs" id="pagina_web" name="pagina_web" title="Indicar la dirección de internet del establecimiento (Si Aplica)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_pagina_web">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="radio">
<label class="radio">Tipo de institución</label>
<span class="sub_radio"><input class="radio" title="Capital del establecimiento y su origen" id="publico" name="tipo_situacion" type="radio" value="publico" onclick="no_visible(this);" /><p class="radio">Público</p></span>
<span class="sub_radio"><input class="radio" title="Capital del establecimiento y su origen" id="privado" name="tipo_situacion" type="radio" value="privado" onclick="no_visible(this);"/><p class="radio">Privado</p></span>
<span class="sub_radio"><input class="radio" title="Capital del establecimiento y su origen" id="cooperativa" name="tipo_situacion" type="radio" value="cooperativa" onclick="no_visible(this);"/><p class="radio">Cooperativa</p></span>
<span class="sub_radio"><input class="radio" title="Capital del establecimiento y su origen" id="otros_situacion" name="tipo_situacion" type="radio" value="otros_situacion" onfocus="otrasEspecifique(this)" onclick="visible(this);" /><p class="radio">Otros</p>
<p class="radio">/ Especifique:</p><input class="bs_otros" title="Capital del Establecimiento y su Origen" id="situacion_otros" name="tipo_situacion_otros" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/></span>
<span class="obligatorio"><p class="obligatorio" id="obligatorio_tipo_situacion">Campo obligatorio - Datos incorrectos</p></span>
</span>



<span class="radio">
<label class="radio">Situación de la propiedad del inmueble</label>
<span class="sub_radio"><input class="radio" title="Seleccione esta opción si la propiedad es propia" id="propio" name="inmueble" type="radio" value="propio" onclick="no_visible(this);"/><p class="radio">Propio</p></span>
<span class="sub_radio"><input class="radio" title="Seleccione esta opción si la propiedad es alquilada" id="alquilado" name="inmueble" type="radio" value="alquilado" onclick="no_visible(this);"/><p class="radio">Alquilado</p></span>
<span class="sub_radio"><input class="radio" title="Seleccione esta opción si la propiedad se encuentra en comodato" id="comodato" name="inmueble" type="radio" value="comodato" onclick="no_visible(this);"/><p class="radio">En comodato</p></span>
<span class="sub_radio"><input class="radio" title="Seleccione esta opción si no es ninguna de las mencionadas" id="inmueble" name="inmueble" type="radio" value="inmueble_otros" onfocus="otrasEspecifique(this)" onclick="visible(this);" /><p class="radio">Otros</p>
<p class="radio">/ Especifique:</p><input class="bs_otros" title="Indique el tipo de Propiedad" id="inmueble_otros" name="tipo_situacion_otros" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/></span>
<span class="obligatorio"><p class="obligatorio" id="obligatorio_inmueble">Campo obligatorio - Datos incorrectos</p></span>
</span>




</div>

<!--***************************** Recuadro B ********************************-->
<!--***************************** Recuadro B ********************************-->
<!--***************************** Recuadro B ********************************-->
<!--***************************** Recuadro B ********************************-->

<h2>Datos del Establecimiento Médico Asistencial donde funciona el Banco de Sangre</h2>
<div class="bs">

<span class="radio">
<label class="radio">Razón social del establecimiento al que pertenece el banco de sangre:</label>
<input class="bs" id="es_razon_social" name="es_razon_social" title="Indica la denominación social según el registro mercantil del establecimiento (Si aplica)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<span class="obligatorio"><p class="obligatorio" id="obligatorio_es_razon_social">Campo obligatorio - Datos incorrectos</p></span>
</span>

<span>
<label class="bs">Nº de registro sanitario</label>
<input class="bs" id="es_registro_sanitario" name="es_registro_sanitario" title="Indicar si el establecimiento de salud MÉDICO asistencial donde se encuentra el banco de sangre posee algún número de registro sanitario otorgado por el Servicio Autónomo de Contraloría Sanitaria (SACS)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_es_registro_sanitario">Campo Obligatorio - Datos Incorrectos</p>
</span>

<span>
<label class="bs">Nº de rif</label>
<input class="bs" id="es_rif" name="es_rif" type="text" title="Indique el número del registro de información fiscal (RIF) del establecimiento solicitante"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_es_rif">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Nº de nit</label>
<input class="bs" id="es_nit" name="es_nit" title="Indique el número de información tributaria de la empresa solicitante" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_es_nit">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs">Teléfono</label>
<input class="bs" id="es_telefono" name="es_telefono" title="Indique el código de área y teléfono de ubicación del banco de sangre" type="text" maxlength="12" onkeypress="return permite(event, 'num')"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_es_telefono">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Fax</label>
<input class="bs" id="es_fax" name="es_fax" title="Indique el número de fax de ubicación del representante legal del establecimiento" type="text" maxlength="12" onkeypress="return permite(event, 'num')"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_es_fax">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Correo electrónico</label>
<input class="bs" id="es_correo" name="es_correo_electronico" title="Indique la dirección de correo electrónico de contacto para envío de información oficial al representante legal del establecimiento" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarEmail(this);"/>
<p class="obligatorio" id="es_correo_electronico">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Página web</label>
<input class="bs" id="es_pagina_web" name="es_pagina_web" title="Indicar la dirección de internet del establecimiento (Si aplica)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="radio">
<label class="radio">Tipo de situación</label>
<span class="sub_radio"><input class="radio" title="Capital del establecimiento y su origen" id="es_tipo_situacion_publico" name="es_tipo_situacion" type="radio" value="publico" onclick="no_visible(this)" /><p class="radio">Público</p></span>
<span class="sub_radio"><input class="radio" title="Capital del establecimiento y su origen" id="es_tipo_situacion_privado" name="es_tipo_situacion" type="radio" value="privado" onclick="no_visible(this)" /><p class="radio">Privado</p></span>
<span class="sub_radio"><input class="radio" title="Capital del establecimiento y su origen" id="es_tipo_situacion_cooperativa" name="es_tipo_situacion" type="radio" value="cooperativa" onclick="no_visible(this)" /><p class="radio">Cooperativa</p></span>
<span class="sub_radio"><input class="radio" title="Capital del establecimiento y su origen" id="es_tipo_situacion_otros" name="es_tipo_situacion" type="radio" value="" onclick="visible(this)" /><p class="radio">Otros</p>
<p class="radio">/ Especifique:</p><input class="bs_otros" name="es_tipo_situacion_otros" id="es_tipo_situacion" title="Capital del establecimiento y su origen" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/></span>
<span class="obligatorio"><p class="obligatorio">Campo obligatorio - Datos incorrectos</p></span>
</span>

<span class="radio">
<label class="radio">Situación de la propiedad del inmueble</label>
<span class="sub_radio"><input class="radio" title="Seleccione esta opción si la propiedad es propia" id="es_inmueble_propio" name="es_inmueble" type="radio" value="propio" onclick="no_visible(this)" /><p class="radio">Propio</p></span>
<span class="sub_radio"><input class="radio" title="Seleccione esta opción si la propiedad es alquilada" id="es_inmueble_alquilado" name="es_inmueble" type="radio" value="alquilado" onclick="no_visible(this)" /><p class="radio">Alquilado</p></span>
<span class="sub_radio"><input class="radio" title="Seleccione esta opción si la propiedad se encuentra en comodato" id="es_inmueble_comodato" name="es_inmueble" type="radio" value="comodato" onclick="no_visible(this);"/><p class="radio">En comodato</p></span>
<span class="sub_radio"><input class="radio" title="Seleccione esta opción si no es ninguna de las mencionadas" id="es_inmueble_otros_es" name="es_inmueble" type="radio" value="" onclick="visible(this)" /><p class="radio">Otros</p>
<p class="radio">/ Especifique:</p><input class="bs_otros" name="es_tipo_situacion_otros" id="es_inmueble" title="Indique el tipo de propiedad" type="text" onblur="salioDeFoco(this);" onfocus="entroEnFoco(this)"/></span>
<span class="obligatorio"><p class="obligatorio">Campo obligatorio - Datos incorrectos</p></span>
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
<input class="bs" id="rs_nombre" name="rs_nombre" title="Indica Nombre(s) y apellido(s) del director médico del establecimiento" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_nombre">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="bs">
<span class="sub_radio"><label class="bs">Cédula de identidad</label></span>
<span class="sub_radio"><input class="radio" id="rs_venezolano"  name="rs_nacionalidad"  title="Seleccione esta opción si es venezolano" type="radio" value="venezolano" onclick="nacionalidad(this)" /><p class="radio">V</p>
<input class="radio" id="rs_extranjero" name="rs_nacionalidad"  title="Seleccione esta opción si es extranjero" type="radio" value="extranjero" onclick="nacionalidad(this)" /><p class="radio">E</p></span>
<input class="bs" id="rs_nacionalidad" name="rs_cedula"  value="" title="Reseñar si es venezolano(a) ó extranjero(a) y acontinuación el número de cédula de identidad del director del establecimiento" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs">Profesión</label>
<input class="bs" id="rs_profesion" name="rs_profesion" title="Indicar la profesión relativa a las ciencias de la salud adscritas al Ministerio del Poder Popular para la Salud" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_profesion">Campo obligatorio - datos Incorrectos</p>
</span>

<span>
<label class="bs">Expedido por</label>
<input class="bs" id="rs_expedido" name="rs_expedido" title="Indicar la universidad ó institución que le otorgó el titulo" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_expedido">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Especialidad</label>
<input class="bs" id="rs_especialidad" name="rs_especialidad" title="Indicar la especialidad en el área de salud del director médico del establecimiento" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_especialidad">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Matricula del MPPS</label>
<input class="bs" id="rs_matricula" name="rs_matricula" title="Indicar el número de matrícula del registro como profesional en el Ministerio del Poder Popular para la Salud del director médico del establecimiento" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_matricula">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Registro colegio</label>
<input class="bs" id="rs_colegio" name="rs_colegio" title="Indicar el número que le otorgó el colegio del área de la salud al cual pertenece del director médico del establecimiento" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_colegio">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Nº rif</label>
<input class="bs" id="rs_rif" name="rs_rif" title="Inidicar el número del registro de información fiscal del establecimiento (Si aplica)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_rif">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Correo electrónico</label>
<input class="bs" id="rs_correo_electronico_rs" name="rs_correo_electronico" title="Indicar la dirección de correo electrónico de contacto para envío de información oficial del director médico del establecimiento" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarEmail(this);"/>
<p class="obligatorio" id="rs_correo_electronico">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs">Nº telefónico (local)</label>
<input class="bs" id="rs_tlf_local" name="rs_tlf_local" title="Indique el número de teléfono local de ubicación del director médico del establecimiento" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_tlf_local">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs">Nº telefónico (movil)</label>
<input class="bs" id="rs_tlf_movil" name="rs_tlf_movil" title="Indique el número de teléfono móvil de ubicación del director médico del establecimiento" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_tlf_movil">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs">Fax</label>
<input class="bs" id="rs_fax" name="rs_fax" title="Indique el número de teléfono fax de ubicación del director médico del establecimiento" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_fax">Campo obligatorio - Datos incorrectos</p>
</span>

<h3>Director Médico responsable del banco de sangre y unidades transfusionales (Director Médico)</h3>

<span>
<label class="bs">Nombre(s) y apellido(s)</label>
<input class="bs" id="dm_nombre" name="dm_nombre" title="Indicar nombre(s) y apellido(s) del director médico del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_nombre">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="bs">
<span class="sub_radio"><label class="bs">Cédula de identidad</label></span>
<span class="sub_radio"><input class="radio" title="Seleccione esta opción si es venezolano" id="dm_venezolano" name="dm_nacionalidad" type="radio" value="venezolano" onclick="nacionalidad(this)" /><p class="radio">V</p>
<input class="radio" id="dm_extranjero" name="dm_nacionalidad"  title="Seleccione esta opción si es extranjero" type="radio" value="extranjero" onclick="nacionalidad(this)" /><p class="radio">E</p></span>
<input class="bs" id="dm_nacionalidad"  name="dm_cedula" title="Reseñar si es venezolana(o) ó extranjera(o) y a continuación el número de cédula" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs">Profesión</label>
<input class="bs" id="dm_profesion" name="dm_profesion" title="Indicar la profesión relativa a las ciencias de la salud adscritas en el Ministerio del Poder Popular para la Salud del director médico del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_profesion">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Expedido por</label>
<input class="bs" id="dm_expedido" name="dm_expedido" title="Indicar la universidad ó institución que le otorgó el titulo" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_expedido">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Especialidad</label>
<input class="bs" id="dm_especialidad" name="dm_especialidad" title="Indicar la especialidad en el área de salud del director médico del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_especialidad">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Matricula del MPPS</label>
<input class="bs" id="dm_matricula" name="dm_matricula" title="Indicar el número de matrícula del registro como profesional en el Ministerio del Poder Popular para la Salud del director médico del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_matricula">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Registro colegio</label>
<input class="bs" id="dm_colegio" name="dm_colegio" title="Indicar el número que le otorgó el colegio del área de la salud al cual pertenece del director médico del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_colegio">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Nº rif</label>
<input class="bs" id="dm_rif" name="dm_rif" title="Inidicar el número del registro de información fiscal del banco de sangre (Si aplica)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_rif">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Correo electrónico</label>
<input class="bs" id="dm_correo_electronico_dm" name="dm_correo_electronico" title="Indicar la dirección de correo electrónico de contacto para envío de información oficial del director médico del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarEmail(this);"/>
<p class="obligatorio" id="dm_correo_electronico">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs">Nº telefónico (local)</label>
<input class="bs" id="dm_tlf_local" name="dm_tlf_local" title="Indique el número de teléfono local de ubicación del director médico del banco de sangre" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_tlf_local">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs">Nº telefónico (movil)</label>
<input class="bs" id="dm_tlf_movil" name="dm_tlf_movil" title="Indique el número de teléfono movil de ubicación del director médico del banco de sangre" type="text" maxlength="12" onkeypress="return permite(event, 'num')"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_tlf_movil">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs">Fax</label>
<input class="bs" id="dm_fax" name="dm_fax" title="Indique el número de teléfono fax de ubicación del director médico del banco de sangre" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_fax">Campo obligatorio - Datos incorrectos</p>
</span>


<h3>Coordinador responsable del banco de sangre y unidades transfusionales</h3>

<span>
<label class="bs">Nombre(s) y apellido(s)</label>
<input class="bs" id="cr_nombre" name="cr_nombre" title="Indicar nombre(s) y apellidos(s) del coordinador del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_nombre">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="bs">
<span class="sub_radio"><label class="bs">Cédula de identidad</label></span>
<span class="sub_radio"><input class="radio" id="cr_venezolano" name="cr_nacionalidad"  title="Seleccione esta opción si es venezolano" type="radio" value="venezolano" onclick="nacionalidad(this)" /><p class="radio">V</p>
<input class="radio" id="cr_extranjero" name="cr_nacionalidad"  title="Seleccione esta opción si es extranjero" type="radio" value="extranjero" onclick="nacionalidad(this)" /><p class="radio">E</p></span>
<input class="bs" id="cr_nacionalidad" name="cr_cedula"  title="Reseñar si es venezolana(o) ó extranjera(o) y a continuación el número de cédula" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs">Profesión</label>
<input class="bs" id="cr_profesion" name="cr_profesion" title="Indicar la profesión relativa a las ciencias de la salud adscritas en el Ministerio del Poder Popular para la Salud del coordinador del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_profesion">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Expedido por</label>
<input class="bs" id="cr_expedido" name="cr_expedido" title="Indicar la universidad ó institución que le otorgó el titulo" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_expedido">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Especialidad</label>
<input class="bs" id="cr_especialidad" name="cr_especialidad" title="Indicar la especialidad en el área de salud del coordinador del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_especialidad">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Matricula del MPPS</label>
<input class="bs" id="cr_matricula" name="cr_matricula" title="Indicar el número de matrícula del registro como profesional en el Ministerio del Poder Popular para la Salud del coordinador del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_matricula">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Registro colegio</label>
<input class="bs" id="cr_colegio" name="cr_colegio" title="Indicar el número que le otorgó el colegio del área de la salud al cual pertenece del coordinador del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_colegio">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Nº rif</label>
<input class="bs" id="cr_rif" name="cr_rif" title="Inidicar el número del registro de información fiscal del banco de sangre (Si aplica)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_rif">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Correo electrónico</label>
<input class="bs" id="cr_correo_electronico_cr" name="cr_correo_electronico" title="Indicar la dirección de correo electrónico de contacto para envío de información oficial del coordinador del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarEmail(this);"/>
<p class="obligatorio" id="cr_correo_cr">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs">Nº telefónico (local)</label>
<input class="bs" id="cr_tlf_local" name="cr_tlf_local" title="Indique el número de teléfono local de ubicación del coordinador del banco de sangre" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_tlf_local">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs">Nº telefónico (movil)</label>
<input class="bs" id="cr_tlf_movil" name="cr_tlf_movil" title="Indique el número de teléfono movil de ubicación del coordinador del banco de sangre" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_tlf_movil">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs">Fax</label>
<input class="bs" id="cr_fax" name="cr_fax" title="Indique el número de teléfono fax de ubicación del coordinador del banco de sangre" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_fax">Campo obligatorio - Datos incorrectos</p>
</span>

</div>




<h2>Banco de Sangre y Unidades Transfusionales</h2>
<!-- Recuadro D -->
<div class="bs">

<h3 class="contenedor_c">Ambientes</h3>

<span class="ud">
<label class="radio">Sección de donación:<input class="radio" id="ut_seccion_donacion" name="ut_seccion_donacion" type="checkbox" value="seccion donacion" onclick="desactivar()" /></label>
<span class="sub_radio"><input class="radio" id="ut_registro_recepcion" name="ut_registro_recepcion" type="checkbox" value="registro y recepcion" onclick="desactivar()" /><p class="radio">Registro y Recepción.</p></span>
<span class="sub_radio"><input class="radio" id="ut_examen_medico" name="ut_examen_medico" type="checkbox" value="examen medico" onclick="desactivar()" /><p class="radio">Examen Médico.</p></span>
<span class="sub_radio"><input class="radio" id="ut_recuperacion" name="ut_recuperacion" type="checkbox" value="recuperacion" onclick="desactivar()" /><p class="radio">Recuperación</p></span>
<span class="sub_radio"><input class="radio" id="ut_cantina" name="ut_cantina" type="checkbox" value="cafetin" onfocus="otrasEspecifique(this)" onclick="activar()" /><p class="radio">Cafetín</p></span>
<span class="ud_obligatorio"><p class="obligatorio">Campo obligatorio - Datos incorrectos</p></span>
</span>

<span class="ud">
<label class="radio">Sección de procesamiento.<input class="radio" id="ut_seccion_procesamiento" name="ut_seccion_procesamiento" type="checkbox" value="seccion de preocesamiento" onclick="desactivar()" /></label>
<span class="ud_obligatorio"><p class="obligatorio">Campo Obligatorio - Datos Incorrectos</p></span>
</span>


<span class="ud">
<label class="radio">Sección de laboratorio:<input class="radio" id="ut_seccion_donacion" name="ut_seccion_donacion" type="checkbox" value="seccion de laboratorio" onclick="desactivar()" /></label>
<span class="sub_radio"><input class="radio" id="ut_serologia" name="ut_serologia" type="checkbox" value="serologia" onclick="desactivar()" /><p class="radio">Serología.</p></span>
<span class="sub_radio"><input class="radio" id="ut_inmunohematologia" name="ut_inmunohematologia" type="checkbox" value="inmunohematología" onclick="desactivar()" /><p class="radio">Inmunohematología.</p></span>
<span class="ud_obligatorio"><p class="obligatorio">Campo obligatorio - Datos incorrectos</p></span>
</span>


<span class="ud">
<label class="radio">Sección de conservación y almacenamiento.<input class="radio" id="ut_seccion_conservacion_almacen" name="ut_seccion_conservacion_almacen" type="checkbox" value="seccion de conservación y almacenamiento" onclick="desactivar()" /></label>
<span class="ud_obligatorio"><p class="obligatorio">Campo obligatorio - Datos incorrectos</p></span>
</span>


<span class="ud">
<label class="radio">Sección de estadísticas.<input class="radio" id="ut_seccion_estadisticas" name="ut_seccion_estadisticas" type="checkbox" value="seccion de estadisticas" onclick="desactivar()" /></label>
<span class="ud_obligatorio"><p class="obligatorio">Campo Obligatorio - Datos Incorrectos</p></span>
</span>

<span class="ud">
<label class="radio">Sección de Secretaría.<input class="radio" id="ut_seccion_secretaria" name="ut_seccion_secretaria" type="checkbox" value="seccion de secretaria" onclick="desactivar()" /></label>
<span class="ud_obligatorio"><p class="obligatorio">Campo obligatorio - Datos incorrectos</p></span>
</span>

</div>
<div class="bs">
<span class="sub_radio"><label class="bs">¿A participado en el programa nacional de control de calidad en serología, coordinado por el Instituto Nacional de Higiene Rafael Rangel?</label></span>

<span class="bs_pregunta"><input class="radio" id="si" name="pregunta" type="radio" value="si" onclick="visible(this)" /><p class="radio">Si</p>
<input class="radio" id="no" name="pregunta"  type="radio" value="no" onclick="no_visible(this);" /><p class="radio">No</p></span>

<span class="pregunta" id="pregunta">
<label class="bs">Ciclo de participación</label>
<select class="bs"><script type="text/javascript">fechas(2006,6);</script></select>
</span>

<p class="obligatorio">campo Obligatorio - seleccione una opción</p>
</div>
<div class="bs">
<button class="enviar" type="submit">Enviar datos</button>
</div>
</form>
</div>

</body>
</html>