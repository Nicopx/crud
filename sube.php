<?php

    $directorio = $_SERVER['DOCUMENT_ROOT']."/crud/imagenes/";
    $aleatorio = mt_rand(100, 999); #genera un numero aleatorio.
    $ruta = $directorio .$aleatorio.".png";
    
    
    $nombre=$_FILES['imagen']['name'];
    
    $guardado=$_FILES['imagen']['tmp_name'];
    
    
    if($_FILES["archivo"]["type"][$i]=="image/jpeg" || $_FILES["archivo"]["type"][$i]=="image/pjpeg" || $_FILES["archivo"]["type"][$i]=="image/gif" || $_FILES["archivo"]["type"][$i]=="image/png")
    if(!file_exists($directorio )){
        mkdir($directorio ,0777,true);
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
    
        }elseif(move_uploaded_file($guardado, $directorio.$aleatorio.".pdf")){
            echo "El archivo se guardo con exito";
        }else{
            echo "El archivo no se pudo guardar";
        }
    
        var_dump($ruta);
    
    } 
 
?>