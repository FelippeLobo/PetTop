<?php
$produto = $_GET['id'];
$bancoDeDados->apagar('produtos',$produto);
header('Location: '.$_SERVER['HTTP_REFERER']);
?>