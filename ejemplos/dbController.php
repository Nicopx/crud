<?php
class DBController
{
    private $host = "localhost";
    private $user = "root";			// "pmauser"; pma
    private $password = "";			// "Co854652"; p4sspma2020
    private $database = "libretas_sanitarias";
    private $dsn = "mysql:host=localhost;port=3306;dbname=libretas_sanitarias";
    public $conn = '';
    private $opciones = array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    function __construct()
    {
        $conn = $this->connectDB();
    }
    function connectDB()
    {
        try {
            $this->conn =  new PDO($this->dsn, $this->user, $this->password, $this->opciones);
            return $this->conn;
        } catch(PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
        
    }
    function runQuery($query)
    {
        $result = $this->conn->query($query);
        $resultset = $result->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultset)){
            return $resultset;
        }else {
            return null;
        }
    }
}
?>