<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	
	<title>Cima de la liberatad Reservas/Exportar</title>
	<?= $styles ?>
</head>
<body>
<?= $nav ?>	
<div class="container p-2 shadow p-3 mb-5 bg-white rounded">
<h1 class="text-center"> EXPORTAR <h1>
<div class="row">
	<div class="col">
	<form class="h5" >
    <div class="form-group has-danger">
  							<label class="form-control-label" for="fechaReserva">Seleccione la fecha:</label>
  							<div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input " data-target="#datetimepicker1"id="fechaReserva"/>
                                <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>                      
                                </div>
                            </div>
  							<div class="invalid-feedback" id="fechaMsg"></div>
						</div>
    </form>
    </div>
</div>
<?= $scripts ?>
    </body>
</html>