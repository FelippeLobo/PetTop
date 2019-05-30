<?php
class Requisicao
{
    public static function uri()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/');
    }

    public static function metodo()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
?>