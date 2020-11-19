<?php

require_once __DIR__ . "/../controllers/Login.php";

class Forum extends Login
{
    public static function render(){
        if (parent::estaLogado()){
            Flight::render('site.php', array('nomeDoConteudo' => 'forum'));
        }else{
            echo "não tá logado";
        }
    }
}