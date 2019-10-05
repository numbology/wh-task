<?php

class UserController extends BaseController {

    public function __construct()
    {
        $this->model = new User();
      
    }

    public function index()
    {
        // show all users
        $this->model->getUsers();
    }

    public function create()
    {
        echo '<pre>'; print_r($_POST); echo '</pre>'; die;
        // create user
        if ($this->model->saveUser()) {
            // redirect
        }
    }


    public function register() {
        // show register view
        $this->loadView('register');
    }

    public function login() {
        // show login view
        $this->loadView('login');
    }
}