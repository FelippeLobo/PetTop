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
    public function insere($id_setor,$nome,$sobrenome,$cpf,$email,$cidade,$bairro,$logradouro,$numero_endereco,$anotacoes){
       
        
        $statement= $this->pdo->prepare("INSERT INTO 
                                        cliente (id,cpf,email,cidade,bairro,logradouro,numero_endereco,anotacoes,nome,sobrenome,id_setor)
                                        VALUES (NULL, :cpf, :email, :cidade, :bairro, :logradouro, :numero_endereco, :anotacoes, :nome, :sobrenome, :id_setor) ");
        $statement->bindParam(':cpf', $cpf);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':cidade', $cidade);
        $statement->bindParam(':bairro', $bairro);
        $statement->bindParam(':logradouro', $logradouro);
        $statement->bindParam(':numero_endereco', $numero_endereco);
        $statement->bindParam(':anotacoes', $anotacoes); 
        $statement->bindParam(':nome', $nome);
        $statement->bindParam(':sobrenome', $sobrenome);
        $statement->bindParam(':id_setor', $id_setor);
        $statement->execute();
    }

    //deleta um registro da tabela
    public function delete($id)
    {
        $statement= $this->pdo->prepare("DELETE FROM cliente WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
       
    }

    //seleciona um registro em especifico da tabela
    public function seleciona($id)
    {
        $statement= $this->pdo->prepare("SELECT * FROM cliente WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        $cliente=$statement->fetch(PDO::FETCH_ASSOC);
        return $cliente;
        
    }

    public function selecionaSetor($id)
    {
        $statement= $this->pdo->prepare("SELECT * FROM setor WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        $setor=$statement->fetch(PDO::FETCH_ASSOC);
        return $setor;
        
    }

    //edita a tabela de acordo com um registro fornecido pelo usuario
    public function update($id,$id_setor,$nome,$sobrenome,$cpf,$email,$cidade,$bairro,$logradouro,$numero_endereco,$anotacoes)
    {
        $statement= $this->pdo->prepare("UPDATE cliente 
                                        SET id=:id, 
                                        cpf=:cpf,
                                        email=:email,
                                        cidade=:cidade,
                                        bairro=:bairro,
                                        logradouro=:logradouro,
                                        numero_endereco=:numero_endereco,
                                        anotacoes=:anotacoes,
                                        nome=:nome,
                                        sobrenome=:sobrenome,
                                        id_setor=:id_setor
                                        WHERE id = :id");
        $statement->bindParam(':id', $id);                                
        $statement->bindParam(':cpf', $cpf);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':cidade', $cidade);
        $statement->bindParam(':bairro', $bairro);
        $statement->bindParam(':logradouro', $logradouro);
        $statement->bindParam(':numero_endereco', $numero_endereco);
        $statement->bindParam(':anotacoes', $anotacoes); 
        $statement->bindParam(':nome', $nome);
        $statement->bindParam(':sobrenome', $sobrenome);
        $statement->bindParam(':id_setor', $id_setor);
        $statement->execute();
    }
}

