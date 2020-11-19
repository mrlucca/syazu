<?php

require_once __DIR__ . "/../controllers/Logged.php";
class Sobre extends Logged
{
    public static function render(){
        parent::estaLogado();
        Flight::render('site.php', array('nomeDoConteudo' => 'sobre'));
    }
}