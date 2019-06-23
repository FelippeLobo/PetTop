<?php

session_start();
if(isset($_GET['delete']))
{
    $id=$_GET['delete'];
    $app['bancoDeDados']->delete($id);

    $_SESSION['mensagem']="Cliente excluido com sucesso!";
    $_SESSION['tipo_msg']="danger";

    header('Location: /CrudCliente');
}