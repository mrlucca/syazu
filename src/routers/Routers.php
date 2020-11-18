<?php

require_once __DIR__ . "/Forum.php";
require_once __DIR__ . "/Sobre.php";
require_once __DIR__ . "/Jogo.php";
require_once __DIR__ . "/Rank.php";
require_once __DIR__ . "/Home.php";
require_once __DIR__ . "/../models/ApiLogin.php";
require_once __DIR__ . "/../models/ApiRank.php";

Flight::set('flight.views.path', __DIR__ ."/../views");
Flight::route('/',      array('Home','render'));
Flight::route('/sobre', array('Sobre','render'));
Flight::route('/jogo',  array('Jogo','render'));
Flight::route('/rank',  array('Rank','render'));
Flight::route('/forum',  array('Forum','render'));
Flight::route('/api/login/@nome/@senha',array('ApiLogin','setData'));
Flight::route('/api/rank/@nome/@senha', array('ApiRank','setData'));

Flight::start();