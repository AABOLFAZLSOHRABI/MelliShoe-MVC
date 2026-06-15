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
    // get 
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
    // post
    /// admin
    public function new_admin($username, $email, $password, $created_at, $updated_at)
    {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $query = $this->db->prepare('INSERT INTO admins (username, email, password_hash, created_at, updated_at) VALUES (?, ?, ?, ?, ?)');
        return $query->execute(array($username, $email, $password_hash, $created_at, $updated_at));

    }
    public function delete_admin($id)
    {
        $query = $this->db->prepare('DELETE FROM admins WHERE id = ?');
        return $query->execute(array($id));
    }
    public function update_admin($id, $username, $email)
    {
        $query = $this->db->prepare('UPDATE admins SET username = ?, email = ?, updated_at = ? WHERE id = ?');
        return $query->execute(array($username, $email, date('Y-m-d H:i:s'), $id));
    }
    /// review
    public function new_review($customer_name, $rating, $comment, $is_verified, $created_at)
    {
        $query = $this->db->prepare('INSERT INTO reviews (customer_name, rating, comment, is_verified, created_at) VALUES (?, ?, ?, ?, ?)');
        return $query->execute(array($customer_name, $rating, $comment, $is_verified, $created_at));
    }
    public function delete_review($id)
    {
        $query = $this->db->prepare('DELETE FROM reviews WHERE id = ?');
        return $query->execute(array($id));
    }
    public function update_review($id, $customer_name, $rating, $comment, $is_verified)
    {
        $query = $this->db->prepare('UPDATE reviews SET customer_name = ?, rating = ?, comment = ?, is_verified = ? WHERE id = ?');
        return $query->execute(array($customer_name, $rating, $comment, $is_verified, $id));
    }
    /// categories
    public function new_category($name, $image)
    {
        $query = $this->db->prepare('INSERT INTO categories (name, image) VALUES (?, ?)');
        return $query->execute(array($name, $image));
    }

    public function delete_category($id)
    {
        $query = $this->db->prepare('DELETE FROM categories WHERE id = ?');
        return $query->execute(array($id));
    }

    public function update_category($id, $name, $image)
    {
        $query = $this->db->prepare('UPDATE categories SET name = ?, image = ? WHERE id = ?');
        return $query->execute(array($name, $image, $id));
    }

    /// products
    public function new_product($category_id, $name, $brand, $count, $image, $price, $old_price)
    {
        $query = $this->db->prepare('INSERT INTO products (category_id, name, brand, count, image, price, old_price) VALUES (?, ?, ?, ?, ?, ?, ?)');
        return $query->execute(array($category_id, $name, $brand, $count, $image, $price, $old_price));
    }

    public function delete_product($id)
    {
        $query = $this->db->prepare('DELETE FROM products WHERE id = ?');
        return $query->execute(array($id));
    }
    
    public function update_product($id, $category_id, $name, $brand, $count, $image, $price, $old_price)
    {
        $query = $this->db->prepare('UPDATE products SET category_id = ?, name = ?, brand = ?, count = ?, image = ?, price = ?, old_price = ? WHERE id = ?');
        return $query->execute(array($category_id, $name, $brand, $count, $image, $price, $old_price, $id));
    }

    public function __destruct()
    {
        $this->db = null;
    }
}
