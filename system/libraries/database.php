<?php
error_reporting(0);

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
    public function Select($table_name, $options = "")
    {

        if (empty($options)) {

            $this->Query = $this->db->prepare("SELECT * FROM " . $table_name);
            return $this->Query->execute();

        } else {

            $this->Query = $this->db->prepare("SELECT " . $options . " FROM " . $table_name);
            return $this->Query->execute();

        }
    }

    /*
     * Select_Where method accept the select query along with WHERE statement
     */
    public function Select_Where($table_name, $options)
    {
        $columns="";
        $db_values="";
        foreach ($options as $key => $values):

            $columns .= $key . " = ? AND ";
            $db_values .= $values . ",";

        endforeach;

        /*
         * Remove AND operator from the end of statement
         */
        $columns = rtrim($columns, " AND");

        /*
         * Remove comma from the end of statement
         */
        $db_values = rtrim($db_values, ",");
        /*
         * Assign string to an array
         */
        $db_values = explode(",", $db_values);

        /*
         * Write the Select_Where query
         */
        $this->Query = $this->db->prepare("SELECT * FROM " . $table_name . " WHERE " . $columns);
        return $this->Query->execute($db_values);
    }

    /*
     * Delete method
     */
    public function Delete($table_name, $options)
    {
        $columns="";
        $db_values="";
        foreach ($options as $key => $values):

            $columns .= $key . " = ? AND ";
            $db_values .= $values . ",";

        endforeach;

        /*
         * Remove AND operator from the end of statement
         */
        $columns = rtrim($columns, " AND");

        /*
         * Remove comma from the end of statement
         */
        $db_values = rtrim($db_values, ",");
        /*
         * Assign string to an array
         */
        $db_values = explode(",", $db_values);

        /*
         * Write the Select_Where query
         */
        $this->Query = $this->db->prepare("DELETE FROM " . $table_name . " WHERE " . $columns);
        return $this->Query->execute($db_values);
    }

    /*
     * Update method
     */

    public function Update($table_name, $set_array, $options)
    {

        // $this->Query = $this->db->prepare("UPDATE users SET name =?, adress = ? WHERE id = ? AND email = ? ");
        //$this->Query->execute([$name, $address, $id]);

        $set_columns="";
        $set_values="";

        foreach ($set_array as $key => $values):
            $set_columns .= $key . " = ?,";
            $set_values .= $values . ",";
        endforeach;
        /*
         * Remove comma from the right/end of statment/string
         */

        $set_columns = rtrim($set_columns, ",");
        
        $where_columns="";
        $where_values="";
        foreach($options as $key => $values):

            $where_columns .= $key . " = ? AND ";
            $where_values .= $values . ",";

        endforeach;
        /*
         * Remove AND operator from the end of statment/string
         */
        $where_columns = rtrim($where_columns, " AND");
        /*
         * Combine set values and where values
         */
        $combine = $set_values.$where_values;
        $combine = rtrim($combine, ",");
        $combine = explode(",", $combine);
        
        /*
         * Write the update query
         */

         $this->Query = $this->db->prepare("UPDATE " . $table_name . " SET " .$set_columns . " WHERE " . $where_columns);
         return $this->Query->execute($combine);
    }
}
