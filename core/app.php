<?php
class App
{
    protected static $registro = [];

    //Funcao que adiciona/edita uma chave no registro de dados estatico do sistema
    public static function ligar($chave,$valor)
    {
        static::$registro[$chave] = $valor; 
    }

    //Funcao que retorna o elemento contido na chave selecionada
    public static function get($chave)
    {
        if(array_key_exists($chave,static::$registro))
        {
            return static::$registro[$chave];
        }
        else
        {
            throw new Exception("Chave {$chave} não foi encontrada");
        }
    }
}
?>