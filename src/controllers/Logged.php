<?php

class Logged
{
    public static function estaLogado()
    {
        if (isset($_SESSION['id_usuario']) and isset($_SESSION['nome'])) {
            return true;
        }
        Flight::redirect('/login');
    }
}