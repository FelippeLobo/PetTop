<?php
class ConstrutorDeQuerys
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selecionar($tabela,$elemento)
    {
        $coluna = $this->pdo->prepare("select {$elemento} from {$tabela}");
    }
}
?>