<?php

class Welcome extends Cmshappyday
{

    public function index()
    {
        $data = "Construisons un site web rapide avec CMS HAPPY DAY";
        $this->view("app", $data);
    }
}
?>