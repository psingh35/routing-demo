<?php
//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base Class
$f3 = Base :: instance();

//Define a default rout
$f3->route('GET /', function ()
{
    $view = new View;
    echo $view->render
        echo '<h1>Routing Demo</h1>';

}
);

//Run fat free
$f3->run();
?>