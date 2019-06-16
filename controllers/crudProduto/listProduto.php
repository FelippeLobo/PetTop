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
$prodInicial = $pagAtual - 1;
$prodInicial = $prodInicial*$registroPorPg;
$numProdutos = $bancoDeDados->contarRegistros('produtos');
$totalPag = ceil($numProdutos/$registroPorPg);
$produtos = $bancoDeDados->selecionarComLimite('produtos',[$prodInicial,$registroPorPg]);
$categoria = [];
foreach($produtos as $produto)
{
    $categoria["produto {$produto->id}"] = $bancoDeDados->selecionarOnde('categoria',"id = {$produto->id_categoria}");
}

require 'Views/crudProduto/crudProduto.php'
?>