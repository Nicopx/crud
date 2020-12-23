<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "cn.php";
$sentencia = $mbd->prepare("SELECT * FROM datos WHERE id = ?;");
$sentencia->execute([$id]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);
if($persona === FALSE){
	#No existe
	echo "¡No existe alguna persona con ese ID!";
	exit();
}

#Si la persona existe, se ejecuta esta parte del código
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrar persona</title>
</head>
<body>
	<form method="post" action="saveEditData.php">
		<!-- Ocultamos el ID para que el usuario no pueda cambiarlo (en teoría) -->
		<input type="hidden" name="id" value="<?php echo $persona->ID; ?>">

		<label for="nombre">Nombre:</label>
		<br>
		<input value="<?php echo $persona->Nombre ?>" name="nombre" required type="text" id="nombre" placeholder="Escribí tu nombre...">
		<br><br>
		<label for="apellido">Apellido:</label>
		<br>
		<input value="<?php echo $persona->Apellido ?>" name="apellido" required type="text" id="apellido" placeholder="Escribí tu apellido...">
        <br><br>
        <input value="<?php echo $persona->Mail ?>" name="mail" required type="text" id="mail" placeholder="Escribe mail...">
		<br><br>
		<br><br><input type="submit" value="Guardar cambios">
	</form>
</body>
</html>