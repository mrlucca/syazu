<?php

require_once __DIR__. "/usuarios.php";
class ApiLogin
{
    public static function loginBD($nickname, $senha)
    {
        $u = new Usuario();
        $ini = parse_ini_file(__DIR__ . "/../../.ini");
        $u->conectar($ini["table"],	$ini["host"], $ini["user"], $ini["password"]);
        return $u->validarLogin($nickname, $senha);
    }
    public static function setData($nickname, $senha)
    {
        $res = self::loginBD($nickname, $senha);
        Flight::json($res);
    }
}