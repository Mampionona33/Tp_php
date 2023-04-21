<?php
class Query
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function createTable($db_name, $query_command)
    {
        $this->conn->select_db($db_name);
        if (!$this->conn->query($query_command) === TRUE) {
            echo "Erreur lors de la création de la table 'users': " . $this->conn->error;
        }
    }

    public function createDataBase($database_name)
    {
        $sql = 'CREATE DATABASE IF NOT EXISTS ' . $database_name;
        if (!$this->conn->query($sql) === TRUE) {
            echo "Erreur lors de la création de la base de données: " . $this->conn->error;
        }
    }
}
