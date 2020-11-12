<?php 
class Site
{
    public static function sobre() 
    {

        $GLOBALS['content'] =  __DIR__ . "/../views/site/sobre/sobre.php";
    }

    public static function jogo() 
    {

        $GLOBALS['content'] =  __DIR__ . "/../views/site/jogo/jogo.php";
    }

    public static function rank() 
    {

        $GLOBALS['content'] = __DIR__ . "/../views/site/rank/rank.php";
    }

}