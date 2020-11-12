<?php

require_once __DIR__ . "/Login.php";
// require_once __DIR__ . "/Site.php";


// Flight::map('notFound',"Razin");

Flight::route('/', array("Raiz", "index"));

// Flight::route('/teste', "");

// Flight::route('/teste/hello', "");

// Flight::route('/admin', "");

// Flight::route('/admin/post', "");

Flight::start();