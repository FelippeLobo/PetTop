<?php
$categorias = $bancoDeDados->selecionarTudo('categoria');
require 'Views/crudProduto/adicionarProduto.php';
?>