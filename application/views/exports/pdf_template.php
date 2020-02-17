<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link 	href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/lux/bootstrap.min.css"
		rel="stylesheet"
		integrity="sha384-oOs/gFavzADqv3i5nCM+9CzXe3e5vXLXZ5LZ7PplpsWpTCufB7kqkTlC9FtZ5nJo"
		crossorigin="anonymous"/>
</head>
<body>
    <div class="container">

    
    <h1>Listado de reservas para la fecha <?= $fecha ?></h1>
    <p>Tenemos el siguiente listado</p>

    <table class="table table-primary">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombres</th>
        <th scope="col">Fecha</th>
        <th scope="col">Cantidad de personas </th>
        </tr>

    </thead>
  <tbody>
      <?php foreach ($reservas as $r) {
      	echo "<tr>";
      	echo "<th scope='row'>$r->id_reg</th>";

      	echo "<td>$r->Nombre_reg</td>";
      	echo "<td>$r->Fecha</td>";
      	echo "<td>$r->Personas</td>";
      	echo "</tr>";
      } ?>
    
  </tbody>
</table>
</div>
</body>
</html>