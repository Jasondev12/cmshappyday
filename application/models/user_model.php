<?php
class User_model extends Database
{

    public function fetch_records()
    {
        
        $name = "second";
        $address = "updated test";
        $id = "3";
        if($this->Update("users", ['name' => $name, 'address' => $address], ['id' => $id])){
            echo 'Record is successfully updated';
        };

        }
    }

?>