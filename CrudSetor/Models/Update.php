<?php

if(isset($_POST['editar']))
{
    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $app['bancoDeDados']->update($id,$nome);
    header('Location: /CrudSetor');
}
