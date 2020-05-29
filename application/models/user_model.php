<?php
class User_model extends Database
{

    public function fetch_records()
    {
        
        if($this->Select("users", "name,address")){

        $store = $this->AllRecords();
        echo "<pre>";
        print_r($store);

        }
    }
}
?>