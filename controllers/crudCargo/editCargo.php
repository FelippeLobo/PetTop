<?php
$cargoId = $_GET['id'];
$cargo = $bancoDeDados->selecionarOnde('cargos',"id = {$cargoId}");
require 'Views/crudCargo/edit-cargo.php';
?>