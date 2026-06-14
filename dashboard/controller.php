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
                $this->new_admin();
                break;
            case 'delete_admin':
                $this->delete_admin();
                break;
            case 'update_admin':
                $this->update_admin();
                break;
            case 'add_comment':
                $this->new_review();
                break;
            case 'delete_comment':
                $this->delete_review();
                break;
            case 'edit_comment':
                $this->update_review();
                break;
            default:
                break;
        }
    }
    private function new_admin()
    {
        $username = (isset($_POST['username']) && !empty($_POST['username']));
        $email = (isset($_POST['email']) && !empty($_POST['email']));
        $password = (isset($_POST['password']) && !empty($_POST['password']));

        if ($username && $email && $password) {
            $this->model->new_admin(
                $_POST['username'],
                $_POST['email'],
                $_POST['password'],
                date('Y-m-d H:i:s'),
                date('Y-m-d H:i:s')
            );
        }
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
        $id = (isset($_POST['id']) && !empty($_POST['id']));
        $username = (isset($_POST['username']) && !empty($_POST['username']));
        $email = (isset($_POST['email']) && !empty($_POST['email']));

        if ($id && $username && $email) {
            $this->model->update_admin($_POST['id'], $_POST['username'], $_POST['email']);
        }
        header('Location: dashboard.php?tab=admins');
        exit;
    }
    /// reviews
    private function new_review()
    {
        $customer_name = (isset($_POST['customer_name']) && !empty($_POST['customer_name']));
        $rating = (isset($_POST['rating']) && !empty($_POST['rating']));
        $comment = (isset($_POST['comment']) && !empty($_POST['comment']));
        $is_verified = isset($_POST['is_verified']) ? 1 : 0;

        if ($customer_name && $rating && $comment) {
            $this->model->new_review(
                $_POST['customer_name'],
                $_POST['rating'],
                $_POST['comment'],
                $is_verified,
                date('Y-m-d H:i:s')
            );
        }
        header('Location: dashboard.php?tab=comments');
        exit;
    }

    private function delete_review()
    {
        $id = (isset($_POST['id']) && !empty($_POST['id']));
        if ($id) {
            $this->model->delete_review($_POST['id']);
        }
        header('Location: dashboard.php?tab=comments');
        exit;
    }

    private function update_review()
    {
        $id = isset($_POST['id']) ? (int) $_POST['id'] : 0;
        $customer_name = isset($_POST['customer_name']) && !empty($_POST['customer_name']);
        $rating = isset($_POST['rating']) && !empty($_POST['rating']);
        $comment = isset($_POST['comment']) && !empty($_POST['comment']);
        $is_verified = isset($_POST['is_verified']) ? 1 : 0;

        if ($id > 0 && $customer_name && $rating && $comment) {
            $this->model->update_review(
                $id,
                $_POST['customer_name'],
                $_POST['rating'],
                $_POST['comment'],
                $is_verified
            );
        }
        header('Location: dashboard.php?tab=comments');
        exit;
    }
}