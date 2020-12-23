<?php
include_once "cn.php";
$sentencia = $mbd->query("SELECT * FROM datos;");
$personas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!--Recordemos que podemos intercambiar HTML y PHP como queramos-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Users</title>
	<style>
	table, th, td {
	    border: 1px solid black;
	}
	</style>
</head>
<body>

	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Mail</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<!--
				Atención aquí, sólo esto cambiará
				Pd: no ignores las llaves de inicio y cierre {}
			-->
			<?php foreach($personas as $persona){ ?>
			<tr>
				<td><?php echo $persona->ID ?></td>
				<td><?php echo $persona->Nombre ?></td>
				<td><?php echo $persona->Apellido ?></td>
				<td><?php echo $persona->Mail ?></td>
				<td><a href="<?php echo "editar.php?id=" . $persona->ID?>">Editar</a></td>
				<td><a href="<?php echo "eliminar.php?id=" . $persona->ID?>">Eliminar</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>