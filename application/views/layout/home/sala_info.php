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
		<?= $nav ?>

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
            <h2 class="display-4 text-center"><?= $data[0]->titulo ?></h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                        <img src="data:image/jpeg;base64,
                        <?= base64_encode($data[0]->foto_1) ?>" 
                        alt="<?= $data[0]->titulo ?>"
                        class="img-fluid w-75 h-75 mx-auto d-block">
                        
                    </div>
                    <div class="col-lg-6">

                        <img src="data:image/jpeg;base64,
                        <?= base64_encode($data[0]->foto2) ?>" 
                        alt="<?= $data[0]->titulo ?>"
                        class="img-fluid w-75 h-75 mx-auto d-block">
                        
                    </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <p class="text-justify"><?= $data[0]->contenido ?></p>
                    </div>
                </div>
                        
                </div>
            </div>
                
            
		</div>

		<!-- Footer -->

		<!-- Scripts -->
		<?= $scripts ?>
	</body>
</html>
