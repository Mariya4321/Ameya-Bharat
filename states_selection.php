<?php
$title = 'Home - Indian Heritage Booking';
ob_start();
?>


<head>
    <link rel="stylesheet" href="../assets/css/states_main.css">


</head>

<!-- Hero Section with Image Slider -->
    <section id="hero">
        <div class="slider">
            <button class="slider-btn prev" onclick="prevSlide()">&#10094;</button>
            <div class="slides">
                <div class="slide active">
                    <img src="./assets/images/states/indian_heri1.jpg" alt="Heritage Site 1">
                </div>
                <div class="slide">
                    <img src="./assets/images/states/indian_heri2.jpeg" alt="Heritage Site 2">
                </div>
                <div class="slide">
                    <img src="./assets/images/states/indian_heri3.png" alt="Heritage Site 3">
                </div>
            </div>
            <button class="slider-btn next" onclick="nextSlide()">&#10095;</button>
        </div>
        <div class="hero-text">
            <h1 style="color:white;">Explore India's Rich Heritage</h1>
            <p style="color:white;">Book your tickets to India's most iconic heritage sites!</p>
            <button class="read-more-btn"> <a href="#states" style="color: white; text-decoration: none;">
                Explore
            </a></button>
        </div>
    </section>

    <!-- Indian States Section -->
    <!-- Indian States Section -->
    <section id="states">
        <h2>Explore Indian States</h2>
        <div class="states-grid">
            <div class="state">
                <img src="./assets/images/states/karnataka.jpg" alt="State 1">
                <h3>Karnataka</h3>
                <p>A state known for its rich culture, history, and the vibrant city of Bengaluru.</p>
                <br>
                <button > <a href="karnataka.php" style="color: white; text-decoration: none;">Explore</a></button>

            </div>
            <div class="state">
                <img src="./assets/images/states/maharashtra.webp" alt="State 2">
                <h3>Maharashtra</h3>
                <p>Home to Mumbai, the city of dreams, Maharashtra is known for its vibrant culture and history.</p>
                <button> <a href="maharashtra.php" style="color: white; text-decoration: none;">Explore</a></button>

            </div>
            <div class="state">
                <img src="./assets/images/states/rajasthan.jpg" alt="State 3">
                <h3>Rajasthan</h3>
                <p>Famous for its grand palaces, deserts, and rich heritage, Rajasthan is a place of ancient royalty.</p>
                <button > <a href="#" style="color: white; text-decoration: none;"></a>Explore</button>
            </div>
            <div class="state">
                <img src="./assets/images/states/up.jpg" alt="State 4">
                <h3>Uttar Pradesh</h3>
                <p>Known for the Taj Mahal and historical cities like Agra and Varanasi, Uttar Pradesh is steeped in history.</p>
                <button> <a href="Uttar-Pradesh.php" style="color: white; text-decoration: none;">Explore</a></button>
            </div>
        </div>
    </section>
    <script src="./assets/js/states_main.js"></script>
    <script src="./assets/js/states.js"></script>
    <?php
$content = ob_get_clean();
include 'layout.php';
?>