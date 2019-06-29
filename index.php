<?php
require 'core/bootstrap.php';

Roteador::carregar('rotas.php')->direcionar(Requisicao::uri(),Requisicao::metodo());
?>