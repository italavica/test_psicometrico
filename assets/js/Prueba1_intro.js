 $(document).on("submit", "form.js-barsit1", function(event) {
	event.preventDefault();

	var _form = $(this);
	var _error = $(".js-error", _form);






	// Assuming the code gets this far, we can start the ajax process
	_error.hide();

	$.ajax({
		type: 'POST',
		url: '/examen_psicometrico/ajax/barsit1.php',
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


