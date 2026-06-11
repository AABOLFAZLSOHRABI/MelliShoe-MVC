<?php

class controller
{
    protected $model;
    protected $view;

    public function __construct()
    {
        $this->model = new model();
        $this->view = new View();
    }
    public function index()
    {

        $products = $this->model->get_products();
        $reviews = $this->model->get_reviews();
        $slides = $this->model->get_slides();

        $this->view->index($products, $reviews, $slides);
    }
}