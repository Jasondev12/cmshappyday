<?php

class Welcome extends Cmshappyday
{
    public function __construct()
    {
        echo 'Welcome Controller';
    }

    public function index()
    {
        echo "Index method from welcome controller";
    }
}