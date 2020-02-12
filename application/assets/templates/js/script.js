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
	
	$("#insertar").click(function(e){
		e.preventDefault(); 
		var tituloi=$("#titulo").value;
		var textoi=$("#area");
		var img1i=$("#img1");
		var img2i=$("#img2");
		var foto1=img1i[0].files;
		var foto2=img2i[0].files;

		if (foto1.length > 0 && foto2.length > 0) {
			var foto1i=foto1[0];
			var foto2i=foto2[0];
			 var lector = new FileReader();
			 let formData=new FormData();
			 formData.append('titulo',tituloi);
			 formData.append('area',textoi);
			 formData.append('foto1',foto1i);
			 formData.append('foto2',foto2i);
			 
			 $.ajax(
				 {
					 url:"/formulario/insertar",
					 data:formData,
					 type:'POST',
					 contentType: false,
					 processData: false,
					 success: function(resultados) {
						console.log("Petición terminada. Resultados", resultados);
						let d = document.getElementById('ajx')
						d.innerHTML = resultados
					  }

				 }
			 );

		}


		
		
		
	});

	
});

