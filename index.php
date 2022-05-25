<?php
include_once 'backend/Controllers/ItemsController.php';
include_once 'backend/render_template.php';
include_once 'backend/Classes/Repository.php';


$baseUrl = 'bro.board/index.php/';
$requestUrl = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$requestString = substr($requestUrl, strlen($baseUrl));

$urlParams = explode('/', $requestString);

$controllerName = ucfirst(array_shift($urlParams)).'Controller';
$actionName = strtolower(array_shift($urlParams)).'Action';

$controller = new $controllerName;
$controller->$actionName();