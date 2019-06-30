<?php
class Requisicao
{
    //Funcao que retorna a uri que sera associada as rotas
    public static function uri()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/');
    }

    //Funcao que retorna o tipo de metodo de comunicacao da pagina (GET ou POST)
    public static function metodo()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
?>