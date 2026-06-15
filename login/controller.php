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
            header('Location: dashboard.php');
            exit;
        } else {
            if (isset($_POST['submit'])) {
                if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {
                    $admin = $this->model->get_admin($_POST['email']);
                    if ($admin && password_verify($_POST['password'], $admin['password_hash'])) {
                        $this->model->update_admin(array(date('Y-m-d H:i:s')),$admin['id']);
                        $_SESSION['admin_panel'] = $admin['id'];
                        header('Location: dashboard.php');
                    } else {
                        $message = 'ایمیل یا رمز عبور اشتباه است.';
                    } 
                } else {
                    $message = 'لطفاًایمیل و رمز عبور را وارد کنید.';
                }
            } else {
                $message = '';
            }
            $this->view->index($message);
        }
    }
}