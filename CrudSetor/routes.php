<?php


$routes->get('CrudSetor', 'Controllers/CrudSetor.Control.php');
$routes->get('CrudSetor/Setores', 'Controllers/CrudSetor.Control.php');
$routes->get('CrudSetor/apagaSetor' , 'Controllers/Delete.control.php');
$routes->get('CrudSetor/editarSetor' , 'Controllers/Update.control.php');
$routes->post('CrudSetor/editarSetor/editando' , 'Models/Update.php');
$routes->get('CrudSetor/criarSetor' , 'Controllers/Criar.control.php');
$routes->post('CrudSetor/criarSetor/criando' , 'Models/Criar.php');