<?php

class Database
{

    private $host = HOST;
    private $database = DATABASE;
    private $username = USERNAME;
    private $password = PASSWORD;
    protected $db;

    public function __construct()
    {

        try {

            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->database;
            $this->db = new PDO($dsn, $this->username, $this->password);
            echo "Database connection is created";

        } catch (PDOException $e) {

            echo "Database Connection Error: " . $e->getMessage();

        }
    }
}
