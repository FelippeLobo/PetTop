<?php
$cargoId = $_GET['id'];
$dados = ['nome'=>$_POST['nome']];
$bancoDeDados->editar('cargos',$dados,$cargoId);
header('Location: /PetTop/Cargos');
?>