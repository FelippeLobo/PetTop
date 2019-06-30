<?php
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
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }

    public function editarCategoriaView()
    {
        $categoriaId = $_GET['id'];
        $categoria = App::get('bancoDeDados')->selecionarOnde('categoria',"id = {$categoriaId}");
        require 'app/Views/crudCategoria/editarCategoria.php';
    }

    public function editarCategoria()
    {
        $categoriaId = $_GET['id'];
        $dados = ['nome'=>$_POST['nome']];
        App::get('bancoDeDados')->editar('categoria',$dados,$categoriaId);
        header('Location: /PetTop/Categorias');
    }

    public function adicionarCategoriaView()
    {
        require 'app/Views/crudCategoria/adicionarCategoria.php';
    }

    public function adicionarCategoria()
    {
        $dados = ['nome'=>$_POST['nome']];
        App::get('bancoDeDados')->inserir('categoria',$dados);
        header('Location: /PetTop/Categorias');
    }
}
?>