<?php
$title = 'Home - Indian Heritage Booking';
ob_start();
?>

<head>
    <link rel="stylesheet" href="./assets/css/states_main.css">
    <style>

.product-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr); /* 4 cards per row */
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
    height: 50%;
    margin-left:15%;
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
            <h1 style="color:white; font-size:xx-large;">Explore the festivals Of Mharashtra </h1>
        </div>

</section>

<section>
    <main class="product-grid">
        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/MAH_festivals/ganesh chaturthi.jpeg" alt="Product 3">
            <h2>Ganesh Chaturthi</h2> 
            <p>This festival became popular in Maharashtra after Lokamanya Bal Gangadhar Tilak initiated a public celebration in 1893.</p>
            <span class="hidden-content">

                            <p>
                            Ganesh Chaturthi is a 10-day Hindu festival that celebrates the birth of the Hindu god Ganesh. 
Ganesh Chaturthi is celebrated on the fourth day of Bhadrapada, the sixth month of the Hindu calendar, which usually falls in August or September. 
                            
                                <br><br>Ganesh Chaturthi symbolizes the triumph of good over evil and the importance of new beginnings. 
                                


                                
                                <br><br>How it is celebrated:
                                        
                                        Statues: Statues of Ganesh are installed in homes and in public pandals (temporary stages). 
                                        Worship: Devotees perform daily pooja with offerings, lamps, incense, and devotional songs. 
                                        Prasad: Food blessed by the deity, called prasad, is distributed throughout the community. 
                                        Processions: Public celebrations include processions of song and dance. 
                                        Competitions: Local communities compete to put up the most impressive Ganesh statue.  
                            </p>
                        </span>
                        
            
            <button class="read-more-btn">Read More</button>
        </div>
        <div class="product-card" data-state="maharashtra" data-category="home">
            <img src="./assets/images/MAH_festivals/gudipadwa.jpeg" alt="Product 1">
            <h2>Gudi Padwa</h2>
            <p>Gudi Padwa is a spring festival that marks the start of the new year, the beginning of spring, and the harvest of rabi crops.</p>
            <span class="hidden-content">

                            <p>Gudi Padwa is celebrated on the first day of Chaitra, the first month of the lunisolar Hindu calendar, which usually falls in March or April.

                             

 
                            
                                <br><br>
                                Celebrations include:
                                Decorating: Making a colorful rangoli on the floor 
                                Raising a Gudi: Hoisting a special flag outside the house, which is a piece of cloth garlanded with flowers, mango, and neem leaves, and topped with an upturned silver or copper vessel 
                                Eating: Preparing festive food and sweets 
                                Praying: Saying prayers and good wishes to each other 
                                Dancing: Dancing in street processions 



                                
                                <br><br>The word Gudi Padwa is a combination of two words: Gudi, which means flag, and Padwa, which comes from the Sanskrit word pratipada, meaning the first day of a lunar fortnight.Gudi Padwa is celebrated by Marathi and Konkani Hindus in and around Maharashtra, Goa, and Damaon.  


                            </p>
                        </span>
                        
            
            <button class="read-more-btn">Read More</button>
        </div>
        <div class="product-card" data-state="maharashtra" data-category="home">
            <img src="./assets/images/MAH_festivals/ShivajiJayanti.jpeg" alt="Product 2">
            <h2>Shiv Jayanti</h2>
            <p>It marks the birth anniversary of Chhatrapati Shivaji Maharaj, the founder of the Maratha Empire.</p> 
            <span class="hidden-content">
            <p> Shivaji Jayanti is celebrated on February 19th every year. Shivaji Maharaj was born in the hill fort of Shivneri in Pune, Maharashtra in 1630.
                <br><br>
                Shivaji Jayanti is a day of celebration and a public holiday in Maharashtra. People honor Shivaji's memory and celebrate the values he stood for, such as bravery, honesty, and fighting for what's right. 
                <br><br>
                Shivaji Maharaj is considered one of India's most progressive and brave rulers. He is remembered for his defense of Hinduism, commitment to secularism, and religious tolerance. 

                <br><br>The date of Shivaji Jayanti varies each year according to the Hindu calendar, which is based on the lunar cycle.
                </p>
                </span>
            <button class="read-more-btn">Read More</button>
        </div>
        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/MAH_festivals/ashadi ekadashi.jpeg" alt="Product 4">
            <h2>Ashadi Ekadashi</h2>
          <p>Ashadhi Ekadashi is a Hindu festival that marks the beginning of a four-month period of Lord Vishnu's sleep. </p> 
          <span class="hidden-content">
            <p>It's also known as Devshayani Ekadashi, Maha Ekadashi, Prathama Ekadashi, and Padma Ekadashi.Ashadhi Ekadashi is celebrated on the 11th day of the bright fortnight (Shukla Paksha) in the Ashadha month, which usually falls in June or July. 
            
            <br><br>Ashadhi Ekadashi symbolizes the beginning of Chaturmas, a holy period in the Hindu calendar. It's also a time when devotees engage in spiritual practices, self-reflection, and prayers. 

            <br><br>Devotees fast on this day, abstaining from grains, lentils, and non-vegetarian food. They also visit temples, offer prayers, and listen to religious texts. 
            Ashadhi Ekadashi is also associated with the Pandharpur Yatra, a major pilgrimage to the temple town of Pandharpur in Maharashtra. 
            <br><br>It's believed that observing the fast with devotion can lead to a happy, successful, and tranquil life. It's also believed that the fast can wash away sins and grant moksha (liberation).
        </p>
          </span>
            <button class="read-more-btn">Read More</button>
        </div>
        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/MAH_festivals/nagapanchami.jpeg" alt="Product 4">
            <h2>Nagpanchami</h2>
            <p>A Hindu festival that honors snakes.</p>
            <span class="hidden-content">
            <p>
            Nag Panchami is celebrated on the fifth day of the Shukla Paksha (waxing moon phase) in the month of Shravan, which is usually in July or August. Hindus, Jains, and Buddhists celebrate Nag Panchami in India, Nepal, and other countries.
        <br><br>
        Nag Panchami is a day to worship snakes, also known as "Nagas", and seek their blessings for good health, prosperity, and safety. According to Hindu mythology, Nag Panchami celebrates the victory of Krishna over Kaliya, a dangerous snake. Krishna spared Kaliya's life after the snake realized that Krishna was not an ordinary child.
        <br><br>
        Snakes are associated with gods and are considered guardians of the earth. Lord Shiva is often depicted with snakes around his neck, symbolizing his control over these sacred beings. 
        </p>   
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
<script src="./assets/js/states_main.js"></script>
<script src="./assets/js/states.js"></script>
<?php
$content = ob_get_clean();
include 'layout.php';
?>