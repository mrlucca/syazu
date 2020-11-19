<?php

class Login
{
    static $vars = null;

    public static function setConfigBd(){
        require_once __DIR__ . '/../models/usuarios.php';
        $u = new Usuario();
        $ini = parse_ini_file(__DIR__ . "/../../.ini");
        self::$vars = ['u' => $u, 'ini' => $ini];
    }

    public static function renderLogin(){
        self::setConfigBd();
        Flight::render('login.php', self::$vars);
    }

    public static function renderCadstrar(){
        self::setConfigBd();
        Flight::render('cadastrar.php', self::$vars);
    }
}