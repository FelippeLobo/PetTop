<?php

require '../core/bootstrap.php';

if(isset($_GET['show']))
{
    $id=$_GET['show'];
    $setor=$app['bancoDeDados']->seleciona($id);
    
}

