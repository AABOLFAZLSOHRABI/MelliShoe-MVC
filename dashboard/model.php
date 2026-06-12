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
    public function get_admin($email)
    {
        $query = $this->db->prepare('SELECT id, password_hash FROM admins WHERE email = ? ');
        $query->execute(array($email));
        return $query->fetch();
    }

    public function __destruct()
    {
        $this->db = null;
    }
}