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

        echo $this->post('name');
        echo $this->post('address');
        echo $this->uri(2);

    }

    public function anchor()
    {
        echo "Anchor helper";
    }
}
