<?php

include('connection.php');

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?");
    $stmt->bind_param('i',$id);
    $stmt->execute();

    $product = $stmt->get_result();

}else{

    header('location: index.php');
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOOL STEADY PRODUCT</title>
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

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">

        <?php foreach($product as $p) { ?>

            <img src="IMG/Products/<?php echo $p['product_image']; ?>" width="100%" id="MainImg" class="main-img" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="IMG/Products/<?php echo $p['product_image']; ?>" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="IMG/Products/<?php echo $p['product_image2']; ?>" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="IMG/Products/<?php echo $p['product_image3']; ?>" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="IMG/Products/<?php echo $p['product_image4']; ?>" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h6>IT / Accessories</h6>
            <h4><?php echo $p['product_name']; ?></h4>
            <h2>RM<?php echo $p['product_price']; ?></h2>
            <select>
                <option><?php echo $p['product_color']; ?></option>
                <option><?php echo $p['product_color2']; ?></option>
            </select>
            <input type="number" value="1" min="1">
            <form method="POST" action="cart.php">
                <input type="hidden" name="product_id" value="<?php echo $p['product_id']; ?>"/>
                <input type="hidden" name="product_name" value="<?php echo $p['product_name']; ?>"/>
                <input type="hidden" name="product_price" value="<?php echo $p['product_price']; ?>"/>
                <input type="hidden" name="product_image" value="<?php echo $p['product_image']; ?>"/>
                <input type="hidden" name="product_quantity" value="1" min="0"/>
                <button type="submit" name="add_to_cart" class="normal">Add To Cart</button>
            </form>
            
            <h4>Product Details</h4>
            <span><?php echo $p['product_description']; ?></span>
        </div>

        <?php } ?>

    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
        <?php include('get_products.php'); ?>

        <?php foreach($products6 as $product6) { ?>

        <div class="pro">
        <a href="<?php echo 'sproduct1.php?id='.$product6['product_id']; ?>">
        <img src="IMG/Products/<?php echo $product6['product_image']; ?>" alt="Comming soon">
        </a>
        <div class="des">
        <span><?php echo $product6['product_brand']; ?></span>
        <h5><?php echo $product6['product_name']; ?></h5>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <h4>RM<?php echo $product6['product_price']; ?></h4>
        </div>
        <a href="#"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>

        <?php }  ?>
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
            <p>© 2021, Tech2 etc - HTML CSS Ecommerce Template</p>
        </div>
    </footer>

    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function () {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function () {
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function () {
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function () {
            MainImg.src = smallimg[3].src;
        }
    </script>

    <script src="script.js"></script>

</body>

</html>