<?php

class Cmshappyday
{

    /*
     * Load View in the controller
     */
    public function view($view_name, $data = [])
    {

        if (file_exists("../application/views/" . $view_name . ".php")) {
            require_once "../application/views/" . $view_name . ".php";
        } else {
            die("<div style='background-color:#f1f4f4;color:#afaaaa;border: 1px dotted #afaaaa;padding: 10px; border-radius: 4px'>Sorry View <strong>" . $view_name . "</strong> is not found</div>");
        }
    }

    /*
     * Load model in the controller
     */
    public function model($model_name)
    {
        if (file_exists("../application/models/" . $model_name . ".php")) {

            require_once "../application/models/" . $model_name . ".php";
            $update_model_name = ucwords($model_name);

            return new $update_model_name;

        } else {

            die("<div style='background-color:#f1f4f4;color:#afaaaa;border: 1px dotted #afaaaa;padding: 10px; border-radius: 4px'>Sorry Model <strong>" . $model_name . "</strong> is not found</div>");
        }
    }

    /*
     * Helper method check the helper availability
     */
    public function helper($helper_name)
    {

        if (file_exists(("../system/helpers/" . $helper_name . ".php"))) {

            require_once "../system/helpers/" . $helper_name . ".php";
        } else {

            die("<div style='background-color:#f1f4f4;color:#afaaaa;border: 1px dotted #afaaaa;padding: 10px; border-radius: 4px'>Sorry Helper is not found</div>");

        }

    }

}
