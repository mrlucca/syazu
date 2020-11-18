<?php

class Home
{
    public static function render(){
        Flight::render('site.php', array('nomeDoConteudo' => 'home'));
    }
}