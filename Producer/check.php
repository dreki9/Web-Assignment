<?php

$users = [
    "emre" => "123456",
    "emre2" => "123456"
];

session_start();

if (isset($_POST['username']) && !isset($_SESSION['username'])) {

    if($users[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];
    }

    if(!isset($_SESSION['username'])) { $failed = true ;}
}

if(isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}