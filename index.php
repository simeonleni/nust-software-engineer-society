<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: /login-page.php');
    exit;
} else {
    header('Location: /home-page.php');
}
?>