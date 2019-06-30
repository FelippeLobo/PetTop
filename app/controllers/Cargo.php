<?php
session_start();

class Cargo
{
    public function listaCargo()
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
        $cargoInicial = $pagAtual - 1;
        $cargoInicial = $cargoInicial*$registroPorPg;
        $numCargos = App::get('bancoDeDados')->contarRegistros('cargos');
        $totalPag = ceil($numCargos/$registroPorPg);
        $cargos = App::get('bancoDeDados')->selecionarComLimite('cargos',[$cargoInicial,$registroPorPg]);
        $usuarios = [];
        foreach($cargos as $cargo)
        {
            $usuarios["cargo {$cargo->id}"] = App::get('bancoDeDados')->selecionarOnde('users',"id_cargo = {$cargo->id}");
        }
        require 'app/Views/layout/layout.php';
    }

    public function apagarCargo()
    {
        $cargo = $_GET['id'];
        App::get('bancoDeDados')->apagar('cargos',$cargo);
        $_SESSION['mensagem'] = "Cargo excluido com sucesso!";
        $_SESSION['tipo_msg'] = "danger";
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }

    public function editarCargoView()
    {

    }

    public function editarCargo()
    {

    }

    public function adicionarCargoView()
    {

    }

    public function adicionarCargo()
    {

    }
}
?>