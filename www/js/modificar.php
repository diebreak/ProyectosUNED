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
		<div class="container">
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
				<h2>Inserte la cedula del usuario a modificar</h2>
				<br>
				<br>
				 <form action="" required method="post" class="form-inline" role="form">
					<div class="form-group">
						<label class="sr-only" for="">label</label>
						<input type="text" class="form-control" name="id" placeholder="Numero identificación"><br><br>
						<label class="sr-only" for="">label</label>
						<input type="text" class="form-control"  name="nom" placeholder="Nombre"><br><br>	
						<label class="sr-only" for="">label</label>
						<input type="text" class="form-control" name="apell1" placeholder="Primer apellido"><br><br>
						<label class="sr-only" for="">label</label>
						<input type="text" class="form-control" name="apell2" placeholder="Segundo apellido"><br><br>
						<label class="sr-only" for="">label</label>
						<input type="text" class="form-control" name="clave" placeholder="Clave"><br><br>

					</div>
					<br>
					<br>

					<button type="submit" class="btn btn-primary">Ingresar</button>
				</form>
			</section>x
			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>

			<?php
			if ($_POST){
				$n=$_POST['nom'];
				$a1=$_POST['apell1']; 
				$a2=$_POST['apell2'];
				$i=$_POST['id'];
				mysql_query("UPDATE usuarios SET nombre='$n', apellidouno='$a1', apellidodos='$a2', cedula= '$i' where cedula='$i'") or die (mysql_error());
				echo 'No se pudo actualizar';	
			}	
			?>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body>
</html>