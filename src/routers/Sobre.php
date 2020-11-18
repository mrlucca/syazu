<?php

class Sobre
{
    public static function render(){
        Flight::render('site.php', array('nomeDoConteudo' => 'sobre'));
    }
}