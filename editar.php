<?php
if(!isset($_GET["id"])) exit();#chequo que exista el id
$id = $_GET["id"];
include_once "cn.php";
$sentencia = $mbd->prepare("SELECT * FROM datos WHERE id = ?;");#preparo la consulta
$sentencia->execute([$id]); #la ejecuto pasandole el id que llega
$persona = $sentencia->fetch(PDO::FETCH_OBJ);
if($persona === FALSE){
	#No existe
	echo "¡No existe alguna persona con ese ID!";
	exit();
}
#Si la persona existe, se ejecuta esta parte del código
?>

<?php include("includes/header.php")?>
	<form method="post" action="saveEditData.php">
		<!-- Ocultamos el ID para que el usuario no pueda cambiarlo (en teoría) -->
		<input type="hidden" name="id" value="<?php echo $persona->ID; ?>">

		<label for="nombre">Nombre:</label>
		<br>
		<input value="<?php echo $persona->Nombre ?>" name="nombre" type="text" id="nombre" placeholder="Escribí tu nombre..." required>
		<br><br>
		<label for="apellido">Apellido:</label>
		<br>
		<input value="<?php echo $persona->Apellido ?>" name="apellido" type="text" id="apellido" placeholder="Escribí tu apellido..." required>
        <br><br>
        <input value="<?php echo $persona->Mail ?>" name="mail" type="text" id="mail" placeholder="Escribe mail..."required>
		<br><br>
		<button type="submit" class="btn btn-primary">Guardar Cambios</button>
	</form>
</body>
</html>