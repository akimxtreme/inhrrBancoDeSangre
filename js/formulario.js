// JavaScript Document

function entroEnFoco (elemento) {
	elemento.className = 'bs_2';
	
	}
	
function salioDeFoco (elemento) {
	elemento.className = 'bs';
	}
	
function visible(elemento){
	if(elemento.name=="Otros"){
		document.getElementById("bs_otros").style.visibility='visible';
		document.getElementById("obligatorio_sector_otros").style.visibility='visible';
		}if(elemento.value=="otros_situacion"){
		document.getElementById("situacion_otros").style.visibility='visible';
		}if(elemento.value=="inmueble_otros"){
		document.getElementById("inmueble_otros").style.visibility='visible';
		}if(elemento.name=="es_tipo_situacion"){
		document.getElementById("es_tipo_situacion").style.visibility='visible';
		}if(elemento.name=="es_inmueble"){
		document.getElementById("es_inmueble").style.visibility='visible';
		}if(elemento.value=="si"){
		document.getElementById("pregunta").style.visibility='visible';
		document.getElementById("no_especifique").style.visibility="collapse";
		}
	}
function no_visible(elemento){
	if(elemento.name=="sector"){
	document.getElementById("bs_otros").style.visibility="collapse";
	}if(elemento.name=="tipo_situacion"){
	document.getElementById("situacion_otros").style.visibility="collapse";
	}if(elemento.name=="inmueble"){
	document.getElementById("inmueble_otros").style.visibility="collapse";
	}if(elemento.name=="es_tipo_situacion"){
	document.getElementById("es_tipo_situacion").style.visibility="collapse";
	}if(elemento.name=="es_inmueble"){
	document.getElementById("es_inmueble").style.visibility="collapse";
	}if(elemento.value=="no"){
	document.getElementById("pregunta").style.visibility="collapse";
	document.getElementById("no_especifique").style.visibility="visible";
	}
	
		
}
function revisarObligatorio (elemento) {
	/*date*/
	if(elemento.name=="date"){
		if(elemento.value==""){
			document.getElementById("obligatorio_date").style.color='#F9F9F9';
			document.getElementById("obligatorio_date").style.background='#F30';
			}else {
				document.getElementById("obligatorio_date").style.color='#F9F9F9';
			document.getElementById("obligatorio_date").style.background='#F9F9F9';
				}
			}
/* Datos del Banco de Sangre */
	
	/*sector_otros*/
	if(elemento.name=="sector_otros"){
		if(elemento.value==""){
			document.getElementById("obligatorio_sector_otros").style.color='#F9F9F9';
			document.getElementById("obligatorio_sector_otros").style.background='#F30';
			}else {
				document.getElementById("obligatorio_sector_otros").style.color='#F9F9F9';
			document.getElementById("obligatorio_sector_otros").style.background='#F9F9F9';
				}
			}

	/*direccion*/
		/*Estado*/
	if(elemento.name=="procedencia"){
		if(elemento.value=="" || elemento.value=="Seleccione..."){
			document.getElementById("obligatorio_procedencia").style.color='#F9F9F9';
			document.getElementById("obligatorio_procedencia").style.background='#F30';
			}else {
				document.getElementById("obligatorio_procedencia").style.color='#F9F9F9';
			document.getElementById("obligatorio_procedencia").style.background='#F9F9F9';
				}
			}
		/*Municipio*/
	if(elemento.name=="ls_producto"){
		if(elemento.value=="" || elemento.value=="Seleccione..." || elemento.value=="No hay ciudad"){
			document.getElementById("obligatorio_municipio").style.color='#F9F9F9';
			document.getElementById("obligatorio_municipio").style.background='#F30';
			}else {
				document.getElementById("obligatorio_municipio").style.color='#F9F9F9';
			document.getElementById("obligatorio_municipio").style.background='#F9F9F9';
				}
			}
	/*ciudad*/
	if(elemento.name=="ciudad"){
		if(elemento.value=="" || elemento.value=="Seleccione..." || elemento.value=="No hay ciudad"){
			document.getElementById("obligatorio_ciudad").style.color='#F9F9F9';
			document.getElementById("obligatorio_ciudad").style.background='#F30';
			}else {
				document.getElementById("obligatorio_ciudad").style.color='#F9F9F9';
			document.getElementById("obligatorio_ciudad").style.background='#F9F9F9';
				}
			}
	/*detalles*/
	if(elemento.name=="detalles"){
		if(elemento.value=="" || elemento.value=="Seleccione..." || elemento.value=="No hay ciudad"){
			document.getElementById("obligatorio_detalles").style.color='#F9F9F9';
			document.getElementById("obligatorio_detalles").style.background='#F30';
			}else {
				document.getElementById("obligatorio_detalles").style.color='#F9F9F9';
			document.getElementById("obligatorio_detalles").style.background='#F9F9F9';
				}
			}
	if(elemento.name=="direccion"){
		if(elemento.value==""){
			document.getElementById("obligatorio_direccion").style.color='#F9F9F9';
			document.getElementById("obligatorio_direccion").style.background='#F30';
			}else {
				document.getElementById("obligatorio_direccion").style.color='#F9F9F9';
			document.getElementById("obligatorio_direccion").style.background='#F9F9F9';
				}
			}
	/*rif*/
	if(elemento.name=="rif"){
		if(elemento.value==""){
			document.getElementById("obligatorio_rif").style.color='#F9F9F9';
			document.getElementById("obligatorio_rif").style.background='#F30';
			}else {
				document.getElementById("obligatorio_rif").style.color='#F9F9F9';
			document.getElementById("obligatorio_rif").style.background='#F9F9F9';
				}
			}
	/*nit*/
	if(elemento.name=="nit"){
		if(elemento.value==""){
			document.getElementById("obligatorio_nit").style.color='#F9F9F9';
			document.getElementById("obligatorio_nit").style.background='#F30';
			}else {
				document.getElementById("obligatorio_nit").style.color='#F9F9F9';
			document.getElementById("obligatorio_nit").style.background='#F9F9F9';
				}
			}
	/*telefono*/
	if(elemento.name=="telefono"){
		if(elemento.value==""){
			document.getElementById("obligatorio_telefono").style.color='#F9F9F9';
			document.getElementById("obligatorio_telefono").style.background='#F30';
			}else {
				document.getElementById("obligatorio_telefono").style.color='#F9F9F9';
			document.getElementById("obligatorio_telefono").style.background='#F9F9F9';
				}
			}
	/*telefono_2*/
	if(elemento.name=="telefono_2"){
		if(elemento.value==""){
			document.getElementById("obligatorio_telefono_2").style.color='#F9F9F9';
			document.getElementById("obligatorio_telefono_2").style.background='#F9F9F9';
			}else {
				document.getElementById("obligatorio_telefono_2").style.color='#F9F9F9';
			document.getElementById("obligatorio_telefono_2").style.background='#F9F9F9';
				}
			}
	/*Fax*/
	if(elemento.name=="fax"){
		if(elemento.value==""){
			document.getElementById("obligatorio_fax").style.color='#F9F9F9';
			document.getElementById("obligatorio_fax").style.background='#F9F9F9';
			}else {
				document.getElementById("obligatorio_fax").style.color='#F9F9F9';
			document.getElementById("obligatorio_fax").style.background='#F9F9F9';
				}
			}
	/*correo_electronico*/
	
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
	/*tipo_situacion_otros*/
	if(elemento.name=="tipo_situacion_otros"){
		if(elemento.value==""){
			document.getElementById("obligatorio_institucion_otros").style.color='#F9F9F9';
			document.getElementById("obligatorio_institucion_otros").style.background='#F30';
			}else {
				document.getElementById("obligatorio_institucion_otros").style.color='#F9F9F9';
			document.getElementById("obligatorio_institucion_otros").style.background='#F9F9F9';
				}
			}
	/*tipo_inmueble_otros*/
	if(elemento.name=="tipo_inmueble_otros"){
		if(elemento.value==""){
			document.getElementById("obligatorio_inmueble_otros").style.color='#F9F9F9';
			document.getElementById("obligatorio_inmueble_otros").style.background='#F30';
			}else {
				document.getElementById("obligatorio_inmueble_otros").style.color='#F9F9F9';
			document.getElementById("obligatorio_inmueble_otros").style.background='#F9F9F9';
				}
			}
/* Datos del Establecimiento Médico Asistencial donde funciona el Banco de Sangre */
	/*es_razon_social*/
	if(elemento.name=="es_razon_social"){
		if(elemento.value==""){
			document.getElementById("obligatorio_es_razon_social").style.color='#F9F9F9';
			document.getElementById("obligatorio_es_razon_social").style.background='#F9F9F9';
			}else {
				document.getElementById("obligatorio_es_razon_social").style.color='#F9F9F9';
			document.getElementById("obligatorio_es_razon_social").style.background='#F9F9F9';
				}
			}
	/*es_registro_sanitario*/
	if(elemento.name=="es_registro_sanitario"){
		if(elemento.value==""){
			document.getElementById("obligatorio_es_registro_sanitario").style.color='#F9F9F9';
			document.getElementById("obligatorio_es_registro_sanitario").style.background='#F9F9F9';
			}else {
				document.getElementById("obligatorio_es_registro_sanitario").style.color='#F9F9F9';
			document.getElementById("obligatorio_es_registro_sanitario").style.background='#F9F9F9';
				}
			}
	/*es_rif*/
	if(elemento.name=="es_rif"){
		if(elemento.value==""){
			document.getElementById("obligatorio_es_rif").style.color='#F9F9F9';
			document.getElementById("obligatorio_es_rif").style.background='#F30';
			}else {
				document.getElementById("obligatorio_es_rif").style.color='#F9F9F9';
			document.getElementById("obligatorio_es_rif").style.background='#F9F9F9';
				}
			}
	/*es_nit*/
	if(elemento.name=="es_nit"){
		if(elemento.value==""){
			document.getElementById("obligatorio_es_nit").style.color='#F9F9F9';
			document.getElementById("obligatorio_es_nit").style.background='#F30';
			}else {
				document.getElementById("obligatorio_es_nit").style.color='#F9F9F9';
			document.getElementById("obligatorio_es_nit").style.background='#F9F9F9';
				}
			}
	/*es_telefono*/
	if(elemento.name=="es_telefono"){
		if(elemento.value==""){
			document.getElementById("obligatorio_es_telefono").style.color='#F9F9F9';
			document.getElementById("obligatorio_es_telefono").style.background='#F30';
			}else {
				document.getElementById("obligatorio_es_telefono").style.color='#F9F9F9';
			document.getElementById("obligatorio_es_telefono").style.background='#F9F9F9';
				}
			}
	/*es_fax*/
	if(elemento.name=="es_fax"){
		if(elemento.value==""){
			document.getElementById("obligatorio_es_fax").style.color='#F9F9F9';
			document.getElementById("obligatorio_es_fax").style.background='#F9F9F9';
			}else {
				document.getElementById("obligatorio_es_fax").style.color='#F9F9F9';
			document.getElementById("obligatorio_es_fax").style.background='#F9F9F9';
				}
			}
	/*es_pagina_web*/
	if(elemento.name=="es_pagina_web"){
		if(elemento.value==""){
			document.getElementById("obligatorio_es_pagina_web").style.color='#F9F9F9';
			document.getElementById("obligatorio_es_pagina_web").style.background='#F9F9F9';
			}else {
				document.getElementById("obligatorio_es_pagina_web").style.color='#F9F9F9';
			document.getElementById("obligatorio_es_pagina_web").style.background='#F9F9F9';
				}
			}
	/* es_tipo_situacion_otros */
	if(elemento.name=="es_tipo_situacion_otros"){
		if(elemento.value==""){
			document.getElementById("obligatorio_institucion_otros_es").style.color='#F9F9F9';
			document.getElementById("obligatorio_institucion_otros_es").style.background='#F30';
			}else {
				document.getElementById("obligatorio_institucion_otros_es").style.color='#F9F9F9';
			document.getElementById("obligatorio_institucion_otros_es").style.background='#F9F9F9';
				}
			}
	/* es_tipo_situacion_otros */
	if(elemento.name=="es_tipo_inmueble_otros"){
		if(elemento.value==""){
			document.getElementById("obligatorio_inmueble_es_otros").style.color='#F9F9F9';
			document.getElementById("obligatorio_inmueble_es_otros").style.background='#F30';
			}else {
				document.getElementById("obligatorio_inmueble_es_otros").style.color='#F9F9F9';
			document.getElementById("obligatorio_inmueble_es_otros").style.background='#F9F9F9';
				}
			}
	
/**********   Datos del Responsable   **********/
	/*Responsable del Establecimiento Médico Asistencial (Director Médico)*/

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
			document.getElementById("obligatorio_rs_fax").style.background='#F9F9F9';
			}else {
				document.getElementById("obligatorio_rs_fax").style.color='#F9F9F9';
			document.getElementById("obligatorio_rs_fax").style.background='#F9F9F9';
				}
			}
	/*rs_cedula*/
	if(elemento.name=="rs_cedula"){
		if((elemento.value=="") ||(elemento.value=="V-") ||(elemento.value=="E-")){
			document.getElementById("obligatorio_rs_cedula").style.color='#F9F9F9';
			document.getElementById("obligatorio_rs_cedula").style.background='#F30';
			}else {
				document.getElementById("obligatorio_rs_cedula").style.color='#F9F9F9';
			document.getElementById("obligatorio_rs_cedula").style.background='#F9F9F9';
				}
			}
	/*Responsable del Banco de Sangre y Unidades Transfuncionales (Director Médico)*/
	
	
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
			document.getElementById("obligatorio_dm_fax").style.background='#F9F9F9';
			}else {
				document.getElementById("obligatorio_dm_fax").style.color='#F9F9F9';
			document.getElementById("obligatorio_dm_fax").style.background='#F9F9F9';
				}
			}
	/*dm_cedula*/
	if(elemento.name=="dm_cedula"){
		if((elemento.value=="") ||(elemento.value=="V-") ||(elemento.value=="E-")){
			document.getElementById("obligatorio_dm_cedula").style.color='#F9F9F9';
			document.getElementById("obligatorio_dm_cedula").style.background='#F30';
			}else {
				document.getElementById("obligatorio_dm_cedula").style.color='#F9F9F9';
			document.getElementById("obligatorio_dm_cedula").style.background='#F9F9F9';
				}
			}
	/*Responsable del Banco de Sangre y Unidades Transfuncionales (Coordinador)*/
			
	
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
			document.getElementById("obligatorio_cr_fax").style.background='#F9F9F9';
			}else {
				document.getElementById("obligatorio_cr_fax").style.color='#F9F9F9';
			document.getElementById("obligatorio_cr_fax").style.background='#F9F9F9';
				}
			}
	/*cr_cedula*/
	if(elemento.name=="cr_cedula"){
		if((elemento.value=="") ||(elemento.value=="V-") ||(elemento.value=="E-")){
			document.getElementById("obligatorio_cr_cedula").style.color='#F9F9F9';
			document.getElementById("obligatorio_cr_cedula").style.background='#F30';
			}else {
				document.getElementById("obligatorio_cr_cedula").style.color='#F9F9F9';
			document.getElementById("obligatorio_cr_cedula").style.background='#F9F9F9';
				}
			}
/*****************************Ingreso Usuario***********************************/
	
	/*usuario*/
	if(elemento.name=="usuario"){
		if(elemento.value==""){
			document.getElementById("obligatorio_usuario").style.color='#F9F9F9';
			document.getElementById("obligatorio_usuario").style.background='#F30';
			}else {
				document.getElementById("obligatorio_usuario").style.color='#F9F9F9';
			document.getElementById("obligatorio_usuario").style.background='#F9F9F9';
				}
			}
	
	/*contrasenia*/
	if(elemento.name=="contrasenia"){
		if(elemento.value==""){
			document.getElementById("obligatorio_contrasenia").style.color='#F9F9F9';
			document.getElementById("obligatorio_contrasenia").style.background='#F30';
			}else {
				document.getElementById("obligatorio_contrasenia").style.color='#F9F9F9';
			document.getElementById("obligatorio_contrasenia").style.background='#F9F9F9';
				}
			}
/*****************************Formulario Pedir Cita ***********************************/
/*pd_nombre*/
	if(elemento.name=="pd_nombre"){
		if(elemento.value==""){
			document.getElementById("obligatorio_pd_nombre").style.color='#F9F9F9';
			document.getElementById("obligatorio_pd_nombre").style.background='#F30';
			}else {
				document.getElementById("obligatorio_pd_nombre").style.color='#F9F9F9';
			document.getElementById("obligatorio_pd_nombre").style.background='#F9F9F9';
				}
			}
/*pd_apellidos*/
	if(elemento.name=="pd_apellidos"){
		if(elemento.value==""){
			document.getElementById("obligatorio_pd_apellidos").style.color='#F9F9F9';
			document.getElementById("obligatorio_pd_apellidos").style.background='#F30';
			}else {
				document.getElementById("obligatorio_pd_apellidos").style.color='#F9F9F9';
			document.getElementById("obligatorio_pd_apellidos").style.background='#F9F9F9';
				}
			}
/*pd_cedula*/
	if(elemento.name=="pd_cedula"){
		if((elemento.value=="") ||(elemento.value=="V-") ||(elemento.value=="E-")){
			document.getElementById("obligatorio_pd_cedula").style.color='#F9F9F9';
			document.getElementById("obligatorio_pd_cedula").style.background='#F30';
			}else {
				document.getElementById("obligatorio_pd_cedula").style.color='#F9F9F9';
			document.getElementById("obligatorio_pd_cedula").style.background='#F9F9F9';
				}
			}

/*pd_usuario*/
	if(elemento.name=="pd_usuario"){
		if(elemento.value==""){
			document.getElementById("obligatorio_pd_usuario").style.color='#F9F9F9';
			document.getElementById("obligatorio_pd_usuario").style.background='#F30';
			}else {
				document.getElementById("obligatorio_pd_usuario").style.color='#F9F9F9';
			document.getElementById("obligatorio_pd_usuario").style.background='#F9F9F9';
				}
			}
/*pd_telefono*/
	if(elemento.name=="pd_telefono"){
		if(elemento.value==""){
			document.getElementById("obligatorio_pd_telefono").style.color='#F9F9F9';
			document.getElementById("obligatorio_pd_telefono").style.background='#F30';
			}else {
				document.getElementById("obligatorio_pd_telefono").style.color='#F9F9F9';
			document.getElementById("obligatorio_pd_telefono").style.background='#F9F9F9';
				}
			}
/*pd_nombre_bs*/
	if(elemento.name=="pd_nombre_bs"){
		if(elemento.value==""){
			document.getElementById("obligatorio_pd_nombre_bs").style.color='#F9F9F9';
			document.getElementById("obligatorio_pd_nombre_bs").style.background='#F30';
			}else {
				document.getElementById("obligatorio_pd_nombre_bs").style.color='#F9F9F9';
			document.getElementById("obligatorio_pd_nombre_bs").style.background='#F9F9F9';
				}
			}
/*pd_rif*/
	if(elemento.name=="pd_rif"){
		if(elemento.value==""){
			document.getElementById("obligatorio_pd_rif").style.color='#666';
			document.getElementById("obligatorio_pd_rif").style.background='#9CF';
			}else {
				document.getElementById("obligatorio_pd_rif").style.color='#F9F9F9';
			document.getElementById("obligatorio_pd_rif").style.background='#F9F9F9';
				}
			}
/*pd_rif*/
	if(elemento.name=="pd_nit"){
		if(elemento.value==""){
			document.getElementById("obligatorio_pd_nit").style.color='#666';
			document.getElementById("obligatorio_pd_nit").style.background='#9CF';
			}else {
				document.getElementById("obligatorio_pd_nit").style.color='#F9F9F9';
			document.getElementById("obligatorio_pd_nit").style.background='#F9F9F9';
				}
			}
/*number*/
	if(elemento.name=="number"){
		if(elemento.value==""){
			document.getElementById("pd_number").style.color='#F9F9F9';
			document.getElementById("pd_number").style.background='#F30';
			}else {
				document.getElementById("pd_number").style.color='#F9F9F9';
			document.getElementById("pd_number").style.background='#F9F9F9';
				}
			}

}





function validar_usuario() {
	validado=true;
	if(document.getElementById('usuario').value=="" ||document.getElementById("contrasenia").value==""){
		validado = false;
		}if (!validado){
			alert ("Ingresa tu Usuario y/o Contrasena");
			}
	return validado;
}


function revisarNumerico(elemento){
	if (elemento.value!=""){
		var dato = elemento.value;
		if (isNaN(dato)) {
			elemento.className='error';
			elemento.value="Inserte Solo Numeros";
			}
		}
	}

/* Fechas*/
function fechas(desde, hasta) {
	for (var i=0; i<hasta; i++) {
		document.write("<option>"+ parseInt(i+desde) + "</option>");
		}
	}
	
function meses() {
	var mes = new Array ();
	mes.push("Enero"); mes.push("Febrero"); mes.push("Marzo"); mes.push("Abril"); mes.push("Mayo"); mes.push("Junio"); mes.push("Julio"); mes.push("Agosto"); mes.push("Septiembre"); mes.push("Octubre"); mes.push("Noviembre"); mes.push("Diciembre");
	for (i=0; i<mes.length; i++) {
		document.write("<option>"+ mes[i] + "</option>");}
		}

/**************** Cedula Venezolano Extranjero ********/
function nacionalidad(elemento){
	if(elemento.id=="rs_venezolano"){
		document.getElementById("rs_nacionalidad").value='V-';
		}if(elemento.id=="rs_extranjero"){
		document.getElementById("rs_nacionalidad").value='E-';
		}
	if(elemento.id=="dm_venezolano"){
		document.getElementById("dm_nacionalidad").value='V-';
		}if(elemento.id=="dm_extranjero"){
		document.getElementById("dm_nacionalidad").value='E-';
		}
	if(elemento.id=="cr_venezolano"){
		document.getElementById("cr_nacionalidad").value='V-';
		}if(elemento.id=="cr_extranjero"){
		document.getElementById("cr_nacionalidad").value='E-';
		}
	if(elemento.id=="pd_venezolano"){
		document.getElementById("pd_cedula").value='V-';
		}if(elemento.id=="pd_extranjero"){
		document.getElementById("pd_cedula").value='E-';
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
	if (elemento.value!="")
		var dato = elemento.value;
		var expresion = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
		if (!expresion.test(dato)){
			if(elemento.name=="correo_electronico"){
			document.getElementById("obligatorio_correo_electronico").style.color='#F9F9F9';
			document.getElementById("obligatorio_correo_electronico").style.background='#F30';
			}
			if(elemento.name=="correo_electronico_2"){
			document.getElementById("obligatorio_correo_electronico_2").style.color='#F9F9F9';
			document.getElementById("obligatorio_correo_electronico_2").style.background='#F9F9F9';
			}
			if(elemento.name=="es_correo_electronico"){
			document.getElementById("es_correo_electronico").style.color='#F9F9F9';
			document.getElementById("es_correo_electronico").style.background='#F30';
			}
			if(elemento.name=="rs_correo_electronico"){
			document.getElementById("rs_correo_electronico").style.color='#F9F9F9';
			document.getElementById("rs_correo_electronico").style.background='#F30';
			}
			if(elemento.name=="rs_tlf_local"){
			document.getElementById("rs_tlf_local").style.color='#F9F9F9';
			document.getElementById("rs_tlf_local").style.background='#F30';
			}
			if(elemento.name=="dm_correo_electronico"){
			document.getElementById("dm_correo_electronico").style.color='#F9F9F9';
			document.getElementById("dm_correo_electronico").style.background='#F30';
			}
			if(elemento.name=="cr_correo_electronico"){
			document.getElementById("cr_correo_cr").style.color='#F9F9F9';
			document.getElementById("cr_correo_cr").style.background='#F30';
			
			}
			if(elemento.name=="pd_correo"){
			document.getElementById("pd_correo_obligatorio").style.color='#F9F9F9';
			document.getElementById("pd_correo_obligatorio").style.background='#F30';
			}
			
		}else {
			if(elemento.name=="correo_electronico"){
			document.getElementById("obligatorio_correo_electronico").style.color='#F9F9F9';
			document.getElementById("obligatorio_correo_electronico").style.background='#F9F9F9';
			}
			if(elemento.name=="correo_electronico_2"){
			document.getElementById("obligatorio_correo_electronico_2").style.color='#F9F9F9';
			document.getElementById("obligatorio_correo_electronico_2").style.background='#F9F9F9';
			}
			if(elemento.name=="es_correo_electronico"){
			document.getElementById("es_correo_electronico").style.color='#F9F9F9';
			document.getElementById("es_correo_electronico").style.background='#F9F9F9';
			}
			if(elemento.name=="rs_correo_electronico"){
			document.getElementById("rs_correo_electronico").style.color='#F9F9F9';
			document.getElementById("rs_correo_electronico").style.background='#F9F9F9';
			}
			if(elemento.name=="rs_tlf_local"){
			document.getElementById("rs_tlf_local").style.color='#F9F9F9';
			document.getElementById("rs_tlf_local").style.background='#F9F9F9';
			}
			if(elemento.name=="dm_correo_electronico"){
			document.getElementById("dm_correo_electronico").style.color='#F9F9F9';
			document.getElementById("dm_correo_electronico").style.background='#F9F9F9';
			}
			if(elemento.name=="cr_correo_electronico"){
			document.getElementById("cr_correo_cr").style.color='#F9F9F9';
			document.getElementById("cr_correo_cr").style.background='#F9F9F9';
			}
			if(elemento.name=="pd_correo"){
			document.getElementById("pd_correo_obligatorio").style.color='#F9F9F9';
			document.getElementById("pd_correo_obligatorio").style.background='#F9F9F9';
			}
			}
}
 function sector_pertenece() {
	 /* Datos del Banco de Sangre */
	 if (document.getElementById("mpps").checked ) {
		 document.getElementById("obligatorio_sector").style.color='#F9F9F9';
		document.getElementById("obligatorio_sector").style.background='#F9F9F9';
		document.getElementById("obligatorio_sector_otros").style.color='#F9F9F9';
		document.getElementById("obligatorio_sector_otros").style.background='#F9F9F9';
	 }
	  if (document.getElementById("sanidad_militar").checked ) {
		 document.getElementById("obligatorio_sector").style.color='#F9F9F9';
		document.getElementById("obligatorio_sector").style.background='#F9F9F9';
		document.getElementById("obligatorio_sector_otros").style.color='#F9F9F9';
		document.getElementById("obligatorio_sector_otros").style.background='#F9F9F9';
	 }
	  if (document.getElementById("ivss").checked ) {
		 document.getElementById("obligatorio_sector").style.color='#F9F9F9';
		document.getElementById("obligatorio_sector").style.background='#F9F9F9';
		document.getElementById("obligatorio_sector_otros").style.color='#F9F9F9';
		document.getElementById("obligatorio_sector_otros").style.background='#F9F9F9';
	 }
	  if (document.getElementById("otros").checked ) {
		 document.getElementById("obligatorio_sector").style.color='#F9F9F9';
		document.getElementById("obligatorio_sector").style.background='#F9F9F9'
		document.getElementById("obligatorio_sector_otros").style.color='#666';
		document.getElementById("obligatorio_sector_otros").style.background='#9CF';
		document.getElementById("bs_otros").style.visibility='visible';
		document.getElementById("obligatorio_sector_otros").style.visibility='visible';
	 }
	 if (document.getElementById("publico").checked ) {
		 document.getElementById("obligatorio_institucion").style.color='#F9F9F9';
		document.getElementById("obligatorio_institucion").style.background='#F9F9F9'
		document.getElementById("obligatorio_institucion_otros").style.color='#666';
		document.getElementById("obligatorio_institucion_otros").style.background='#9CF';
		document.getElementById("obligatorio_institucion_otros").style.visibility='collapse';
		document.getElementById("situacion_otros").style.visibility='collapse';
	 }
	 if (document.getElementById("privado").checked ) {
		 document.getElementById("obligatorio_institucion").style.color='#F9F9F9';
		document.getElementById("obligatorio_institucion").style.background='#F9F9F9'
		document.getElementById("obligatorio_institucion_otros").style.color='#666';
		document.getElementById("obligatorio_institucion_otros").style.background='#9CF';
		document.getElementById("obligatorio_institucion_otros").style.visibility='collapse';
		document.getElementById("situacion_otros").style.visibility='collapse';
	 }
	 if (document.getElementById("otros_institucion").checked ) {
		 document.getElementById("obligatorio_institucion").style.color='#F9F9F9';
		document.getElementById("obligatorio_institucion").style.background='#F9F9F9'
		document.getElementById("situacion_otros").style.visibility='visible';
		document.getElementById("obligatorio_institucion_otros").style.color='#666';
		document.getElementById("obligatorio_institucion_otros").style.background='#9CF';
		document.getElementById("obligatorio_institucion_otros").style.visibility='visible';
	 }
	 if (document.getElementById("propio").checked ) {
		 document.getElementById("obligatorio_inmueble").style.color='#F9F9F9';
		document.getElementById("obligatorio_inmueble").style.background='#F9F9F9'
		document.getElementById("obligatorio_inmueble_otros").style.color='#666';
		document.getElementById("obligatorio_inmueble_otros").style.background='#9CF';
		document.getElementById("obligatorio_inmueble_otros").style.visibility='collapse';
		document.getElementById("inmueble_otros").style.visibility='collapse';
	 }
	 if (document.getElementById("alquilado").checked ) {
		 document.getElementById("obligatorio_inmueble").style.color='#F9F9F9';
		document.getElementById("obligatorio_inmueble").style.background='#F9F9F9'
		document.getElementById("obligatorio_inmueble_otros").style.color='#666';
		document.getElementById("obligatorio_inmueble_otros").style.background='#9CF';
		document.getElementById("obligatorio_inmueble_otros").style.visibility='collapse';
		document.getElementById("inmueble_otros").style.visibility='collapse';
	 }
	 if (document.getElementById("comodato").checked ) {
		 document.getElementById("obligatorio_inmueble").style.color='#F9F9F9';
		document.getElementById("obligatorio_inmueble").style.background='#F9F9F9'
		document.getElementById("obligatorio_inmueble_otros").style.color='#666';
		document.getElementById("obligatorio_inmueble_otros").style.background='#9CF';
		document.getElementById("obligatorio_inmueble_otros").style.visibility='collapse';
		document.getElementById("inmueble_otros").style.visibility='collapse';
	 }
	 if (document.getElementById("inmueble").checked ) {
		 document.getElementById("obligatorio_inmueble").style.color='#F9F9F9';
		document.getElementById("obligatorio_inmueble").style.background='#F9F9F9'
		document.getElementById("obligatorio_inmueble_otros").style.color='#666';
		document.getElementById("obligatorio_inmueble_otros").style.background='#9CF';
		document.getElementById("obligatorio_inmueble_otros").style.visibility='visible';
		document.getElementById("inmueble_otros").style.visibility='visible';
	 }
	 /* Pregunta: *¿El Banco de Sangre es dependiente de un Centro Asistencial? */
	  if (document.getElementById("dependiente_si").checked ) {
		  document.getElementById("obligatorio_dependiente").style.color='#F9F9F9';
		document.getElementById("obligatorio_dependiente").style.background='#F9F9F9';
		document.getElementById("titulo_establecimiento_asistencial").style.width='100%';
		document.getElementById("titulo_establecimiento_asistencial").style.height='auto';
		document.getElementById("titulo_establecimiento_asistencial").style.visibility='visible';
		document.getElementById("titulo_establecimiento_asistencial").style.display='';
		document.getElementById("titulo_establecimiento_asistencial").style.margin='4px 0px 0px 0px';
		document.getElementById("titulo_establecimiento_asistencial").style.padding='5px 0px 5px 0px';
		document.getElementById("establecimiento_asistencial").style.visibility='visible';
		document.getElementById("establecimiento_asistencial").style.width='100%';
		document.getElementById("establecimiento_asistencial").style.height='auto';
		document.getElementById("establecimiento_asistencial").style.display='';
		}
	if (document.getElementById("dependiente_no").checked ) {
		 document.getElementById("obligatorio_dependiente").style.color='#F9F9F9';
		document.getElementById("obligatorio_dependiente").style.background='#F9F9F9';
		/* Sección */
		document.getElementById("establecimiento_asistencial").style.visibility='hidden';
		document.getElementById("establecimiento_asistencial").style.display='none';
		document.getElementById("titulo_establecimiento_asistencial").style.width='hidden';
		document.getElementById("titulo_establecimiento_asistencial").style.display='none';
		}
	/* Datos del Establecimiento Médico Asistencial donde funciona el Banco de Sangre */
	if (document.getElementById("es_tipo_situacion_publico").checked ) {
		 document.getElementById("obligatorio_institucion_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_institucion_es").style.background='#F9F9F9'
		document.getElementById("obligatorio_institucion_otros_es").style.color='#666';
		document.getElementById("obligatorio_institucion_otros_es").style.background='#9CF';
		document.getElementById("obligatorio_institucion_otros_es").style.visibility='collapse';
		document.getElementById("es_tipo_situacion").style.visibility='collapse';
	 }
	 if (document.getElementById("es_tipo_situacion_privado").checked ) {
		 document.getElementById("obligatorio_institucion_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_institucion_es").style.background='#F9F9F9'
		document.getElementById("obligatorio_institucion_otros_es").style.color='#666';
		document.getElementById("obligatorio_institucion_otros_es").style.background='#9CF';
		document.getElementById("obligatorio_institucion_otros_es").style.visibility='collapse';
		document.getElementById("es_tipo_situacion").style.visibility='collapse';
	 }
	 if (document.getElementById("es_tipo_situacion_otros").checked ) {
		 document.getElementById("obligatorio_institucion_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_institucion_es").style.background='#F9F9F9'
		document.getElementById("es_tipo_situacion").style.visibility='visible';
		document.getElementById("obligatorio_institucion_otros_es").style.color='#666';
		document.getElementById("obligatorio_institucion_otros_es").style.background='#9CF';
		document.getElementById("obligatorio_institucion_otros_es").style.visibility='visible';
	 }
	  if (document.getElementById("es_inmueble_propio").checked ) {
			 document.getElementById("obligatorio_inmueble_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_inmueble_es").style.background='#F9F9F9'
		document.getElementById("obligatorio_inmueble_es_otros").style.color='#666';
		document.getElementById("obligatorio_inmueble_es_otros").style.background='#9CF';
		document.getElementById("obligatorio_inmueble_es_otros").style.visibility='collapse';
		document.getElementById("es_inmueble").style.visibility='collapse';
	 }
	 if (document.getElementById("es_inmueble_alquilado").checked ) {
		 document.getElementById("obligatorio_inmueble_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_inmueble_es").style.background='#F9F9F9'
		document.getElementById("obligatorio_inmueble_es_otros").style.color='#666';
		document.getElementById("obligatorio_inmueble_es_otros").style.background='#9CF';
		document.getElementById("obligatorio_inmueble_es_otros").style.visibility='collapse';
		document.getElementById("es_inmueble").style.visibility='collapse';
	 }
	 if (document.getElementById("es_inmueble_comodato").checked ) {
		document.getElementById("obligatorio_inmueble_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_inmueble_es").style.background='#F9F9F9'
		document.getElementById("obligatorio_inmueble_es_otros").style.color='#666';
		document.getElementById("obligatorio_inmueble_es_otros").style.background='#9CF';
		document.getElementById("obligatorio_inmueble_es_otros").style.visibility='collapse';
		document.getElementById("es_inmueble").style.visibility='collapse';
	 }
	 if (document.getElementById("es_inmueble_otros_es").checked ) {
			 document.getElementById("obligatorio_inmueble_es").style.color='#F9F9F9';
		document.getElementById("obligatorio_inmueble_es").style.background='#F9F9F9';
		document.getElementById("obligatorio_inmueble_es_otros").style.color='#666';
		document.getElementById("obligatorio_inmueble_es_otros").style.background='#9CF';
		document.getElementById("obligatorio_inmueble_es_otros").style.visibility='visible';
		document.getElementById("es_inmueble").style.visibility='visible';
	 }
}
 
 function ambientes() {
	   if (document.getElementById("ut_seccion_donacion").checked ) {
		document.getElementById("ut_registro_recepcion").disabled='';
		document.getElementById("ut_examen_medico").disabled='';
		document.getElementById("ut_recuperacion").disabled='';
		document.getElementById("ut_cantina").disabled='';
		document.getElementById("obligatorio_donacion").style.color='#F9F9F9';
		document.getElementById("obligatorio_donacion").style.background='#F9F9F9';
			 }else{
		 document.getElementById("ut_registro_recepcion").disabled='disabled';
		document.getElementById("ut_examen_medico").disabled='disabled';
		document.getElementById("ut_recuperacion").disabled='disabled';
		document.getElementById("ut_cantina").disabled='disabled';
		document.getElementById("obligatorio_donacion").style.color='#F9F9F9';
		document.getElementById("obligatorio_donacion").style.background='#F30';
		 }
	 }
	 
 function ambientes_2() {
	 	  if (document.getElementById("ut_seccion_procesamiento").checked ) {
		document.getElementById("obligatorio_procesamiento").style.color='#F9F9F9';
		document.getElementById("obligatorio_procesamiento").style.background='#F9F9F9';
			 }else{
		document.getElementById("obligatorio_procesamiento").style.color='#F9F9F9';
		document.getElementById("obligatorio_procesamiento").style.background='#F30';
		 }
	 }
 function ambientes_3() {
	   if (document.getElementById("ut_seccion_laboratorio").checked ) {
		document.getElementById("ut_serologia").disabled='';
		document.getElementById("ut_inmunohematologia").disabled='';
		document.getElementById("obligatorio_inmunohematologia").style.color='#F9F9F9';
		document.getElementById("obligatorio_inmunohematologia").style.background='#F9F9F9';
			 }else{
		 document.getElementById("ut_serologia").disabled='disabled';
		document.getElementById("ut_inmunohematologia").disabled='disabled';
		document.getElementById("obligatorio_inmunohematologia").style.color='#F9F9F9';
		document.getElementById("obligatorio_inmunohematologia").style.background='#F30';
		 }
	 }
 function ambientes_4() {
	if (document.getElementById("ut_seccion_conservacion_almacen").checked ) {
		document.getElementById("obligatorio_conservacion_almacen").style.color='#F9F9F9';
		document.getElementById("obligatorio_conservacion_almacen").style.background='#F9F9F9';
			 }else{
		document.getElementById("obligatorio_conservacion_almacen").style.color='#F9F9F9';
		document.getElementById("obligatorio_conservacion_almacen").style.background='#F30';
		 }
	 }
 function ambientes_5() {
		  if (document.getElementById("ut_seccion_estadisticas").checked ) {
		document.getElementById("obligatorio_seccion_estadisticas").style.color='#F9F9F9';
		document.getElementById("obligatorio_seccion_estadisticas").style.background='#F9F9F9';
			 }else{
		document.getElementById("obligatorio_seccion_estadisticas").style.color='#F9F9F9';
		document.getElementById("obligatorio_seccion_estadisticas").style.background='#F30';
		 }
	 }
function ambientes_6() {
	  if (document.getElementById("ut_seccion_secretaria").checked ) {
		document.getElementById("obligatorio_seccion_secretaria").style.color='#F9F9F9';
		document.getElementById("obligatorio_seccion_secretaria").style.background='#F9F9F9';
			 }else{
		document.getElementById("obligatorio_seccion_secretaria").style.color='#F9F9F9';
		document.getElementById("obligatorio_seccion_secretaria").style.background='#F30';
		 }
	 }
	 
function validar_2(){
	var validado=true;
	// sector
	if (!document.getElementById("mpps").checked) {
		if(!document.getElementById("sanidad_militar").checked){
			if(!document.getElementById("ivss").checked){
				if(!document.getElementById("otros").checked){
					validado = false;
					}
				}
			}
		}
	if(document.getElementById("procedencia").value=="Seleccione..."){
		validado == false;
	}
	
	if(document.getElementById("ls_producto").value=="Seleccione..." || document.getElementById("ls_producto").value=="No hay ciudad" ){
		validado == false;
		}
	if(document.getElementById("procedencia").value=="Seleccione..." & document.getElementById("ls_producto").value=="Seleccione..." ){
		validado == false;
		}
		if(validado==false){
			alert("FALTA");
			}
		if(validado==true){
			alert("EXITO");
			}
		return validado;
	}
	
	
function validar() {
	 var validado=true;
	// sector
	if (!document.getElementById("mpps").checked) {
		if(!document.getElementById("sanidad_militar").checked){
			if(!document.getElementById("ivss").checked){
				if(!document.getElementById("otros").checked){
					validado = false;
					}
				}
			}
		}
	
	if(document.getElementById("rif").value==""){
		validado = false;
		}
	if(document.getElementById("nit").value==""){
		validado = false;
		}
	if(document.getElementById("telefono").value==""){
		validado = false;
		}
	if(document.getElementById("fax").value==""){
		validado = false;
		}
	if(document.getElementById("correo_electronico").value==""){
		validado = false;
		}
	if(document.getElementById("pagina_web").value==""){
		validado = false;
		}
	
	if (!document.getElementById("publico").checked) {
		if(!document.getElementById("privado").checked){
			if(!document.getElementById("cooperativa").checked){
				if(!document.getElementById("otros_situacion").checked){
					validado = false;
					}
				}
			}
		}
	if (!document.getElementById("propio").checked) {
		if(!document.getElementById("alquilado").checked){
			if(!document.getElementById("inmueble").checked){
				validado = false;
				}
			}
		}
	
	if(document.getElementById("es_razon_social").value==""){
		validado = false;
		}
	if(document.getElementById("es_registro_sanitario").value==""){
		validado = false;
		}
	if(document.		getElementById("es_rif").value==""){
		validado = false;
		}
	if(document.getElementById("es_nit").value==""){
		validado = false;
		}
	if(document.getElementById("es_telefono").value==""){
		validado = false;
		}
	if(document.getElementById("es_fax").value==""){
		validado = false;
		}
	if(document.getElementById("es_correo").value==""){
		validado = false;
		}
	if(document.getElementById("es_pagina_web").value==""){
		validado = false;
		}
	if (!document.getElementById("es_tipo_situacion_publico").checked) {
		if(!document.getElementById("es_tipo_situacion_privado").checked){
			if(!document.getElementById("es_tipo_situacion_cooperativa").checked){
				if(!document.getElementById("es_tipo_situacion_otros").checked){
					validado = false;
					}
				}
			}
		}
	if (!document.getElementById("es_inmueble_propio").checked) {
		if(!document.getElementById("es_inmueble_alquilado").checked){
			if(!document.getElementById("es_inmueble_otros_es").checked){
				validado = false;
				}
			}
		}
	if((document.getElementById("rs_nombre").value=="") || (document.getElementById("rs_nacionalidad").value=="") || (document.getElementById("rs_profesion").value=="") || (document.getElementById("rs_expedido").value=="") || (document.getElementById("rs_especialidad").value=="") || (document.getElementById("rs_matricula").value=="") || (document.getElementById("rs_colegio").value=="") || (document.getElementById("rs_rif").value=="") || (document.getElementById("rs_correo_electronico_rs").value=="") || (document.getElementById("rs_tlf_local").value=="") || (document.getElementById("rs_tlf_movil").value=="") || (document.getElementById("rs_fax").value=="")) {
		validado = false;
		}
	if (!document.getElementById("rs_venezolano").checked) {
		if(!document.getElementById("rs_extranjero").checked){
			validado = false;
			}
		}

	if((document.getElementById("dm_nombre").value=="") || (document.getElementById("dm_nacionalidad").value=="") || (document.getElementById("dm_profesion").value=="") || (document.getElementById("dm_expedido").value=="") || (document.getElementById("dm_especialidad").value=="") || (document.getElementById("dm_matricula").value=="") || (document.getElementById("dm_colegio").value=="") || (document.getElementById("dm_rif").value=="") || (document.getElementById("dm_correo_electronico_dm").value=="") || (document.getElementById("dm_tlf_local").value=="") || (document.getElementById("dm_tlf_movil").value=="") || (document.getElementById("dm_fax").value=="")) {
		validado = false;
		}
	if (!document.getElementById("dm_venezolano").checked) {
		if(!document.getElementById("dm_extranjero").checked){
			validado = false;
			}
		}

	if((document.getElementById("cr_nombre").value=="") || (document.getElementById("cr_nacionalidad").value=="") || (document.getElementById("cr_profesion").value=="") || (document.getElementById("cr_expedido").value=="") || (document.getElementById("cr_especialidad").value=="") || (document.getElementById("cr_matricula").value=="") || (document.getElementById("cr_colegio").value=="") || (document.getElementById("cr_rif").value=="") || (document.getElementById("cr_correo_electronico_cr").value=="") || (document.getElementById("cr_tlf_local").value=="") || (document.getElementById("cr_tlf_movil").value=="") || (document.getElementById("cr_fax").value=="")) {
		validado = false;
		}
	if (!document.getElementById("cr_venezolano").checked) {
		if(!document.getElementById("cr_extranjero").checked){
			validado = false;
			}
		}
	
	if(validado == false){
		alert("Algunos Datos del Formulario no son Correctos ó Faltan llenar los Campos");
		}
	
	return validado;
	 }
	 

/**** Index ****/

function pedir_cta_visible(element){
	
	if(document.getElementById('pedir_cuenta').style.visibility=='visible'){
		document.getElementById('pedir_cuenta').style.visibility='collapse';
		}else{
	document.getElementById('pedir_cuenta').style.visibility='visible';
		}
}
/* Validación del Formulario para Solicitar una Cuenta */	
/*var validado = true;
	var expresion = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/; 
	if (!expresion.test(pd_correo)) { 
   		validado = false;
	}
	if(document.getElementById('pd_nombre').value=="" || document.getElementById('pd_apellidos').value=="" || document.getElementById("pd_telefono").value=="" ||document.getElementById("pd_nombre_bs").value=="" || document.getElementById('pd_cedula').value=="V-" || document.getElementById('pd_cedula').value=="E-" || document.getElementById('pd_cedula').value=="" || document.getElementById('number').value==""){
		validado = false;
	}
	if(!document.getElementById("pd_venezolano").checked && !document.getElementById("pd_extranjero").checked){
		validado = false;
		}
		
	var expresion = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/; 
	if (!expresion.test(pd_correo)) { 
   		validado = false;
	}
	var expresion = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
	if(expresion.test(document.getElementById('pd_correo'))){
		validado = false;
		}*/
		/*else{
		alert("Datos enviados exitosamente, recibira a traves del correo electronico la clave de ingreso al sistema de inscripcion de bancos de sangre");
	}*/
	
function global_pedir_cta(){
	var validacion = true;
	if (document.getElementById('pd_nombre').value==""){
		validacion = false;
		}
	if (document.getElementById('pd_apellidos').value==""){
		validacion = false;
		}
	if (!document.getElementById('pd_venezolano').checked  && !document.getElementById('pd_extranjero').checked){
		validacion = false;
		}
	if (document.getElementById('pd_cedula').value=="" || document.getElementById('pd_cedula').value=="V-" || document.getElementById('pd_cedula').value=="E-"){
		validacion = false;
		}
	if (document.getElementById('pd_correo').value==""){
		validacion = false;
		}
	if (document.getElementById('pd_usuario').value==""){
		validacion = false;
		}
	if (document.getElementById('pd_telefono').value==""){
		validacion = false;
		}
	if (document.getElementById('pd_nombre_bs').value==""){
		validacion = false;
		}
	if (document.getElementById('pd_rif').value==""){
		validacion = false;
		}
	if (document.getElementById('pd_nit').value==""){
		validacion = false;
		}
	if (document.getElementById('number').value==""){
		validacion = false;
		}
	/*var expresion = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
	if(!expresion.test(document.getElementById("pd_correo"))){
		validacion = false;
		}*/
	
	if (!validacion){
		alert("Algunos datos cotienen errores, verifique la informacion antes de enviar");
	}
	
	return validacion;
	}
	
	/* Fechas*/
function fechas(desde, hasta) {
	for (var i=0; i<hasta; i++) {
		document.write("<option>"+ parseInt(i+desde) + "</option>");
		}
	}
	/****** Pregunta ******/

function pregunta(elemento){
	if(elemento.value=='si'){
		document.getElementById("pregunta").style.visibility ='visible';
		document.getElementById('si').style.color="#CCC";
		}
	}
function modificar_cta(elemento){
	validado=true;
	if(document.getElementById('password').value==""){
		validado = false;
	}
	if(!document.getElementById("activar").checked & !document.getElementById("en_espera").checked & !document.getElementById("eliminar").checked){
		validado = false;
		}
		
	if (!validado){
		alert ("Algunos datos tienen errores, por favor corrijalos antes de volver a enviar");
	}
	/*else{
		alert("Datos enviados exitosamente, recibira a traves del correo electronico la clave de ingreso al sistema de inscripcion de bancos de sangre");
	}*/
	return validado;

		
	
	}
function agregar_cta_admin(elemento){
	validado=true;
	if(document.getElementById('admin_nombre').value=="" || document.getElementById('admin_apellidos').value=="" || document.getElementById('admin_apellidos').value=="" || document.getElementById('admin_correo').value=="" || document.getElementById('admin_usuario').value=="" || document.getElementById('admin_telefono').value=="" || document.getElementById('txtCampoPassword').value==""){
		validado = false;
	}
	if(!document.getElementById("estatus_1").checked & !document.getElementById("estatus_2").checked){
		validado = false;
		}
		
	if (!validado){
		alert ("Falta ingresar algunos datos");
	}
	return validado;

		
	
	}

function detalles(elemento){
	document.getElementById('1').style.background='#000';
			
}