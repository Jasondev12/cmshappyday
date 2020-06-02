<?php

class Profile_controller extends Cmshappyday
{

    public function __construct()
    {
        // echo 'Profile Controller';
    }

    public function index()
    {
        echo "index method from profile controller";
    }

    public function my_method()
    {

        $store_model = $this->model("user_model");
        //$store_model->fetch_records();
        $this->helper(['form', 'html', 'url']);
        $this->view("user_view");
        
    }

    public function submit_form(){
        echo "form is submit";
    }

    public function anchor(){
        echo "Anchor helper";
    }
}
?>