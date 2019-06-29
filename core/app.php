<?php
class App
{
    protected static $registro = [];

    public static function ligar($chave,$valor)
    {
        static::$registro[$chave] = $valor; 
    }

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