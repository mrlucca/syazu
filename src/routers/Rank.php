<?php

require_once __DIR__ . "/../controllers/Logged.php";

class Rank extends Logged
{
    static $vars = [];

    public static function setConfigBd(){
        require_once __DIR__ . '/../models/usuarios.php';
        $u = new Usuario();
        $ini = parse_ini_file(__DIR__ . "/../../.ini");
        self::$vars = ['u' => $u, 'ini' => $ini, 'nomeDoConteudo' => 'rank'];
    }


    public static function render(){
        parent::estaLogado();
        self::setConfigBd();
        Flight::render('site.php', self::$vars);
    }   
}