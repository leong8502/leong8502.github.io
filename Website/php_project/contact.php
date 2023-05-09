<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOOL STEADY CONTACT US</title>
    <! -- title name -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style2.css">
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Quicksand', sans-serif;
    }

    body {
        height: 100vh;
        width: 100%;
    }

    .container {
        position: relative;
        width: 100%;
        height: 90vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px 100px;
    }

    .container:after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        background: url("IMG/bg.jpg") no-repeat center;
        background-size: cover;
        filter: blur(50px);
        z-index: -1;
    }

    .contact-box {
        max-width: 850px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        justify-content: center;
        align-items: center;
        text-align: center;
        background-color: #fff;
        box-shadow: 0px 0px 19px 5px rgba(0, 0, 0, 0.19);
    }

    .left {
        background: url("img/bg2.jpg") no-repeat center;
        background-size: cover;
        height: 100%;
    }

    .right {
        padding: 25px 40px;
    }

    h2 {
        position: relative;
        padding: 0 0 10px;
        margin-bottom: 10px;
    }

    .container h2:after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translateX(-50%);
        height: 4px;
        width: 50px;
        border-radius: 2px;
        background-color: #2ecc71;
    }

    .field {
        width: 100%;
        border: 2px solid rgba(0, 0, 0, 0);
        outline: none;
        background-color: rgba(230, 230, 230, 0.6);
        padding: 0.5rem 1rem;
        font-size: 1.1rem;
        margin-bottom: 22px;
        transition: .3s;
    }

    .field:hover {
        background-color: rgba(0, 0, 0, 0.1);
    }

    textarea {
        min-height: 150px;
    }

    .btn {
        width: 100%;
        padding: 0.5rem 1rem;
        background-color: #2ecc71;
        color: #fff;
        font-size: 1.1rem;
        border: none;
        outline: none;
        cursor: pointer;
        transition: .3s;
    }

    .btn:hover {
        background-color: #27ae60;
    }

    .field:focus {
        border: 2px solid rgba(30, 85, 250, 0.47);
        background-color: #fff;
    }

    #product1 {
        margin-top: 70px;
    }

    #product1 .map iframe {
        height: 60vh;
        width: 100%;
    }

    @media screen and (max-width: 880px) {
        .contact-box {
            grid-template-columns: 1fr;
        }

        .left {
            height: 200px;
        }
    }
</style>

<body>
    <section id="header">
        <a href="index.php"><img src="IMG/logop.jpeg" class="logo"></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
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

    <div class="container">
        <div class="contact-box">
            <div class="left"></div>
            <div class="right">
                <h2>Contact Us</h2>
                <input type="text" class="field" placeholder="Name" required>
                <input type="text" class="field" placeholder="Email" required>
                <input type="text" class="field" placeholder="Phone" required>
                <textarea placeholder="Message" class="field" required></textarea>
                <button class="btn">Send</button>
            </div>
        </div>
    </div>

    <section id="product1" class="section-p1">
        <h2>Google Map with Marker</h2>
        <p>Get in touch with us today.</p>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7415501025826!2d101.70994935103967!3d3.162660797685878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d98d3808e3%3A0x1b29af7b8309af0d!2sErican%20College%20(KLCC%20Campus)!5e0!3m2!1sen!2smy!4v1678208007509!5m2!1sen!2smy"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1 contact-newsletter">
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