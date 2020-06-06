<?php

class Route
{

    /*

     * @Framework Name    : cmshappyday
     * @Auther Name       : Maes Jason
     * @License           : cmshappyday
     * @Verion            : 1.0.0
     * @Description       : Route class get the url, split the url & sanitize the url

     */

    private $Controller = Default_controller;
    private $Method = Default_method;
    private $Param = Default_param;

    public function __construct()
    {
        $url = $this->Url();
        //print_r($url);
        //echo "<br>";
        if (!empty($url)) {

            if (file_exists("../application/controllers/" . $url[0] . ".php")) {

                $this->Controller = ucwords($url[0]);
                unset($url[0]);
                //echo "Controller is found";
            } else {
                die("<div style='background-color:#f1f4f4;color:#afaaaa;border: 1px dotted #afaaaa;padding: 10px; border-radius: 4px'>Sorry Controller <strong>" . $url[0] . "</strong> is not found</div>");
            }
        }

        /*
        @Include controller file
         */

        require_once "../application/controllers/" . $this->Controller . ".php";

        /*
        @Instantiate Controller class
         */

        $this->Controller = new $this->Controller;

        /*
         * Check method availability
         */

        if (isset($url[1]) && !empty($url[1])) {

            if (method_exists($this->Controller, $url[1])) {
                /*
                 * Replace default method on url method
                 */
                $this->Method = $url[1];
                /*
                 * Remove method from url array
                 */
                unset($url[1]);
            } else {

                die("<div style='background-color:#f1f4f4;color:#afaaaa;border: 1px dotted #afaaaa;padding: 10px; border-radius: 4px'>Sorry Method <strong>" . $url[1] . "</strong> is not found</div>");
            }
        }

        /*
            * Check Parameters availability
        */

        if(isset($url)){

            $this->Param = $url;
        } else {
            $this->Param = [];
        }

        call_user_func_array([$this->Controller, $this->Method], $this->Param);


        //echo $this->Controller;
    }

    public function Url()
    {
        if (isset($_GET['url'])) {

            $url = $_GET['url'];
            /**
             * rtrim() method remove extra spaces from the right side
             */
            $url = rtrim($url);
            /**
             * FILTER_SANITIZE_URL remove all illegal characters from the url
             */
            $url = filter_var($url, FILTER_SANITIZE_URL);
            /**
             * explode method split string on specific point
             */
            $url = explode("/", $url);
            return $url;
        }
    }
}
