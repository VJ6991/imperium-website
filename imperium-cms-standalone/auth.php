<?php
ob_start();
session_start();

$admin_user = 'admin';
$admin_pass = 'imperium123!';

function check_auth() {
    if (!isset($_SESSION['cms_logged_in']) || $_SESSION['cms_logged_in'] !== true) {
        header('Location: login.php');
        exit;
    }
}
?>
