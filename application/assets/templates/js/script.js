$(document).ready(function() {
	$(function() {
		$("#datetimepicker1").datetimepicker();
	});

	$(document).on('change', 'input[id=img1]', function(e) {
		//alert("funciona");
	  // Obtenemos la ruta temporal mediante el evento
	  var TmpPath = URL.createObjectURL(e.target.files[0]);
	  // Mostramos la ruta temporal
	 $('#span1').html(TmpPath);
	  $('#send_img').attr('src', TmpPath);
	});
	
	//Manda la imagen seleccionada 2 a send img 2
	$(document).on('change', 'input[id=img2]', function(e) {
		
	  // Obtenemos la ruta temporal mediante el evento
	  var TmpPath = URL.createObjectURL(e.target.files[0]);
	  // Mostramos la ruta temporal
	 $('#span2').html(TmpPath);
	  $('#send_img2').attr('src', TmpPath);
	});
	
	$("#insertar").click(function(){
		var tituloi=$("#titulo").val();
		var textoi=$("#area").val();
		var img1i=$("#send_img").val();
		var img2i=$("#send_img2").val();
		
		console.log
		
	});

	
});

