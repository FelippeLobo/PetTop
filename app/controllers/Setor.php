<?php

session_start();

class Setor
{
    public function listarSetores()
    {
        $registroPorPg = "6";
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
        $numSetores = App::get('bancoDeDados')->contarRegistros('setor');
        $totalPag = ceil($numSetores/$registroPorPg);
        $setores = App::get('bancoDeDados')->selecionarComLimite('setor',[$catInicial,$registroPorPg]);
        
     
        require 'app/Views/layout/layout.php';
    }

    public function addSetor()
    {
        if (isset($_POST['nome'])) {

            $dados = [
                'nome' => $_POST['nome']
            ];

            App::get('bancoDeDados')->inserir('setor', $dados);

            $_SESSION['mensagem'] = "Setor criado com sucesso!";
            $_SESSION['tipo_msg'] = "success";

            header('Location: /PetTop/Setores');
        }
    }

    public function addSetorView()
    {
        require 'app/Views/layout/layout.php';
    }

    public function editarSetorView()
    {   
        $id = $_GET['edit'];
        $setor = App::get('bancoDeDados')->selecionarOnde('setor', "id = {$id} ");
        
        require 'app/Views/layout/layout.php';
    }

    public function editarSetor()
    {
        $id = $_GET['idSetor'];
        if (isset($_POST['editar'])) {

            $dados = [
                'nome' => $_POST['nome']
            ];

            App::get('bancoDeDados')->editar('setor', $dados, $id);

            $_SESSION['mensagem'] = "Setor editado com sucesso!";
            $_SESSION['tipo_msg'] = "primary";

            header('Location: /PetTop/Setores');
        }
    }

    public function deletarSetor()
    {
        if (isset($_GET['delete'])) {

            $id = $_GET['delete'];
            App::get('bancoDeDados')->apagar('setor', $id);

            $_SESSION['mensagem'] = "Setor excluido com sucesso!";
            $_SESSION['tipo_msg'] = "danger";

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
}
