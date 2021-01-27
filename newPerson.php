<?php
    #Sale si alguno de los datos no está presente
    if(!isset($_POST["nombre"]) || !isset($_POST["apellido"]) || !isset($_POST["mail"])) exit();

    include_once "cn.php";
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $mail = $_POST["mail"];

    $sentencia = $mbd->prepare("INSERT INTO datos (nombre, apellido, mail) VALUES (:nombre, :apellido, :mail);");
    $resultado = $sentencia->execute([':nombre'=>$nombre, ':apellido'=>$apellido,':mail'=> $mail]); # Pasar en el mismo orden de los ?
    #execute retorna un booleano. True en caso de que todo vaya bien, falso en caso contrario.

    if($resultado === TRUE) header("Location: index.php"); #redirijo de nuevo al formulario
    #echo '<script language="javascript">alert("¡Insertado Correctamente!");</script>';
    else echo "Algo salió mal. Por favor verifica que la tabla exista";

#-----------------------------------------------------------------------------------------------------------------------------------------------
    $directorio = $_SERVER['DOCUMENT_ROOT']."/crud/imagenes/";#defino el directorio
    $aleatorio = mt_rand(100, 999); #genera un numero aleatorio.
    $ruta = $directorio .$aleatorio.".png";
    
    $nombre=$_FILES['imagen']['name'];
    $guardado=$_FILES['imagen']['tmp_name'];
    
    
    #if($_FILES["imagen"]["type"][$i]=="image/jpeg" || $_FILES["imagen"]["type"][$i]=="image/pjpeg" || $_FILES["imagen"]["type"][$i]=="image/gif" || $_FILES["imagen"]["type"][$i]=="image/png")
    if(!file_exists($directorio )){ #si el archivo no está en el dir
        mkdir($directorio ,0777,true);#creo el dir
        if(file_exists($directorio )){
            if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
                echo "El archivo se guardo con exito";
            }else{
                echo "El archivo no se pudo guardar";
            }
        }
    }else{
        if(move_uploaded_file($guardado, $directorio.$aleatorio.".png")){
            echo "El archivo se guardo con exito";
        }else{
            echo "El archivo no se pudo guardar";
        }
    };
?>