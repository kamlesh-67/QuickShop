
<?php
include("init.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header("index.php");
    exit;
}
$query = "SELECT * FROM products WHERE productid=$id";
                        $res = mysqli_query($server, $query);

                        $row = mysqli_fetch_assoc($res);

                        $title = $row["title"];
                        $price = $row["price"];
                        $description = $row["description"];
                        $rating = $row["rating"];
                        $review = $row["rewiew"];
                        $img = "upload/" . $row["img"];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<script>
    let x = Math.floor((Math.random() * 99999) + 1);
    let y = prompt(`Please enter OTP: ${x}`);
    if(`${x}`==`${y}`){
        alert("Order Placed !");
    }else{
        alert("Worng OTP !");
    }
</script>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="root.css">
    <title><?php echo $title;?></title>
</head>

<body>
    <header id="home">
        <div class="logo">QuickShop</div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#about">About</a></li>
                <li><a href="index.php#products">products</a></li>
                <li><a href="index.php#contect">Contect Us</a></li>
            </ul>
        </div>
        <div class="menumo">
            <ul id="menu">
                <li id=menu-text><i class="fa-solid fa-bars"></i></li>
                <li id=item-one><a href="index.php">Home</a></li>
                <li id=item-two><a href="index.php#about">About</a></li>
                <li id=item-three><a href="index.php#products">products</a></li>
                <li id=item-four><a href="index.php#contect">Contect Us</a></li>
            </ul>
        </div>
    </header>
    <div class="container">
        <div class="payment-box">
            <div class="title">
                <img src=<?php echo $img;?> alt="">
                <div class="info">
                    <h4><?php echo $title;?></h4>
                    <h5><?php echo $description;?></h5>
                    <p>₹<?php echo $price;?></p>

                </div>
            </div>
            <div class="payment-option">
                <form action="#" method="post">
                    <input type="text" name="cardnumber" required id="cardnumber" maxlength=15 placeholder="Enter Your Card Number">
                    <div class="personal">
                        <p style="font-size:12px;width:200px;">Date of expiry</p>
                        <select id="month" name="month" required>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select id="year" name="year" required>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <!-- add more years here -->
                        </select>
                        <input type="text" required placeholder="CVV" name="CVV" id="CVV" maxlength=4>
                    </div>
                    <input type="text" required placeholder="Enter Account Holder Name" name="cardholder" id="cardholder">
                    <button type="submit">Buy</button>
                </form>
            </div>

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