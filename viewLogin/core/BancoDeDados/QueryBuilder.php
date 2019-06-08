<?php

class QueryBuilder{
    
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo=$pdo;
    }

    //seleciona todos os registros de uma dada tabela
    public function selecionaTabela($tabela)
    {
        $conection = $this->pdo->prepare("select * from {$tabela} ");

        $conection->execute();
        
        $results = $conection->fetchAll() ;

        return $results;
    }

    //insere um registro na tabela
    public function insere($nome){
       
        // $nome = $_POST["nome"];
        $statement= $this->pdo->prepare("INSERT INTO users (nome) VALUES (:nome)");
        $statement->bindParam(':nome', $nome);
        $statement->execute();
    }

    //deleta um registro da tabela
    public function delete($id)
    {
        $statement= $this->pdo->prepare("DELETE FROM users WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
       
    }

    //seleciona um registro em especifico da tabela
    public function seleciona($nome,$senha)
    {
        $statement= $this->pdo->prepare("SELECT nome,id FROM users WHERE nome = :nome AND senha = :senha");
        $statement->bindParam(':nome', $nome);
        $statement->bindParam(':senha', $senha);
        $statement->execute();
        $user=$statement->fetch(PDO::FETCH_ASSOC);
        return $user;
        
    }

    //edita a tabela de acordo com um registro fornecido pelo usuario
    public function update($id,$nome)
    {
        $statement= $this->pdo->prepare("UPDATE users SET nome = :nome WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->bindParam(':nome', $nome);
        $statement->execute();
    }
}

