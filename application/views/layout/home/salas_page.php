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
								/>
							</div>
							<div class="form-group">
								<input
									type="password"
									class="form-control"
									name="password"
									placeholder="Password"
									required="required"
								/>
							</div>
							<div class="form-group">
								<button
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
            <div class="row">
                <div class="col-md-8">
                    <div class="container-fliud">
                        <div class="row">
                            <?php foreach ($data as $sala) {
                            	echo '<div class="col-lg-4 mb-3"> ';
                            	echo '<div class="card"">';
                            	echo '<img src="data:image/jpeg;base64,' .
                            		base64_encode($sala->foto_1) .
                            		'" class="card-img-top" alt="..." height="150px width="150px">';
                            	echo '<div class="card-body">';
                            	echo '<h5 class="card-title">' .
                            		$sala->titulo .
                            		'</h5>';
                            	echo '<p class="card-text">contenido</p>';
                            	echo '<a href="/salas/' .
                            		$sala->id_sa .
                            		'" class="btn btn-primary">Ver mas</a>';
                            	echo '</div>';
                            	echo '</div>';
                            	echo '</div>';
                            } ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 border-left">
                    <h4>Haz tu reserva aqui!</h3>
                    <form>
                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                                <label>
                                    Ingrese sus nombres:
                                    <input type="text" name="" id="" class="form-control">
                                </label>
                            </div>
                            <div class="form-row"></div>
                            <div class="form-row"></div>

                        </div>
                        
                    </form>
                </div>
                
            </div>
		</div>

		<!-- Footer -->

		<!-- Scripts -->
		<?= $scripts ?>
	</body>
</html>
