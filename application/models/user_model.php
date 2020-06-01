<?php
class User_model extends Database
{

    public function fetch_records()
    {
        
        $this->Join("users", "admin","users.id = admin.id","LEFT JOIN");
        $result = $this->AllRecords();
        echo "<pre>";
        print_r($result);

        }
    }

?>