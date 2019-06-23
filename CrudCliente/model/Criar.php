<?php

session_start();

if(
    isset($_POST['id_setor']) &&
    isset($_POST['nome']) &&
    isset($_POST['sobrenome']) &&
    isset($_POST['cpf']) &&
    isset($_POST['email']) &&
    isset($_POST['cidade']) &&
    isset($_POST['bairro']) &&
    isset($_POST['logradouro']) &&
    isset($_POST['numero_endereco']) &&
    isset($_POST['anotacoes']))
    {

        $id_setor=$_POST['id_setor'];
        $nome=$_POST['nome'];
        $sobrenome=$_POST['sobrenome'];
        $cpf=$_POST['cpf'];
        $email=$_POST['email'];
        $cidade=$_POST['cidade'];
        $bairro=$_POST['bairro'];
        //$rua=$_POST['rua'];
        $logradouro=$_POST['logradouro'];
        $numero_endereco=$_POST['numero_endereco'];
        $anotacoes=$_POST['anotacoes'];
        
        $app['bancoDeDados']->insere($id_setor,$nome,$sobrenome,$cpf,$email,$cidade,$bairro,$logradouro,$numero_endereco,$anotacoes);

        $_SESSION['mensagem']="Cliente criado com sucesso!";
        $_SESSION['tipo_msg']="success";
    

        header('Location: /CrudCliente');

    }