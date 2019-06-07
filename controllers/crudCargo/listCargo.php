<?php
$registroPorPg = "4";
if(isset($_GET['pag']))
{
    $pagAtual = $_GET['pag'];
}
else
{
    $pagAtual = "1";
}
$cargoInicial = $pagAtual - 1;
$cargoInicial = $cargoInicial*$registroPorPg;
$numCargos = $bancoDeDados->contarRegistros('cargos');
$totalPag = ceil($numCargos/$registroPorPg);
$cargos = $bancoDeDados->selecionarComLimite('cargos',[$cargoInicial,$registroPorPg]);
$usuarios = [];
foreach($cargos as $cargo)
{
    $usuarios["cargo {$cargo->id}"] = $bancoDeDados->selecionarOnde('users',"id_cargo = {$cargo->id}");
}
require 'Views/crudCargo/list-cargo.php';
?>