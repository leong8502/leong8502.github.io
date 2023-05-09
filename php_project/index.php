 <!DOCTYPE html>
 <html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOOL STEADY WEBSTORE</title>  <! -- title name -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <section id="header">
        <a href="index.php"><img src="IMG/logop.jpeg" class="logo"></a>
 
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
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
    
    <section id="hero">
        <h4>2nd Hand Accessories</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>We provides the products with Affordable and Convenient</p>
        <a href="shop.php"><button>Shop Now</button></a>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="IMG/features/f1.jpeg" alt="">
            
        </div>
        <div class="fe-box">
            <img src="IMG/Features/f2.jpeg" alt="">
            
        </div>
        <div class="fe-box">
            <img src="IMG/Features/f3.jpeg" alt="">
            
        </div>
        <div class="fe-box">
            <img src="IMG/Features/f4.jpeg" alt="">
            
        </div>
        <div class="fe-box">
            <img src="IMG/Features/f5.jpeg" alt="">
            
        </div>
        <div class="fe-box">
            <img src="IMG/Features/f6.jpeg" alt="">
            
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Product</h2>
        <p>Vintage and Eco-Friendly</p>
        <div class="pro-container">

        <?php include('get_products.php'); ?>

        <?php foreach($products2 as $product2) { ?>
            
            <div class="pro">
            <a href="<?php echo 'sproduct1.php?id='.$product2['product_id']; ?>">
            <img src="IMG/Products/<?php echo $product2['product_image']; ?>" alt="Comming soon">
                <div class="des">
                    <span><?php echo $product2['product_brand']; ?></span>
                    <h5><?php echo $product2['product_name']; ?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>RM<?php echo $product2['product_price']; ?></h4>
                </div>
                <a href="<?php echo 'sproduct1.php?id='.$product2['product_id']; ?>"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
            </div>
            </a>

        <?php }  ?>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Acquisition Services</h4>
        <h2>Sell What You Don't<span> Need </span>and Buy What You Do</h2>
        <a href="contact.php"><button class="normal"><span>Contact us</span></button></a>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Vintage and Eco-Friendly</p>
        <div class="pro-container">
            
        <?php include('get_products.php'); ?>
        <?php foreach($products3 as $product3) { ?>

            <div class="pro" onclick="window.location.href='sproduct1.php';">
            <a href="<?php echo 'sproduct1.php?id='.$product3['product_id']; ?>">
            <img src="IMG/Products/<?php echo $product3['product_image']; ?>" alt="Comming soon">
                <div class="des">
                    <span><?php echo $product3['product_brand']; ?></span>
                    <h5><?php echo $product3['product_name']; ?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>RM<?php echo $product3['product_price']; ?></h4>
                </div>
                <a href="<?php echo 'sproduct1.php?id='.$product2['product_id']; ?>"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
            </div>
            </a>

        <?php }  ?>
        
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Crazy deals</h4>
            <h2>Tech on a budget</h2>
            <p>Get the best of both worlds from us.</p>
            <button class="white"><span>Learn More</span></button>
        </div>
        <div class="banner-box banner-box2">
            <h4>Unleash Excellence</h4>
            <h2>Quality second-hand products</h2>
            <p>Tested and are in excellent condition.</p>
            <button class="white"><span>Collection</span></button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>UPGRADE YOUR GEAR</h2>
            <h3>PERFECT ACCESSORY WITHOUT BREAKING BANK</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>GREENER WAY TO SHOP</h2>
            <h3>GETTING ECO-FRIENDLY ACCESSORIES</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>YOUR ONE-STOP-SHOP</h2>
            <h3>MEETING EXPECRTATIONS</h3>
        </div>

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
            <p>© 2021, Tech2 etc -  HTML CSS Ecommerce Template</p>
        </div>
    </footer>

    <script src="script.js"></script>

</body>
</html>