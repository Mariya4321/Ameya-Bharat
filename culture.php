﻿<?php
$title = 'Home - Indian Heritage Booking';
ob_start();
?>
<head>
    <link rel="stylesheet" href="./assets/css/culture.css">
    <link rel="stylesheet" href="./assets/css/states_main.css">
    <link rel="stylesheet" href="./assets/css/hero.css">


</head>

    <!-- Hero Section with Image Slider -->
    <section id="hero">
        <div class="slider">
            <button class="slider-btn prev" onclick="prevSlide()">&#10094;</button>
            <div class="slides">
                <div class="slide active">
                    <img src="./assets/images/culture/c1.jpeg" alt="culture 1">
                </div>
                <div class="slide">
                    <img src="./assets/images/culture/c2.jpeg" alt="culture Site 2">
                </div>
                <div class="slide">
                    <img src="./assets/images/culture/c3.jpeg" alt="culture Site 3">
                </div>
            </div>
            <button class="slider-btn next" onclick="nextSlide()">&#10095;</button>
        </div>
        <div class="hero-text">
            <h1>Explore India's Diverse Culture</h1>
            <p>Depicts Unity in Diversity....</p>
            <button class="read-more-btn">
                <a href="#h" style="color: white; text-decoration: none;">
                    Explore
                </a>
            </button>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <section id="h">
    <div class="hero" style="background-image: url(./assets/images/culture/he9.jpg);background-repeat: no-repeat; background-size: cover;" >
    <div class="hero-content">
      <h1>Celebrating the Spirit of India</h1>
      <p><b>Explore the timeless traditions, vivid art forms, and boundless diversity of Indian culture.</b></p>
      <a href="#states" class="btn">Explore More</a>
    </div>
  </div>
</section>


    <!-- Cards Section -->
    <section id="card" >
    <div class="container ">
        
        <div class="card" onclick="navigateToPage('religions.php')" >
            <img src="./assets/images/culture/h1.webp" alt="Option 1">
            <h3>Religions in India</h3>
        </div>
        <div class="card" onclick="navigateToPage('FCAI.php')">
            <img src="./assets/images/culture/f.jpg" alt="Option 2">
            <h3>Festivals celebrated across India</h3>
        </div>
        <div class="card" onclick="navigateToPage('harvest_festivals.php')">
            <img src="./assets/images/culture/h.webp" alt="Option 3">
            <h3>Harvest Festivals in India</h3>
        </div>
    </div>
        </section>

    <hr>
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
                <button class="read-more-btn"> <a href="karnataka.html" style="color: white; text-decoration: none;">Explore</a></button>

            </div>
            <div class="state">
                <img src="./assets/images/states/maharashtra.webp" alt="State 2">
                <h3>Maharashtra</h3>
                <p>Home to Mumbai, the city of dreams, Maharashtra is known for its vibrant culture and history.</p>
                <button class="read-more-btn"> <a href="maha_cultre.php" style="color: white; text-decoration: none;">Explore</a></button>

            </div>
            <div class="state">
                <img src="./assets/images/states/rajasthan.jpg" alt="State 3">
                <h3>Rajasthan</h3>
                <p>Famous for its grand palaces, deserts, and rich heritage, Rajasthan is a place of ancient royalty.</p>
                <button class="read-more-btn"> <a href="#" style="color: white; text-decoration: none;"></a>Explore</button>
            </div>
            <div class="state">
                <img src="./assets/images/states/up.jpg" alt="State 4">
                <h3>Uttar Pradesh</h3>
                <p>Known for the Taj Mahal and historical cities like Agra and Varanasi, Uttar Pradesh is steeped in history.</p>
                <button class="read-more-btn"> <a href="Uttar-Pradesh.html" style="color: white; text-decoration: none;">Explore</a></button>
            </div>
        </div>
    </section>




    <script>
        function navigateToPage(pageUrl) {
            window.location.href = pageUrl;
        }

        function prevSlide() {
            const slides = document.querySelector('.slides');
            slides.appendChild(slides.firstElementChild);
        }

        function nextSlide() {
            const slides = document.querySelector('.slides');
            slides.insertBefore(slides.lastElementChild, slides.firstElementChild);
        }
    </script>
<?php
$content = ob_get_clean();
include 'layout.php';
?>