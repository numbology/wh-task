<?php

class UserController extends BaseController {

    public function __construct()
    {
        $this->model = new User();
    }

    public function index()
    {
        // show all users
        $rows = $this->model->getUsers();
        $this->loadView('report', $rows);
    }

    public function register() {
        // show register view or registers the user
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $saved = $this->model->saveUser();
            if (is_array($saved)) {
                // if errors occur
                $this->loadView('register', $saved);
            } else {
                $this->redirect('login');
            }
        } else {
            $this->loadView('register');
        }
    }

    public function login() {
        if (isset($_SESSION['logged_in'])) $this->redirect('home');
        // show login view or logins the user
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $loggedIn = $this->model->loginUser();
            if (is_array($loggedIn)) {
                $this->loadView('login', $loggedIn);
            } else {
                $this->redirect('home');
            }
        } else {
            $this->loadView('login');
        }
    }

    public function logout() {
        unset($_SESSION['logged_in']);
        session_destroy();
        $this->redirect('home');
    }
}