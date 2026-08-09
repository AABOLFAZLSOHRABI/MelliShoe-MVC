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
        return isset($_SESSION["admin_panel"]) && !empty($_SESSION["admin_panel"]);
    }

    public function index()
    {
        $message = '';

        if ($this->is_logged_in()) {
            header('Location: dashboard.php');
            exit;
        }

        if (isset($_POST['submit'])) {
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                $admin = $this->model->get_admin($_POST['email']);
                if ($admin && password_verify($_POST['password'], $admin['password_hash'])) {
                    $this->model->update_admin($admin['id']);
                    $_SESSION['admin_panel'] = $admin['id'];
                    header('Location: dashboard.php');
                    exit;
                }

                $message = 'ایمیل یا رمز عبور اشتباه است.';
            } else {
                $message = 'لطفاً ایمیل و رمز عبور را وارد کنید.';
            }
        }

        $this->view->index($message);
    }
}