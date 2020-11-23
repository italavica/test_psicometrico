$(document).ready(function(){
	$("#estado").on('change',function(){

		var estadoId=$(this).val();

		$.ajax({
			method:"POST",
			url:"/examen_psicometrico/ajax/ajax.php",
			data:{id:estadoId},
			dataType:"html",
			success:function(data){
				$("select#municipio").html(data);
			} 
		})


	})
})

$(document).ready(function(){
	$("#estado_r").on('change',function(){

		var estadoId=$(this).val();

		$.ajax({
			method:"POST",
			url:"/examen_psicometrico/ajax/ajax.php",
			data:{id:estadoId},
			dataType:"html",
			success:function(data){
				$("select#municipio_r").html(data);
			} 
		})


	})
})