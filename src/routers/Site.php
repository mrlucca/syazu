<?php 
class Site
{
    public static function sobre() 
    {

        require_once  __DIR__ . "/../views/site/sobre.php";
    }

    public static function jogo() 
    {

        require_once  __DIR__ . "/../views/site/jogo.php";
    }

    public static function rank() 
    {

        require_once __DIR__ . "/../views/site/rank.php";
    }

}