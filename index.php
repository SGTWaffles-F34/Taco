<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once('vendor/autoload.php');

//create an instance of the Base Class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {

        $view = new Template();
        echo $view->render('views/home.html');
    }
);

//Run fat free
$f3->run();
