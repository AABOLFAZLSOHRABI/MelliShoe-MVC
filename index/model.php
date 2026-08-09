<?php

class model
{
    protected $db;

    public function __construct()
    {
        try {
            // Made by AI (kharej az dars)
            require_once __DIR__ . '/../config/database.php';
            $this->db = $pdo;
        } catch (PDOException $e) {
            die('Database error: ' . $e->getMessage());
        }
    }
    public function get_slides()
    {
        $query = $this->db->query('SELECT * FROM slides');
        return $query->fetchAll();
    }
    public function get_products()
    {
        $query = $this->db->query('SELECT * FROM products');
        return $query->fetchAll();
    }
    public function get_reviews()
    {
        $quwery = $this->db->query('SELECT * FROM reviews');
        return $quwery->fetchAll();
    }
    public function __destruct()
    {
        $this->db = null;
    }
}