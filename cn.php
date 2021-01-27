<?php
      $user ="root";
      $password="";
      $bd="persona";
         try {
            $mbd  = new PDO('mysql:host=localhost;dbname=' . $bd, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));// creo una nueva instacia de PDO
            //$connection = "mysql:host=".$this->servidor.";dbname=" . $this->db . ";charset=" . $this->charset; //setea los atributos necesarios para la conexion
            #$mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
                ];
               // $pdo = new PDO($connection,$this->user,$this->password); aca se hace la conexion
               //return $mbd; 
            } catch (PDOException $e) {
                print "¡Error!: " . $e->getMessage() . "<br/>";
                //die();
            }
            
?>