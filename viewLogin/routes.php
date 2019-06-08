<?php


$routes->get('viewLogin', 'Controllers/login.php');
$routes->post('viewLogin/login' , 'models/login.php');
$routes->get('viewLogin/home' , 'views/dashBoard.php');
