<?php
session_start();

class Produto
{
    public function listaProduto()
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

        require 'app/Views/layout/layout.php';
    }

    public function apagarProduto()
    {
        $produto = $_GET['id'];
        App::get('bancoDeDados')->apagar('produtos',$produto);
        $_SESSION['mensagem'] = "Produto excluido com sucesso!";
        $_SESSION['tipo_msg'] = "danger";
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }

    public function editarProdutoView()
    {
        $produtoId = $_GET['id'];
        $produto = App::get('bancoDeDados')->selecionarOnde('produtos',"id = {$produtoId}");
        $categorias = App::get('bancoDeDados')->selecionarTudo('categoria');
        require 'app/Views/layout/layout.php';
    }

    public function editarProduto()
    {
        $produtoId = $_GET['id'];
        $dados = [
            'nome'=>$_POST['nome'],
            'preco'=>$_POST['preco'],
            'id_categoria'=>$_POST['id_categoria'],
            'descricao'=>$_POST['descricao']
        ];
        App::get('bancoDeDados')->editar('produtos',$dados,$produtoId);
        $_SESSION['mensagem'] = "Produto editado com sucesso!";
        $_SESSION['tipo_msg'] = "primary";
        header('Location: /PetTop/Produtos');
    }

    public function adicionarProdutoView()
    {
        $categorias = App::get('bancoDeDados')->selecionarTudo('categoria');
        require 'app/Views/layout/layout.php';
    }

    public function adicionarProduto()
    {
        $dados = [
            'nome'=>$_POST['nome'],
            'preco'=>$_POST['preco'],
            'id_categoria'=>$_POST['id_categoria'],
            'descricao'=>$_POST['descricao']
        ];
        App::get('bancoDeDados')->inserir('produtos',$dados);
        $_SESSION['mensagem'] = "Produto criado com sucesso!";
        $_SESSION['tipo_msg'] = "success";
        header('Location: /PetTop/Produtos');
    }
}

?>