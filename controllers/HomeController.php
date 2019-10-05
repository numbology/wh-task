<?php

class HomeController extends BaseController{
    
    public function index($a = null)
    {
        $this->loadView('home');
    }
}