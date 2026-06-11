<?php
if (!session_id()) {
    session_start();
}
if (isset($_SESSION['admin_panel']) && !empty($_SESSION['admin_panel'])) {
    echo "Welcome to the admin dashboard!";
} else {
    header('Location: admin.php');
    exit();
}
?>