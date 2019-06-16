<?php
$dados = [
    'nome'=>$_POST['nome'],
    'preco'=>$_POST['preco'],
    'id_categoria'=>$_POST['id_categoria'],
    'descricao'=>$_POST['descricao']
];
$bancoDeDados->inserir('produtos',$dados);
header('Location: /PetTop/Produtos');
?>