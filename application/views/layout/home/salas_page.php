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
                    <form>
                        <fieldset>
                            <legend>Haz tu reserva aqui!</legend>
                        </fieldset>

                        <div class="form-group">
                            <label class="form-control-label" for="fullNames">Ingrese sus nombres:</label>
                            <input type="text" class="form-control" id="fullNames" placeholder= "Nombres completos">
                        </div>
						<div class="form-group has-danger">
  							<label class="form-control-label" for="fechaReserva">Seleccione la fecha:</label>
  							<div class="input-group date" id="datetimepicker1" data-target-input="nearest" >
                                <input type="text" id="fechaReserva" class="form-control datetimepicker-input " data-target="#datetimepicker1"  />
                                <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>                      
                                </div>
                            </div>
  							<div class="invalid-feedback" id="fechaMsg"></div>
						</div>
                                                

                        <div class="form-group">
                            <label class="form-control-label" for="totalPersonas">Ingrese el numero de personas:</label>
                            <input type="number" class="form-control" id="totalPersonas" placeholder= "maximo 30 personas">
							<div class="invalid-feedback" id="totalPersonasMsg"></div>
                        </div>
							
                        <button type="submit" class="btn btn-primary" id="btn-reserva">Solicitar reserva</button>
                    </form>
                </div>
                
            </div>
		</div>
		<!-- modal reservas -->
		<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="mr-titulo"></h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p id="mr-contenido"></p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">cerrar</button>
            </div>
        </div>
    </div>
</div>
		<!-- Footer -->

		<!-- Scripts -->
		<?= $scripts ?>
	</body>
</html>
