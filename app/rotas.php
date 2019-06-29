<?php
//Produto
$roteador->get('PetTop/Produtos','Produto@listaProduto');
$roteador->get('PetTop/apagarProduto','Produto@apagarProduto');
$roteador->get('PetTop/editarProduto','Produto@editarProdutoView');
$roteador->post('PetTop/editarProduto/editando','Produto@editarProduto');
$roteador->get('PetTop/criarProduto','Produto@adicionarProdutoView');
$roteador->post('PetTop/criarProduto/adicionando','Produto@adicionarProduto');
$roteador->view('PetTop/Produtos','app/Views/crudProduto/crudProduto.php');

//Venda
$roteador->get('PetTop/Vendas','Venda@listaVenda');
$roteador->get('PetTop/apagarVenda','Venda@apagarVenda');
$roteador->get('PetTop/editarVenda','Venda@editarVendaView');
$roteador->post('PetTop/editarVenda/editando','Venda@editarVenda');
$roteador->get('PetTop/criarVenda','Venda@adicionarVendaView');
$roteador->post('PetTop/criarVenda/adicionando','Venda@adicionarVenda');
?>