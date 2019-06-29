<?php
class Venda
{
    public function listaVenda()
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
        $vendInicial = $pagAtual - 1;
        $vendInicial = $vendInicial*$registroPorPg;
        $numVendas = App::get('bancoDeDados')->contarRegistros('vendas');
        $totalPag = ceil($numVendas/$registroPorPg);
        $vendas = App::get('bancoDeDados')->selecionarComLimite('vendas',[$vendInicial,$registroPorPg]);
        $produto = [];
        $usuario = [];
        $cliente = [];
        foreach($vendas as $venda)
        {
            $produto["venda {$venda->id}"] = App::get('bancoDeDados')->selecionarOnde('produtos',"id = {$venda->id_produto}");
            $usuario["venda {$venda->id}"] = App::get('bancoDeDados')->selecionarOnde('users',"id = {$venda->id_user}");
            $cliente["venda {$venda->id}"] = App::get('bancoDeDados')->selecionarOnde('cliente',"id = {$venda->id_cliente}");
        }
        
        require 'app/Views/crudVenda/list-venda.php';
    }
}
?>