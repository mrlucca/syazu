<?php 
class Site
{
    public static function sobre() 
    {

        $GLOBALS['content'] =  __DIR__ . "/views/site/sobre.php";
    }

    public static function jogo() 
    {

        $GLOBALS['content'] =  __DIR__ . "/views/site/jogo.php";
    }

    public static function rank() 
    {

        $GLOBALS['content'] = __DIR__ . "/views/site/rank.php";
    }

}