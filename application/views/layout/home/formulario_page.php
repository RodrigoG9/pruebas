<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
$(document).ready(function() {
//Manda la imagen seleccionada 1 a send img1 
// Escuchamos el evento 'change' del input donde cargamos el archivo
$(document).on('change', 'input[id=img1]', function(e) {
	//alert("funciona");
  // Obtenemos la ruta temporal mediante el evento
  var TmpPath = URL.createObjectURL(e.target.files[0]);
  // Mostramos la ruta temporal
 $('span').html(TmpPath);
  $('#send_img').attr('src', TmpPath);
});

//Manda la imagen seleccionada 2 a send img 2
$(document).on('change', 'input[id=img2]', function(e) {
	
  // Obtenemos la ruta temporal mediante el evento
  var TmpPath = URL.createObjectURL(e.target.files[0]);
  // Mostramos la ruta temporal
 $('span').html(TmpPath);
  $('#send_img2').attr('src', TmpPath);
});

});
	</script>
	<title>Cima de la liberatad Reservas/CReacion Salas</title>
	<?= $styles ?>
</head>
<body class="bg-white">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand d-flex flex-column" href="/"
				>Cima de la libertad <span class="text-center">reservas</span></a
			>
			<button
				class="navbar-toggler"
				type="button"
				data-toggle="collapse"
				data-target="#navbarColor02"
				aria-controls="navbarColor02"
				aria-expanded="false"
				aria-label="Toggle navigation"
			>
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarColor02">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">SALAS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">EXPORTAR</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">INICIO</a>
					</li>
				</ul>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#" data-toggle="modal"
							><i class="fas fa-user"></i> Log-OUT</a
						>
					</li>
				</ul>
			</div>
		</nav>
	
<br>
<center>
<h1> CREACION DE SALAS <h1>
</center>
<br>
<form method="post" action="formulario/insertar">
<div class="form-group has-success">
  <label class="form-control-label" for="inputSuccess1">NOMBRE DE LA SALA</label>
  <input type="text"  class="form-control" name="titulo" placeholder="INGRESE EL NOMBRE DE LA SALA ....">
  
</div>

<div class="form-group">
      <label for="exampleTextarea">DESCRIPCION</label>
      <textarea class="form-control" name="area" rows="3" placeholder="INGRESE DESCRIPCION DE LA SALA ...."></textarea>
    </div>

	<div class="form-group">
      <label for="exampleInputFile">IMAGEN 1</label>
	  <input type="file" id="img1" class="form-control-file" name="img1" aria-describedby="fileHelp">
	  <span></span><br /><br />
	  <img width="200" alt="Imagen" id="send_img" name="send_img" />
      <small id="fileHelp" class="form-text text-muted">Ingrese la primera imagen</small>
	</div>
	
	<div class="form-group">
      <label for="exampleInputFile">IMAGEN 2</label>
      <input type="file" class="form-control-file" id="img2" name="img2" aria-describedby="fileHelp">
	  <span></span><br /><br />
	  <img width="200" alt="Imagen" id="send_img2" name="send_img2" /> 
	  <small id="fileHelp" class="form-text text-muted">Ingrese la segunda imagen</small>
	</div>
	
    </fieldset>
    <button type="submit" class="btn btn-success">INSERTAR</button>
  </fieldset>

  </fieldset>
  <button type="reset" class="btn btn-danger">LIMPIAR</button>
  </fieldset>
</form>

<script>
<?php

?>
</script>

</body>
</html>
