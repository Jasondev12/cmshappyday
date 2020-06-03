<?php

class Profile_controller extends Cmshappyday
{
    public $store_model;

    public function __construct()
    {
        parent::__construct();
        $this->store_model = $this->model("user_model");
    }

    public function index()
    {
        echo "index method from profile controller";
    }

    public function my_method()
    {

        //$store_model->fetch_records();
        $this->view("user_view");

        //redirect("dashboard/profile");

    }

    public function form_submit()
    {

        $this->validation('full_name', 'Full Name', 'not_int|min_len|8|required');
        $this->validation('address', 'Address', 'not_int|required');
        $this->validation('password', 'Password', 'min_len|5|required');
        $this->validation('confirm_password', 'Confirm Password', 'confirm|password|required');
        $this->validation('email', 'Email', 'unique|users|required');
        
        if ($this->run()) {
            echo $this->post('full_name');
            echo "<br>";
            echo $this->post("address");
        } else {
            print_r($this->errors);
        }

    }

    public function anchor()
    {
        echo "Anchor helper";
    }
}
    