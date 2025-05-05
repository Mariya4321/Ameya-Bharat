<?php
$title = 'Home - Indian Heritage Booking';
ob_start();
?>

<head>
    <link rel="stylesheet" href="../assets/css/states.css">
    <link rel="stylesheet" href="../assets/css/states_main.css">
    <link rel="stylesheet" href="../assets/css/state_responsive.css">
    <link rel="stylesheet" href="./assets/css/food.css">
<style>

    </style>
</head>

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

<section>
<div class="card-container">
    <div class="container">
    <img src="./assets/images/food/puran-poli.jpg" />
    <div class="content-box">
        <h4 class="name">Puran Poli</h4>
        <p>
            Puran Poli is a traditional Indian sweet flatbread stuffed with a mixture of lentils, 
            jaggery, and spices, enjoyed with ghee or milk.
        </p>
        
    </div>
    </div>

    <div class="container">
    <img src="./assets/images/food/vada-pav.jpg" />
    <div class="content-box">
        <h4 class="name">Vada Pav</h4>
        <p>
            Vada Pav is a popular Indian street food from Mumbai, consisting of a spicy potato fritter 
            (vada) sandwiched in a soft bun (pav), served with chutneys and fried chilies.
        </p>
    </div>
    </div>

    <div class="container">
    <img src="./assets/images/food/misal-pav.jpg" />
    <div class="content-box">
        <h4 class="name">Misal Pav</h4>
        <p>
            Misal Pav is a spicy Maharashtrian dish made of sprouted lentil curry (misal) topped with farsan, onions, 
            and coriander, served with soft pav (bread rolls).
        </p>
    </div>
    </div>

    <div class="container">
    <img src="./assets/images/food/Pithla-Bhakri.jpg" />
    <div class="content-box">
        <h4 class="name">Pithla Bhakri</h4>
        <p>
            Pithla-Bhakri is a rustic Maharashtrian dish featuring a spiced gram flour curry (pithla) paired with thick millet 
            flatbread (bhakri) and often served with chutney and onions.
        </p>
    </div>
    </div>

    <div class="container">
    <img src="./assets/images/food/Sabudana-khichdi.jpg" />
    <div class="content-box">
        <h4 class="name">Sabudana khichdi</h4>
        <p>
            Sabudana Khichdi is a light and flavorful Indian dish made with soaked tapioca pearls, peanuts, 
            potatoes, and mild spices, often enjoyed during fasting.
        </p>
    </div>
    </div>

    <div class="container">
    <img src="./assets/images/food/khothmbir-vadi.jpg" />
    <div class="content-box">
        <h4 class="name">Khothmbir Vadi</h4>
        <p>
            Khothmbir Vadi is a savory Maharashtrian snack made from a spiced gram flour mixture with fresh coriander leaves, 
            steamed and then fried into crispy, golden bites.
        </p>
    </div>
    </div>

    <div class="container">
    <img src="./assets/images/food/surai-vadi.webp" />
    <div class="content-box">
        <h4 class="name">Surai Vadi</h4>
        <p>
            Surai Vadi is a popular Maharashtrian snack made from a mixture of rice flour, spices, and a touch of sweetness, shaped into 
            bite-sized pieces and deep-fried until crispy.
        </p>
    </div>
    </div>

    <div class="container">
    <img src="./assets/images/food/rodge.jpg" />
    <div class="content-box">
        <h4 class="name">Rodge</h4>
        <p>
            Rodge is a traditional Maharashtrian snack made from roasted gram flour, jaggery, and ghee, shaped into small, sweet, and crunchy bites, 
            often enjoyed as a festive treat.
        </p>
    </div>
    </div>
</div>

</section>
<script src="./assets/js/states_main.js"></script>
<script src="./assets/js/states.js"></script>
<?php
$content = ob_get_clean();
include 'layout.php';
?>
