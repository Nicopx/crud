<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["nombre"]) || 
	!isset($_POST["apellido"]) || 
	!isset($_POST["mail"]) || 
	!isset($_POST["id"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "cn.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellido"];
$mail = $_POST["mail"];

$sentencia = $mbd->prepare("UPDATE datos SET nombre = ?, apellido = ?, mail = ? WHERE id = ?;");
$resultado = $sentencia->execute([$nombre, $apellidos, $mail, $id]); # Pasar en el mismo orden de los ?
if($resultado === TRUE) header("Location: listpeople.php");
#header("Location: listpeople.php");
else echo '<script language="javascript">alert("Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario!");</script>';

?>
