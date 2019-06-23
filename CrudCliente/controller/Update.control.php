<?php

session_start();
if(isset($_GET['edit']))
{
    $id = $_GET['edit'];
    $cliente=$app['bancoDeDados']->seleciona($id);
    $editSetor=$app['bancoDeDados']->selecionaSetor($cliente['id_setor']);
   
}

var_dump($editSetor);
require 'view/Update.view.php';