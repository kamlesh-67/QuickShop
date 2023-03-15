<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="gellary/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="gellary/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="gellary/favicon-16x16.png">
    <link rel="manifest" href="gellary/site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Products - QuickShop</title>

    <link rel="stylesheet" href="root.css">
    <link rel="stylesheet" href="products.css">
</head>
<?php

echo '<script>alert(hello,world)</script>';

?>

<body class="body">

    <button onclick="topFunction()" id="myBtn" title="Go to top">Back To Top</button>
    <header id="home">
        <div class="logo">QuickShop</div>
        <div class="menu">
            <div class="search"><label for="search" class="icon"><i class="fa-solid fa-magnifying-glass"></i></label><input type="text" name="search" id="search"></div>
        </div>
    </header>
    <div class="main-container">


        <div class="products">
            <div class="products-box">
                <div class="products-grid">
                    <?php
                    $boxs = array(0, 1, 2, 3, 4, 5, 6, 7, 8);
                    foreach ($boxs as $i) {
                        $title = "Title " . ($i + 1);
                        $description = "Decription " . ($i + 1);
                        $price = ($i + 2 * 30);
                        $rating = ($i + 1);
                        $review = ($i + 1 * 12);
                        echo '<a href="detail.php?id=12" style="color:#000;"><div class="box">
                    <div class="img">
                        <img src="gellary/card_placeholder.png" alt="">
                    </div>
                    <div class="card-info">
                    <div class="title" >' . $title . '</div>
                    <div class="description" >' . $description . '</div>
                    <div class="price" >₹' . $price . '</div>
                    <div class="rating" >';
                        for ($i = 0; $i < 5; $i++) {
                            if ($i < 3) {
                                echo '<span class="fa fa-star" style="color:#ffd43b;"></span>';
                            } else {
                                echo '<span class="fa fa-star" style="color:#90A0A3;"></span>';
                            }
                        }
                        echo '</div>
                    <div class="review" > ' . $review . ' Reviews</div>                   
                    </div>
                </div></a>';
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>

    <footer>
        <div class="logo">
            QuickShop
        </div>
        <p>&copy; All Rights Reserved &nbsp;<a href="index.php"> QuickShop.com</a></p>
    </footer>


    <script>
        let mybutton = document.getElementById("myBtn");
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>