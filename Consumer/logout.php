<?php session_start();

if (isset($_POST['logout'])) {
    unset($_SESSION['username']);
}

if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit();
}
?>