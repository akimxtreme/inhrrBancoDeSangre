// JavaScript Document

function entroEnFoco (elemento) {
	elemento.className = 'enfoco';
	}
	
function salioDeFoco (elemento) {
	elemento.className = 'contenedor_a';
	}
	
function revisarObligatorio (elemento) {
	if (elemento.name=="bs_nombre") {
			if (elemento.value==""){
			elemento.className='error';
			elemento.value="Campo Obligatorio...";
			}
		}
	
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


function revisarEmail(elemento){
	if (elemento.value!="")
		var dato = elemento.value;
		var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/;
		if (!expresion.test(dato)){
			elemento.className='error';
			
			}else {
				elemento.className='contenedor_a';
				}
	}


function entroEnFoco_textarea (elemento) {
	elemento.className = 'text_area_enfoco';
	}
	
function salioDeFoco_textarea (elemento) {
	elemento.className = 'text_area';
	}

function entroEnFoco_otros (elemento) {
	elemento.className = 'otros_enfoco';
	}
	
function salioDeFoco_otros (elemento) {
	elemento.className = 'otros';
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


/**************** Funcion para activar casillas de la opciones "otras" ********/
function activar(){
	var contenedor = document.getElementById("sector_otros");
	contenedor.style.background="#FFF";
	contenedor.disabled=="";
	}
	
function desactivar(){
	var contenedor = document.getElementById("sector_otros");
	contenedor.style.background="#CCC";
	contenedor.disabled=="disabled";
	}