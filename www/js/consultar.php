<?php
include("conexion.php");
$con=conectar();
echo "se realizo exitosamente la conexion a la base de datos";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fromulario Usuarios</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">	
</head>
<body background="a.jpg">


	<header><h1>Bienvenido a la base de datos de la UNED</h1></header>
	<br>
	<br>
	<nav class="navbar navbar-default navbar-static-top navbar-inverse" role="navigation">
		<div class="container input-group">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="form.php">Incluir</a>
				</li>
				<li>
					<a href="borrar.php">Borrar</a>
				</li>
				<li>
					<a href="modificar.php">Modificar</a>
				</li>
				<li>
					<a href="consultar.php">Consultar</a>
				</li>
			</ul>
		</div>
	</nav>

	<section>
		<br>

		<h2>Ingrese la cedula del usuario que desea buscar</h2>

		<br>
		<form action="" method="POST" class="form-inline" role="form">
			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<input type="text" class="form-control" name="ced" placeholder="Ingrese la cedula"><br><br>


				<button type="submit" class="btn btn-primary">Buscar</button>



			</div>
			<br>
			<br>

		</form>


<table class="table table-bordered ">

		<tr id="techo">
			<th>Cedula</th>
			<th>Nombre</th>
			<th>Primer apellido</th>
			<th>Primer apellido</th>
		</tr>
	

		<?php
		if ($_POST){
			$n=$_POST['ced'];
			$mostrar=mysql_query("SELECT cedula,nombre,apellidouno,apellidodos from usuarios where cedula='$n'") or die (mysql_error());
				
			$registro=mysql_fetch_array($mostrar);
			$cedul=$registro['cedula'];
			$nom=$registro['nombre'];
			$ape1=$registro['apellidouno'];
			$ape2=$registro['apellidodos'];

		

		   echo  "<tr> 
					<td>".$cedul."</td>
					<td>".$nom."</td>
					<td>".$ape1."</td>
					<td>".$ape2."</td>
					</tr>";
				}

		?>
		</table>
	</section>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>