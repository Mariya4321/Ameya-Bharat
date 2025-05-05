<?php
$title = 'Home - Indian Heritage Booking';
ob_start();
?>

<head>
    <link rel="stylesheet" href="../assets/css/states.css">
    <link rel="stylesheet" href="../assets/css/states_main.css">
    <link rel="stylesheet" href="../assets/css/state_responsive.css">
    <style>
        .siteTitle {
            display: block;
            font-weight: 900;
            font-size: 30px;
            margin: 20px 0;
        }

        header, main{
            max-width: 960px;
            margin: 0 auto;
        }

        .card {
            height: 400px;
            position: relative;
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            align-items: flex-end;
            text-decoration: none;
            border: 4px#a84e32;
            margin-bottom: 20px;
            background-size: cover;
            background-image: url("./assets/images/culture/bg.jpeg")
        }

        .inner {
            height: 100%;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: left;
            align-items: left;
            background: white;
            box-sizing: border-box;
            padding: 40px;
            display: block;
        }

        .title {
            font-size: 24px;
            color: black;
            text-align: center;
            font-weight: 700;
            color: #181818;
            text-shadow: 0px 2px 2px #a6f8d5;
            position: relative;
            margin: 0 0 20px 0;
        }

        .subtitle {
            color:#181818;
            text-align: center;
        }

        .card2 {
            background-image: url(" ./assets/images/culture/bg.jpeg");
        }

        /* Button Container */
        .btn-container {
            display:flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
            align-items: center;
        }

        /* Button Styling */
        .btn-container button {
            background-color:#a86d32;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: 0.3s;
            align-items: center;
        }

        .btn-container button:hover {
            background-color: #a86d32;
        }

        @media (max-width: 1024px) {
    header, main {
        max-width: 90%;
    }
}

@media (max-width: 768px) {
    .siteTitle {
        font-size: 24px;
    }

    .card {
        flex-direction: column;
        align-items: center;
        text-align: center;
        background-color: transparent;
    }

    .inner {
        width: 100%;
        padding: 20px;
        background: rgba(255, 255, 255, 0.5); /* More transparent on smaller screens */
    }
}

@media (max-width: 480px) {
    .siteTitle {
        font-size: 20px;
    }

    .btn-container button {
        padding: 6px 10px;
        font-size: 12px;
    }
}

    </style>
</head>

<!-- State Image Slider Section -->
<section id="hero">
    <div class="slider">
        <button class="slider-btn prev" onclick="prevSlide()">&#10094;</button>
        <div class="slides">
            <div class="slide active">
                <img src="./assets/images/states/slider.jpg" alt="Heritage Site 1">
            </div>
            <div class="slide">
                <img src="./assets/images/states/india_gate.jpeg" alt="Heritage Site 2">
            </div>
            <div class="slide">
                <img src="./assets/images/states/pratapgadh.jpg" alt="Heritage Site 3">
            </div>
        </div>
        <button class="slider-btn next" onclick="nextSlide()">&#10095;</button>
        <div class="hero-text">
            <h1 style="color:white; font-size:xx-large;">EXPLORE THE CULTURE OF MAHARASHTRA</h1>
        </div>
    </div>
</section>
<section>
<main>
    <!-- Card for Culture -->
    <div class="card" onclick="location.href='culture.php'">
        <div class="inner">
            <h2 class="title">CULTURE</h2>
            <span class="subtitle">
                Maharashtra's culture is a blend of Marathi traditions, arts, language, food, and festivals, shaped by its rich history and deep-rooted heritage.
            </span>
            <div class="btn-container">
                <button onclick="event.stopPropagation(); location.href='food.php'">Food</button>
                <button onclick="event.stopPropagation(); location.href='maha_clothing_dance_lang.php'">Clothing</button>
                <button onclick="event.stopPropagation(); location.href='maha_clothing_dance_lang.php'">Language</button>
                <button onclick="event.stopPropagation(); location.href='maha_clothing_dance_lang.php'">Dance</button>
            </div>
        </div>
    </div>
        
    <!-- Card for Tradition -->
    <div class="card card2" onclick="location.href='tradition.php'">
        <div class="inner">
            <h2 class="title">TRADITION</h2>
            <span class="subtitle">
                Maharashtra’s traditions include practices, rituals, and customs that have been passed down through generations. These encompass religious ceremonies like Wari Yatra, festivals such as Gudi Padwa and Ganesh Chaturthi, folk storytelling through Powada, and family rituals that preserve the state's rich cultural heritage.
            </span>
            <div class="btn-container">
                <button onclick="event.stopPropagation(); location.href='MAH_festivals.php'">Festivals</button>
            </div>
        </div>
    </div>
</main>
 
</section>
<script src="./assets/js/states_main.js"></script>
<script src="./assets/js/states.js"></script>
<script src="./assets/js/read_more.js"></script>

<?php
$content = ob_get_clean();
include 'layout.php';
?>