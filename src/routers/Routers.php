<?php

require_once __DIR__ . "/Login.php";
require_once __DIR__ . "/Site.php";


// Flight::map('notFound',"Razin");

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

Flight::start();