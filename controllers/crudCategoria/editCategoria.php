<?php
$categoriaId = $_GET['id'];
$categoria = $bancoDeDados->selecionarOnde('categoria',"id = {$categoriaId}");
require 'Views/crudCategoria/editarCategoria.php';
?>