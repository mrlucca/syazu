<?php

require_once __DIR__ . "/Login.php";
require_once __DIR__ . "/Site.php";


// Flight::map('notFound',"Razin");

Flight::route('/', function(){
    require_once __DIR__ . "/../views/site.php";
    $content = __DIR__ . "/../site/home.php";
});

Flight::route('/sobre', function(){
    require_once __DIR__ . "/../views/site.php";
    $content = __DIR__ . "/../viws/site/sobre.php";
});

Flight::route('/jogo', function(){
    require_once __DIR__ . "/../views/site.php";
    $content = __DIR__ . "/../viws/site/jogo.php";
});


Flight::route('/rank', function(){
    require_once __DIR__ . "/../views/site.php";
    $content = __DIR__ . "/../viws/site/rank.php";
});

Flight::start();