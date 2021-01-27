<?php include("cn.php");?>

<?php include("includes/header.php")?>
<?php include("includes/navbar.php")?>
	<div class="mb-2">
		<form method="post" action="newPerson.php" enctype="multipart/form-data" >
			<label for="nombre" class="form-label">Nombre:</label>
			<br>
			<input  class="form-control" name="nombre" required type="text" id="nombre" placeholder="Escribí tu nombre...">
			<br><br>
			<label for="apellido" class="form-label" >Apellido:</label>
			<br>
			<input  class="form-control" name="apellido" required type="text" id="apellido" placeholder="Escribí tu apellido...">
			<br><br>
			<label for="mail" class="form-label" >Mail:</label>
			<br>
			<input  class="form-control" name="mail" required type="text" id="mail" placeholder="Escribí tu mail...">
			<br>
			<input type="file" name="imagen">
			<br><br>
			<button type="submit" class="waves-effect waves-light btn blue darken-2">Registrar</button>
		</form>
		<br>
		<!--<h1>Subir archivo</h1>
		<form action="sube.php" method="post" enctype="multipart/form-data">
			<input type="file" name="imagen">
			<br><br>
			<button type="submit">Subir Archivo</button>
		</form> -->
	</div>
</body>
</html>