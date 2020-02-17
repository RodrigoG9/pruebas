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
				</ul>

				
				<ul class="navbar-nav">
					<li class="nav-item">
					<?php if (isset($this->session->isLogged) === true) {
     	echo '<a class="nav-link" href="/formulario" 
						><i class="fas fa-user"></i>' .
     		$this->session->nick .
     		' </a
					>';
     } else {
     	echo '<a class="nav-link" href="#loginModal" data-toggle="modal"
		 ><i class="fas fa-user"></i> Log-In</a
	 >';
     } ?>

						
					</li>
				</ul>
			</div>
		</nav>
		
