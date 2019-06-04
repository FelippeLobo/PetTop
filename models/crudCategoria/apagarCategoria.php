<?php
$categoria = $_GET['id'];
$bancoDeDados->apagar('categoria',$categoria);
header('Location: '.$_SERVER['HTTP_REFERER']);
?>