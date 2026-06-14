<?php
date_default_timezone_set('Asia/Tehran');
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
        if (!$this->is_logged_in()) {
            header('Location: login.php');
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->handle_post();
            return;
        }
        $products = $this->model->get_products();
        $categories = $this->model->get_categories();
        $reviews = $this->model->get_reviews();
        $admins = $this->model->get_admins();
        $reviews_waiting = $this->model->get_reviews_Waiting();

        $this->view->index($products, $categories, $reviews, $admins, $reviews_waiting);
    }

    private function handle_post()
    {
        $action = $_POST['action'] ?? '';

        switch ($action) {
            case 'add_admin':
                $this->add_admin();
                break;
            case 'delete_admin':
                $this->delete_admin();
                break;
            case 'update_admin':
                $this->update_admin();
                break;
            default:
                break;
        }
    }
    private function add_admin()
    {
        $this->model->new_admin(
            $_POST['username'],
            $_POST['email'],
            $_POST['password'],
            date('Y-m-d H:i:s'),
            date('Y-m-d H:i:s')
        );
        header('Location: dashboard.php?tab=admins');
        exit;
    }
    private function delete_admin()
    {
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $this->model->delete_admin($_POST['id']);
        }

        header('Location: dashboard.php?tab=admins');
        exit;
    }
    private function update_admin()
    {
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $this->model->update_admin($_POST['id'], $_POST['username'], $_POST['email']);
        }
        header('Location: dashboard.php?tab=admins');
        exit;
    }
}