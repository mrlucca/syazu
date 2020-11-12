<?php

require_once __DIR__ . "/Login.php";
require_once __DIR__ . "/Site.php";


// Flight::map('notFound',"Razin");

Flight::route('/', array("Raiz", "index"));

Flight::route('/sobre', array("Site", "sobre"));

Flight::route('/jogo', array("Site", "jogo"));

// Flight::route('/admin', array("Site", ""));

Flight::route('/rank', array("Site", "rank"));

Flight::start();