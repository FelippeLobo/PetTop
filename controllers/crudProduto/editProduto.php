<?php
$produtoId = $_GET['id'];
$produto = $bancoDeDados->selecionarOnde('produtos',"id = {$produtoId}");
$categorias = $bancoDeDados->selecionarTudo('categoria');
require 'Views/crudProduto/editarProduto.php';
?>