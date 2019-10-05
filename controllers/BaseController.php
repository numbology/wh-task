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
        $data['file'] = $path;
        include($layout);
    }

}
