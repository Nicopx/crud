<?php
    if(!isset($_GET["id"])) exit();
    $id = $_GET["id"];
    include_once "cn.php";
    $sentencia = $mbd->prepare("DELETE FROM datos WHERE id = ?;");
    $resultado = $sentencia->execute([$id]);
    if($resultado === TRUE) echo "Eliminado correctamente";
        else echo "Algo salió mal";
?>