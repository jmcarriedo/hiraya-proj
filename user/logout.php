<?php
    session_start();
    $_SESSION['status'] = 'invalid';
    unset($_SESSION['email']);
    unset($_SESSION['userid']);
    unset($_SESSION['accessRole']);
    echo "<script> window.location.href='../dashboard.php' </script>";
?>