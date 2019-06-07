<?php

session_start();

if(isset($_POST['nome']))
{
    $nome=$_POST['nome'];
    
    $app['bancoDeDados']->insere($nome);

    $_SESSION['mensagem']="Setor criado com sucesso!";
    $_SESSION['tipo_msg']="success";

    header('Location: /CrudSetor');
}
