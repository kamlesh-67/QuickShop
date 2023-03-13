<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="payment.css">
    <title>title</title>
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
    </header>
    <div class="container">
        <div class="payment-box">
            <div class="title">
                <img src="#" alt="">
                <div class="info"></div>
            </div>
            <div class="payment-option">
                <form action="#" method="post">
                    <input type="number" name="cardnumber" id="cardnumber" maxlength="15">
                    <div class="personal">
                        <select id="month" name="month">
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
                        <select id="year" name="year">
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <!-- add more years here -->
                        </select>
                        <input type="number" name="CVV" id="CVV" maxlength="4">
                    </div>
                    <input type="text" name="cardholder" id="cardholder">
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