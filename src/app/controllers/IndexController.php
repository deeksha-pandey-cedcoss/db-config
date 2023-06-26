<?php

use Phalcon\Mvc\Controller;

use MyApp\Config\config;


// defalut controller view
class IndexController extends Controller
{
    public function indexAction()
    {
        // version name and host name of configuration

        echo "<pre>";
        $config = new config();
        print_r($config->demo());
        die;
        
        
    }
}
