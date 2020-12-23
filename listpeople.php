<?php
include_once "cn.php";
#preparo la consulta a la bd
$sentencia = $mbd->query("SELECT * FROM datos;");
#ejecuto la sentencia y guardo los datos en la var personas
$personas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<?php include("includes/header.php")?>
<?php include("includes/navbar.php")?>
	<table class="centered">
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