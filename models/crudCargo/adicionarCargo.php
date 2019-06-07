<?php
$dados = ['nome'=>$_POST[nome]];
$bancoDeDados->inserir('cargos',$dados);
header('Location: /PetTop/Cargos');
?>