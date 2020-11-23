 $(document).on("submit", "form.js-register", function(event) {
	event.preventDefault();


		var _form = $(this);
		var _error = $(".js-error", _form);
	




		var EstadoNacimiento = $("#estado option:selected").text()

		
       
		$.ajax({
			method:"POST",
			url:"/examen_psicometrico/ajax/reg_prueba.php",
			data:{EstadoNacimiento:EstadoNacimiento},
			dataType:"json",
			
		})
	.done(function ajaxDone(data) {
		// Whatever data is 
		console.log(data);
		if(data.redirect !== undefined) {
		window.location = data.redirect;
		}
		alert(estadoN);
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





