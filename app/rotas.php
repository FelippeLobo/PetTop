<?php
$roteador->get('PetTop','Teste@ddDeTeste');

$roteador->get('PetTop/Produtos','Produto@listaProduto');
$roteador->get('PetTop/apagarProduto','Produto@apagarProduto');
$roteador->get('PetTop/editarProduto','Produto@editarProdutoView');
$roteador->post('PetTop/editarProduto/editando','Produto@editarProduto');
$roteador->get('PetTop/criarProduto','Produto@adicionarProdutoView');
$roteador->post('PetTop/criarProduto/adicionando','Produto@adicionarProduto');
$roteador->view('PetTop/Produtos','app/Views/crudProduto/crudProduto.php');
?>