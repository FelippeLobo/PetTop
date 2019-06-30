<?php
session_start();

class Categoria
{
    public function listaCategoria()
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
        $catInicial = $pagAtual - 1;
        $catInicial = $catInicial*$registroPorPg;
        $numCategorias = App::get('bancoDeDados')->contarRegistros('categoria');
        $totalPag = ceil($numCategorias/$registroPorPg);
        $categorias = App::get('bancoDeDados')->selecionarComLimite('categoria',[$catInicial,$registroPorPg]);
        $produtos = [];
        foreach($categorias as $categoria)
        {
            $produtos["categoria {$categoria->id}"] = App::get('bancoDeDados')->selecionarOnde('produtos',"id_categoria = {$categoria->id}");
        }
        require 'app/Views/layout/layout.php';
    }

    public function apagarCategoria()
    {
        $categoria = $_GET['id'];
        App::get('bancoDeDados')->apagar('categoria',$categoria);
        $_SESSION['mensagem'] = "Categoria excluida com sucesso!";
        $_SESSION['tipo_msg'] = "danger";
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }

    public function editarCategoriaView()
    {
        $categoriaId = $_GET['id'];
        $categoria = App::get('bancoDeDados')->selecionarOnde('categoria',"id = {$categoriaId}");
        require 'app/Views/layout/layout.php';
    }

    public function editarCategoria()
    {
        $categoriaId = $_GET['id'];
        $dados = ['nome'=>$_POST['nome']];
        App::get('bancoDeDados')->editar('categoria',$dados,$categoriaId);
        $_SESSION['mensagem'] = "Categoria editada com sucesso!";
        $_SESSION['tipo_msg'] = "primary";
        header('Location: /PetTop/Categorias');
    }

    public function adicionarCategoriaView()
    {
        require 'app/Views/layout/layout.php';
    }

    public function adicionarCategoria()
    {
        $dados = ['nome'=>$_POST['nome']];
        App::get('bancoDeDados')->inserir('categoria',$dados);
        $_SESSION['mensagem'] = "Categoria criada com sucesso!";
        $_SESSION['tipo_msg'] = "success";
        header('Location: /PetTop/Categorias');
    }
}
?>