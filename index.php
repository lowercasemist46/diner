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
    //echo  '<h1>Welcome to My Diner!</h1>';

    //Display a view page
    $view = new Template();
    echo $view->render('views/home.html');
});

// Define a breakfast route
$f3->route('GET /breakfast', function(){
//    echo  '<h1>Breakfast Menu</h1>';

    //Display a view page
    $view = new Template();
    echo $view->render('views/menus/breakfast.html');
});
// Define a order route
$f3->route('GET|POST /order1', function($f3){
//    echo  '<h1>Breakfast Menu</h1>';

    //If the form has been posted
    if($_SERVER['REQUEST_METHOD']== "POST") {
        // Get the data

        // Validate the data

        //Store the data in the session array

        //Redirect to order2 route
        $f3->reroute('order2');
    }

    //Display a view page
    $view = new Template();
    echo $view->render('views/orderForm1.html');
});
// Define a order2 route
$f3->route('GET /order2', function(){
//    echo  '<h1>Breakfast Menu</h1>';

    //Display a view page
    $view = new Template();
    echo $view->render('views/orderForm2.html');
});
// Define a summary route
$f3->route('GET /summary', function(){
//    echo  '<h1>Breakfast Menu</h1>';

    //Display a view page
    $view = new Template();
    echo $view->render('views/summary.html');
});
// Run Fat-Free
$f3->run();
?>

