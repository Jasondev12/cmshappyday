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

        $this->view("user_view");
        //redirect("dashboard/profile");

    }

    public function form_submit()
    {
        $data = [
            'file_name' => 'image',
            'allowed_extensions' => 'jpg|png',
            'upload_path' => 'images/',
            'label' => 'Image',

        ];
        $this->file($data);

        $this->validation('full_name', 'Full Name', 'not_int|min_len|8|required');
        $this->validation('address', 'Address', 'not_int|required');
        $this->validation('password', 'Password', 'min_len|5|required');
        $this->validation('confirm_password', 'Confirm Password', 'confirm|password|required');
        $this->validation('email', 'Email', 'unique|users|required');

        if ($this->file_run() & $this->run()) {
            $session_data = [
                'id' => 4,
                'name' => $this->post('full_name'),
                'email' => $this->post('email'),
            ];
            $this->set_session($session_data);
            $this->set_flash("account_success", "Votre compte a été créé avec succès");
            redirect("dashboard/profile");
        } else {
            $this->view("user_view");
        }
    }

    public function anchor()
    {
        echo "Anchor helper";
    }
}
