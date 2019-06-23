<?php



$config=require_once 'config.php';
require 'Requisicao.php';
require 'Router.php';
require 'BancoDeDados/Conexao.php';
require 'BancoDeDados/QueryBuilder.php';


$app = [];

$app['config'] = $config;

$app['bancoDeDados'] = new QueryBuilder(Conexao::conectarBD($app['config']['bancoDeDados']));