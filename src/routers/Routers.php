<?php

require_once __DIR__ . "/Login.php";
require_once __DIR__ . "/Site.php";


// Flight::map('notFound',"Razin");

Flight::route('/', function(){
    $_SERVER['l_content'] = __DIR__ . "/../views/site/home.php";
    require_once __DIR__ . "/../views/site.php";
});

Flight::route('/sobre', function(){
    $_SERVER['l_content'] = __DIR__ . "/../viws/site/sobre.php";
    require_once __DIR__ . "/../views/site.php";
});

Flight::route('/jogo', function(){
    $_SERVER['l_content'] = __DIR__ . "/../viws/site/jogo.php";
    require_once __DIR__ . "/../views/site.php";
});


Flight::route('/rank', function(){
    $_SERVER['l_content'] = __DIR__ . "/../viws/site/rank.php";
    require_once __DIR__ . "/../views/site.php";
});

Flight::start();