<?php
    session_start();
    $_SESSION['status'] = 'invalid';
    unset($_SESSION['email']);
    unset($_SESSION['user_id']);
    unset($_SESSION['accessRole']);
    header('location: index.php');
?>