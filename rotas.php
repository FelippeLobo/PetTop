<?php
$roteador->get('PetTop','controllers/index.php');
$roteador->get('PetTop/Produtos','controllers/crudProduto/listProduto.php');
$roteador->get('PetTop/apagarProduto','models/crudProduto/apagarProduto.php');
$roteador->get('PetTop/editarProduto','controllers/crudProduto/editProduto.php');
$roteador->post('PetTop/editarProduto/editando','models/crudProduto/editarProduto.php')
?>