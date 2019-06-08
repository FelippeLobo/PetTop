<?php


require 'core/bootstrap.php';



$router = Router::load('routes.php');


require $router->direct(Requisicao::url(),Requisicao::method());