<?php

include_once 'db.php';

class Persona extends DB{

    function obtenerDni($dni){
        $query = $this->connect()->prepare('SELECT * FROM entrega WHERE dni = :dni');
        $query->execute(['dni' => $dni]);
        return $query;
    }


}

?>