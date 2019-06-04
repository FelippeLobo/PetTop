<?php
$categoriaId = $_GET['id'];
$dados = ['nome'=>$_POST['nome']];
$bancoDeDados->editar('categoria',$dados,$categoriaId);
header('Location: /PetTop/Categorias');
?>