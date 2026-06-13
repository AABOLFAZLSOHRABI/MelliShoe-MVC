<?php

class model
{
    protected $db;

    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=localhost;port=3307;dbname=meli', 'root', '');
        } catch (PDOException $e) {
            die('Database error: ' . $e->getMessage());
        }
    }
    public function get_products()
    {
        $query = $this->db->query('SELECT * FROM products');
        return $query->fetchAll();
    }
    public function get_categories()
    {
        $quwery = $this->db->query('SELECT * FROM categories');
        return $quwery->fetchAll();
    }
    public function get_reviews()
    {
        $quwery = $this->db->query('SELECT * FROM reviews');
        return $quwery->fetchAll();
    }
    public function get_reviews_Waiting()
    {
        $quwery = $this->db->query('SELECT * FROM reviews WHERE is_verified = 0');
        return $quwery->fetchAll();
    }
    public function get_admins()
    {
        $query = $this->db->prepare('SELECT id, username, email, last_login_at, created_at, updated_at FROM admins ');
        $query->execute();
        return $query->fetchAll();
    }
    public function new_admin($username, $email, $password, $created_at, $updated_at)
    {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $query = $this->db->prepare('INSERT INTO admins (username, email, password_hash, created_at, updated_at) VALUES (?, ?, ?, ?, ?)');
        return $query->execute(array($username, $email, $password_hash, $created_at, $updated_at));

    }

    public function __destruct()
    {
        $this->db = null;
    }
}