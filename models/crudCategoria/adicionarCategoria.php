<?php
$dados = ['nome'=>$_POST['nome']];
$bancoDeDados->inserir('categoria',$dados);
header('Location: /PetTop/Categorias');
?>