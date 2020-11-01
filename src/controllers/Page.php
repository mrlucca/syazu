<?php


class Page
{
    private static $page;
    private static $page_list = [
        'home' => __DIR__ . '/../views/home.php',
        'sobre' => __DIR__ . '/../views/sobre.php',
        'jogo' => __DIR__ . '/../views/jogo.php',
        'rank' => __DIR__ . '/../views/rank.php'

    ];
    public static function setPage($page)
    {
        self::$page = $page; //pega o nome da pagina pela url
    }

    public static function getContent()
    {

        // faz a instância da pagina na home e carrega o conteudo dinamicamento
        if(array_key_exists(self::$page, self::$page_list)){
            return [
                'page' => true,
                'path' => self::$page_list[self::$page]
            ];
        }else {
            return [
                'page' => false,
                'path' => __DIR__ . '/../views/err.php'

            ];
        }
    }
}