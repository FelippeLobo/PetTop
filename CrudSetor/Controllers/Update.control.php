<?php



if(isset($_GET['edit']))
{
    $id=$_GET['edit'];
    $setor=$app['bancoDeDados']->seleciona($id);
}

require 'views/Update.view.php';

