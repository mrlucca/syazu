<?php
// require_once __DIR__ . "/../main.php";
require __DIR__ . '/../vendor/autoload.php';

Flight::route('/', function(){
    echo 'hello world!';
});

Flight::route('/teste', function(){
    echo 'hello teste!';
});


Flight::route('/admin', function(){
    echo 'hello admin!';
});

