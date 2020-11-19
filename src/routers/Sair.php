<?php


class Sair
{
    public static function logout(){
        Flight::set('flight.views.path', __DIR__ ."/../views/login");
        Flight::render('login.php');
    }   
}