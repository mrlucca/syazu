<?php

class Forum
{
    public static function render(){
        Flight::render('site.php', array('nomeDoConteudo' => 'forum'));
    }   
}