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

    public function apagarVenda()
    {
        $venda = $_GET['id'];
        App::get('bancoDeDados')->apagar('vendas',$venda);
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }

    public function editarVendaView()
    {
        $vendaId = $_GET['id'];
        $venda = App::get('bancoDeDados')->selecionarOnde('vendas',"id = {$vendaId}");
        $produtos = App::get('bancoDeDados')->selecionarTudo('produtos');
        $usuarios = App::get('bancoDeDados')->selecionarTudo('users');
        $clientes = App::get('bancoDeDados')->selecionarTudo('cliente');
        require 'app/Views/crudVenda/edit-venda.php';
    }

    public function editarVenda()
    {
        $vendaId = $_GET['id'];
        $dados = [
            'id_user'=>$_POST['id_user'],
            'id_cliente'=>$_POST['id_cliente'],
            'id_produto'=>$_POST['id_produto'],
            'desconto'=>$_POST['desconto'],
            'qtd_vendida'=>$_POST['qtd_vendida'],
            'data_venda'=>$_POST['data_venda'],
            'anotacoes'=>$_POST['anotacoes']
        ];
        App::get('bancoDeDados')->editar('vendas',$dados,$vendaId);
        header('Location: /PetTop/Vendas');
    }

    public function adicionarVendaView()
    {
        $produtos = App::get('bancoDeDados')->selecionarTudo('produtos');
        $usuarios = App::get('bancoDeDados')->selecionarTudo('users');
        $clientes = App::get('bancoDeDados')->selecionarTudo('cliente');
        require 'app/Views/crudVenda/add-venda.php';    
    }

    public function adicionarVenda()
    {
        $dados = [
            'id_user'=>$_POST['id_user'],
            'id_cliente'=>$_POST['id_cliente'],
            'id_produto'=>$_POST['id_produto'],
            'desconto'=>$_POST['desconto'],
            'qtd_vendida'=>$_POST['qtd_vendida'],
            'data_venda'=>$_POST['data_venda'],
            'anotacoes'=>$_POST['anotacoes']
        ];
        App::get('bancoDeDados')->inserir('vendas',$dados);
        header('Location: /PetTop/Vendas');    
    }
}
?>