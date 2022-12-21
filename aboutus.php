<?php
session_start();
if(!isset($_SESSION['login']))
{
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="css/aboutus.css">
</head>
<body>
    <section>
        <input type="checkbox" name="" id="check">

        <header>
            <h2><a href="index.php" class="logo">PERPUS</a></h2>
            <div class="navigation">
                <a href="index.php">Home</a>
                <a href="books.php">Books</a>
                <a href="aboutus.php">About</a>
            </div>
            <label for="check">
                <i class="fas fa-bars menu-btn"></i>
                <i class="fas fa-times close-btn"></i>
            </label>
        </header>

        <div class="container">
            <h1 class="heading"><span>Meet</span>Our Team</h1>

            <div class="profiles">

                <div class="profile">
                    <img src="img/kyai.jpg" alt="" class="profile-img">
                    <h3 class="user-name">David Saputra</h3>
                    <h5>BACK-END DEV</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique incidunt reiciendis earum minus dicta ratione, deserunt eaque ab consequuntur, labore illum molestias. Iure, facilis possimus earum quisquam dicta maxime! Exercitationem?</p>
                </div>

                <div class="profile">
                    <img src="img/ukhty.jpg" alt="" class="profile-img">
                    <h3 class="user-name">Elga Syahira</h3>
                    <h5>FRONT-END DEV</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique incidunt reiciendis earum minus dicta ratione, deserunt eaque ab consequuntur, labore illum molestias. Iure, facilis possimus earum quisquam dicta maxime! Exercitationem?</p>
                </div>

                <div class="profile">
                    <img src="img/teen.jpg" alt="" class="profile-img">
                    <h3 class="user-name">Dhafin Rizky Aulia</h3>
                    <h5>BACK-END DEV</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique incidunt reiciendis earum minus dicta ratione, deserunt eaque ab consequuntur, labore illum molestias. Iure, facilis possimus earum quisquam dicta maxime! Exercitationem?</p>
                </div>

                <div class="profile">
                    <img src="img/bintang.jfif" alt="" class="profile-img">
                    <h3 class="user-name">Kharisma Bintang Arya</h3>
                    <h5>BACK-END DEV</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique incidunt reiciendis earum minus dicta ratione, deserunt eaque ab consequuntur, labore illum molestias. Iure, facilis possimus earum quisquam dicta maxime! Exercitationem?</p>
                </div>

            </div>
        </div>


    </section>
</body>
</html>