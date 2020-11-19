<?php


class Sair
{
    public static function logout(){
        Flight::render('/login/login.php');
    }   
}