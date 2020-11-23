$(document).on("submit", "form.js-barsit1", function(event) {
	event.preventDefault();

	var _form = $(this);
	var _error = $(".js-error", _form);

	var datObj = {


		p1:$("select#p1",_form).val(),
		p2:$("select#p2",_form).val(),
		p3:$("select#p3",_form).val(),
		p4:$("select#p4",_form).val(),
		p5:$("input#p5",_form).val(),
		p6:$("input#p6",_form).val(),
		p7:$("select#p7",_form).val(),
		p8:$("select#p8",_form).val(),
		p9:$("select#p9",_form).val(),
		p10:$("select#p10",_form).val(),
		p11:$("input#p11",_form).val(),
		p12:$("input#p12",_form).val(),
		p13:$("select#p13",_form).val(),
		p14:$("select#p14",_form).val(),
		p15:$("select#p15",_form).val(),
		p16:$("select#p16",_form).val(),
		p17:$("input#p17",_form).val(),
		p18:$("input#p18",_form).val(),
		p19:$("select#p19",_form).val(),
		p20:$("select#p20",_form).val(),
		p21:$("select#p21",_form).val(),
		p22:$("select#p22",_form).val(),
		p23:$("input#p23",_form).val(),
		p24:$("input#p24",_form).val(),
		p25:$("select#p25",_form).val(),
		p26:$("select#p26",_form).val(),
		p27:$("select#p27",_form).val(),
		p28:$("select#p28",_form).val(),
		p29:$("input#p29",_form).val(),
		p30:$("input#p30",_form).val(),
		p31:$("select#p31",_form).val(),
		p32:$("select#p32",_form).val(),
		p33:$("select#p33",_form).val(),
		p34:$("select#p34",_form).val(),
		p35:$("input#p35",_form).val(),
		p36:$("input#p36",_form).val(),
		p37:$("select#p37",_form).val(),
		p38:$("select#p38",_form).val(),
		p39:$("select#p39",_form).val(),
		p40:$("select#p40",_form).val(),
		p41:$("input#p41",_form).val(),
		p42:$("input#p42",_form).val(),
		p43:$("select#p43",_form).val(),
		p44:$("select#p44",_form).val(),
		p45:$("select#p45",_form).val(),
		p46:$("select#p46",_form).val(),
		p47:$("input#p47",_form).val(),
		p48:$("input#p48",_form).val(),		
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
		url: '/examen_psicometrico/ajax/barsit1_2.php',
		data: datObj,
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


