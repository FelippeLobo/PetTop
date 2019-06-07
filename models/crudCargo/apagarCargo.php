<?php
$cargo = $_GET['id'];
$bancoDeDados->apagar('cargos',$cargo);
header('Location: '.$_SERVER['HTTP_REFERER']);
?>