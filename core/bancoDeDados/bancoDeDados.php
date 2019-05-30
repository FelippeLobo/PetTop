<?php
class BancoDeDados
{
    public function conectar($config)
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