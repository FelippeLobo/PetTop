<?php
$roteador->get('PetTop','controllers/index.php');
$roteador->get('PetTop/Cargos','controllers/crudCargo/listCargo.php');
$roteador->get('PetTop/apagarCargo','models/crudCargo/apagarCargo.php');
?>