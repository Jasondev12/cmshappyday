<?php

class Database
{

    private $host = HOST;
    private $database = DATABASE;
    private $username = USERNAME;
    private $password = PASSWORD;
    protected $db;
    protected $Query;

    public function __construct()
    {

        try {

            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->database;
            $this->db = new PDO($dsn, $this->username, $this->password);

        } catch (PDOException $e) {

            echo "Database Connection Error: " . $e->getMessage();

        }

    }

    /*
        * Query method will receive all the database queries
    */
    public function Query($query, $options = [])
    {

        if (empty($options)) {
            $this->Query = $this->db->prepare($query);
            return $this->Query->execute();

        } else {
            $this->Query = $this->db->prepare($query);
            return $this->Query->execute($options);

        }
    }

    /*
        * Count method count the number of rows from the table
    */
    public function Count()
    {
        return $this->Query->rowCount();
    }

    /*
        * AllCount method count the number of rows from the specified table
    */
    public function AllCount($table_name)
    {

        // SELECT * FROM table_name
        $this->Query = $this->db->prepare("SELECT * FROM " . $table_name);
        $this->Query->execute();
        return $this->Query->rowCount();

    }

    public function AllRecords()
    {

        return $this->Query->fetchAll(PDO::FETCH_OBJ);

    }

    public function Row()
    {

        return $this->Query->fetch(PDO::FETCH_OBJ);

    }

    /*
        * Select method accept only the select query
    */
    public function Select($table_name, $options = ""){

        if(empty($options)){

            $this->Query = $this->db->prepare("SELECT * FROM " . $table_name);
            return $this->Query->execute();

        } else {

            $this->Query = $this->db->prepare("SELECT " . $options . " FROM " . $table_name);
            return $this->Query->execute();

        }

    }
}
