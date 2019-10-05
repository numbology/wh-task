<?php

function autoload($class)
{
    if (strpos($class, 'Controller') > 0) {
        $path = ROOT_DIR . DS . 'controllers' . DS . $class . '.php';
    } else {
        $path = ROOT_DIR . DS . 'models' . DS . $class . '.php';
    }

    if (file_exists($path)) {
        include($path);
    } 
}
spl_autoload_register("autoload");