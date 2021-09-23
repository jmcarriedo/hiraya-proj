<?php
    require('server.php');
    // Start Session
    session_start();
    if($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) {
        $_SESSION['status'] = 'invalid';
    }
    if($_SESSION['status'] == 'valid') {
        header('location: dashboard.php');
    }
    // Session Variables
    if(isset($_POST['login'])) {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if(empty($email) || empty($password)) {
            echo "Fields cannot be empty";
        } else {
            if($query = "SELECT * FROM users WHERE email='$email' AND accessRole='admin'") {
                $sql = mysqli_query($connection, $query);
                $row = mysqli_fetch_assoc($sql);
                $currentPass = $row['password'];
                if(password_verify($password, $currentPass)) {
                    // If Password is Valid
                    $_SESSION['user_id'] = $row['user_id'];
                    header('location: dashboard.php');
                } else {
                    $errMessage = "Login failed. Wrong email or password";
                    echo "<script> alert($errMessage) </script>";
                }
                if(mysqli_num_rows($sql)>0 && password_verify($password, $currentPass)) {
                    $_SESSION['status'] = 'valid';
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['accessRole'] = $row['accessRole'];
                    header('location: dashboard.php');
                } else {
                    $_SESSION['status'] = 'invalid';
                    echo "Invalid credentials";
                }
            } 
            
            if($query = "SELECT * FROM users WHERE email='$email'") {
                $sql = mysqli_query($connection, $query);
                $row = mysqli_fetch_assoc($sql);
                $currentPass = $row['password'];
                if(password_verify($password, $currentPass)) {
                    // If Password is Valid
                    $_SESSION['user_id'] = $row['user_id'];
                    echo "<script> window.location.href='./user/dashboard.php' </script>";
                } else {
                    $errMessage = "Login failed. Wrong email or password";
                    echo "<script> alert($errMessage) </script>";
                }
                if(mysqli_num_rows($sql)>0 && password_verify($password, $currentPass)) {
                    $_SESSION['status'] = 'valid';
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['accessRole'] = $row['accessRole'];
                    echo "<script> window.location.href='./user/dashboard.php' </script>";
                } else {
                    $_SESSION['status'] = 'invalid';
                    echo "Invalid credentials";
                }
            } 
        };
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP CRUD</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="mt-5 container">
        <a href="./register.php" class="mb-5"> Register </a>  

        <form class="mt-6" action="login.php" method="POST">
            <h6>Login</h6>
            <i class="far fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" />
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" /> 
            <input type="submit" name="login" value="Login"/>
        </form>
    </div>

</body>
</html>