<?php

class Jogo
{
    public static function render(){
        Flight::render('site.php', array('nomeDoConteudo' => 'jogo'));
    }   
}