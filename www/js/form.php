<?php
include("conexion.php");
$con=conectar();
echo "se realizo exitosamente la conexion a la base de datos";
?>
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
				<li class="active" >
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



			</nav>


			<section>
				<br>
				<h2>Inserte un usuario</h2>
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
			</section>
			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>

			<?php
			if ($_POST){
				$n=$_POST['nom'];
				$a1=$_POST['apell1']; 
				$a2=$_POST['apell2'];
				$i=$_POST['id'];
				$cl=$_POST['clave'];
				mysql_query("INSERT INTO `usuarios` (`nombre`, `apellidouno`, `apellidodos`, `cedula`,`clave`) VALUES ('$n', '$a1', '$a2', '$i',SHA1('$cl'));") or die (mysql_error());
				echo "<h2> Dato Guardado </h2>";	
			}
			?>

		</body>
		</html>