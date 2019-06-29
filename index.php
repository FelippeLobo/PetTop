<?php
//Requerindo configuracao do sistema para o index
require 'core/bootstrap.php';

//Chamando instancia da classe e funcao requisitada na url 
Roteador::carregar('app/rotas.php')->direcionar(Requisicao::uri(),Requisicao::metodo());
?>