<?php
$roteador->get('PetTop','controllers/index.php');
$roteador->get('PetTop/Categorias','controllers/crudCategoria/listCategoria.php');
$roteador->get('PetTop/apagarCategoria','models/crudCategoria/apagarCategoria.php');
$roteador->get('PetTop/editarCategoria','controllers/crudCategoria/editCategoria.php');
$roteador->post('PetTop/editarCategoria/editando','models/crudCategoria/editarCategoria.php');
?>