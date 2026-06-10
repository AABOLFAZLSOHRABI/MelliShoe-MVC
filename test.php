<?php
try {
    $db = new PDO('mysql:host=localhost;port=3307;dbname=fast', 'root', '');
} catch (PDOException $e) {
    die('Database error: ' . $e->getMessage());
}
// $query = $db->prepare('insert into admin (first_name, last_name) values (?, ?)');
// $result = $query->execute(array("John Doe", "Smith"));

// if ($result) {

// } else {
//     echo "خطا در ثبت اطلاعات.";
// }


// $query = $db->query('SELECT * FROM admin');
// $data = $query->fetchAll();
// foreach ($data as $row) {
//     echo $row['first_name'] . ' ' . $row['last_name'] . '<br>';
// }

// $query = $db->prepare('UPDATE admin Set first_name = ?, last_name = ? ');
// $result = $query->execute(array("Abolfazl", "Smith"));
// if ($result) {
//     echo "بروزرسانی با موفقیت انجام شد";
// } else {
//     echo "خطا در بروزرسانی اطلاعات.";
// }

// $query = $db->prepare('DELETE FROM admin WHERE first_name = ? AND last_name = ?');
// $result = $query->execute(array("Abolfazl", "Smith"));
// if ($result) {
//     echo "حذف با موفقیت انجام شد";
// } else {
//     echo "خطا در حذف اطلاعات.";
// }
