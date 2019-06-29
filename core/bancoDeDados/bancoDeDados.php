<?php
class BancoDeDados
{
    //Funcao responsavel por conectar o sistema ao banco de dados, ela exige um arquivo de configuracao
    public static function conectar($config)
    {
        try
        {
            return new PDO($config['servidor'].';dbname='.$config['nome'],$config['usuario'],$config['senha'],$config['opcoes']); 
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }
}
?>