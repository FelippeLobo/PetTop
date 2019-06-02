<?php
class ConstrutorDeQuerys
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selecionarTudo($tabela)
    {
        $elementos = $this->pdo->prepare("select * from {$tabela}");
        $elementos->execute();
        return $elementos->fetchAll(PDO::FETCH_CLASS);
    }
    public function inserir($tabela,$paramentros)
    {
        $sql = sprintf('insert into %s (%s) values (%s)',$tabela,implode(', ',array_keys($paramentros)),':'.implode(', :',array_keys($paramentros)));
        try
        {
            $elementos = $this->pdo->prepare($sql);
            $elementos->execute($paramentros);
        }
        catch(Exception $e)
        {
            $e->getMessage();
        }    
    }
    public function selecionarOnde($tabela,$paramentros)
    {
        $elementos = $this->pdo->prepare("select * from {$tabela} where {$paramentros}");
        $elementos->execute();
        return $elementos->fetchAll(PDO::FETCH_CLASS);
    }
    public function apagar($tabela,$paramentro)
    {
        $elemento = $this->pdo->prepare("delete from {$tabela} where id = {$paramentro}");
        $elemento->execute();
    }
}
?>