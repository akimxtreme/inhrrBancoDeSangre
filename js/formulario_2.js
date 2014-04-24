// JavaScript Document
function entroEnFoco (elemento) {
	elemento.className = 'bs_2';	
	}
	
function salioDeFoco (elemento) {
	elemento.className = 'bs';
	}
/* Comando para los campos <select> para mostrar el campo oculto <option> con el valor "Otros/Especifique" */
function revisarObligatorio (elemento,a,b,c) {
		if(elemento.name==a){
		if(elemento.value=="Otros/Especifique"){
			document.getElementById(b).style.visibility='visible';
			document.getElementById(b).focus();
			document.getElementById(b).style.position='inherit';
			document.getElementById(c).style.visibility='hidden';
			document.getElementById(c).style.position='absolute';
			}else {
			document.getElementById(b).style.visibility='hidden';
			document.getElementById(b).style.position='absolute';
			document.getElementById(c).style.visibility='visible';
			document.getElementById(c).style.position='inherit';
			}
		
	}
}
function revisarObligatorio_2 (elemento,a,b,c) {
		if(elemento.name==a){
		if(elemento.value=="si"){
			document.getElementById(b).style.visibility='visible';
			document.getElementById(b).focus();
			document.getElementById(b).style.position='inherit';
			document.getElementById(c).style.visibility='hidden';
			document.getElementById(c).style.position='absolute';
			}else {
			document.getElementById(b).style.visibility='hidden';
			document.getElementById(b).style.position='absolute';
			document.getElementById(c).style.visibility='visible';
			document.getElementById(c).style.position='inherit';
			}
		
	}
}
function revisarObligatorio_3 (elemento,a,b,c,e) {
		if(elemento.name==a){
		if(elemento.value=="si"){
			document.getElementById(b).style.visibility='visible';
			document.getElementById(b).focus();
			document.getElementById(b).style.position='inherit';
			document.getElementById(c).style.visibility='hidden';
			document.getElementById(c).style.position='absolute';
			}else {
			document.getElementById(b).style.visibility='hidden';
			document.getElementById(b).style.position='absolute';
			document.getElementById(c).style.visibility='visible';
			document.getElementById(c).style.position='inherit';
			}
		if(elemento.value=="no"){
			document.getElementById(e).style.visibility='visible';
			document.getElementById(e).focus();
			document.getElementById(e).style.position='inherit';
			document.getElementById(c).style.visibility='hidden';
			document.getElementById(c).style.position='absolute';
			}else {
			document.getElementById(e).style.visibility='hidden';
			document.getElementById(e).style.position='absolute';
			document.getElementById(c).style.visibility='visible';
			document.getElementById(c).style.position='inherit';
			}
		
	}
}

function valida_envia(elemento){
	validar= true;
	if (document.datos_de_banco_sangre.correo_electronico.value==''){
		document.getElementById("obligatorio_correo_electronico").style.color='#F9F9F9';
		document.getElementById("obligatorio_correo_electronico").style.background='#F30';
		validar = false;
	}	
	
	if (document.getElementById("sector").value=='Seleccione...'){
		document.getElementById("obligatorio_sector_pertenece").style.color='#F9F9F9';
		document.getElementById("obligatorio_sector_pertenece").style.background='#F30';
		validar = false;
	}if (document.datos_de_banco_sangre.otros_sector_pertenece.value=='' & document.getElementById("sector").value=='Otros/Especifique'){
		document.getElementById("sector_pertenece").style.border='#F30 solid 1px';
		validar = false;
	}
	
	if (document.getElementById("institucion").value=='Seleccione...'){
		document.getElementById("obligatorio_tipo_institucion").style.color='#F9F9F9';
		document.getElementById("obligatorio_tipo_institucion").style.background='#F30';
		validar = false;
	}if (document.datos_de_banco_sangre.otros_tipo_institucion.value=='' & document.getElementById("institucion").value=='Otros/Especifique'){
		document.getElementById("tipo_institucion").style.border='#F30 solid 1px';
		validar = false;
	}
	
	if (document.getElementById("inmueble").value=='Seleccione...'){
		document.getElementById("obligatorio_situacion_propiedad_inmueble").style.color='#F9F9F9';
		document.getElementById("obligatorio_situacion_propiedad_inmueble").style.background='#F30';
		validar = false;
	}if (document.datos_de_banco_sangre.otros_situacion_propiedad_inmueble.value=='' & document.getElementById("inmueble").value=='Otros/Especifique'){
		document.getElementById("situacion_propiedad_inmueble").style.border='#F30 solid 1px';
		validar = false;
	}
	
	if (document.datos_de_banco_sangre.nro_rif.value==''){
		document.getElementById("obligatorio_nro_rif").style.color='#F9F9F9';
		document.getElementById("obligatorio_nro_rif").style.background='#F30';
		validar = false;
	}	
	if (document.datos_de_banco_sangre.nro_nit.value==''){
		document.getElementById("obligatorio_nro_nit").style.color='#F9F9F9';
		document.getElementById("obligatorio_nro_nit").style.background='#F30';
		validar = false;
	}	
	if (document.datos_de_banco_sangre.nro_telefono.value==''){
		document.getElementById("obligatorio_nro_telefono").style.color='#F9F9F9';
		document.getElementById("obligatorio_nro_telefono").style.background='#F30';
		validar = false;
	}
	if (validar==false){
		alert ("Falta ingresar algunos Datos del Banco de Sangre");
	}
	return validar;	
}
function valida_envia_2(elemento){
	validar= true;
	if ((!document.getElementById("dependiente_no").checked) & (!document.getElementById("dependiente_si").checked)){
		document.getElementById("obligatorio_dependiente").style.color='#F9F9F9';
		document.getElementById("obligatorio_dependiente").style.background='#F30';
		validar = false;
	}
	if (document.establecimiento_asistencial.razon_social.value==''){
		document.getElementById("obligatorio_razon_social").style.color='#F9F9F9';
		document.getElementById("obligatorio_razon_social").style.background='#F30';
		validar = false;
	}
	if (document.establecimiento_asistencial.nro_registro_sanitario.value==''){
		document.getElementById("obligatorio_nro_registro_sanitario").style.color='#F9F9F9';
		document.getElementById("obligatorio_nro_registro_sanitario").style.background='#F30';
		validar = false;
	}
	if (document.establecimiento_asistencial.nro_rif_es.value==''){
		document.getElementById("obligatorio_nro_rif_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_nro_rif_es").style.background='#F30';
		validar = false;
	}
	if (document.establecimiento_asistencial.nro_nit_es.value==''){
		document.getElementById("obligatorio_nro_nit_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_nro_nit_es").style.background='#F30';
		validar = false;
	}
	if (document.establecimiento_asistencial.nro_telefono_es.value==''){
		document.getElementById("obligatorio_nro_telefono_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_nro_telefono_es").style.background='#F30';
		validar = false;
	}
	if (document.establecimiento_asistencial.correo_electronico_es.value==''){
		document.getElementById("obligatorio_correo_electronico_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_correo_electronico_es").style.background='#F30';
		validar = false;
	}
	if (document.getElementById("institucion_es").value=='Seleccione...'){
		document.getElementById("obligatorio_tipo_institucion_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_tipo_institucion_es").style.background='#F30';
		validar = false;
	}if (document.establecimiento_asistencial.otros_tipo_institucion_es.value=='' & document.getElementById("institucion_es").value=='Otros/Especifique'){
		document.getElementById("tipo_institucion_es").style.border='#F30 solid 1px';
		validar = false;
	}
	if (document.getElementById("inmueble_es").value=='Seleccione...'){
		document.getElementById("obligatorio_situacion_propiedad_inmueble_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_situacion_propiedad_inmueble_es").style.background='#F30';
		validar = false;
	}if (document.establecimiento_asistencial.otros_situacion_propiedad_inmueble_es.value=='' & document.getElementById("inmueble_es").value=='Otros/Especifique'){
		document.getElementById("tipo_institucion_es").style.border='#F30 solid 1px';
		validar = false;
	}
	
	
	if (validar==false){
		alert ("Falta ingresar algunos Datos del Establecimiento Medico Asistencial");
	}
	return validar;	
}
function valida_envia_3(elemento){
	validar= true;
	if (document.datos_del_responsable_director_1.rs_nombre.value==''){
		document.getElementById("obligatorio_rs_nombre").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_nombre").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_director_1.rs_apellido.value==''){
		document.getElementById("obligatorio_rs_apellido").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_apellido").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_director_1.rs_cedula.value==''){
		document.getElementById("obligatorio_rs_cedula").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_cedula").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_director_1.rs_profesion.value==''){
		document.getElementById("obligatorio_rs_profesion").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_profesion").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_director_1.rs_expedido.value==''){
		document.getElementById("obligatorio_rs_expedido").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_expedido").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_director_1.rs_especialidad.value==''){
		document.getElementById("obligatorio_rs_especialidad").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_especialidad").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_director_1.rs_matricula.value==''){
		document.getElementById("obligatorio_rs_matricula").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_matricula").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_director_1.rs_colegio.value==''){
		document.getElementById("obligatorio_rs_colegio").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_colegio").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_director_1.rs_correo_electronico.value==''){
		document.getElementById("obligatorio_rs_correo_electronico").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_correo_electronico").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_director_1.rs_tlf_local.value==''){
		document.getElementById("obligatorio_rs_tlf_local").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_tlf_local").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_director_1.rs_tlf_movil.value==''){
		document.getElementById("obligatorio_rs_tlf_movil").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_tlf_movil").style.background='#F30';
		validar = false;
	}
	
	if (validar==false){
		alert ("Falta ingresar algunos Datos del Responsable");
	}
	return validar;	
}
function valida_envia_4(elemento){
	validar= true;
	if (document.datos_del_responsable_director_2.dm_nombre.value==''){
		document.getElementById("obligatorio_dm_nombre").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_nombre").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_director_2.dm_apellido.value==''){
		document.getElementById("obligatorio_dm_apellido").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_apellido").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_director_2.dm_cedula.value==''){
		document.getElementById("obligatorio_dm_cedula").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_cedula").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_director_2.dm_profesion.value==''){
		document.getElementById("obligatorio_dm_profesion").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_profesion").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_director_2.dm_expedido.value==''){
		document.getElementById("obligatorio_dm_expedido").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_expedido").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_director_2.dm_especialidad.value==''){
		document.getElementById("obligatorio_dm_especialidad").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_especialidad").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_director_2.dm_matricula.value==''){
		document.getElementById("obligatorio_dm_matricula").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_matricula").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_director_2.dm_colegio.value==''){
		document.getElementById("obligatorio_dm_colegio").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_colegio").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_director_2.dm_correo_electronico.value==''){
		document.getElementById("obligatorio_dm_correo_electronico").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_correo_electronico").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_director_2.dm_tlf_local.value==''){
		document.getElementById("obligatorio_dm_tlf_local").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_tlf_local").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_director_2.dm_tlf_movil.value==''){
		document.getElementById("obligatorio_dm_tlf_movil").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_tlf_movil").style.background='#F30';
		validar = false;
	}
	
	if (validar==false){
		alert ("Falta ingresar algunos Datos del Responsable");
	}
	return validar;	
}
function valida_envia_5(elemento){
	validar= true;
	if (document.datos_del_responsable_coord.cr_nombre.value==''){
		document.getElementById("obligatorio_cr_nombre").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_nombre").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_coord.cr_apellido.value==''){
		document.getElementById("obligatorio_cr_apellido").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_apellido").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_coord.cr_cedula.value==''){
		document.getElementById("obligatorio_cr_cedula").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_cedula").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_coord.cr_profesion.value==''){
		document.getElementById("obligatorio_cr_profesion").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_profesion").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_coord.cr_expedido.value==''){
		document.getElementById("obligatorio_cr_expedido").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_expedido").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_coord.cr_especialidad.value==''){
		document.getElementById("obligatorio_cr_especialidad").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_especialidad").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_coord.cr_matricula.value==''){
		document.getElementById("obligatorio_cr_matricula").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_matricula").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_coord.cr_colegio.value==''){
		document.getElementById("obligatorio_cr_colegio").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_colegio").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_coord.cr_correo_electronico.value==''){
		document.getElementById("obligatorio_cr_correo_electronico").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_correo_electronico").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_coord.cr_tlf_local.value==''){
		document.getElementById("obligatorio_cr_tlf_local").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_tlf_local").style.background='#F30';
		validar = false;
	}
	if (document.datos_del_responsable_coord.cr_tlf_movil.value==''){
		document.getElementById("obligatorio_cr_tlf_movil").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_tlf_movil").style.background='#F30';
		validar = false;
	}
	
	if (validar==false){
		alert ("Falta ingresar algunos Datos del Responsable");
	}
	return validar;	
}
function valida_envia_6(elemento){
	validar= true;
	if (document.getElementById("seccion_donacion").value=='Seleccione...'){
		document.getElementById("obligatorio_ut_seccion_donacion").style.color='#F9F9F9';
		document.getElementById("obligatorio_ut_seccion_donacion").style.background='#F30';
		validar = false;
	}
	if (document.getElementById("seccion_laboratorio").value=='Seleccione...'){
		document.getElementById("obligatorio_ut_seccion_laboratorio").style.color='#F9F9F9';
		document.getElementById("obligatorio_ut_seccion_laboratorio").style.background='#F30';
		validar = false;
	}
	if (document.getElementById("seccion_estadisticas").value=='Seleccione...'){
		document.getElementById("obligatorio_ut_seccion_estadisticas").style.color='#F9F9F9';
		document.getElementById("obligatorio_ut_seccion_estadisticas").style.background='#F30';
		validar = false;
	}
	if (document.getElementById("seccion_procesamiento").value=='Seleccione...'){
		document.getElementById("obligatorio_ut_seccion_procesamiento").style.color='#F9F9F9';
		document.getElementById("obligatorio_ut_seccion_procesamiento").style.background='#F30';
		validar = false;
	}
	if (document.getElementById("seccion_conservacion_almacen").value=='Seleccione...'){
		document.getElementById("obligatorio_ut_seccion_conservacion_almacen").style.color='#F9F9F9';
		document.getElementById("obligatorio_ut_seccion_conservacion_almacen").style.background='#F30';
		validar = false;
	}
	if (document.getElementById("seccion_secretaria").value=='Seleccione...'){
		document.getElementById("obligatorio_ut_seccion_secretaria").style.color='#F9F9F9';
		document.getElementById("obligatorio_ut_seccion_secretaria").style.background='#F30';
		validar = false;
	}
	if (document.getElementById("inhrr").value=='Seleccione...'){
		document.getElementById("obligatorio_participacion_programa_inhrr").style.color='#F9F9F9';
		document.getElementById("obligatorio_participacion_programa_inhrr").style.background='#F30';
		validar = false;
	}
	if (validar==false){
		alert ("Falta ingresar algunos Datos del Banco de Sangre y Unidades Transfusionales");
	}
	return validar;	
}
/***********************************/
function Obligatorio(elemento) {
	/* Datos del Banco de Sangre */
	/*sector_pertenece*/
	if(elemento.name=="sector_pertenece"){
		if(elemento.value=="" || elemento.value=="Seleccione..."){
		document.getElementById("obligatorio_sector_pertenece").style.color='#F9F9F9';
		document.getElementById("obligatorio_sector_pertenece").style.background='#F30';
			}else {
				document.getElementById("obligatorio_sector_pertenece").style.color='#F9F9F9';
			document.getElementById("obligatorio_sector_pertenece").style.background='#F9F9F9';
				}
			}
	/*otros_sector_pertenece*/
	if(elemento.name=="otros_sector_pertenece"){
		if(elemento.value==""){
		document.getElementById("sector_pertenece").style.color='#F9F9F9';
		document.getElementById("sector_pertenece").style.background='#F30';
			}else {
				document.getElementById("sector_pertenece").style.color='#333';
			document.getElementById("sector_pertenece").style.background='#E1EAF2';
			document.getElementById("sector_pertenece").style.border='#CCC solid 1px';
				}
			}
	/*nro_rif*/
	if(elemento.name=="nro_rif"){
		if(elemento.value==""){
		document.getElementById("obligatorio_nro_rif").style.color='#F9F9F9';
		document.getElementById("obligatorio_nro_rif").style.background='#F30';
			}else {
				document.getElementById("obligatorio_nro_rif").style.color='#F9F9F9';
			document.getElementById("obligatorio_nro_rif").style.background='#F9F9F9';
				}
			}
	/*nro_nit*/
	if(elemento.name=="nro_nit"){
		if(elemento.value==""){
		document.getElementById("obligatorio_nro_nit").style.color='#F9F9F9';
		document.getElementById("obligatorio_nro_nit").style.background='#F30';
			}else {
				document.getElementById("obligatorio_nro_nit").style.color='#F9F9F9';
			document.getElementById("obligatorio_nro_nit").style.background='#F9F9F9';
				}
			}
	/*nro_telefono*/
	if(elemento.name=="nro_telefono"){
		if(elemento.value==""){
		document.getElementById("obligatorio_nro_telefono").style.color='#F9F9F9';
		document.getElementById("obligatorio_nro_telefono").style.background='#F30';
			}else {
				document.getElementById("obligatorio_nro_telefono").style.color='#F9F9F9';
			document.getElementById("obligatorio_nro_telefono").style.background='#F9F9F9';
				}
			}
	/*nro_telefono_2*/
	if(elemento.name=="nro_telefono_2"){
		if(elemento.value==""){
		document.getElementById("obligatorio_nro_telefono_2").style.color='#F9F9F9';
		document.getElementById("obligatorio_nro_telefono_2").style.background='#F9F9F9';
			}else {
				document.getElementById("obligatorio_nro_telefono_2").style.color='#F9F9F9';
			document.getElementById("obligatorio_nro_telefono_2").style.background='#F9F9F9';
				}
			}
	
	/*nro_fax*/
	if(elemento.name=="nro_fax"){
		if(elemento.value==""){
		document.getElementById("obligatorio_nro_fax").style.color='#F9F9F9';
		document.getElementById("obligatorio_nro_fax").style.background='#F9F9F9';
			}else {
				document.getElementById("obligatorio_nro_fax").style.color='#F9F9F9';
			document.getElementById("obligatorio_nro_fax").style.background='#F9F9F9';
				}
			}
	/*pagina_web*/
	if(elemento.name=="pagina_web"){
		if(elemento.value==""){
		document.getElementById("obligatorio_pagina_web").style.color='#F9F9F9';
		document.getElementById("obligatorio_pagina_web").style.background='#F9F9F9';
			}else {
				document.getElementById("obligatorio_pagina_web").style.color='#F9F9F9';
			document.getElementById("obligatorio_pagina_web").style.background='#F9F9F9';
				}
			}
	/*tipo_institucion*/
	if(elemento.name=="tipo_institucion"){
		if(elemento.value=="" || elemento.value=="Seleccione..."){
		document.getElementById("obligatorio_tipo_institucion").style.color='#F9F9F9';
		document.getElementById("obligatorio_tipo_institucion").style.background='#F30';
			}else {
				document.getElementById("obligatorio_tipo_institucion").style.color='#F9F9F9';
			document.getElementById("obligatorio_tipo_institucion").style.background='#F9F9F9';
				}
			}
	/*otros_tipo_institucion*/
	if(elemento.name=="otros_tipo_institucion"){
		if(elemento.value==""){
		document.getElementById("tipo_institucion").style.color='#F9F9F9';
		document.getElementById("tipo_institucion").style.background='#F30';
			}else {
				document.getElementById("tipo_institucion").style.color='#333';
			document.getElementById("tipo_institucion").style.background='#E1EAF2';
			document.getElementById("tipo_institucion").style.border='#CCC solid 1px';
				}
			}
	/*situacion_propiedad_inmueble*/
	if(elemento.name=="situacion_propiedad_inmueble"){
		if(elemento.value=="" || elemento.value=="Seleccione..."){
		document.getElementById("obligatorio_situacion_propiedad_inmueble").style.color='#F9F9F9';
		document.getElementById("obligatorio_situacion_propiedad_inmueble").style.background='#F30';
			}else {
				document.getElementById("obligatorio_situacion_propiedad_inmueble").style.color='#F9F9F9';
			document.getElementById("obligatorio_situacion_propiedad_inmueble").style.background='#F9F9F9';
				}
			}
	/*otros_situacion_propiedad_inmueble*/
	if(elemento.name=="otros_situacion_propiedad_inmueble"){
		if(elemento.value==""){
		document.getElementById("situacion_propiedad_inmueble").style.color='#F9F9F9';
		document.getElementById("situacion_propiedad_inmueble").style.background='#F30';
			}else {
				document.getElementById("situacion_propiedad_inmueble").style.color='#333';
			document.getElementById("situacion_propiedad_inmueble").style.background='#E1EAF2';
			document.getElementById("situacion_propiedad_inmueble").style.border='#CCC solid 1px';
				}
			}
	/* Datos del Banco de Sangre */
	 /* Pregunta: *¿El Banco de Sangre es dependiente de un Centro Asistencial? */
	  if (document.getElementById("dependiente_si").checked ) {
		document.getElementById("obligatorio_dependiente").style.color='#F9F9F9';
		document.getElementById("obligatorio_dependiente").style.background='#F9F9F9';
		document.getElementById("establecimiento_asistencial").style.position='static';
		document.getElementById("establecimiento_asistencial").style.visibility='visible';
		document.getElementById("establecimiento_asistencial").style.width='100%';
		document.getElementById("titulo_establecimiento_asistencial").style.position='static';
		document.getElementById("titulo_establecimiento_asistencial").style.visibility='visible';
		document.getElementById("titulo_establecimiento_asistencial").style.width='100%';
		
		
		}
	if (document.getElementById("dependiente_no").checked ) {
		document.getElementById("obligatorio_dependiente").style.color='#F9F9F9';
		document.getElementById("obligatorio_dependiente").style.background='#F9F9F9';
		document.getElementById("establecimiento_asistencial").style.position='absolute';
		document.getElementById("establecimiento_asistencial").style.visibility='hidden';
		document.getElementById("establecimiento_asistencial").style.width='0px';
		document.getElementById("titulo_establecimiento_asistencial").style.position='absolute';
		document.getElementById("titulo_establecimiento_asistencial").style.visibility='hidden';
		document.getElementById("titulo_establecimiento_asistencial").style.width='0px';
		
		}	
	/*razon_social*/
	if(elemento.name=="razon_social"){
		if(elemento.value==""){
		document.getElementById("obligatorio_razon_social").style.color='#F9F9F9';
		document.getElementById("obligatorio_razon_social").style.background='#F30';
			}else {
				document.getElementById("obligatorio_razon_social").style.color='#F9F9F9';
			document.getElementById("obligatorio_razon_social").style.background='#F9F9F9';
				}
			}
			
	/*nro_registro_sanitario*/
	if(elemento.name=="nro_registro_sanitario"){
		if(elemento.value==""){
		document.getElementById("obligatorio_nro_registro_sanitario").style.color='#F9F9F9';
		document.getElementById("obligatorio_nro_registro_sanitario").style.background='#F30';
			}else {
				document.getElementById("obligatorio_nro_registro_sanitario").style.color='#F9F9F9';
			document.getElementById("obligatorio_nro_registro_sanitario").style.background='#F9F9F9';
				}
			}
		/*nro_rif_es*/
	if(elemento.name=="nro_rif_es"){
		if(elemento.value==""){
		document.getElementById("obligatorio_nro_rif_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_nro_rif_es").style.background='#F30';
			}else {
				document.getElementById("obligatorio_nro_rif_es").style.color='#F9F9F9';
			document.getElementById("obligatorio_nro_rif_es").style.background='#F9F9F9';
				}
			}
	/*nro_nit_es*/
	if(elemento.name=="nro_nit_es"){
		if(elemento.value==""){
		document.getElementById("obligatorio_nro_nit_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_nro_nit_es").style.background='#F30';
			}else {
				document.getElementById("obligatorio_nro_nit_es").style.color='#F9F9F9';
			document.getElementById("obligatorio_nro_nit_es").style.background='#F9F9F9';
				}
			}
	/*nro_telefono_es*/
	if(elemento.name=="nro_telefono_es"){
		if(elemento.value==""){
		document.getElementById("obligatorio_nro_telefono_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_nro_telefono_es").style.background='#F30';
			}else {
				document.getElementById("obligatorio_nro_telefono_es").style.color='#F9F9F9';
			document.getElementById("obligatorio_nro_telefono_es").style.background='#F9F9F9';
				}
			}
	/*nro_fax_es*/
	if(elemento.name=="nro_fax_es"){
		if(elemento.value==""){
		document.getElementById("obligatorio_nro_fax_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_nro_fax_es").style.background='#F9F9F9';
			}else {
				document.getElementById("obligatorio_nro_fax_es").style.color='#F9F9F9';
			document.getElementById("obligatorio_nro_fax_es").style.background='#F9F9F9';
				}
			}
	/*correo_electronico_es*/
	if(elemento.name=="correo_electronico_es"){
		if(elemento.value==""){
		document.getElementById("obligatorio_correo_electronico_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_correo_electronico_es").style.background='#F30';
			}else {
				document.getElementById("obligatorio_correo_electronico_es").style.color='#F9F9F9';
			document.getElementById("obligatorio_correo_electronico_es").style.background='#F9F9F9';
				}
			}
	/*pagina_web_es*/
	if(elemento.name=="pagina_web_es"){
		if(elemento.value==""){
		document.getElementById("obligatorio_pagina_web_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_pagina_web_es").style.background='#F9F9F9';
			}else {
				document.getElementById("obligatorio_pagina_web_es").style.color='#F9F9F9';
			document.getElementById("obligatorio_pagina_web_es").style.background='#F9F9F9';
				}
			}
	/*tipo_institucion_es*/
	if(elemento.name=="tipo_institucion_es"){
		if(elemento.value=="Seleccione..."){
		document.getElementById("obligatorio_tipo_institucion_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_tipo_institucion_es").style.background='#F30';
			}else {
				document.getElementById("obligatorio_tipo_institucion_es").style.color='#F9F9F9';
			document.getElementById("obligatorio_tipo_institucion_es").style.background='#F9F9F9';
				}
			}
	/*otros_tipo_institucion_es*/
	if(elemento.name=="otros_tipo_institucion_es"){
		if(elemento.value==""){
		document.getElementById("tipo_institucion_es").style.color='#F9F9F9';
		document.getElementById("tipo_institucion_es").style.background='#F30';
			}else {
				document.getElementById("tipo_institucion_es").style.color='#333';
			document.getElementById("tipo_institucion_es").style.background='#E1EAF2';
			document.getElementById("tipo_institucion_es").style.border='#CCC solid 1px';
				}
			}
	/*situacion_propiedad_inmueble_es*/
	if(elemento.name=="situacion_propiedad_inmueble_es"){
		if(elemento.value=="Seleccione..."){
		document.getElementById("obligatorio_situacion_propiedad_inmueble_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_situacion_propiedad_inmueble_es").style.background='#F30';
			}else {
				document.getElementById("obligatorio_situacion_propiedad_inmueble_es").style.color='#F9F9F9';
			document.getElementById("obligatorio_situacion_propiedad_inmueble_es").style.background='#F9F9F9';
				}
			}
	/*otros_situacion_propiedad_inmueble_es*/
	if(elemento.name=="otros_situacion_propiedad_inmueble_es"){
		if(elemento.value==""){
		document.getElementById("situacion_propiedad_inmueble_es").style.color='#F9F9F9';
		document.getElementById("situacion_propiedad_inmueble_es").style.background='#F30';
			}else {
				document.getElementById("situacion_propiedad_inmueble_es").style.color='#333';
			document.getElementById("situacion_propiedad_inmueble_es").style.background='#E1EAF2';
			document.getElementById("situacion_propiedad_inmueble_es").style.border='#CCC solid 1px';
				}
			}
	
	/* Datos del Responsable */
		/* Director(a) médico responsable del establecimiento médico asistencial */
	 /*rs_nombre*/
	if(elemento.name=="rs_nombre"){
		if(elemento.value==""){
		document.getElementById("obligatorio_rs_nombre").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_nombre").style.background='#F30';
			}else {
				document.getElementById("obligatorio_rs_nombre").style.color='#F9F9F9';
			document.getElementById("obligatorio_rs_nombre").style.background='#F9F9F9';
				}
			}
	 /*rs_apellido*/
	if(elemento.name=="rs_apellido"){
		if(elemento.value==""){
		document.getElementById("obligatorio_rs_apellido").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_apellido").style.background='#F30';
			}else {
				document.getElementById("obligatorio_rs_apellido").style.color='#F9F9F9';
			document.getElementById("obligatorio_rs_apellido").style.background='#F9F9F9';
				}
			}
	/*rs_cedula*/
	if(elemento.name=="rs_cedula"){
		if(elemento.value==""){
		document.getElementById("obligatorio_rs_cedula").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_cedula").style.background='#F30';
			}else {
				document.getElementById("obligatorio_rs_cedula").style.color='#F9F9F9';
			document.getElementById("obligatorio_rs_cedula").style.background='#F9F9F9';
				}
			}
	/*rs_profesion*/
	if(elemento.name=="rs_profesion"){
		if(elemento.value==""){
		document.getElementById("obligatorio_rs_profesion").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_profesion").style.background='#F30';
			}else {
				document.getElementById("obligatorio_rs_profesion").style.color='#F9F9F9';
			document.getElementById("obligatorio_rs_profesion").style.background='#F9F9F9';
				}
			}
	/*rs_expedido*/
	if(elemento.name=="rs_expedido"){
		if(elemento.value==""){
		document.getElementById("obligatorio_rs_expedido").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_expedido").style.background='#F30';
			}else {
				document.getElementById("obligatorio_rs_expedido").style.color='#F9F9F9';
			document.getElementById("obligatorio_rs_expedido").style.background='#F9F9F9';
				}
			}
	/*rs_especialidad*/
	if(elemento.name=="rs_especialidad"){
		if(elemento.value==""){
		document.getElementById("obligatorio_rs_especialidad").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_especialidad").style.background='#F30';
			}else {
				document.getElementById("obligatorio_rs_especialidad").style.color='#F9F9F9';
			document.getElementById("obligatorio_rs_especialidad").style.background='#F9F9F9';
				}
			}
	/*rs_matricula*/
	if(elemento.name=="rs_matricula"){
		if(elemento.value==""){
		document.getElementById("obligatorio_rs_matricula").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_matricula").style.background='#F30';
			}else {
				document.getElementById("obligatorio_rs_matricula").style.color='#F9F9F9';
			document.getElementById("obligatorio_rs_matricula").style.background='#F9F9F9';
				}
			}
	/*rs_colegio*/
	if(elemento.name=="rs_colegio"){
		if(elemento.value==""){
		document.getElementById("obligatorio_rs_colegio").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_colegio").style.background='#F30';
			}else {
				document.getElementById("obligatorio_rs_colegio").style.color='#F9F9F9';
			document.getElementById("obligatorio_rs_colegio").style.background='#F9F9F9';
				}
			}
	/*rs_rif*/
	if(elemento.name=="rs_rif"){
		if(elemento.value==""){
		document.getElementById("obligatorio_rs_rif").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_rif").style.background='#F9F9F9';
			}else {
				document.getElementById("obligatorio_rs_rif").style.color='#F9F9F9';
			document.getElementById("obligatorio_rs_rif").style.background='#F9F9F9';
				}
			}
	/*rs_correo_electronico*/
	if(elemento.name=="rs_correo_electronico"){
		if(elemento.value==""){
		document.getElementById("obligatorio_rs_correo_electronico").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_correo_electronico").style.background='#F30';
			}else {
				document.getElementById("obligatorio_rs_correo_electronico").style.color='#F9F9F9';
			document.getElementById("obligatorio_rs_correo_electronico").style.background='#F9F9F9';
				}
			}
	/*rs_tlf_local*/
	if(elemento.name=="rs_tlf_local"){
		if(elemento.value==""){
		document.getElementById("obligatorio_rs_tlf_local").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_tlf_local").style.background='#F30';
			}else {
				document.getElementById("obligatorio_rs_tlf_local").style.color='#F9F9F9';
			document.getElementById("obligatorio_rs_tlf_local").style.background='#F9F9F9';
				}
			}
	/*rs_tlf_movil*/
	if(elemento.name=="rs_tlf_movil"){
		if(elemento.value==""){
		document.getElementById("obligatorio_rs_tlf_movil").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_tlf_movil").style.background='#F30';
			}else {
				document.getElementById("obligatorio_rs_tlf_movil").style.color='#F9F9F9';
			document.getElementById("obligatorio_rs_tlf_movil").style.background='#F9F9F9';
				}
			}
	/*rs_fax*/
	if(elemento.name=="rs_fax"){
		if(elemento.value==""){
		document.getElementById("obligatorio_rs_fax").style.color='#F9F9F9';
		document.getElementById("obligatorio_rs_fax").style.background='#F30';
			}else {
				document.getElementById("obligatorio_rs_fax").style.color='#F9F9F9';
			document.getElementById("obligatorio_rs_fax").style.background='#F9F9F9';
				}
			}
		/* Director(a) Médico responsable del banco de sangre y unidades transfusionales (Director Médico) */
	/*dm_nombre*/
	if(elemento.name=="dm_nombre"){
		if(elemento.value==""){
		document.getElementById("obligatorio_dm_nombre").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_nombre").style.background='#F30';
			}else {
				document.getElementById("obligatorio_dm_nombre").style.color='#F9F9F9';
			document.getElementById("obligatorio_dm_nombre").style.background='#F9F9F9';
				}
			}
	 /*dm_apellido*/
	if(elemento.name=="dm_apellido"){
		if(elemento.value==""){
		document.getElementById("obligatorio_dm_apellido").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_apellido").style.background='#F30';
			}else {
				document.getElementById("obligatorio_dm_apellido").style.color='#F9F9F9';
			document.getElementById("obligatorio_dm_apellido").style.background='#F9F9F9';
				}
			}
	/*dm_cedula*/
	if(elemento.name=="dm_cedula"){
		if(elemento.value==""){
		document.getElementById("obligatorio_dm_cedula").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_cedula").style.background='#F30';
			}else {
				document.getElementById("obligatorio_dm_cedula").style.color='#F9F9F9';
			document.getElementById("obligatorio_dm_cedula").style.background='#F9F9F9';
				}
			}
	/*dm_profesion*/
	if(elemento.name=="dm_profesion"){
		if(elemento.value==""){
		document.getElementById("obligatorio_dm_profesion").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_profesion").style.background='#F30';
			}else {
				document.getElementById("obligatorio_dm_profesion").style.color='#F9F9F9';
			document.getElementById("obligatorio_dm_profesion").style.background='#F9F9F9';
				}
			}
	/*dm_expedido*/
	if(elemento.name=="dm_expedido"){
		if(elemento.value==""){
		document.getElementById("obligatorio_dm_expedido").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_expedido").style.background='#F30';
			}else {
				document.getElementById("obligatorio_dm_expedido").style.color='#F9F9F9';
			document.getElementById("obligatorio_dm_expedido").style.background='#F9F9F9';
				}
			}
	/*dm_especialidad*/
	if(elemento.name=="dm_especialidad"){
		if(elemento.value==""){
		document.getElementById("obligatorio_dm_especialidad").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_especialidad").style.background='#F30';
			}else {
				document.getElementById("obligatorio_dm_especialidad").style.color='#F9F9F9';
			document.getElementById("obligatorio_dm_especialidad").style.background='#F9F9F9';
				}
			}
	/*dm_matricula*/
	if(elemento.name=="dm_matricula"){
		if(elemento.value==""){
		document.getElementById("obligatorio_dm_matricula").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_matricula").style.background='#F30';
			}else {
				document.getElementById("obligatorio_dm_matricula").style.color='#F9F9F9';
			document.getElementById("obligatorio_dm_matricula").style.background='#F9F9F9';
				}
			}
	/*dm_colegio*/
	if(elemento.name=="dm_colegio"){
		if(elemento.value==""){
		document.getElementById("obligatorio_dm_colegio").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_colegio").style.background='#F30';
			}else {
				document.getElementById("obligatorio_dm_colegio").style.color='#F9F9F9';
			document.getElementById("obligatorio_dm_colegio").style.background='#F9F9F9';
				}
			}
	/*dm_rif*/
	if(elemento.name=="dm_rif"){
		if(elemento.value==""){
		document.getElementById("obligatorio_dm_rif").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_rif").style.background='#F9F9F9';
			}else {
				document.getElementById("obligatorio_dm_rif").style.color='#F9F9F9';
			document.getElementById("obligatorio_dm_rif").style.background='#F9F9F9';
				}
			}
	/*dm_correo_electronico*/
	if(elemento.name=="dm_correo_electronico"){
		if(elemento.value==""){
		document.getElementById("obligatorio_dm_correo_electronico").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_correo_electronico").style.background='#F30';
			}else {
				document.getElementById("obligatorio_dm_correo_electronico").style.color='#F9F9F9';
			document.getElementById("obligatorio_dm_correo_electronico").style.background='#F9F9F9';
				}
			}
	/*dm_tlf_local*/
	if(elemento.name=="dm_tlf_local"){
		if(elemento.value==""){
		document.getElementById("obligatorio_dm_tlf_local").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_tlf_local").style.background='#F30';
			}else {
				document.getElementById("obligatorio_dm_tlf_local").style.color='#F9F9F9';
			document.getElementById("obligatorio_dm_tlf_local").style.background='#F9F9F9';
				}
			}
	/*dm_tlf_movil*/
	if(elemento.name=="dm_tlf_movil"){
		if(elemento.value==""){
		document.getElementById("obligatorio_dm_tlf_movil").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_tlf_movil").style.background='#F30';
			}else {
				document.getElementById("obligatorio_dm_tlf_movil").style.color='#F9F9F9';
			document.getElementById("obligatorio_dm_tlf_movil").style.background='#F9F9F9';
				}
			}
	/*dm_fax*/
	if(elemento.name=="dm_fax"){
		if(elemento.value==""){
		document.getElementById("obligatorio_dm_fax").style.color='#F9F9F9';
		document.getElementById("obligatorio_dm_fax").style.background='#F30';
			}else {
				document.getElementById("obligatorio_dm_fax").style.color='#F9F9F9';
			document.getElementById("obligatorio_dm_fax").style.background='#F9F9F9';
				}
			}
		/* Coordinador(a) responsable del banco de sangre y unidades transfusionales */
	/*cr_nombre*/
	if(elemento.name=="cr_nombre"){
		if(elemento.value==""){
		document.getElementById("obligatorio_cr_nombre").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_nombre").style.background='#F30';
			}else {
				document.getElementById("obligatorio_cr_nombre").style.color='#F9F9F9';
			document.getElementById("obligatorio_cr_nombre").style.background='#F9F9F9';
				}
			}
	 /*cr_apellido*/
	if(elemento.name=="cr_apellido"){
		if(elemento.value==""){
		document.getElementById("obligatorio_cr_apellido").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_apellido").style.background='#F30';
			}else {
				document.getElementById("obligatorio_cr_apellido").style.color='#F9F9F9';
			document.getElementById("obligatorio_cr_apellido").style.background='#F9F9F9';
				}
			}
	/*cr_cedula*/
	if(elemento.name=="cr_cedula"){
		if(elemento.value==""){
		document.getElementById("obligatorio_cr_cedula").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_cedula").style.background='#F30';
			}else {
				document.getElementById("obligatorio_cr_cedula").style.color='#F9F9F9';
			document.getElementById("obligatorio_cr_cedula").style.background='#F9F9F9';
				}
			}
	/*cr_profesion*/
	if(elemento.name=="cr_profesion"){
		if(elemento.value==""){
		document.getElementById("obligatorio_cr_profesion").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_profesion").style.background='#F30';
			}else {
				document.getElementById("obligatorio_cr_profesion").style.color='#F9F9F9';
			document.getElementById("obligatorio_cr_profesion").style.background='#F9F9F9';
				}
			}
	/*cr_expedido*/
	if(elemento.name=="cr_expedido"){
		if(elemento.value==""){
		document.getElementById("obligatorio_cr_expedido").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_expedido").style.background='#F30';
			}else {
				document.getElementById("obligatorio_cr_expedido").style.color='#F9F9F9';
			document.getElementById("obligatorio_cr_expedido").style.background='#F9F9F9';
				}
			}
	/*cr_especialidad*/
	if(elemento.name=="cr_especialidad"){
		if(elemento.value==""){
		document.getElementById("obligatorio_cr_especialidad").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_especialidad").style.background='#F30';
			}else {
				document.getElementById("obligatorio_cr_especialidad").style.color='#F9F9F9';
			document.getElementById("obligatorio_cr_especialidad").style.background='#F9F9F9';
				}
			}
	/*cr_matricula*/
	if(elemento.name=="cr_matricula"){
		if(elemento.value==""){
		document.getElementById("obligatorio_cr_matricula").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_matricula").style.background='#F30';
			}else {
				document.getElementById("obligatorio_cr_matricula").style.color='#F9F9F9';
			document.getElementById("obligatorio_cr_matricula").style.background='#F9F9F9';
				}
			}
	/*cr_colegio*/
	if(elemento.name=="cr_colegio"){
		if(elemento.value==""){
		document.getElementById("obligatorio_cr_colegio").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_colegio").style.background='#F30';
			}else {
				document.getElementById("obligatorio_cr_colegio").style.color='#F9F9F9';
			document.getElementById("obligatorio_cr_colegio").style.background='#F9F9F9';
				}
			}
	/*cr_rif*/
	if(elemento.name=="cr_rif"){
		if(elemento.value==""){
		document.getElementById("obligatorio_cr_rif").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_rif").style.background='#F9F9F9';
			}else {
				document.getElementById("obligatorio_cr_rif").style.color='#F9F9F9';
			document.getElementById("obligatorio_cr_rif").style.background='#F9F9F9';
				}
			}
	/*cr_correo_electronico*/
	if(elemento.name=="cr_correo_electronico"){
		if(elemento.value==""){
		document.getElementById("obligatorio_cr_correo_electronico").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_correo_electronico").style.background='#F30';
			}else {
				document.getElementById("obligatorio_cr_correo_electronico").style.color='#F9F9F9';
			document.getElementById("obligatorio_cr_correo_electronico").style.background='#F9F9F9';
				}
			}
	/*cr_tlf_local*/
	if(elemento.name=="cr_tlf_local"){
		if(elemento.value==""){
		document.getElementById("obligatorio_cr_tlf_local").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_tlf_local").style.background='#F30';
			}else {
				document.getElementById("obligatorio_cr_tlf_local").style.color='#F9F9F9';
			document.getElementById("obligatorio_cr_tlf_local").style.background='#F9F9F9';
				}
			}
	/*cr_tlf_movil*/
	if(elemento.name=="cr_tlf_movil"){
		if(elemento.value==""){
		document.getElementById("obligatorio_cr_tlf_movil").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_tlf_movil").style.background='#F30';
			}else {
				document.getElementById("obligatorio_cr_tlf_movil").style.color='#F9F9F9';
			document.getElementById("obligatorio_cr_tlf_movil").style.background='#F9F9F9';
				}
			}
	/*cr_fax*/
	if(elemento.name=="cr_fax"){
		if(elemento.value==""){
		document.getElementById("obligatorio_cr_fax").style.color='#F9F9F9';
		document.getElementById("obligatorio_cr_fax").style.background='#F30';
			}else {
				document.getElementById("obligatorio_cr_fax").style.color='#F9F9F9';
			document.getElementById("obligatorio_cr_fax").style.background='#F9F9F9';
				}
			}
		/* Datos del Banco de Sangre y Unidades Transfusionales */
	/*ut_seccion_donacion*/
	if(elemento.name=="ut_seccion_donacion"){
		if(elemento.value=="" || elemento.value=="Seleccione..."){
		document.getElementById("obligatorio_ut_seccion_donacion").style.color='#F9F9F9';
		document.getElementById("obligatorio_ut_seccion_donacion").style.background='#F30';
			}else {
				document.getElementById("obligatorio_ut_seccion_donacion").style.color='#F9F9F9';
			document.getElementById("obligatorio_ut_seccion_donacion").style.background='#F9F9F9';
				}
			}
	/*ut_seccion_laboratorio*/
	if(elemento.name=="ut_seccion_laboratorio"){
		if(elemento.value=="" || elemento.value=="Seleccione..."){
		document.getElementById("obligatorio_ut_seccion_laboratorio").style.color='#F9F9F9';
		document.getElementById("obligatorio_ut_seccion_laboratorio").style.background='#F30';
			}else {
				document.getElementById("obligatorio_ut_seccion_laboratorio").style.color='#F9F9F9';
			document.getElementById("obligatorio_ut_seccion_laboratorio").style.background='#F9F9F9';
				}
			}
	/*ut_seccion_estadisticas*/
	if(elemento.name=="ut_seccion_estadisticas"){
		if(elemento.value=="Seleccione..."){
		document.getElementById("obligatorio_ut_seccion_estadisticas").style.color='#F9F9F9';
		document.getElementById("obligatorio_ut_seccion_estadisticas").style.background='#F30';
			}else {
				document.getElementById("obligatorio_ut_seccion_estadisticas").style.color='#F9F9F9';
			document.getElementById("obligatorio_ut_seccion_estadisticas").style.background='#F9F9F9';
				}
			}
	/*ut_seccion_procesamiento*/
	if(elemento.name=="ut_seccion_procesamiento"){
		if(elemento.value=="Seleccione..."){
		document.getElementById("obligatorio_ut_seccion_procesamiento").style.color='#F9F9F9';
		document.getElementById("obligatorio_ut_seccion_procesamiento").style.background='#F30';
			}else {
				document.getElementById("obligatorio_ut_seccion_procesamiento").style.color='#F9F9F9';
			document.getElementById("obligatorio_ut_seccion_procesamiento").style.background='#F9F9F9';
				}
			}
	/*ut_seccion_conservacion_almacen*/
	if(elemento.name=="ut_seccion_conservacion_almacen"){
		if(elemento.value=="Seleccione..."){
		document.getElementById("obligatorio_ut_seccion_conservacion_almacen").style.color='#F9F9F9';
		document.getElementById("obligatorio_ut_seccion_conservacion_almacen").style.background='#F30';
			}else {
				document.getElementById("obligatorio_ut_seccion_conservacion_almacen").style.color='#F9F9F9';
			document.getElementById("obligatorio_ut_seccion_conservacion_almacen").style.background='#F9F9F9';
				}
			}
	/*ut_seccion_secretaria*/
	if(elemento.name=="ut_seccion_secretaria"){
		if(elemento.value=="Seleccione..."){
		document.getElementById("obligatorio_ut_seccion_secretaria").style.color='#F9F9F9';
		document.getElementById("obligatorio_ut_seccion_secretaria").style.background='#F30';
			}else {
				document.getElementById("obligatorio_ut_seccion_secretaria").style.color='#F9F9F9';
			document.getElementById("obligatorio_ut_seccion_secretaria").style.background='#F9F9F9';
				}
			}
	/*participacion_programa_inhrr*/
	if(elemento.name=="participacion_programa_inhrr"){
		if(elemento.value=="Seleccione..."){
		document.getElementById("obligatorio_participacion_programa_inhrr").style.color='#F9F9F9';
		document.getElementById("obligatorio_participacion_programa_inhrr").style.background='#F30';
			}else {
				document.getElementById("obligatorio_participacion_programa_inhrr").style.color='#F9F9F9';
			document.getElementById("obligatorio_participacion_programa_inhrr").style.background='#F9F9F9';
				}
			}
			
}
	
/**************** Funcion para activar casillas de la opciones "otras" ********/


function permite(elEvento, permitidos) {
  // Variables que definen los caracteres permitidos
  var numeros = "0123456789";
  var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
  var numeros_caracteres = numeros + caracteres;
  var teclas_especiales = [8,46,37,39];
  // 8 = BackSpace, 46 = Supr, 37 = flecha izquierda, 39 = flecha derecha
 
 
  // Seleccionar los caracteres a partir del parámetro de la función
  switch(permitidos) {
    case 'num':
      permitidos = numeros;
      break;
    case 'car':
      permitidos = caracteres;
      break;
    case 'num_car':
      permitidos = numeros_caracteres;
      break;
  }
 
  // Obtener la tecla pulsada 
  var evento = elEvento || window.event;
  var codigoCaracter = evento.charCode || evento.keyCode;
  var caracter = String.fromCharCode(codigoCaracter);
 
  // Comprobar si la tecla pulsada es alguna de las teclas especiales
  // (teclas de borrado y flechas horizontales)
  var tecla_especial = false;
  for(var i in teclas_especiales) {
    if(codigoCaracter == teclas_especiales[i]) {
      tecla_especial = true;
      break;
    }
  }
 
  // Comprobar si la tecla pulsada se encuentra en los caracteres permitidos
  // o si es una tecla especial
  return permitidos.indexOf(caracter) != -1 || tecla_especial;
}	


/***********************************************/
/* Validacion de Email */

function revisarEmail(elemento){
	if (elemento.value!=""){
		var dato = elemento.value;
		var expresion = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
		if (!expresion.test(dato)){
			if(elemento.name=="correo_electronico"){
			document.getElementById("obligatorio_correo_electronico").style.color='#F9F9F9';
			document.getElementById("obligatorio_correo_electronico").style.background='#F30';
			}
			
					
		}else {
			if(elemento.name=="correo_electronico"){
			document.getElementById("obligatorio_correo_electronico").style.color='#F9F9F9';
			document.getElementById("obligatorio_correo_electronico").style.background='#F9F9F9';
			}
			
			}
}
}

function confirmar(){
	confirm('Presiona acepta si los datos vaciados son correctos');
	}