<?php
    require('server.php');

    if(isset($_POST['register'])) {
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
        $sqlCreate = mysqli_query($connection, $query) OR trigger_error('Query failed SQL ' . $query);

        echo "<script> alert('Successfully registered') </script>";
        // header('location: hiraya/login.php');
    } else {
        // header('location: hiraya/register.php');
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
        <form class="" action="register.php" method="POST">
            <h6>Register</h6> <br/>
            <i class="far fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" />
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" /> 
            <input type="submit" name="register" value="Register"/>
        </form>
    </div>

</body>
</html>