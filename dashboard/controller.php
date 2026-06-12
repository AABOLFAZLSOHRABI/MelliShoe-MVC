<?php

class controller
{
    protected $model;
    protected $view;

    public function __construct()
    {
        if (!session_id()) {
            session_start();
        }
        $this->model = new model();
        $this->view = new View();
    }
    public function is_logged_in()
    {
        if (isset($_SESSION["admin_panel"]) && !empty($_SESSION["admin_panel"])) {
            return true;
        }
        return false;
    }
    public function index()
    {
        if ($this->is_logged_in()) {

            echo "Welcome to the admin dashboard!";
        } else {
            header('Location: login.php');
        }
    }
}