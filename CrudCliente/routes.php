<?php


$routes->get('CrudCliente', 'controller/crudCliente.Control.php');
$routes->get('CrudCliente/Clientes', 'controller/crudCliente.control.php');
$routes->get('CrudCliente/apagaCliente' , 'model/Delete.php');
$routes->get('CrudCliente/editarCliente' , 'controller/Update.control.php');
$routes->post('CrudCliente/editarCliente/editando' , 'model/Update.php');
$routes->get('CrudCliente/criarCliente' , 'controller/Criar.control.php');
$routes->post('CrudCliente/criarCliente/criando' , 'model/Criar.php');