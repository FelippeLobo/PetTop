<?php

session_start();

class Setor
{
    public function listarSetores()
    {
        $setores=App::get('bancoDeDados')->selecionarTudo('setor');
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
        $id = $_GET['edit'];
        if (isset($_POST['editar'])) {

            $dados = [
                'id' => $_POST['id'],
                'nome' => $_POST['nome']
            ];

            App::get('bancoDeDados')->editar('setor', $dados, $id);

            $_SESSION['mensagem'] = "Setor editado com sucesso!";
            $_SESSION['tipo_msg'] = "primary";

            header('Location: /CrudSetor');
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
