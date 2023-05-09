<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOOL STEADY WEBSTORE</title>
    <! -- title name -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style2.css">
</head>

<body>

    <section id="header">
        <a href="index.php"><img src="IMG/logop.jpeg" class="logo"></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Account</a></li>
                <li id="shopping-bag"><a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header">
        <h2>#ShopSmart</h2>
        <p>Discover Your Next Favorite Thing !</p>
    </section>

    <section id="product1" class="section-p1">
        <div class="pro-container">
            
        <?php include('get_products.php'); ?>

        <?php foreach($products5 as $product5) { ?>

    <div class="pro">
        <a href="<?php echo 'sproduct1.php?id='.$product5['product_id']; ?>">
        <img src="IMG/Products/<?php echo $product5['product_image']; ?>" alt="Comming soon">
        <div class="des">
            <span><?php echo $product5['product_brand']; ?></span>
            <h5><?php echo $product5['product_name']; ?></h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>RM<?php echo $product5['product_price']; ?></h4>
        </div>
        <a href="<?php echo 'sproduct1.php?id='.$product2['product_id']; ?>"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        </a>

        <?php }  ?>

        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="shop.php">1</a>
        <a href="shop2.php">2</a>
        <a href="#">...</i></a>
    </section>

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

    <script src="script.js"></script>

</body>

</html>