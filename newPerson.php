<?php
    #Sale si alguno de los datos no está presente
    if(!isset($_POST["nombre"]) || !isset($_POST["apellido"]) || !isset($_POST["mail"])) exit();

    include_once "cn.php";
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $mail = $_POST["mail"];

    $sentencia = $mbd->prepare("INSERT INTO datos (nombre, apellido, mail) VALUES (?, ?, ?);");
    $resultado = $sentencia->execute([$nombre, $apellido, $mail]); # Pasar en el mismo orden de los ?
    #execute retorna un booleano. True en caso de que todo vaya bien, falso en caso contrario.

    if($resultado === TRUE) header("Location: index.php"); #redirijo de nuevo al formulario
    #echo '<script language="javascript">alert("¡Insertado Correctamente!");</script>';
    else echo "Algo salió mal. Por favor verifica que la tabla exista";

?>