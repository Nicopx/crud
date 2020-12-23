<?php
    /*class DB {
        private $db;
        private $servidor;
        private $user;
        private $password;
        private $charset;*/

        //Constructor de la clase  
        /*public function __construct(){
            $this->db = 'persona';
            $this->servidor = 'localhost';
            $this->user = 'root';
            $this->password = "";
            $this->charset  = 'utf8mb4';
        }*/
        $user ="root";
        $password="";
        $bd="persona";
        //function connect(){
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
       // }
    //}

?>