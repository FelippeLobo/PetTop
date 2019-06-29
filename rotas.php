<?php
$roteador->get('PetTop','Teste@ddDeTeste');

$roteador->get('PetTop/Produtos','Produto@ListaProduto');
/*
$roteador->get('PetTop/apagarProduto','models/crudProduto/apagarProduto.php');
$roteador->get('PetTop/editarProduto','controllers/crudProduto/editProduto.php');
$roteador->post('PetTop/editarProduto/editando','models/crudProduto/editarProduto.php');
$roteador->get('PetTop/criarProduto','controllers/crudProduto/addProduto.php');
$roteador->post('PetTop/criarProduto/adicionando','models/crudProduto/adicionarProduto.php');
*/
$roteador->view('PetTop/Produtos','Views/crudProduto/crudProduto.php');
?>