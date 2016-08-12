<?php
include ("conexion.php");
$con=conectar();
$consulta=mysql_query("SELECT * from usuarios");
$registro=mysql_fetch_array($consulta);
$nom=$registro['cedula'];
$nom=$registro['nombre'];
$nom=$registro['apellidouno'];
$nom=$registro['apellidodos'];


?>
<section>
<table class="table">
	<tr>
		<hr>Cedula</hr>
		<hr>Nombre</hr>
		<hr>Primer apellido</hr>
		<hr>Segundo apellido</hr>

	</tr>

<?php while ( $registrousuarios= $registro->fetch_array(Mysql_both)) {
	echo'<tr>
<td>'.$registrousuarios['cedula'].'</td>
	</tr>';
	# code...
}

?>

</table>

</section>