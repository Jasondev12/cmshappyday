<?php
class User_model extends Database
{

    public function fetch_records()
    {
        
        $this->Select_Where("users", ['id' => 2]);
        $store = $this->Row();
        echo "<pre>";
        print_r($store);

        }
    }

?>