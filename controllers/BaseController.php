<?php

class BaseController {

    protected $view;
    protected $layout;
    protected $model;

    public function __construct() {
        
    }

    public function loadView($view, $data = [], $layout = 'default')
    {
        $path = ROOT_DIR . DS . 'views' . DS  . $view . '.php';
        $layout = ROOT_DIR . DS . 'views' . DS . 'layouts' . DS . $layout . '.php';
        $data['data'] = $data;
        $data['file'] = $path;
        include($layout);
    }

    public function redirect($controller, $method = null, $params = [])
    {
        if (!$method) $method = DEFAULT_METHOD;
        $url = BASE_URL . $controller . "/" . $method;
        if ($params) {
            $url .= '/' . join("/", $params);
        }
        header("Location: " . $url);
    }

}
