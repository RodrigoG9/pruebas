<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Cima de la liberatad Reservas/Eliminas Salas
    </title>
    <?= $styles ?>
</head>
<body class="bg-white">
    <?= $nav ?>	
    <div class="container p-2 shadow p-3 mb-5 bg-white rounded">
<h1 class="text-center"> Salas <h1>
<div class="row">
	<div class="col">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">NOMBRE SALA</th>
      <th scope="col">IMAGEN</th>
      <th scope="col">ELIMINAR?</th>
    </tr>
    <?php
    foreach ($data as $sala) {
        echo "<tr>";
        echo "<th scope=col >".
        $sala->titulo.
        "</th>";
        echo "<th scope=col>";
        echo '<img src="data:image/jpeg;base64,' . base64_encode($sala->foto_1) . '" class="card-img-topalt="..." height="70px width="70px">';
        echo "</th>";
        echo '<th scope=col><button type="button" class="btn btn-warning">ELIMINAR</button></th>"';
        echo "<tr>";
    }
    ?>
  </thead>
  
</table> 
    </div>
</div>




    <?= $scripts?>
</body>
</html>