<?php

namespace classes;



class dbConnaction{
    private $db = 'carrent';
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $connection;
    public function __construct(){
        try {
            $this->connection = new pdo('mysql:host='.$this->host.';dbname='.$this->db, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            echo 'Connection failed: in the dbConnection Class' . $e->getMessage();
        }
    }

    public function getConnection(){
        return $this->connection;
    }
}





?>