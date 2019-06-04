<?php
$registroPorPg = "4";
if(isset($_GET['pag']))
{
    $pagAtual = $_GET['pag'];
}
else
{
    $pagAtual = "1";
}
$catInicial = $pagAtual - 1;
$catInicial = $catInicial*$registroPorPg;
$numCategorias = $bancoDeDados->contarRegistros('categoria');
$totalPag = ceil($numCategorias/$registroPorPg);
$categorias = $bancoDeDados->selecionarComLimite('categoria',[$catInicial,$registroPorPg]);
$produtos = [];
foreach($categorias as $categoria)
{
    $produtos["categoria {$categoria->id}"] = $bancoDeDados->selecionarOnde('produtos',"id_categoria = {$categoria->id}");
}
require 'Views/crudCategoria/crudCategoria.php'
?>