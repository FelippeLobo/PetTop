<?php
$bancoDeDados = require 'core/bootstrap.php';

require Roteador::carregar('rotas.php')->direcionar(Requisicao::uri(),Requisicao::metodo());
?>