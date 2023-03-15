<?php
$title = "watch";
if (isset($_GET['id'])) {
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
    <link rel="stylesheet" href="root.css">
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
                                        echo '<span class="fa fa-star" style="color:#ffd43b;"></span>';
                                    } else {
                                        echo '<span class="fa fa-star" style="color:#90A0A3;"></span>';
                                    }
                                }
                                ?></p>
            <p class="review">12 Reviews</p>
            <a href="payment.php?id=12" class="buy" style="color:#000;">Buy</a>
        </div>

    </div>
    <form action="detail.php?id=12" method="post"><input type="hidden" name="rating" id="rating" value=0>
    <div class="getrating">
        <h4>&nbsp;Rate this products </h4>
        <input type="radio" id="star5" name="rating" value="5" />
        <label class="star" for="star5"><span class="fa fa-star"></span></label>
        <input type="radio" id="star4" name="rating" value="4" />
        <label class="star" for="star4"><span class="fa fa-star"></span></label>
        <input type="radio" id="star3" name="rating" value="3" />
        <label class="star" for="star3"><span class="fa fa-star"></span></label>
        <input type="radio" id="star2" name="rating" value="2" />
        <label class="star" for="star2"><span class="fa fa-star"></span></label>
        <input type="radio" id="star1" name="rating" value="1" />
        <label class="star" for="star1"><span class="fa fa-star"></span></label>
    </div>
    <button type="submit">Submit</button></form>
    <footer>
        <div class="logo">
            QuickShop
        </div>
        <p>&copy; All Rights Reserved &nbsp;<a href="index.php"> QuickShop.com</a></p>
    </footer>

    
</body>

</html>