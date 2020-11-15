<?php

require_once __DIR__ . "/Login.php";
require_once __DIR__ . "/Site.php";


// Flight::map('notFound',"Razin");

<<<<<<< HEAD
Flight::route('/', function(){
    require_once __DIR__ . "/../views/site.php";
});

Flight::route('/sobre', function(){
    require_once __DIR__ . "/../views/site.php";
    $GLOBALS['content'] = __DIR__ . "/../viws/site/sobre.php";
});

Flight::route('/jogo', function(){
    require_once __DIR__ . "/../views/site.php";
    $GLOBALS['content'] = __DIR__ . "/../viws/site/jogo.php";
});


Flight::route('/rank', function(){
    require_once __DIR__ . "/../views/site.php";
    $GLOBALS['content'] = __DIR__ . "/../viws/site/rank.php";
});
=======
Flight::route('/@page', function($page){
    require_once __DIR__ . "/../views/site.php";

    if ($page == "sobre"){
        $GLOBALS['content'] == __DIR__ . "/../views/site/sobre.php";
    }
    if ($page == "jogo"){
        $GLOBALS['content'] == __DIR__ . "/../views/site/jogo.php";
        
    }
    
    if ($page == "rank") {
        $GLOBALS['content'] == __DIR__ . "/../views/site/rank.php";

    }
});

// Flight::route('/sobre', array("Site", "sobre"));

// Flight::route('/jogo', array("Site", "jogo"));

// // Flight::route('/admin', array("Site", ""));

// Flight::route('/rank', array("Site", "rank"));
>>>>>>> 05719e040ffdd640e03da263660a745eabac4494

Flight::start();