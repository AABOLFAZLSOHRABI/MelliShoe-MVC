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
            $products = $this->model->get_products();
            $categories = $this->model->get_categories();
            $reviews = $this->model->get_reviews();
            $admins = $this->model->get_admins();
            $reviews_waiting = $this->model->get_reviews_Waiting();
            $this->view->index($products, $categories, $reviews, $admins, $reviews_waiting);

        } else {
            header('Location: login.php');
        }
    }
}