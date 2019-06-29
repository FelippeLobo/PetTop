<?php
require 'core/bootstrap.php';

Roteador::carregar('app/rotas.php')->direcionar(Requisicao::uri(),Requisicao::metodo());
?>