<!DOCTYPE html>
<html>

<head>
    <title>MyProfile</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">

    <style>
        .container {
            max-width: 1360px;
            margin: 0 auto;
            height: 80vh;
        }

        .user-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-image: url("IMG/userinfo.png");
            background-size: cover;
            width: 100%;
            padding-bottom: 50px;
        }

        .user-info img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
            margin-top: 40px;
        }

        .order-history h3 {
            margin-top: 20px;
        }

        .history-page {
            margin: 10px auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }
    </style>
</head>

<body>

    <section id="header">
        <a href="index.php"><img src="IMG/logop.jpeg" class="logo"></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a class="active" href="login.php">Account</a></li>
                <li id="shopping-bag"><a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <div class="container">
        <div class="user-info">
            <img src="IMG/1.jpeg" alt="Profile Picture">
            <h2>User1</h2>
        </div>
        <div class="order-history">
            <h3>Order History</h3>
            <section id="cart-table">
                <div class="pro-container history-page">
                    <table>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="cart-info">
                                    <img src="IMG/Products/p1.jpeg">
                                    <div>
                                        <p>Monitor Asus 27 vg27aq ips-wqhd-1ms-165hz</p>
                                        <small>Price: RM1559.00</small><br>
                                    </div>
                                </div>


                            </td>
                            <td>1</td>
                            <td>RM1559.00</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cart-info">
                                    <img src="IMG/Products/p2.jpeg">
                                    <div>
                                        <p>Kingston a400 SSD 480GB SATA3 Internal hard drive 2.5inch</p>
                                        <small>Price: RM160.00</small><br>
                                    </div>
                                </div>


                            </td>
                            <td>1</td>
                            <td>RM160.00</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cart-info">
                                    <img src="IMG/Products/p3.jpeg">
                                    <div>
                                        <p>HyperX FURY 8GB 3200MHz DDR4</p>
                                        <small>Price: RM120.60</small><br>
                                    </div>
                                </div>


                            </td>
                            <td>1</td>
                            <td>RM120.60</td>
                        </tr>
                    </table>
            </section>
        </div>
    </div>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletter</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <a href="register.php"><button class="normal">Sign Up</button></a>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <h4>Contact</h4>
            <p><strong>Address:</strong> 878 Edward Road, Street 69, Kuala Lumpur</p>
            <p><strong>Phone:</strong> +60 1147899987/(+60 12 6969877)</p>
            <p><strong>Hours:</strong> 10:00 - 18:00 Mon - Sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="about.php">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="contact.php">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="login.php">Sign in</a>
            <a href="cart.php">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From Google Play Store</p>
            <div class="row">
                <img src="IMG/Pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="IMG/Pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>© 2021, Tech2 etc - HTML CSS Ecommerce Template</p>
        </div>
    </footer>

</body>

</html>