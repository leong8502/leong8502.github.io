<?php 

session_start();

if(isset($_POST['add_to_cart'])) {

                if(isset($_SESSION['cart'])) {

                    $product_array_ids = array_column($_SESSION['cart'],"product_id");
                
                    if(!in_array($_POST['product_id'],$product_array_ids)) {
                
                        $product_id = $_POST['product_id'];
                
                        $product_array = array(
                            'product_id'=>$product_id,
                            'product_name'=>$_POST['product_name'],
                            'product_price'=>$_POST['product_price'],
                            'product_image'=>$_POST['product_image'],
                            'product_quantity'=>$_POST['product_quantity']
                        );
                
                        $_SESSION['cart'][$product_id] = $product_array;
                
                    }else{
                
                        echo "<script>alert('product has already been added to cart')</script>";
                    }
                    
                }else{
                
                    $product_id = $_POST['product_id'];
                
                    $product_array = array(
                            'product_id'=>$product_id,
                            'product_name'=>$_POST['product_name'],
                            'product_price'=>$_POST['product_price'],
                            'product_image'=>$_POST['product_image'],
                            'product_quantity'=>$_POST['product_quantity']
                    );
                
                    $_SESSION['cart'][$product_id] = $product_array;    
                }

                //calculate total cart
                calculateTotalCart();


}else if(isset($_POST['remove_btn'])) {

    $product_id = $_POST['product_id'];
    unset($_SESSION['cart'][$product_id]);

    //calculate total cart
    calculateTotalCart();

}else if(isset($_POST['edit_quantity_btn'])) {

    $product_id = $_POST['product_id'];
    $product_quantity = $_POST['product_quantity'];

    $product = $_SESSION['cart'][$product_id];

    $product['product_quantity'] = $product_quantity;

    $_SESSION['cart'][$product_id] = $product;

    //calculate total cart
    calculateTotalCart();

}else{
    
}

function calculateTotalCart() {

    $total_price = 0;
    $total_quantity = 0;

    foreach($_SESSION['cart'] as $id=>$product) {

        $product = $_SESSION['cart'][$id];

        $price = $product['product_price'];
        $quantity = $product['product_quantity'];
        
        $total_price = $total_price + ($price * $quantity);
        $total_quantity = $total_quantity + $quantity;

    }

    $_SESSION['total'] = $total_price;
    $_SESSION['quantity'] = $total_quantity;

}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCart of TOOL STEADY WEBSTORE</title>
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
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Account</a></li>
                <li id="shopping-bag"><a class="active" href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header" class="cart-header">
        <h2>#MyCart</h2>
        <p>Don't miss out - complete your purchase now!</p>
    </section>

    <section id="cart-table">
        <div class="pro-container cart-page">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>

                <?php if(isset($_SESSION['cart'])){ ?>

                <?php foreach($_SESSION['cart'] as $key => $value) { ?>    


                        <tr>
                            <td>
                                <div class="cart-info">
                                    <img src="<?php echo 'IMG/Products/'.$value['product_image']; ?>" alt="">
                                    <div>
                                        <p><?php echo $value['product_name']; ?></p>
                                        <small>RM<?php echo $value['product_price']; ?></small><br>
                                        <form action="cart.php" method="POST">
                                            <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>">
                                            <input type="submit" name="remove_btn" value="Remove">
                                        </form>
                                    </div>
                                </div>
                            </td>


                            <td>
                                <form method="POST" action="cart.php">
                                    <input type="number" name="product_quantity" value="<?php echo $value['product_quantity'] ?>" min="1">
                                    <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>">
                                    <input type="submit" name="edit_quantity_btn" value="edit" class="edit_btn">
                                </form>
                            </td>
                            
                            <td>
                                <span>RM<?php echo $value['product_price'] * $value['product_quantity']; ?></span>
                            </td>

                        </tr>

                    <?php } ?>
                <?php } ?>    

            </table>
    </section>

    <section id="total-section">
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <?php if(isset($_SESSION['cart'])){ ?>
                    <td><?php echo "RM".$_SESSION['total']; ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>Shipping Fee</td>
                    <td>RM0.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <?php if(isset($_SESSION['cart'])){ ?>
                    <td><?php echo "RM".$_SESSION['total']; ?></td>
                    <?php } ?>
                </tr>
            </table>
        </div>
        </div>
    </section>

    <section id="checkout-button">
        <div class="btn2">
            <a href="pay.php"><button>PURCHASE</button></a>
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

    <script src="script.js"></script>

</body>