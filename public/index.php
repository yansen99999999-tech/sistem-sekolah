<?php
require_once './app/core/Router.php' ;

use App\Core\Router;

$router =  new Router();
$router->add('GET','/students','StudentControllers','index');
$router->add('GET','/students/create','StudentControllers','create');
$router->add('GET','/students/create','StudentControllers','create');

$router->run();
?>