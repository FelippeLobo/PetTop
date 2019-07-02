<?php

session_start();

class Clientes
{
    public function listarClientes()
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
        $numClientes = App::get('bancoDeDados')->contarRegistros('cliente');
        $totalPag = ceil($numClientes/$registroPorPg);
        $clientes = App::get('bancoDeDados')->selecionarComLimite('cliente',[$catInicial,$registroPorPg]);

    
        foreach($clientes as $cliente)
        {
            $setor["cliente {$cliente->id}"] = App::get('bancoDeDados')->selecionarOnde('setor',"id = {$cliente->id_setor}");
        }
        require 'app/Views/layout/layout.php';
    }

    public function addCliente()
    {
        if (
            isset($_POST['id_setor']) &&
            isset($_POST['nome']) &&
            isset($_POST['sobrenome']) &&
            isset($_POST['cpf']) &&
            isset($_POST['email']) &&
            isset($_POST['cidade']) &&
            isset($_POST['bairro']) &&
            isset($_POST['logradouro']) &&
            isset($_POST['numero_endereco']) &&
            isset($_POST['anotacoes'])
        ) {
            $dados = [
                'id_setor' => $_POST['id_setor'],
                'nome' => $_POST['nome'],
                'sobrenome' => $_POST['sobrenome'],
                'cpf' => $_POST['cpf'],
                'email' => $_POST['email'],
                'cidade' => $_POST['cidade'],
                'bairro' => $_POST['bairro'],
                'logradouro' => $_POST['logradouro'],
                'numero_endereco' => $_POST['numero_endereco'],
                'anotacoes' => $_POST['anotacoes']
            ];

            App::get('bancoDeDados')->inserir('cliente', $dados);

            $_SESSION['mensagem'] = "Cliente criado com sucesso!";
            $_SESSION['tipo_msg'] = "success";


            header('Location: /PetTop/Clientes');
        }
    }

    public function addClienteView()
    {
        $setores = App::get('bancoDeDados')->selecionarTudo('setor');
        require 'app/Views/layout/layout.php';
    }

    public function editarClienteView()
    {
        $id = $_GET['edit'];
        $cliente = App::get('bancoDeDados')->selecionarOnde('cliente' , "id = {$id} ");
        $Setores = App::get('bancoDeDados')->selecionarTudo('setor');
        
        //require 'app/Views/CrudCliente/Update.view.php';
        require 'app/Views/layout/layout.php';
    }

    public function editarCliente()
    { 
        $id = $_GET['clienteId'];
        if (isset($_POST['editandoCliente'])) {

            $dados =[
            'id_setor' => $_POST['id_setor'],
            'nome' => $_POST['nome'],
            'sobrenome' => $_POST['sobrenome'],
            'cpf' => $_POST['cpf'],
            'email' => $_POST['email'],
            'cidade' => $_POST['cidade'],
            'bairro' => $_POST['bairro'],
            'logradouro' => $_POST['logradouro'],
            'numero_endereco' => $_POST['numero_endereco'],
            'anotacoes' => $_POST['anotacoes']
            ];

            App::get('bancoDeDados')->editar('cliente',$dados,$id);
        
        
            $_SESSION['mensagem'] = "Setor editado com sucesso!";
            $_SESSION['tipo_msg'] = "primary";
        
        
            header('Location: /PetTop/Clientes');
        }
        
    }

    public function deletarCliente()
    {
        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            App::get('bancoDeDados')->apagar('cliente', $id);

            $_SESSION['mensagem'] = "Cliente excluido com sucesso!";
            $_SESSION['tipo_msg'] = "danger";

            header('Location: '.$_SERVER['HTTP_REFERER']);
        }
    }
}
