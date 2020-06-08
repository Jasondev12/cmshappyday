<?php

include "setting.php";

spl_autoload_register(function ($class_name) {
    include "libraries/$class_name.php";
});

$route = new Route;
