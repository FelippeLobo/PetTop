<?php
require 'core/app.php';
require 'core/bancoDeDados/bancoDeDados.php';
require 'core/bancoDeDados/construtorDeQuerys.php';
require 'core/roteador.php';
require 'core/requisicao.php';

App::ligar('config',require 'config.php');
App::ligar('bancoDeDados',new ConstrutorDeQuerys(BancoDeDados::conectar(App::get('config')['bancoDeDados'])));

//return new ConstrutorDeQuerys(BancoDeDados::conectar($config['bancoDeDados']));
?>