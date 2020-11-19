<?php


class Sair
{
    public static function logout(){
        Flight::set('flight.views.path', __DIR__ ."/../views");
        Flight::render('login.php');
    }   
}