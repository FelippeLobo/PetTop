<?php

session_start();
if(empty($_POST['nome']) || empty($_POST['senha']))
{ 
    
    header('Location: /viewLogin');
    exit();
}

if(isset($_POST['nome']) && isset($_POST['senha']))
{
    $nome=$_POST['nome'];
    $senha=$_POST['senha'];
    $user=$app['bancoDeDados']->seleciona($nome,$senha);
}

var_dump($user);

if($user != false){
    $_SESSION['logado']=true;
    $_SESSION['nome']=$nome;
    header('Location: home');
    exit();
}
else
{
    $_SESSION['mensagemmm']="Usuário ou Senha invalidos!";
    
    header('Location: /viewLogin');
    exit();
    
}
