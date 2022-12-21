<?php
session_start();
if(isset($_SESSION['login']))
{
    header("Location: books.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LANDING PAGE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <section>
        <input type="checkbox" name="" id="check">

        <header class="header">
            <h2><a href="#Home" class="logo">PERPUS</a></h2>
            <div class="navigation">
                <a href="#">Home</a>
                <a href="books.php">Books</a>
                <a href="aboutus.php">About</a>
            </div>
            <label for="check">
                <i class="fas fa-bars menu-btn"></i>
                <i class="fas fa-times close-btn"></i>
            </label>
        </header>

        <div class="content">
            <div class="info">
                <h2>DIGITAL LIBRARY<br><span>"MEMBACA ADALAH JENDELA ILMU"</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam pariatur provident eius ut alias corporis vel, itaque quasi molestiae accusamus possimus ab iste quas at libero dolorum sit corrupti aliquid.</p>
                <a href="login.php" class="info-btn">More Info</a>
            </div>
        </div>

        <div class="media-icons">
            <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </section>
</body>
</html>