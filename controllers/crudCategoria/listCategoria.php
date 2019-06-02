<?php
$categorias = $bancoDeDados->selecionarTudo('categoria');
$produtos = [];
foreach($categorias as $categoria)
{
    $produtos["categoria {$categoria->id}"] = $bancoDeDados->selecionarPorHeranca('produtos','id_categoria',$categoria->id);
}
require 'Views/crudCategoria/crudCategoria.php'
?>