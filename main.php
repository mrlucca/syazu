<?php
session_start();
require __DIR__ . '/vendor/autoload.php';

// if(!isset($_SESSION['id_usuario'])){
//     header("location: login.php");
//     exit;
// }
Flight::route('/', function(){
    echo 'hello world!';
});

Flight::route('/teste', function(){
    echo 'hello teste!';
});

Flight::route('/teste/hello', function(){
    echo 'hellooooo teste!';
});


Flight::route('/admin', function(){
    echo 'hello admin!';
});

Flight::route('/admin/post', function(){
    echo 'hello admin tome post!';
});

Flight::start();
