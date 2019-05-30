<?php
$config = require 'config.php';

require 'core/bancoDeDados/bancoDeDados.php';
require 'core/bancoDeDados/construtorDeQuerys.php';
require 'core/roteador.php';
require 'core/requisicao.php';

return new ConstrutorDeQuerys(Conexao::conectar($config['bancoDeDados']));
?>