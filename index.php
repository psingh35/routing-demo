<?php
//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base Class
$f3 = Base :: instance();

//Define a default rout
$f3->route('GET /', function ()
{
    echo '<h1>Hello1</h1>';
}
);

//Define a default rout
$f3->route('GET /page1/subpage-a', function ()
{
        echo '<h1>This is page 1, Subpage !</h1>';
}
);
//Define a default rout
$f3->route('GET /jewelry/rings/toe-rings', function ()
{
    $template = mew Template = new Template();
    echo $template ->render ('views/Jewelry.html');
}
);

//set debug level
    $f3->set('DEBUG', 3);


//Run fat free
$f3->run();
?>