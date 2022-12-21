<?php

    session_start();
    if(isset($_SESSION['login']))
    {
        header("Location: books.php");
        exit;
    }
    // koneksi ke database
    require 'functions.php';

    // cek tombol login sudah ditekan atau belum
    if( isset($_POST["login"]) )
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // cari username
        $result = mysqli_query($conn,"SELECT * FROM user WHERE username='$username'");

        if( mysqli_num_rows($result) === 1 )
        {
            $row = mysqli_fetch_assoc($result);

            // cek password
            if( password_verify($password,$row["password"]) )
            {
                $_SESSION['login'] = true;
                header("Location: books.php");
                exit;
            }
        }
        $error = true;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>LOGIN</title>
</head>
<body>
    <div class="main">
    <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic; text-align:center;"> Username atau Password Salah! </p>
    <?php endif; ?>
        <div class="logo"></div>
        <div class="title">LOGIN</div>
        <form action="" method="post">
            <div class="credentials">
                <div class="username">
                    <span class="glyphicon glyphicon-user"></span>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="password">
                    <span class="glyphicon glyphicon-lock"></span>
                    <input type="password" name="password" placeholder="Password" id="password" required>
                    <i class="bi bi-eye-fill"></i>
                </div>
                <button type="submit" name="login" class="submit">Login</button>
                <div class="link">
                    <a href="#">Forget Password?</a>&nbsp; <a href="regist.php">Sign Up</a>
                </div>
            </div>
        </form>
    </div>

    <script src="js/script.js"></script>
</body>
</html>