<?php
class Produto
{
    public function ListaProduto()
    {
        $registroPorPg = "4";
        if(isset($_GET['pag']))
        {
            $pagAtual = $_GET['pag'];
        }
        else
        {
            $pagAtual = "1";
        }
        $prodInicial = $pagAtual - 1;
        $prodInicial = $prodInicial*$registroPorPg;
        $numProdutos = App::get('bancoDeDados')->contarRegistros('produtos');
        $totalPag = ceil($numProdutos/$registroPorPg);
        $produtos = App::get('bancoDeDados')->selecionarComLimite('produtos',[$prodInicial,$registroPorPg]);
        $categoria = [];
        foreach($produtos as $produto)
        {
            $categoria["produto {$produto->id}"] = App::get('bancoDeDados')->selecionarOnde('categoria',"id = {$produto->id_categoria}");
        }

        require 'layout/index.php';
    }
}

?>