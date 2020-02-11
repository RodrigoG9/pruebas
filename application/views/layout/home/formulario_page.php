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
	


<form>
<div class="form-group has-success">
  <label class="form-control-label" for="inputSuccess1">NOMBRE DE LA SALA</label>
  <input type="text"  class="form-control" id="inputValid" placeholder="INGRESE EL NOMBRE DE LA SALA ....">
  
</div>

<div class="form-group">
      <label for="exampleTextarea">DESCRIPCION</label>
      <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="INGRESE DESCRIPCION DE LA SALA ...."></textarea>
    </div>

	<div class="form-group">
      <label for="exampleInputFile">IMAGEN 1</label>
      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">Ingrese la primera imagen</small>
	</div>
	<div class="form-group">
      <label for="exampleInputFile">IMAGEN 2</label>
      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">Ingrese la segunda imagen</small>
    </div>
    
	
</form>
</body>
</html>
