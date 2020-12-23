<?php include("cn.php");?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrar persona</title>
</head>
<body>
	<form method="post" action="newPerson.php">
		<label for="nombre">Nombre:</label>
		<br>
		<input name="nombre" required type="text" id="nombre" placeholder="Escribí tu nombre...">
		<br><br>
		<label for="apellido">Apellido:</label>
		<br>
		<input name="apellido" required type="text" id="apellido" placeholder="Escribí tu apellido...">
		<br><br>
		<label for="mail">Mail:</label>
		<br>
        <input name="mail" required type="text" id="mail" placeholder="Escribí tu mail...">
        
		<br><br><input type="submit" value="Registrar">
	</form>
</body>
</html>