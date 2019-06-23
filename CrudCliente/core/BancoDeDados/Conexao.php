<?php

class Conexao
{
    //realiza a conexao com o banco de dados
    public static function conectarBD($config)
    {
        try {
            return new PDO($config['servidor'].';dbname='.$config['nome'],$config['usuario'],$config['senha'], $config['opcoes'] );
        } catch (PDOException $e) {
            die('Falha na conexao:' . $e->getMessage());
        }
    }
}
