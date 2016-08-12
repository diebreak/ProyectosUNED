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

	<h2>Ingrese la cedula del usuario que desea borrar</h2>
<br>
<br>
<form action="" method="POST" class="form-inline" role="form">
	<div class="form-group">
		<label class="sr-only" for="">label</label>
		<input type="text" class="form-control" name="cedu" placeholder="Ingrese la cedula"><br><br>	
		

	</div>
<br>
<br>

	<button type="submit" class="btn btn-primary">Borrar</button>
</form>

<?php
			if ($_POST){
				$n=$_POST['cedu'];
				
				mysql_query("DELETE from usuarios where cedula='$n'") or die (mysql_error());
				echo "<h2> Dato eliminado </h2>";	
			}
			?>

</section>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>