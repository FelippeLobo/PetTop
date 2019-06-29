<?php
//Requerindo todos os principais arquivos de funcionamento do sistema
require 'core/app.php';
require 'core/bancoDeDados/bancoDeDados.php';
require 'core/bancoDeDados/construtorDeQuerys.php';
require 'core/roteador.php';
require 'core/requisicao.php';

//Adicionando arquivos de dados ao registro estatico
App::ligar('config',require 'config.php');
//Adicionando instancia de query do banco de dados no resgistro estatico
App::ligar('bancoDeDados',new ConstrutorDeQuerys(BancoDeDados::conectar(App::get('config')['bancoDeDados'])));
?>