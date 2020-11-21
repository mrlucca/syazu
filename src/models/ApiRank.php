<?php
require_once __DIR__. "/usuarios.php";
class ApiRank
{
    private static function loginBD()
    {
        $u = new Usuario();
        $ini = parse_ini_file(__DIR__ . "/../../.ini");
        $u->conectar($ini["table"],	$ini["host"], $ini["user"], $ini["password"]);
        return $u;
    }

    private static function validarLogin($nickname, $senha)
    {
        $u = self::loginBD();
        return $u->validarLogin($nickname, $senha);
    }

    private static function setPontuacao($nickname, $pontuacaoAtual)
    {
        $u = self::loginBD();
        $stmt = $u->updatePontuacao($nickname, $pontuacaoAtual);

        return $stmt;
    }

    public static function setData($nickname, $senha, $pontuacao)
    {
        $res = self::validarLogin($nickname, $senha);
        if(!$res['error']){
            $resUpdate = self::setPontuacao($res['nickname'], $pontuacao);
            if($resUpdate->rowCount() > 0){
                return Flight::json(["update" => true, "pontos" => $pontuacao]);
            }
            return Flight::json(["update" => false]);
        }
    }
}