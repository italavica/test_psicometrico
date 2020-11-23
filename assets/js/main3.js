 $(document).on("submit", "form.js-register", function(event) {
	event.preventDefault();

	var _form = $(this);
	var _error = $(".js-error", _form);
	var EstadoNacimiento= $("#estado option:selected").text();
	var MunicipioNacimiento= $("#municipio option:selected").text();
	var EstadoResidencia= $("#estado_r option:selected").text();
	var MunicipioResidencia= $("#municipio_r option:selected").text();


	var dataObj = {

		apellidoPaterno: $("input#ap",_form).val(),
		apellidoMaterno: $("input#am",_form).val(),
		nombres:$("input#nombres",_form).val(),
		FechaNacimiento: $("input[type='date']", _form).val(),
		EstadoNacimiento: EstadoNacimiento,
		MunicipioNacimiento: MunicipioNacimiento,
		sexo:$("select#sexo",_form).val(),
		edoCivil:$("select#edo-civil",_form).val(),
		EstadoResidencia: EstadoResidencia,
		MunicipioResidencia: MunicipioResidencia,
		domicilioCalle:$("input#domicilio_calle",_form).val(),
		domicilioNumero:$("input#domicilio_numero",_form).val(),
		domicilioColonia:$("input#domicilio_colonia",_form).val(),
		domicilioCP:$("input#domicilio_cp",_form).val(),
		gradoEstudios:$("input#grado_estudios",_form).val(),
		ocupacion:$("input#ocupacion",_form).val(),
		celular:$("input#celular",_form).val(),
		email: $("input[type='email']", _form).val()
		
	};



	//console.log(dataObj);

	/* if(dataObj.email.length < 6) {
		_error
			.text("Please enter a valid email address")
			.show();
		return false;
	} 
*/
	// Assuming the code gets this far, we can start the ajax process
	_error.hide();

	$.ajax({
		type: 'POST',
		url: '/examen_psicometrico/ajax/reg.php',
		data: dataObj,
		dataType: 'json',
		async: true,
		success: function(output){
			alert(output);
		}
	})
	.done(function ajaxDone(data) {
		// Whatever data is 
		console.log(data);
		if(data.redirect !== undefined) {
		window.location = data.redirect;
		}

	})
	.fail(function ajaxFailed(e) {
		// This failed 
		console.log(e);
	})
	.always(function ajaxAlwaysDoThis(data) {
		// Always do
		console.log('Always');
	})

	return false;

	})


