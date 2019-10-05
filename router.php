<?php

$explode = explode("/", rtrim((ltrim($_SERVER['REQUEST_URI'], "/")), "/"));

$controller = DEFAULT_CONTROLLER;
$method = DEFAULT_METHOD;

if (!empty($explode[1])) {
    $method = $explode[1];
    unset($explode[1]);
}

if (!empty($explode[0])) {
    $controller = ucfirst($explode[0] . 'Controller');
    unset($explode[0]);
}

if (!class_exists($controller)) {
    $controller = DEFAULT_CONTROLLER;
}

$activeController = new $controller();

if (!method_exists($activeController, $method)) {
    ErrorController::getError();
    die;
};

call_user_func_array([$activeController, $method], $explode);
