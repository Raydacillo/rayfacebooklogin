<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include "configfb.php";

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $result = loginAuth($email, $password);
   
    if ($result > 0) {
        header('Location: pages/dashboard.php');
        exit;
    } else {
        header('Location: Facebook.php?status=false');
        exit;
    }
} else {
    header('Location: Facebook.php');
    exit;
}
?>