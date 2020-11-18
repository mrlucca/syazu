<?php

class ApiRank
{
    public static function setData($nome, $senha)
    {
        if ($nome == "lucca" and $senha == "1058774"){
            echo json_encode(["cadastrado"=> true, "id"=> "ainda em teste", "data"=> "hello"]);
        } else {
            echo json_encode(["cadastrado"=> false, "error" => "senha invalida"]);
        }   
    }
}