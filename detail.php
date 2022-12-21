<?php
include 'functions.php';
$id = $_GET['id_buku'];
$data_buku = query("SELECT * FROM buku WHERE id_buku='$id'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./css/detail.css">
    <title>Detail</title>
</head>
<body>
    <input type="checkbox" name="" id="check">

    <header>
        <h2><a href="index.php" class="logo">PERPUS</a></h2>
        <div class="navigation">
            <a href="index.php">Home</a>
            <a href="books.php">Books</a>
            <a href="aboutus.php">About</a>
            <a href="logout.php">Logout</a>
        </div>
        <label for="check">
            <i class="fas fa-bars menu-btn"></i>
            <i class="fas fa-times close-btn"></i>
        </label>
    </header>
    <section class="myBg"> 
        <div class="container">
            <?php foreach($data_buku as $buku) : ?>
            <div class="book-image">
                <img src="img/maze runner.jpg" alt="">
            </div>
            <div class="book-detailBg">
                <div class="book-details">
                    <div class="book-title">
                        <h3><?= $buku['judul']; ?></h3>
                    </div>
                    <div class="book-cover">
                        Cover: Hard-Cover 
                    </div>
                    <div class="book-rating">
                        Rating: 
                        <?php for($i = 1; $i <= $buku['rating']; $i++) : ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <?php endfor; ?>
                    </div>
                    <div class="book-writer">
                        Penulis : <?= $buku['penulis']; ?>
                    </div>
                    <div class="book-year">
                        Tahun : <?= $buku['tahun']; ?>
                    </div>
                    <div class="book-publisher">
                        Penerbit : <?= $buku['penerbit']; ?>
                    </div>
                    <div class="myButton">
                        <a href="books.php"><button class="details">BACK</button></a>
                        <a href="#">
                            <button  class="<?= $buku['stts_pinjam']; ?>" disabled>
                                <?php if($buku['stts_pinjam'] == "ada")
                                {
                                    echo "Ada";
                                }
                                else
                                {
                                    echo "Sedang Dipinjam";
                                }
                                ?>
                            </button>       
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    
</body>
</html>