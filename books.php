<?php
session_start();
if(!isset($_SESSION['login']))
{
    header("Location: login.php");
    exit;
}
include 'functions.php';
$data_buku = query("SELECT * FROM buku"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Books</title>
	<link rel="stylesheet" href="css/books.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<!-- Fontawesome CSS -->
    <script src="https://kit.fontawesome.com/2a81107d66.js" crossorigin="anonymous"></script>
    <script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			   $(".wrapper").toggleClass("collapse");
			});
		});
	</script>
</head>
<body>

<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="one"></div>
       <div class="two"></div>
       <div class="three"></div>
    </div>
    <div class="top_menu">
      <div class="logo">PERPUS</div>
      <ul>
        <li><a href="index.php">
          Home</a></li>
        <li><a href="books.php">
            Books
          </a></li>
        <li><a href="aboutus.php">
            About
          </a></li>
        <li><a href="logout.php">
            Logout
          </a></li>
      </ul>
    </div>
  </div>

  <div class="sidebar">
    <form action="" method="GET">
    <?php
      $genre_query = "SELECT * FROM genre";
      $genre_query_run = mysqli_query($conn, $genre_query);
    ?>

      <?php if(mysqli_num_rows($genre_query_run) > 0) : ?>
        <?php foreach($genre_query_run as $genrelist) : ?>
          <?php 
            $checked = [];
            if(isset($_GET['genres'])){
                $checked = $_GET['genres'];
            }
          ?>
            <ul>
              <li>
                <input type="checkbox" name="genres[]"  value="<?= $genrelist['id_genre']; ?>"
                    <?php if(in_array($genrelist['id_genre'], $checked)){echo "checked";} ?>/>
                    <?= $genrelist['genrebuku']; ?>
    
              </li>
            </ul>
          <?php endforeach; ?>
      <?php else : ?>
        <?= "Genre not Found" ?> 
      <?php endif; ?>   
      <button type="submit" class="details">Search</button>
      </form>          
  </div>

  <div class="main_container">
  <?php if(isset($_GET['genres'])) : ?>
  <?php
    $genrechecked = [];
    $genrechecked = $_GET['genres'];
    foreach($genrechecked as $rowgenre){
      $data_buku1 = mysqli_query($conn,"SELECT * FROM buku WHERE genre IN ($rowgenre)");
    }
  ?>
      <?php if(mysqli_num_rows($data_buku1) > 0) :?>
        <?php foreach($data_buku1 as $buku) : ?>
          <div class="item">
              <img src="img/<?= $buku['gambar']; ?>" height="100%" width="200px">
              <h2 style="margin-top: 10px ;"><?= $buku['judul']; ?></h2>
              <p style="margin-top: 10px ;"><?= $buku['sinopsis']; ?></p>
              <a href="detail.php?id_buku=<?= $buku['id_buku']; ?>"><button class="details"><button class="button-17" role="button" href="detail.php">
                  <span>LIHAT</span>
              </button></a>
          </div>
          <?php endforeach; ?>
      <?php endif; ?>
  <?php else : ?>
      <?php foreach($data_buku as $buku) : ?>
        <div class="item">
            <img src="img/<?= $buku['gambar']; ?>" height="100%" width="200px">
            <h2 style="margin-top: 10px ;"><?= $buku['judul']; ?></h2>
            <p style="margin-top: 10px ;"><?= $buku['sinopsis']; ?></p>
            <a href="detail.php?id_buku=<?= $buku['id_buku']; ?>"><button class="details"><button class="button-17" role="button" href="detail.php">
                <span>LIHAT</span>
            </button>
            </a>
        </div>
      <?php endforeach; ?>
  <?php endif; ?>
  </div>
</div>
</body>
</html>