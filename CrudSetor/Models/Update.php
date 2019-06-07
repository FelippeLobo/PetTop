<?php

session_start();
if(isset($_POST['editar']))
{
    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $app['bancoDeDados']->update($id,$nome);

    $_SESSION['mensagem']="Setor editado com sucesso!";
    $_SESSION['tipo_msg']="primary";
    
    header('Location: /CrudSetor');
}
