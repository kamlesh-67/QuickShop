<?php
$title = "watch";
if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header("index.php");
    exit; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="gellary/favicon-32x32.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="detail.css">
    <title><?php echo $title; ?></title>
</head>
<body>
<header id="home">
        <div class="logo">QuickShop</div>
        <div class="menu">
            <div class="search"><label for="search" class="icon"><i class="fa-solid fa-magnifying-glass"></i></label><input type="text" name="search" id="search"></div>
        </div>
    </header>
<div class="container">
    <div class="image">
        <img src="gellary/card_placeholder.png" alt="">
    </div>
    <div class="info">

    <h2 class="title">Title</h2>
    <h5 class="description">description </h5>
    <p class="price">₹600</p>
    <p class="rating"><?php 
    for ($i = 0; $i < 5; $i++) {
        if ($i < 3) {
            echo '<i class="fa-solid fa-star" style="color:#ffd43b;"></i>';
        } else {
            echo '<i class="fa-regular fa-star"></i>';
        }
    }
    ?></p>
    <p class="review">12 Reviews</p>


    <button>Buy</button>
    </div>
</div>


    <footer>
        <div class="logo">
            QuickShop
        </div>
        <p>&copy; All Rights Reserved &nbsp;<a href="index.php"> QuickShop.com</a></p>
    </footer>
</body>

</html>