<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	
	<title>Cima de la liberatad Reservas/CReacion Salas</title>
	<?= $styles ?>
</head>
<body class="bg-white">
<?= $nav ?>	
<div class="container p-2 shadow p-3 mb-5 bg-white rounded">
<h1 class="text-center"> CREACION DE SALAS <h1>
<div class="row">
	<div class="col">
	<form class="h5" >
		<div class="form-group">
			<label class="form-control-label" for="titulo">NOMBRE DE LA SALA</label>
			<input type="text"  class="form-control" id="titulo" name="titulo" placeholder="INGRESE EL NOMBRE DE LA SALA ....">
		</div>
		
		<div class="form-group">
			<label for="area">DESCRIPCION</label>
			<textarea class="form-control" id="area" name="area" rows="3" placeholder="INGRESE DESCRIPCION DE LA SALA ...."></textarea>
		  </div>
	  
		  <div class="form-group">
			<label for="exampleInputFile">IMAGEN 1</label>
			<small id="fileHelp" class="form-text text-muted">Ingrese la primera imagen</small>
			<input type="file" accept="image/*" id="img1" class="form-control-file" name="img1" aria-describedby="fileHelp">
			<span id="span1" d-block text-muted></span>
			<center> <img width="200" alt="Imagen" id="send_img" name="send_img" /> </center>
		   
		  </div>
		  
		  <div class="form-group">
			<label for="exampleInputFile">IMAGEN 2</label>
			<small id="fileHelp" class="form-text text-muted">Ingrese la segunda imagen</small>
			<input type="file" class="form-control-file" id="img2" name="img2" aria-describedby="fileHelp">
			<span id="span2" class="d-block text-muted"></span>
			<center> <img width="200" alt="Imagen" id="send_img2" name="send_img2"/> </center>
			
		  </div>
	  
		  
		
		  <button type="submit" id="btn_insertar"  name="btn_insertar" class="btn btn-success">INSERTAR</button>
		
	  
		
		<button type="reset" class="btn btn-danger">LIMPIAR</button>
		
	  </form>
	</div>
</div>
</div>

	
<div id="ajx"></div>




<?= $scripts ?>

</body>
</html>
