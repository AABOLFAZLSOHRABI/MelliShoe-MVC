<?php
date_default_timezone_set('Asia/Tehran');
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
    public function update_admin($id)
    {
        $query = $this->db->prepare('UPDATE admins SET last_login_at = ? WHERE id = ?');
        return $query->execute(array(date('Y-m-d H:i:s'), $id));
    }

    public function __destruct()
    {
        $this->db = null;
    }
}