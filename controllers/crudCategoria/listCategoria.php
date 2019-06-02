<?php
$categorias = $bancoDeDados->selecionarTudo('categoria');
$produtos = [];
foreach($categorias as $categoria)
{
    $produtos["categoria {$categoria->id}"] = $bancoDeDados->selecionarOnde('produtos',"id_categoria = {$categoria->id}");
}
require 'Views/crudCategoria/crudCategoria.php'
?>