<?php
/*
 * Timothy Bartsch
 * 4/11/2023
 * 328/icecream/index.php
 * Controller for diner project
 * */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once ('vendor/autoload.php');

// Create an F3(Fat-Free Framework) object
$f3 = Base::instance();
// Base $f3 = new Base(); "Java Version"

// Define a default route
$f3->route('GET /', function(){
    echo  '<h1>Welcome to My Diner!</h1>';

    //Display a view page
    //$view = new Template();
    //echo $view->render('views/home.html');
});
// Run Fat-Free
$f3->run();
?>

