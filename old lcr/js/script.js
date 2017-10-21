$(function(){
	
	// Initialize the gallery
	$('#thumbs a').touchTouch();
	
	$(".btn-reservar").click(function(){
		var valor = $(this).attr("id");
		$("#"+valor).submit();

	});
	
	$("#form-btn").click(function(){
		document.form.submit();	
	});
	
	$("#fecha").datepicker({
		showOn: "button",
		buttonImage: "images/calendar.gif",
		buttonImageOnly: true
	});
	
	 $('.depto_galeria a').lightBox();

});
	
