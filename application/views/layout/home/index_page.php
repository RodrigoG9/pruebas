<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Cima de la liberatad Reservas</title>
		
		<!-- Styles -->
		<?= $styles ?>
	</head>
	<body class="bg-white">
		<!-- Nav -->
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
						<a class="nav-link" href="/">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/salas">Salas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Reservas</a>
					</li>
				</ul>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#loginModal" data-toggle="modal"
							><i class="fas fa-user"></i> Log-In</a
						>
					</li>
				</ul>
			</div>
		</nav>

		<!-- login modal -->
		<div id="loginModal" class="modal fade">
			<div class="modal-dialog modal-login">
				<div class="modal-content">
					<div class="modal-header">
						<div class="avatar">
							<i class="fas fa-user fa-4x"></i>
						</div>
						<h4 class="modal-title">Credenciales</h4>
						<button
							type="button"
							class="close"
							data-dismiss="modal"
							aria-hidden="true"
						>
							&times;
						</button>
					</div>
					<div class="modal-body">
						<form action="#" method="post">
							<div class="form-group">
								<input
									type="text"
									class="form-control"
									name="username"
									placeholder="Nombre de usuario"
									required="required"
									id="username"
								/>
							</div>
							<div class="form-group">
								<input
									type="password"
									class="form-control"
									name="password"
									placeholder="Password"
									required="required"
									id="password"
								/>
							</div>
							<div class="form-group">
								<button
									id="btn-login"
									type="submit"
									class="btn btn-primary btn-lg btn-block login-btn"
								>
									<span>Iniciar sesion</span>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Content -->
		<div class="container p-2 shadow p-3 mb-5 bg-white rounded">
			<h2>la Cima de la Libertad</h2>
			<h4>El templo de la patria</h4>
			<div class="row">
				<div class="col-md-12 col-lg-8">
					<div
						id="carousel"
						class="carousel slide"
						data-ride="carousel"
					>
					<ol class="carousel-indicators">
						<li data-target="#carousel" data-slide-to="0" class="active"></li>
						<li data-target="#carousel" data-slide-to="1"></li>
						<li data-target="#carousel" data-slide-to="2"></li>
					</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" height="300px"  src="<?= base_url(
        	'application/assets/images/general.jpg'
        ) ?>" alt="First slide" />
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" height="300px"  src="<?= base_url(
        	'application/assets/images/sala-armas.jpg'
        ) ?>" alt="Second slide" />
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" height="300px"  src="<?= base_url(
        	'application/assets/images/soldado.jpg'
        ) ?>" alt="Third slide" />
							</div>
						</div>
						<a
							class="carousel-control-prev"
							href="#carousel"
							role="button"
							data-slide="prev"
						>
							<i class="fas fa-chevron-left"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a
							class="carousel-control-next"
							href="#carousel"
							role="button"
							data-slide="next"
						>
							<i class="fas fa-chevron-right"></i>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-md-12 col-lg-4 justify-content-end">
					<p class="text-justify mt-3">
						Museo histórico que recuerda la hazaña del ejército libertario al
						derrotar a las tropas reales en las faldas del Pichincha. Es el
						templo de la patria, que al mismo tiempo es un mirador privilegiado,
						sobre todo hacia el sur de Quito.
					</p>

					<p class="text-justify">
						Este monumento es un homenaje a la batalla en el que Ejercito del
						Mariscal Antonio José de Sucre, venció a las tropas reales el 24 de
						Mayo de 1822 para declarar a la antigua presidencia de Quito libre
						de la corona Española. Ubicado en las laderas del Pichincha a 3100 m
						de altura inagurado el 24 de mayo de 1996.
					</p>
				</div>
			</div>
			<hr />
			<div class="row">
				<div class="col">
					<h3>Notas Importantes</h3>
					<ul>
						<li>
							El Templo de la Patria es uno de los pocos monumentos/museos que
							se pueden divisar desde cualquier parte del centro histórico, esto
							debido a su ubicación en las faldas del volcán Pichincha.
						</li>
						<li>
							El horario del museo es de martes a viernes de 9h00 a 17h00 y los
							sábados de 10h00 a 14h00.
						</li>
						<li>
							El costo de la entrada es de $1,00 USD para visitantes extranjeros
							y de $0,25 USD para niños y tercera edad.
						</li>
						<li>
							Por su seguridad, le recomendamos visitar este lugar en la
							compañía de un guía turístico y en lo posible use un medio de
							transporte privado.
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Footer -->

		<!-- Scripts -->
		<?= $scripts ?>
	</body>
</html>
