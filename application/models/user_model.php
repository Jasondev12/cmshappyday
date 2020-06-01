<?php
class User_model extends Database
{

    public function fetch_records()
    {
        
        $this->Query("SELECT users.id as u_id, users.address as u_address, admin.id as a_id, admin.address as a_address FROM users INNER JOIN admin ON users.id = admin.id");
        $result = $this->AllRecords();
        echo "<pre>";
        print_r($result);
        }
    }

?>