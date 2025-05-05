<?php
$base_url = '/'; // Adjust if your project is in a subfolder, e.g., '/project/'
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ameya Bharat</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/logo/logo.jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    <!-- FontAwesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/header.css" />
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/cart.css" />
</head>

<body>
    <!-- HEADER -->
    <header class="top-area">
        <div class="header-area">
            <div class="logo">
                <a href="index.php">
                    Ameya<span>BHARAT</span>
                </a>
            </div>
            <div class="main-menu">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" id="navbarToggle">
                        <i class="fa fa-bars" style="font-size:36px"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#pack">Customize Packages</a></li>
                        <li><a href="./ecommerce.php">E-commerce</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li>
                            <button class="book-btn">Login</button>
                        </li>
                        <div class="cart-icon" onclick="toggleCart()">
                            <i class="fa fa-shopping-cart" style="font-size: x-large; color: white;"></i>
                            <span class="cart-count" id="cart-count">0</span>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <?php echo $content ?? 'No content available'; ?>

    
    <footer id="footer">
    <div class="footer-container">
        <div class="footer-about">
            <h3>About Us</h3>
            <p>Discover the rich heritage, culture, and landmarks of India. Explore, learn, and experience the beauty of Indian traditions with us.</p>
        </div>
        <div class="footer-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="./states_selection.php">Destinations</a></li>
                <li><a href="./culture.php">Culture</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>Email: info@heritageindia.com</p>
                <p>Phone: +91 98765 43210</p>
                <p>Address: 123 Heritage Lane, India</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Heritage of India. All rights reserved. | Designed with ❤ by [Your Name]</p>
        </div>
    </footer>

    <!-- Cart Sidebar -->
    <div class="cart-container" id="cart">
        <div class="cart-header">
            Your Cart
            <button onclick="toggleCart()" style="background: transparent; border: none; color: white; font-size: large;">&times;</button>
        </div>
        <div class="cart-items" id="cart-items"></div>
        <div class="cart-total">
            <h3>Total: $<span id="cart-total">0.00</span></h3>
        </div>
    </div>
    <script src="./assets/js/cart.js"></script>
</body>

</html>
