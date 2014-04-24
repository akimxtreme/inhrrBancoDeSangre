<?php
session_start();
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
<script language="javascript">
    function LlenarLista2(){
        var obHttp1 = false;
        try{
       
        obHttp = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch(e){
                       try {
               
                        obHttp = new ActiveXObject("Microsoft.XMLHTTP");
                       
                   }catch(E){
                       
                        obHttp = false;
                       
                   }
              }
       
                  if (!obHttp && typeof XMLHttpRequest!='undefined') {
                       obHttp = new XMLHttpRequest();
                   
                  }
               
                    sCadena = 'llenarcombo.php?ParCodUnidad='+ document.getElementById("procedencia").value;
            MiDiv = document.getElementById("objeto1");
        obHttp.open('get',sCadena);
        obHttp.onreadystatechange=function(){
            if(obHttp.readyState==4){
                MiDiv.innerHTML = obHttp.responseText;
                            }
        }
        obHttp.send(null);
    }
   
    </script>
</head>
<?php
$codigo = $_SESSION['estatus'];
$usuario =$_SESSION['usuario'];
?>
<?php
include "config.php";
			
	$sql="SELECT * FROM usuarios WHERE usuario='$usuario'";
	$seleccion=mysql_query($sql,$conexion);
		while ($row = mysql_fetch_array($seleccion)){
				$nombrebs_bd=$row['nombrebs'];
				$rif_bs_bd=$row['rif_bs'];
				$nit_bs_bd=$row['nit_bs'];
	}
	// Genera el nro de solicitud
	$sql2 = "SELECT * FROM usuarios WHERE estatus='1'";
	$cantidad =mysql_query($sql2,$conexion);
	$cantidad = mysql_num_rows($cantidad);// obtenemos el número de filas
	$nro_solicitud = "BS00".$cantidad.date('Y');
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
?>
<body class="bs">
<div class="contenedor">
<div class="encabezado"></div>
<!-- Planilla de Inscripción -->
<form id="" name="planilla_inscripcion_bs" onsubmit="return validar(this);" action="procesar_formulario.php" method="post">
<h1>Planilla de Inscripción de Bancos de Sangre</h1>
<!-- Numero de Solicitud y Fecha de Solicitud -->
<div class="bs">
<span>
<p class="usuario">Usuario: <?php echo $usuario; ?></p>
</span>
<span>
<label class="bs">Número de solicitud</label>
<input class="bs" name="nro_solicitud" id="nro_solicitud" title="Representa un número proporcionado por el sistema con el fin de dar un seguimiento a la solicitud" value=" <?php echo $nro_solicitud; ?>" type="text" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this);" readonly="readonly"/>
</span>
<span>
<label class="bs">Fecha de solicitud</label>
<input class="bs" type="text" title="dia, mes y año de la solicitud" name="fecha" id="fecha" readonly="readonly"  value="<?php echo date("d-m-Y");?>"/>
</span>
<a href="destruir_sesion.php"><p class="usuario">Cerrar sesión</p></a>
</div>
<!-- Recuadro A -->
<!-- Datos del Banco de Sangre -->
<h2>Datos del Banco de Sangre</h2>
<div class="bs">
	<!-- Seccion: Nombre del Banco de Sangre -->
<span>
<label class="bs"><strong class="bs_form">*</strong>Nombre del Banco de Sangre</label>
<input class="bs" id="nombre" name="nombre" readonly="readonly" type="text" title="Nombre del banco de sangre" onkeypress="return permite(event, "car")"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this);" value="<?php echo $nombrebs_bd;?>"/>
</span>
	<!-- Seccion: Sector al que pertenece -->
<span class="radio">
<label class="radio"><strong class="bs_form">*</strong>Sector al que pertenece:</label>
<span class="sub_radio"><input class="radio" title="Seleciona aquí si pertenece al Ministerio del Poder Popular para la Salud" id="mpps" name="sector" type="radio" value="Ministerio del Poder Popular para la Salud" onclick="sector_pertenece(this);" /><p class="radio">MPPS</p></span>
<span class="sub_radio"><input class="radio" title="Seleciona aquí si pertenece a Sanidad Militar" id="sanidad_militar" name="sector" type="radio" value="Sanidad Militar" onclick="sector_pertenece(this);" /><p class="radio">Sanidad Militar</p></span>
<span class="sub_radio"><input class="radio" title="Seleciona aquí si pertenece al Instituto Venezolano del Seguro Social" id="ivss" name="sector" type="radio" value="Instituto Venezolano de los Seguros Sociales" onclick="sector_pertenece(this);" /><p class="radio">IVSS</p></span>
<span class="obligatorio"><p class="obligatorio" id="obligatorio_sector">Indique la sección a la que pertenece</p></span>
<span class="sub_radio"><input class="radio" title="Selecciona esta opción, si no pertenece a los sectores mencionados" id="otros" name="sector" value="otros" type="radio" onclick="sector_pertenece(this);"/><p class="radio">Otros</p>
<p class="radio">/ Especifique:</p><input class="bs_otros" title="Ingrese el sector en donde pertenece" id="bs_otros" name="sector_otros" type="text" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/></span>
<span class="obligatorio"><p class="obligatorio_radio" id="obligatorio_sector_otros">Especifique la sección</p></span>
</span>
	<!-- Seccion: Direccion -->
    	<!-- Seccion: Estado -->
		<span>
<label class="bs"><strong class="bs_form">*</strong>Estado</label>
<?
$sql1="SELECT * FROM estado ORDER BY estado";
			$resultado1= mysql_query($sql1,$conexion);
			if(mysql_num_rows($resultado1)>0){
				
				?>
<select class="bs" name="procedencia" id="procedencia" onchange="LlenarLista2();" onblur="salioDeFoco(this); revisarObligatorio(this)">
<option class="bs" value="">Seleccione...</option>

  <? 		
		    while ($campo1= mysql_fetch_object($resultado1)){
			$cod_est=$campo1->codestado;
			$estado=$campo1->estado;
			?>
  <option class="bs" value="<? echo $cod_est; ?>"><? echo $estado; ?></option>
  <? }
			}?>
</select>
<p class="obligatorio" id="obligatorio_procedencia">Obligatorio-seleccione el estado</p>
</span>
 <script language="javascript" type="text/javascript">
                document.datos_solicitud.procedencia.value = <?= "'".$cod_est."'"?>
            </script>
        <!-- Seccion: Municipio -->
 		<div id="objeto1">
 <span>
 <label class="bs"><strong class="bs_form">*</strong>Municipio</label>
         <select class="bs" name="ls_producto" id="ls_producto" onblur="salioDeFoco(this); revisarObligatorio(this)">
         <option class="bs" value="" selected="selected">Seleccione...</option>
         </select>
         <p class="obligatorio" id="obligatorio_municipio">Obligatorio-seleccione el municipio</p>
       </span>  
</div>
		<!-- Seccion: Ciudad -->
		<span>
<label class="bs"><strong class="bs_form">*</strong>Ciudad</label>
<input class="bs" id="ciudad" name="ciudad" title="Indique la ciudad" type="text" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_ciudad">Obligatorio - ingrese la ciudad</p>
</span>
		<!-- Seccion: Av./Carretera/Calle/Esq. -->
        <span>
         <label class="bs"><strong class="bs_form">*</strong>Av./Carretera/Calle/Esq.</label>
         <input class="bs" id="detalles" name="detalles" title="Av./Carrera/Calle/Esq." type="text" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
         <p class="obligatorio" id="obligatorio_detalles">Obligatorio: ingrese mas información</p>
         </span>
	<!-- Seccion: Rif -->
		<span>
<label class="bs"><strong class="bs_form">*</strong>Nº de Rif</label>
<input class="bs" id="rif" name="rif" title="Indicar el número de registro fiscal (RIF) del establecimiento solicitante (Si aplica)" type="text" maxlength="9" onfocus="entroEnFoco(this)" value="<?php echo $rif_bs_bd;?>" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rif">Campo obligatorio - Ej: G-20000101-1</p>
</span>
	<!-- Seccion: Nit -->
		<span>
<label class="bs"><strong class="bs_form">*</strong>Nº de Nit</label>
<input class="bs" id="nit" name="nit" title="Indicar el número de información tributaria de la empresa solicitante (NIT) - (Si aplica)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)" value="<?php echo $nit_bs_bd;?>"/>
<p class="obligatorio" id="obligatorio_nit">Campo obligatorio - Ej: J-20000101-1</p>
</span>
	<!-- Seccion: Teléfono # 1 -->
		<span>
<label class="bs"><strong class="bs_form">*</strong>Teléfono #1</label>
<input class="bs" id="telefono" name="telefono" title="Indicar el código de área y teléfono de ubicación del banco de sangre" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_telefono">Obligatorio - Ej: 02123330099</p>
</span>
	<!-- Seccion: Teléfono # 2 -->
		<span>
<label class="bs">Teléfono #2</label>
<input class="bs" id="telefono_2" name="telefono_2" title="Indicar el código de área y teléfono de ubicación del banco de sangre" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_telefono_2">Opcional - Ej: 02123330099</p>
</span>
	<!-- Seccion: Fax -->
		<span>
<label class="bs">Fax</label>
<input class="bs" id="fax" name="fax" title="Indicar el número de fax de ubicación del representante Legal del establecimiento" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_fax">Opcional - Ingrese el Fax</p>
</span>
	<!-- Seccion: Correo electrónico #1 -->
		<span>
<label class="bs"><strong class="bs_form">*</strong>Correo electrónico #1</label>
<input class="bs" id="correo_electronico" name="correo_electronico" title="Indicar la dirección de correo electrónico de contacto para envío de información oficial al representante legal del establecimiento" type="text" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarEmail(this);"/>
<p class="obligatorio" id="obligatorio_correo_electronico">Obligatorio - ingrese el correo</p>
</span>
	<!-- Seccion: Correo electrónico #2 -->
		<span>
<label class="bs"><strong class="bs_form">*</strong>Correo electrónico #2</label>
<input class="bs" id="correo_electronico_2" name="correo_electronico_2" title="Indicar la dirección de correo electrónico de contacto para envío de información oficial al representante legal del establecimiento" type="text" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarEmail(this);"/>
<p class="obligatorio" id="obligatorio_correo_electronico_2">Opcional - ingrese el correo</p>
</span>
	<!-- Seccion: Página web -->
		<span>
<label class="bs">Página web</label>
<input class="bs" id="pagina_web" name="pagina_web" title="Indicar la dirección de internet del establecimiento (Si Aplica)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_pagina_web">Opcional</p>
</span>
	<!-- Seccion: Tipo de institución -->
		<span class="radio">
<label class="radio"><strong class="bs_form">*</strong>Tipo de institución:</label>
<span class="sub_radio"><input class="radio" title="Institución pública" id="publico" name="tipo_situacion" type="radio" value="Público" onclick="sector_pertenece(this);" /><p class="radio">Público</p></span>
<span class="sub_radio"><input class="radio" title="Institución privada" id="privado" name="tipo_situacion" type="radio" value="Privado" onclick="sector_pertenece(this);"/><p class="radio">Privado</p></span>
<span class="sub_radio" id="oculto"><input class="radio" type="radio" onclick="sector_pertenece(this);" /><p class="radio">IVSS</p></span>
<span class="obligatorio"><p class="obligatorio" id="obligatorio_institucion">Indique el tipo de institución</p></span>
<span class="sub_radio"><input class="radio" title="indique el tipo de institución" id="otros_institucion" name="tipo_situacion" type="radio" value="otros" onfocus="otrasEspecifique(this)" onclick="sector_pertenece(this);" /><p class="radio">Otros</p>
<p class="radio">/ Especifique:</p><input class="bs_otros" title="Capital del Establecimiento y su Origen" id="situacion_otros" name="tipo_situacion_otros" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/></span>
<span class="obligatorio"><p class="obligatorio_radio" id="obligatorio_institucion_otros">Especifique la sección</p></span>
</span>
	<!-- Seccion: Situación de la propiedad del inmueble -->
		<span class="radio">
<label class="radio"><strong class="bs_form">*</strong>Situación de la propiedad del inmueble</label>
<span class="sub_radio"><input class="radio" title="Seleccione esta opción si la propiedad es propia" id="propio" name="inmueble" type="radio" value="propio" onclick="sector_pertenece(this);"/><p class="radio">Propio</p></span>
<span class="sub_radio"><input class="radio" title="Seleccione esta opción si la propiedad es alquilada" id="alquilado" name="inmueble" type="radio" value="alquilado" onclick="sector_pertenece(this);"/><p class="radio">Alquilado</p></span>
<span class="sub_radio"><input class="radio" title="Seleccione esta opción si la propiedad se encuentra en comodato" id="comodato" name="inmueble" type="radio" value="comodato" onclick="sector_pertenece(this);"/><p class="radio">En comodato</p></span>
<span class="obligatorio"><p class="obligatorio" id="obligatorio_inmueble">Campo obligatorio - Datos incorrectos</p></span>
<span class="sub_radio"><input class="radio" title="Seleccione esta opción si no es ninguna de las mencionadas" id="inmueble" name="inmueble" type="radio" value="otros" onfocus="otrasEspecifique(this)" onclick="sector_pertenece(this);" /><p class="radio">Otros</p>
<p class="radio">/ Especifique:</p><input class="bs_otros" title="Indique el tipo de Propiedad" id="inmueble_otros" name="tipo_inmueble_otros" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/></span>
<span class="obligatorio"><p class="obligatorio_radio" id="obligatorio_inmueble_otros">Especifique la sección</p></span>
</span>
</div>
<!-- Recuadro B -->
<!-- Datos del Establecimiento Médico Asistencial donde funciona el Banco de Sangre -->
	<!-- ¿El Banco de Sangre es dependiente de un Centro Asistencial? -->
	<div class="bs">
<label class="bs"><strong class="bs_form">*</strong>¿El Banco de Sangre es dependiente de un Centro Asistencial?</label>
<input class="radio" id="dependiente_si" name="dependiente" type="radio" value="si" onclick="obligatorio(this);" /><p class="radio">Si</p>
<input class="radio" id="dependiente_no" name="dependiente"  type="radio" value="no" onclick="oblgatorio(this);" /><p class="radio">No</p>
<p class="obligatorio" id="obligatorio_dependiente">Obligatorio: seleccione una opción</p>
</div>
<h2 id="titulo_establecimiento_asistencial">Datos del Establecimiento Médico Asistencial donde funciona el Banco de Sangre</h2>
<div class="bs" id="establecimiento_asistencial">
	<!-- Sección: Razón social del establecimiento al que pertenece el banco de sangre -->
	<span class="radio">
<label class="radio">Razón social del establecimiento al que pertenece el banco de sangre:</label>
<input class="bs" id="es_razon_social" name="es_razon_social" title="Indica la denominación social según el registro mercantil del establecimiento (Si aplica)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<span class="obligatorio"><p class="obligatorio" id="obligatorio_es_razon_social">Opcional: denominación social</p></span>
</span>
	<!-- Sección: Nº de registro sanitario -->
	<span>
<label class="bs">Nº de registro sanitario</label>
<input class="bs" id="es_registro_sanitario" name="es_registro_sanitario" title="Indicar si el establecimiento de salud MÉDICO asistencial donde se encuentra el banco de sangre posee algún número de registro sanitario otorgado por el Servicio Autónomo de Contraloría Sanitaria (SACS)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_es_registro_sanitario">Opcional: n° registro</p>
</span>
	<!-- Sección: Nº de Rif -->
	<span>
<label class="bs"><strong class="bs_form">*</strong>Nº de Rif</label>
<input class="bs" id="es_rif" name="es_rif" type="text" title="Indique el número del registro de información fiscal (RIF) del establecimiento solicitante"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_es_rif">Obligatorio: n° registro fiscal</p>
</span>
	<!-- Sección: Nº de Nit -->
	<span>
<label class="bs"><strong class="bs_form">*</strong>Nº de Nit</label>
<input class="bs" id="es_nit" name="es_nit" title="Indique el número de información tributaria de la empresa solicitante" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_es_nit">Obligatorio: n° de información tributaria</p>
</span>
	<!-- Sección: Teléfono -->
	<span>
<label class="bs"><strong class="bs_form">*</strong>Teléfono</label>
<input class="bs" id="es_telefono" name="es_telefono" title="Indique el código de área y teléfono de ubicación del banco de sangre" type="text" maxlength="12" onkeypress="return permite(event, 'num')"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_es_telefono">Obligatorio: ingrese el n° telefónico</p>
</span>
	<!-- Sección: Fax -->
	<span>
<label class="bs">Fax</label>
<input class="bs" id="es_fax" name="es_fax" title="Indique el número de fax de ubicación del representante legal del establecimiento" type="text" maxlength="12" onkeypress="return permite(event, 'num')"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_es_fax">Opcional: Ingrese n° de fax</p>
</span>
	<!-- Sección: Correo electrónico -->
	<span>
<label class="bs"><strong class="bs_form">*</strong>Correo electrónico</label>
<input class="bs" id="es_correo" name="es_correo_electronico" title="Indique la dirección de correo electrónico de contacto para envío de información oficial al representante legal del establecimiento" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarEmail(this);"/>
<p class="obligatorio" id="es_correo_electronico">Obligatorio: Indique el correo</p>
</span>
	<!-- Sección: Página web -->
	<span>
<label class="bs">Página web</label>
<input class="bs" id="es_pagina_web" name="es_pagina_web" title="Indicar la dirección de internet del establecimiento (Si aplica)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_es_pagina_web">Campo opcional</p>
</span>
	<!-- Sección: Tipo de Institución -->
	<span class="radio">
<label class="radio"><strong class="bs_form">*</strong>Tipo de Institución</label>
<span class="sub_radio"><input class="radio" title="Capital del establecimiento y su origen" id="es_tipo_situacion_publico" name="es_tipo_situacion" type="radio" value="publico" onclick="sector_pertenece(this);" /><p class="radio">Público</p></span>
<span class="sub_radio"><input class="radio" title="Capital del establecimiento y su origen" id="es_tipo_situacion_privado" name="es_tipo_situacion" type="radio" value="privado" onclick="sector_pertenece(this);" /><p class="radio">Privado</p></span>
<span class="sub_radio" id="oculto"><input class="radio" type="radio" onclick="sector_pertenece(this);" /><p class="radio">IVSS</p></span>
<span class="obligatorio"><p class="obligatorio" id="obligatorio_institucion_es">Indique el tipo de institución</p></span>
<span class="sub_radio"><input class="radio" title="Capital del establecimiento y su origen" id="es_tipo_situacion_otros" name="es_tipo_situacion" type="radio" value="otros" onclick="sector_pertenece(this);" /><p class="radio">Otros</p>
<p class="radio">/ Especifique:</p><input class="bs_otros" name="es_tipo_situacion_otros" id="es_tipo_situacion" title="Capital del establecimiento y su origen" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/></span>
<span class="obligatorio"><p class="obligatorio_radio" id="obligatorio_institucion_otros_es">Indique el tipo de institución</p></span>
</span>
	<!-- Sección: Situación de la propiedad del inmueble -->
	<span class="radio">
<label class="radio"><strong class="bs_form">*</strong>Situación de la propiedad del inmueble</label>
<span class="sub_radio"><input class="radio" title="Seleccione esta opción si la propiedad es propia" id="es_inmueble_propio" name="es_inmueble" type="radio" value="propio" onclick="sector_pertenece(this);" /><p class="radio">Propio</p></span>
<span class="sub_radio"><input class="radio" title="Seleccione esta opción si la propiedad es alquilada" id="es_inmueble_alquilado" name="es_inmueble" type="radio" value="alquilado" onclick="sector_pertenece(this);" /><p class="radio">Alquilado</p></span>
<span class="sub_radio"><input class="radio" title="Seleccione esta opción si la propiedad se encuentra en comodato" id="es_inmueble_comodato" name="es_inmueble" type="radio" value="comodato" onclick="sector_pertenece(this);"/><p class="radio">En comodato</p></span>
<span class="obligatorio"><p class="obligatorio" id="obligatorio_inmueble_es">Campo obligatorio - Datos incorrectos</p></span>
<span class="sub_radio"><input class="radio" title="Seleccione esta opción si no es ninguna de las mencionadas" id="es_inmueble_otros_es" name="es_inmueble" type="radio" value="otros" onclick="sector_pertenece(this);" /><p class="radio">Otros</p>
<p class="radio">/ Especifique:</p><input class="bs_otros" name="es_tipo_inmueble_otros" id="es_inmueble" title="Indique el tipo de propiedad" type="text" onblur="salioDeFoco(this); revisarObligatorio(this)" onfocus="entroEnFoco(this)"/></span>
<span class="obligatorio"><p class="obligatorio_radio" id="obligatorio_inmueble_es_otros">Campo obligatorio - Datos incorrectos</p></span>
</span>
</div>
<!-- Recuadro C -->
<!-- Datos del Responsable -->
<h2>Datos del Responsable</h2>
<div class="bs">
<h3>Director(a) médico responsable del establecimiento médico asistencial</h3>

<span>
<label class="bs"><strong class="bs_form">*</strong>Nombre(s) y apellido(s)</label>
<input class="bs" id="rs_nombre" name="rs_nombre" title="Indica Nombre(s) y apellido(s) del director médico del establecimiento" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_nombre">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="bs">
<span class="sub_radio"><label class="bs"><strong class="bs_form">*</strong>Cédula de identidad</label></span>
<span class="sub_radio"><input class="radio" id="rs_venezolano"  name="rs_nacionalidad"  title="Seleccione esta opción si es venezolano" type="radio" value="venezolano" onclick="nacionalidad(this)" /><p class="radio">V</p>
<input class="radio" id="rs_extranjero" name="rs_nacionalidad"  title="Seleccione esta opción si es extranjero" type="radio" value="extranjero" onclick="nacionalidad(this)" /><p class="radio">E</p></span>
<input class="bs" id="rs_nacionalidad" name="rs_cedula"  value="" title="Reseñar si es venezolano(a) ó extranjero(a) y acontinuación el número de cédula de identidad del director del establecimiento" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_cedula">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs"><strong class="bs_form">*</strong>Profesión</label>
<input class="bs" id="rs_profesion" name="rs_profesion" title="Indicar la profesión relativa a las ciencias de la salud adscritas al Ministerio del Poder Popular para la Salud" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_profesion">Campo obligatorio - datos Incorrectos</p>
</span>

<span>
<label class="bs"><strong class="bs_form">*</strong>Expedido por</label>
<input class="bs" id="rs_expedido" name="rs_expedido" title="Indicar la universidad ó institución que le otorgó el titulo" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_expedido">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs"><strong class="bs_form">*</strong>Especialidad</label>
<input class="bs" id="rs_especialidad" name="rs_especialidad" title="Indicar la especialidad en el área de salud del director médico del establecimiento" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_especialidad">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs"><strong class="bs_form">*</strong>Matricula del MPPS</label>
<input class="bs" id="rs_matricula" name="rs_matricula" title="Indicar el número de matrícula del registro como profesional en el Ministerio del Poder Popular para la Salud del director médico del establecimiento" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_matricula">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs"><strong class="bs_form">*</strong>Registro colegio</label>
<input class="bs" id="rs_colegio" name="rs_colegio" title="Indicar el número que le otorgó el colegio del área de la salud al cual pertenece del director médico del establecimiento" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_colegio">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Nº Rif</label>
<input class="bs" id="rs_rif" name="rs_rif" title="Inidicar el número del registro de información fiscal del establecimiento (Si aplica)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_rif">Opcional: Ingrese el n° de rif</p>
</span>

<span>
<label class="bs"><strong class="bs_form">*</strong>Correo electrónico</label>
<input class="bs" id="rs_correo_electronico_rs" name="rs_correo_electronico" title="Indicar la dirección de correo electrónico de contacto para envío de información oficial del director médico del establecimiento" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarEmail(this);"/>
<p class="obligatorio" id="rs_correo_electronico">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs"><strong class="bs_form">*</strong>Nº telefónico (local)</label>
<input class="bs" id="rs_tlf_local" name="rs_tlf_local" title="Indique el número de teléfono local de ubicación del director médico del establecimiento" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_tlf_local">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs"><strong class="bs_form">*</strong>Nº telefónico (movil)</label>
<input class="bs" id="rs_tlf_movil" name="rs_tlf_movil" title="Indique el número de teléfono móvil de ubicación del director médico del establecimiento" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_tlf_movil">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs">Fax</label>
<input class="bs" id="rs_fax" name="rs_fax" title="Indique el número de teléfono fax de ubicación del director médico del establecimiento" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_rs_fax">Opcional: Ingrese el n° de fax</p>
</span>
<h3>Director(a) Médico responsable del banco de sangre y unidades transfusionales (Director Médico)</h3>
<span>
<label class="bs"><strong class="bs_form">*</strong>Nombre(s) y apellido(s)</label>
<input class="bs" id="dm_nombre" name="dm_nombre" title="Indicar nombre(s) y apellido(s) del director médico del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_nombre">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="bs">
<span class="sub_radio"><label class="bs"><strong class="bs_form">*</strong>Cédula de identidad</label></span>
<span class="sub_radio"><input class="radio" title="Seleccione esta opción si es venezolano" id="dm_venezolano" name="dm_nacionalidad" type="radio" value="venezolano" onclick="nacionalidad(this)" /><p class="radio">V</p>
<input class="radio" id="dm_extranjero" name="dm_nacionalidad"  title="Seleccione esta opción si es extranjero" type="radio" value="extranjero" onclick="nacionalidad(this)" /><p class="radio">E</p></span>
<input class="bs" id="dm_nacionalidad"  name="dm_cedula" title="Reseñar si es venezolana(o) ó extranjera(o) y a continuación el número de cédula" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_cedula">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs"><strong class="bs_form">*</strong>Profesión</label>
<input class="bs" id="dm_profesion" name="dm_profesion" title="Indicar la profesión relativa a las ciencias de la salud adscritas en el Ministerio del Poder Popular para la Salud del director médico del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_profesion">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs"><strong class="bs_form">*</strong>Expedido por</label>
<input class="bs" id="dm_expedido" name="dm_expedido" title="Indicar la universidad ó institución que le otorgó el titulo" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_expedido">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs"><strong class="bs_form">*</strong>Especialidad</label>
<input class="bs" id="dm_especialidad" name="dm_especialidad" title="Indicar la especialidad en el área de salud del director médico del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_especialidad">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs"><strong class="bs_form">*</strong>Matricula del MPPS</label>
<input class="bs" id="dm_matricula" name="dm_matricula" title="Indicar el número de matrícula del registro como profesional en el Ministerio del Poder Popular para la Salud del director médico del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_matricula">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs"><strong class="bs_form">*</strong>Registro colegio</label>
<input class="bs" id="dm_colegio" name="dm_colegio" title="Indicar el número que le otorgó el colegio del área de la salud al cual pertenece del director médico del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_colegio">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Nº Rif</label>
<input class="bs" id="dm_rif" name="dm_rif" title="Inidicar el número del registro de información fiscal del banco de sangre (Si aplica)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_rif">Opcional: Ingrese el n° de rif</p>
</span>

<span>
<label class="bs"><strong class="bs_form">*</strong>Correo electrónico</label>
<input class="bs" id="dm_correo_electronico_dm" name="dm_correo_electronico" title="Indicar la dirección de correo electrónico de contacto para envío de información oficial del director médico del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarEmail(this);"/>
<p class="obligatorio" id="dm_correo_electronico">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs"><strong class="bs_form">*</strong>Nº telefónico (local)</label>
<input class="bs" id="dm_tlf_local" name="dm_tlf_local" title="Indique el número de teléfono local de ubicación del director médico del banco de sangre" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_tlf_local">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs"><strong class="bs_form">*</strong>Nº telefónico (movil)</label>
<input class="bs" id="dm_tlf_movil" name="dm_tlf_movil" title="Indique el número de teléfono movil de ubicación del director médico del banco de sangre" type="text" maxlength="12" onkeypress="return permite(event, 'num')"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_tlf_movil">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs">Fax</label>
<input class="bs" id="dm_fax" name="dm_fax" title="Indique el número de teléfono fax de ubicación del director médico del banco de sangre" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_dm_fax">Opcional: Ingrese el n° de fax</p>
</span>
<h3>Coordinador(a) responsable del banco de sangre y unidades transfusionales</h3>
<span>
<label class="bs"><strong class="bs_form">*</strong>Nombre(s) y apellido(s)</label>
<input class="bs" id="cr_nombre" name="cr_nombre" title="Indicar nombre(s) y apellidos(s) del coordinador del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_nombre">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="bs">
<span class="sub_radio"><label class="bs"><strong class="bs_form">*</strong>Cédula de identidad</label></span>
<span class="sub_radio"><input class="radio" id="cr_venezolano" name="cr_nacionalidad"  title="Seleccione esta opción si es venezolano" type="radio" value="venezolano" onclick="nacionalidad(this)" /><p class="radio">V</p>
<input class="radio" id="cr_extranjero" name="cr_nacionalidad"  title="Seleccione esta opción si es extranjero" type="radio" value="extranjero" onclick="nacionalidad(this)" /><p class="radio">E</p></span>
<input class="bs" id="cr_nacionalidad" name="cr_cedula"  title="Reseñar si es venezolana(o) ó extranjera(o) y a continuación el número de cédula" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_cedula">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs"><strong class="bs_form">*</strong>Profesión</label>
<input class="bs" id="cr_profesion" name="cr_profesion" title="Indicar la profesión relativa a las ciencias de la salud adscritas en el Ministerio del Poder Popular para la Salud del coordinador del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_profesion">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs"><strong class="bs_form">*</strong>Expedido por</label>
<input class="bs" id="cr_expedido" name="cr_expedido" title="Indicar la universidad ó institución que le otorgó el titulo" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_expedido">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs"><strong class="bs_form">*</strong>Especialidad</label>
<input class="bs" id="cr_especialidad" name="cr_especialidad" title="Indicar la especialidad en el área de salud del coordinador del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_especialidad">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs"><strong class="bs_form">*</strong>Matricula del MPPS</label>
<input class="bs" id="cr_matricula" name="cr_matricula" title="Indicar el número de matrícula del registro como profesional en el Ministerio del Poder Popular para la Salud del coordinador del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_matricula">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs"><strong class="bs_form">*</strong>Registro colegio</label>
<input class="bs" id="cr_colegio" name="cr_colegio" title="Indicar el número que le otorgó el colegio del área de la salud al cual pertenece del coordinador del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_colegio">Campo obligatorio - Datos incorrectos</p>
</span>

<span>
<label class="bs">Nº Rif</label>
<input class="bs" id="cr_rif" name="cr_rif" title="Inidicar el número del registro de información fiscal del banco de sangre (Si aplica)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_rif">Opcional: Ingrese el n° de rif</p>
</span>

<span>
<label class="bs"><strong class="bs_form">*</strong>Correo electrónico</label>
<input class="bs" id="cr_correo_electronico_cr" name="cr_correo_electronico" title="Indicar la dirección de correo electrónico de contacto para envío de información oficial del coordinador del banco de sangre" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarEmail(this);"/>
<p class="obligatorio" id="cr_correo_cr">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs"><strong class="bs_form">*</strong>Nº telefónico (local)</label>
<input class="bs" id="cr_tlf_local" name="cr_tlf_local" title="Indique el número de teléfono local de ubicación del coordinador del banco de sangre" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_tlf_local">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs"><strong class="bs_form">*</strong>Nº telefónico (movil)</label>
<input class="bs" id="cr_tlf_movil" name="cr_tlf_movil" title="Indique el número de teléfono movil de ubicación del coordinador del banco de sangre" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_tlf_movil">Campo obligatorio - Datos incorrectos</p>
</span>


<span>
<label class="bs">Fax</label>
<input class="bs" id="cr_fax" name="cr_fax" title="Indique el número de teléfono fax de ubicación del coordinador del banco de sangre" type="text" maxlength="12" onkeypress="return permite(event, 'num')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_cr_fax">Opcional: Ingrese el n° de fax</p>
</span>
</div>
<!-- Recuadro D -->
<!-- Banco de Sangre y Unidades Transfusionales -->
<h2>Banco de Sangre y Unidades Transfusionales</h2>
<div class="bs">
<h3 class="contenedor_c">Ambientes</h3>
	<!-- Ambientes -->
    <!-- Sección: Sección de donación-->
	<span class="ud">
    <label class="radio"><strong class="bs_form">*</strong>Sección de donación:<input class="radio" id="ut_seccion_donacion" name="ut_seccion_donacion" type="checkbox" value="Seccion de donación" onclick="ambientes(this)" /></label>
    <span class="sub_radio"><input class="radio" id="ut_registro_recepcion" name="ut_registro_recepcion" type="checkbox" value="Registro y Recepción" disabled="disabled"/><p class="radio">Registro y Recepción.</p></span>
    <span class="sub_radio"><input class="radio" id="ut_examen_medico" name="ut_examen_medico" type="checkbox" value="Examen Médico" disabled="disabled"/><p class="radio">Examen Médico.</p></span>
    <span class="sub_radio"><input class="radio" id="ut_recuperacion" name="ut_recuperacion" type="checkbox" value="Recuperación" disabled="disabled"/><p class="radio">Recuperación</p></span>
    <span class="sub_radio"><input class="radio" id="ut_cantina" name="ut_cantina" type="checkbox" value="Cafetín" disabled="disabled"/><p class="radio">Cafetín</p></span>
    <span class="ud_obligatorio"><p class="obligatorio" id="obligatorio_donacion">Campo obligatorio</p></span>
    </span>
	<!-- Sección: Sección de procesamiento-->
	<span class="ud">
<label class="radio"><strong class="bs_form">*</strong>Sección de procesamiento.<input class="radio" id="ut_seccion_procesamiento" name="ut_seccion_procesamiento" type="checkbox" value="Seccion de procesamiento" onclick="ambientes_2(this);" /></label>
<span class="ud_obligatorio"><p class="obligatorio" id="obligatorio_procesamiento">Campo Obligatorio</p></span>
</span>
	<!-- Sección: Sección de laboratorio-->
	<span class="ud">
<label class="radio"><strong class="bs_form">*</strong>Sección de laboratorio:<input class="radio" id="ut_seccion_laboratorio" name="ut_seccion_laboratorio" type="checkbox" value="Seccion de laboratorio" onclick="ambientes_3(this);" /></label>
<span class="sub_radio"><input class="radio" id="ut_serologia" name="ut_serologia" type="checkbox" value="serologia" disabled="disabled"/><p class="radio">Serología.</p></span>
<span class="sub_radio"><input class="radio" id="ut_inmunohematologia" name="ut_inmunohematologia" type="checkbox" value="inmunohematología" disabled="disabled"/><p class="radio">Inmunohematología.</p></span>
<span class="ud_obligatorio"><p class="obligatorio" id="obligatorio_inmunohematologia">Campo obligatorio</p></span>
</span>
	<!-- Sección: Sección de conservación y almacenamiento-->
	<span class="ud">
<label class="radio"><strong class="bs_form">*</strong>Sección de conservación y almacenamiento.<input class="radio" id="ut_seccion_conservacion_almacen" name="ut_seccion_conservacion_almacen" type="checkbox" value="seccion de conservación y almacenamiento" onclick="ambientes_4(this);" /></label>
<span class="ud_obligatorio"><p class="obligatorio" id="obligatorio_conservacion_almacen">Campo obligatorio</p></span>
</span>
	<!-- Sección: Sección de estadísticas-->
	<span class="ud">
<label class="radio"><strong class="bs_form">*</strong>Sección de estadísticas.<input class="radio" id="ut_seccion_estadisticas" name="ut_seccion_estadisticas" type="checkbox" value="seccion de estadisticas" onclick="ambientes_5(this);" /></label>
<span class="ud_obligatorio"><p class="obligatorio" id="obligatorio_seccion_estadisticas">Campo Obligatorio</p></span>
</span>
	<!-- Sección: Sección de Secretaría-->
	<span class="ud">
<label class="radio"><strong class="bs_form">*</strong>Sección de Secretaría.<input class="radio" id="ut_seccion_secretaria" name="ut_seccion_secretaria" type="checkbox" value="seccion de secretaria" onclick="ambientes_6(this);" /></label>
<span class="ud_obligatorio"><p class="obligatorio" id="obligatorio_seccion_secretaria">Campo obligatorio</p></span>
</span>
</div>
<!-- Pregunta: ¿A participado en el programa nacional de control de calidad en serología, coordinado por el Instituto Nacional de Higiene Rafael Rangel? -->
<div class="bs">
<span class="sub_radio"><label class="bs">¿A participado en el programa nacional de control de calidad en serología, coordinado por el Instituto Nacional de Higiene Rafael Rangel?</label></span>

<span class="bs_pregunta"><input class="radio" id="si" name="pregunta" type="radio" value="si" onclick="visible(this)" /><p class="radio">Si</p>
<input class="radio" id="no" name="pregunta"  type="radio" value="no" onclick="no_visible(this);" /><p class="radio">No/Especifique</p><input class="bs_otros" title="Especifique" id="no_especifique" name="no_especifique" type="text" onkeypress="return permite(event, 'car')" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio">Obligatorio: Seleccione una opción</p></span>

<span class="pregunta" id="pregunta">
<label class="bs">Ciclo de participación</label>
<span class="sub_radio"><input class="radio" id="" name="" type="checkbox" value="2006"/><p class="radio">2006</p></span>
    <span class="sub_radio"><input class="radio" id="ut_examen_medico" name="ut_examen_medico" type="checkbox" value="Examen Médico" disabled="disabled"/><p class="radio">Examen Médico.</p></span>
    <span class="sub_radio"><input class="radio" id="ut_recuperacion" name="ut_recuperacion" type="checkbox" value="Recuperación" disabled="disabled"/><p class="radio">Recuperación</p></span>
    <span class="sub_radio"><input class="radio" id="ut_cantina" name="ut_cantina" type="checkbox" value="Cafetín" disabled="disabled"/><p class="radio">Cafetín</p></span>
</span>


</div>
<!-- Enviar -->
<div class="bs">
<button class="enviar" type="submit">Enviar datos</button>
</div>
</form>
</div>
</body>
</html>

