<?php
$roteador->get('PetTop','controllers/index.php');
$roteador->get('PetTop/Categorias','controllers/crudCategoria/listCategoria.php');
$roteador->get('PetTop/apagarCategoria','controllers/crudCategoria/apagarCategoria.php');
?>