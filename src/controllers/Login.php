<?php

class Login
{
    public static function estaLogado()
    {
        if(isset($_SESSION['id_usuario']) 
            and isset($_SESSION['nome'])){
            return true;
        }
        return false;
    }

}

