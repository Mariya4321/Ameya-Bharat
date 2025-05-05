<?php
$title = 'Home - Indian Heritage Booking';
ob_start();
?>

<head>
    <link rel="stylesheet" href="../assets/css/states.css">
    <link rel="stylesheet" href="../assets/css/states_main.css">
    <link rel="stylesheet" href="../assets/css/state_responsive.css">
    <style>

.product-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* 4 cards per row */
    gap: 10px;
    padding: 20px;
    height: auto; /* Allow card resizing */
}

.product-card {
    background: white;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 15px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 400px; /* Fixed card height */
    transition: height 0.3s ease-in-out; /* Smooth transition */
}

.product-card img {
    max-width: 70%; /* Reduce image size */
    height: 70%;
    height: 50%;
    margin-left: 15%;

}

.product-card h2 {
    font-size: 1rem; /* Reduced font size */
    margin: 10px 0;
}

.product-card p {
    font-size: 0.9rem; /* Reduced font size */
    color: #555;
}

.product-card button {
    background-color: #ff9900;
    color: white;
    border: none;
    padding: 8px 12px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 0.9rem;
}

.product-card button:hover {
    background-color: #e68a00;
}

.hidden-content {
    display: none;
    max-height: 200px; /* Set a maximum height for the expanded content */
    overflow: auto;
}

.product-card.expanded {
    height: auto; /* Allow height to grow when expanded */
}

.product-card.expanded .hidden-content {
    display: block;
}

/* Responsive Design */
@media (max-width: 992px) {
    .product-grid {
        grid-template-columns: repeat(3, 1fr); /* 3 cards per row on tablets */
    }
}

@media (max-width: 600px) {
    .product-grid {
        grid-template-columns: repeat(2, 1fr); /* 2 cards per row on mobile */
    }
}

    </style>

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
            <h1 style="color:white; font-size:xx-large;">Explore The Harvest Festivals Of <span style="color: orange;">IN</span>D<span style="color: rgb(23, 186, 23);">IA</span>.....Granary of the World</h1>
        </div>
</section>

<section>
    <main class="product-grid">
        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/harvest festivals/makar sankranti.jpeg" alt="Product 3">
            <h2>Makar Sankranti</h2>
            <p>Makar Sankranti is India’s oldest and most colourful harvest festival, celebrated across the country.</p> 
            <span class="hidden-content">
             <p>
                People in Gujarat, Kerala, Tamil Nadu, Haryana, Himachal Pradesh, West Bengal, and Punjab, in particular, celebrate the harvest of fresh crops with bonfires, carnivals, music, dances, kite flying, and rallies.
                Makar Sankranti marks the sun’s arrival into the zodiac sign of Makara (Capricorn) as it moves along its celestial route.
                According to Hindu mythology, this festival signifies the end of a bad phase and the beginning of a good one.
                It is celebrated in different states with different names: 
                Uttarayan in Gujarat- International Kite Festival is celebrated since 1989, as part of the official celebration of ‘Uttarayan’.
                Maghi in Punjab- Bathing in a river in the early morning hours of Maghi is essential.
                Magha Saaji in the Himachal Pradesh- This day marks the beginning of the month of Magha.
                Kicheri In Uttar Pradesh– It involves ceremonial bathing in the river.
                Pongal in Tamil Nadu- It is celebrated over 4 days at harvest time.
                The Kumbh Mela and many delectable sweet foods consisting of sesame and jaggery are the main attractions of the Makar Sankranti festival.
            </p>
           </span>
            <button class="read-more-btn">Read More</button>
        </div>
        
        <div class="product-card" data-state="maharashtra" data-category="home">
            <img src="./assets/images/harvest festivals/baisakhi.jpeg" alt="Product 1">
            <h2>Baisakhi</h2>
            <p>Baisakhi or Vaisakhi is celebrated in Punjab and Haryana by thanking God for a bountiful crop</p>
            <span class="hidden-content">
                <p>
                The farmers express their joy and enjoyment by celebrating this Indian harvest festival.
                People dress up in their brightest outfits, sing the happiest tunes, and dance to the melodic sounds of Dhol. 
                There are also Baisakhi fairs where acrobatics, wresting, algoza, and vanjli acts are also witnessed.
                Men’s Bhangra and women’s Giddha are the main attractions of the Baisakhi celebration. </p>

            </span>
            <button class="read-more-btn">Read More</button>
        </div>
        
        <div class="product-card" data-state="maharashtra" data-category="home">
            <img src="./assets/images/harvest festivals/lohri.jpeg" alt="Product 2">
            <h2>Lohri</h2>
            <p>Lohri is a well-known harvest celebration in Punjab that features traditional dance and music</p>
            <span class="hidden-content">
            <p>It heralds the conclusion of the winter season and is historically said to usher in the return of the sun to the northern hemisphere. 
                It is celebrated the night before Makar Sankranti 
                To beat the winter chill, the entire family and neighbours congregate around a campfire and sing together, offering grains, corns, and nuts to honour and appreciate the spectacular harvest of sugarcane crops.
                The Punjabi traditional Sunder Mundriye, which is sung by everyone, is one of the festival’s main attractions.</p>
                </span>

            <button class="read-more-btn">Read More</button>
        </div>

        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/harvest festivals/Bohag-Bihu.jpeg" alt="Product 4">
            <h2>Bohag Bihu</h2>
            <p>Every year in April, the whole state of Assam celebrates Bohag Bihu with zeal and joy. It represents the beginning of the Assamese new year.</p>
            <span class="hidden-content">
            <p>This is an unusual and colourful name on the list of harvest festivals in India, also known as Magh Bihu.
                Farmers in Assam rejoice and enjoy their harvesting efforts and receive the benefits. Uruka, the communal feast, kicks off the festivities the night before.
                On Bihu, the mejis or pavilions, built of clay and hay, are burned. Local ladies dress in magnificent mukhtars and take part in group singing and dances. 
                Bihu festival highlights include the Bihu dance, bullfight, birds battle, and Sunga Pitha, Til Pitha, and Laru.
                It is thought that the event began when the valley’s inhabitants began tilling the ground. Bihu is thought to be as old as the Brahmaputra River.</p>
            </span>
            <button class="read-more-btn">Read More</button>
        </div>

        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/harvest festivals/wangala.jpeg" alt="Product 4">
            <h2>Wangala</h2>
            <p>This festival is celebrated in Meghalaya and Assam.</p>
            <span class="hidden-content">
            <p>This is one of India’s most celebrated harvest celebrations, celebrating the arrival of winter.Wangala is a festival of 100 drums performed by Garo tribes from northeast India. 
                The Sun God is adored with great love and enthusiasm throughout this festival. 
                Women dress in traditional colourful attire and dance, while men play their fingers rhythmically on traditional drum pads.
                Drums, flutes, and gongs are used in this musical spectacle, which are the main attractions of the festival.</p>
            </span>
            <button class="read-more-btn">Read More</button>
        </div>

        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/harvest festivals/onam.jpeg" alt="Product 4">
            <h2>Onam</h2>
            <p>Onam is a historical harvest festival in Kerala that is celebrated with tremendous zeal in various regions of the state. </p>
            <span class="hidden-content">
            <p>With the advent of Mahabali, the festival lasts ten days.
People celebrate the successful harvest by decorating their house entry with flower rangoli, wearing new traditional costumes, cooking wonderful food, and celebrating with traditional music and dancing.
Traditional Malayalee foods such as Rasam, Payasam, Avial, brown rice, and parippu curry are served to guests in traditional green leaf, and the snake boat race and tiger dance are extremely enjoyable to witness.</p>
            </span>
            <button class="read-more-btn">Read More</button>
        </div>

        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/harvest festivals/pongal.jpeg" alt="Product 4">
            <h2>Pongal</h2>
            <p>Pongal is another name for Makar Sankranti, which is celebrated in many cities in Tamil Nadu at the same time.</p>
            <span class="hidden-content">
            <p>This is a thanksgiving festival in which people show their heartfelt appreciation to Mother Nature for the year’s rice harvest. 
This is one of India’s most colourful harvest festivities, lasting four days.
The first day is the Bhogi Festival, which is dedicated to Lord Indra in exchange for an abundance of rain. 
On the second day, newly harvested rice and milk are prepared and presented to the Sun God outside. 
The third day is dedicated to cow worship.
The fourth day is dedicated to Pongal, or traditional coloured rice flavoured with turmeric, betel leaf, and betel nuts.
Tamilians mark the event by creating traditional patterns known as kolams using rice powder in their houses.
Pongal celebration highlights also include bull-taming contests, a bonfire made of agricultural waste and prayers for the prosperity of the family.</p>
            </span>
            <button class="read-more-btn">Read More</button>
        </div>
        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/harvest festivals/vishu.jpeg" alt="Product 4">
            <h2>Vishu</h2>
            <p>Vishu is the festival of Kerala and Karnataka.
            This is a fascinating harvest event held on the first day of the Malayalee New Year.</p>
            <span class="hidden-content">
            <p>Women in the home cook Vishukkani, which consists of rice, golden lemon, golden cucumber, jackfruit, yellow konna flowers, and betel leaves.
The festival is characterised by grand worship of Lord Vishnu or Lord Krishna, extravagant family lunches, nighttime prayers, and fireworks. 
The main attractions of the Vishu festival are Kani Kanal, Vishnu’s first sacred sight and Sadya, the big mid-day food spread.</p>
            </span>
            <button class="read-more-btn">Read More</button>
        </div>
    </main>
</section>
<script>
  // Handle "Read More" button functionality
document.addEventListener('DOMContentLoaded', function() {
    const readMoreButtons = document.querySelectorAll('.read-more-btn');

    readMoreButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productCard = this.closest('.product-card');
            const hiddenContent = productCard.querySelector('.hidden-content');
            
            // Toggle the 'expanded' class to control visibility and height of the card
            if (productCard.classList.contains('expanded')) {
                productCard.classList.remove('expanded');
                this.textContent = 'Read More';
            } else {
                productCard.classList.add('expanded');
                this.textContent = 'Read Less';
            }
        });
    });
});

    </script>

<?php
$content = ob_get_clean();
include 'layout.php';
?>
