<?php
$produtoId = $_GET['id'];
$dados = [
    'nome'=>$_POST['nome'],
    'preco'=>$_POST['preco'],
    'id_categoria'=>$_POST['id_categoria'],
    'descricao'=>$_POST['descricao']
];
$bancoDeDados->editar('produtos',$dados,$produtoId);
header('Location: /PetTop/Produtos');
?>