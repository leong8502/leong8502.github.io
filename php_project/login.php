<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login now for TOOL STEADY WEBSTORE</title>
    <! -- title name -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style2.css">


        <title>login</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            #login-page {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 90vh;
                background-image: url("IMG/Background.png");
                background-position: top 40% right 0;
                background-size: cover;
            }

            .box {
                position: relative;
                width: 450px;
                height: 430px;
                background: #1c1c1c;
                opacity: 0.93;
                border-radius: 8px;

                overflow: hidden;

            }

            .box::before {
                content: '';
                position: absolute;
                top: -50%;
                left: -50%;
                width: 380px;
                height: 420px;
                background: linear-gradient(0deg, transparent,
                        transparent, rgb(255, 0, 255), rgb(255, 0, 255), rgb(255, 0, 255));
                z-index: 1;
                transform-origin: bottom right;
                animation: animate 6s linear infinite;

            }

            .box::after {
                content: '';
                position: absolute;
                top: -50%;
                left: -50%;
                width: 380px;
                height: 420px;
                background: linear-gradient(0deg, transparent,
                        transparent, rgb(255, 0, 255), rgb(255, 0, 255), rgb(255, 0, 255));
                z-index: 1;
                transform-origin: bottom right;
                animation: animate 6s linear infinite;
                animation-delay: -3s;
            }

            @keyframes animate {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }



            .box form {
                position: absolute;
                inset: 4px;
                background: #222;
                padding: 50px 40px;
                border-radius: 8px;
                z-index: 2;
                display: flex;
                flex-direction: column;
            }

            .box form h2 {
                color: #fff;
                font-weight: 500;
                text-align: center;
                letter-spacing: 0.1em;
            }

            .box form .inputBox {
                margin: auto;
                position: relative;
                width: 300px;
                margin-top: 35px;
            }

            .box form .inputBox input {
                position: relative;
                width: 100%;
                padding: 20px 10px 10px;
                background: transparent;
                outline: none;
                border: none;
                box-shadow: none;
                color: black;
                font-size: 1em;
                letter-spacing: 0.05em;
                transition: 0.5s;
                z-index: 10;
            }

            .box form .inputBox span {
                position: absolute;
                left: 0;
                padding: 20px 0px 10px;
                pointer-events: none;
                color: #8f8f8f;
                font-size: 1em;
                letter-spacing: 0.05em;
                transition: 0.5s;
            }

            .box form .inputBox input:valid~span,
            .box form .inputBox input:focus~span {
                color: white;
                font-size: 0.75em;
                transform: translateY(-34px);
            }

            .box form .inputBox i {
                position: absolute;
                left: 0;
                bottom: 0;
                width: 100%;
                height: 2px;
                background: white;
                border-radius: 4px;
                overflow: hidden;
                transition: 0.5s;
                pointer-events: none;
            }

            .box form .inputBox input:valid~i,
            .box form .inputBox input:focus~i {
                height: 44px;
            }



            .box form .links a:hover,
            .box form .links a:nth-child(2) {
                color: white;
            }

            .box form input[type="submit"] {
                border: none;
                outline: none;
                padding: 9px 25px;
                background: #63b443;
                cursor: pointer;
                font-size: 0.9em;
                border-radius: 4px;
                font-weight: 600;
                width: 120px;
                margin-top: 15px;
                margin-left: 120px;
                color: white;
            }

            .box form input[type="submit"]:active {
                opacity: 0.8;
            }

            .box form input[type="submit"]:hover {
                background-color: rgb(75, 226, 138);
                transition: 0.45s;
            }

            .box form .links {
                display: flex;
                justify-content: space-between;
            }

            .box form .links a {
                margin-top: 30px;
                margin-bottom: 5px;
                margin-right: 50px;
                font-size: 0.75em;
                color: #8f8f8f;
                text-decoration: none;
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

    <section id="login-page">
        <div class="box">
            <form>
                <h2>Sign In</h2><br>
                <div class="inputBox">
                    <input type="text" required="required">
                    <span>Email</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" required="required">
                    <span>Password</span>
                    <i></i>
                </div>
                <div class="links">
                    <a href="#"></a>
                    <a href="register.php">Register</a>
                </div>
                <input type="submit" value="Login">

            </form>
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