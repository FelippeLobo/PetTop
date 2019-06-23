<?php

session_start();

if (isset($_POST['editandoCliente'])) {

    $id = $_POST['id'];
    $id_setor = $_POST['id_setor'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $logradouro = $_POST['logradouro'];
    $numero_endereco = $_POST['numero_endereco'];
    $anotacoes = $_POST['anotacoes'];
    var_dump($_POST['id_setor']);
    $app['bancoDeDados']->update($id,$id_setor,$nome,$sobrenome,$cpf,$email,$cidade,$bairro,$logradouro,$numero_endereco,$anotacoes);


    $_SESSION['mensagem'] = "Setor editado com sucesso!";
    $_SESSION['tipo_msg'] = "primary";


    header('Location: /CrudCliente');
}
