<?php
$database = 'libretas_sanitarias';
$host     = 'localhost';
$user     = 'root';  // pma
$pass     = ''; // p4sspma2020

try{
    $dbh = new PDO("mysql:dbname={$database};host={$host};port=3306", $user, $pass);
    
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $dbh->exec("SET CHARACTER SET utf8");		
    
}catch(PDOException $e){			
        echo "Error:" . $e->getMessage();
}
?>