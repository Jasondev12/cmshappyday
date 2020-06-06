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

    public function add_data($data)
    {

        if($this->Insert("users", $data)){

            return true;

        } else {

            return false;

        }
    }

    public function fetch_session(){
        return $this->get_session('id');
    }
}
