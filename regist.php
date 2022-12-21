<?php
include 'functions.php';

if(isset($_POST['sign-up']))
{
    if(regist($_POST) > 0)
    {
        echo "
            <script>
                alert('anda telah berhasil melakukan register!');
            </script>
        ";
        header("Location: login.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/regist.css">
    <title>SIGN UP</title>
</head>
<body>
    <div class="main">
        <div class="logo"></div>
        <div class="title">SIGN UP</div>
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
                <div class="password2">
                    <span class="glyphicon glyphicon-lock"></span>
                    <input type="password" name="password2" placeholder="Confirm Password" id="password2" required>
                    <i class="bi bi-eye-fill"></i>
                </div>
                <button type="submit" name="sign-up" class="submit">SIGN UP</button>
                <div class="link">
                    <a href="login.php">Already Have An Account?</a>
                </div>
            </div>
        </form>
    </div>

    <script src="js/script.js"></script>
</body>
</html>