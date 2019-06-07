<?php
$roteador->get('PetTop','controllers/index.php');
$roteador->get('PetTop/Cargos','controllers/crudCargo/listCargo.php');
$roteador->get('PetTop/apagarCargo','models/crudCargo/apagarCargo.php');
$roteador->get('PetTop/editarCargo','controllers/crudCargo/editCargo.php');
$roteador->post('PetTop/editarCargo/editando','models/crudCargo/editarCargo.php');
?>