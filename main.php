<?php
session_start();
require __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/routers/Routers.php';

// if(!isset($_SESSION['id_usuario'])){
//     header("location: login.php");
//     exit;
// }
