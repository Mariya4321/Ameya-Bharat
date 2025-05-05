<?php
$title = 'Home - Indian Heritage Booking';
ob_start();
?>

<head>
    <link rel="stylesheet" href="./assets/css/states_main.css">
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
    height:70%;
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
            <h1 style="color:white; font-size:xx-large;">Explore the festivals celebrated across<span style="color: orange;">IN</span>D<span style="color: rgb(23, 186, 23);">IA</span></h1>
        </div>

</section>

<section>
    <main class="product-grid">
        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/festival across India/diwali.jpeg" alt="Product 3">
            <h2>Diwali</h2> 
            <p>Diwali symbolizes the victory of good over evil, and celebrates new beginnings.</p>
            <span class="hidden-content">

                            <p>
                            The name Diwali comes from the Sanskrit words deepa which means lamp or light, and vali which means string or row. 
                            
                                <br><br>
                                Diwali is celebrated on the day of Amavasyaa, or no moon day, usually in October or November.People decorate their homes with diyas (earthen lamps) and colorful lights, and burst crackers. Diwali celebrates the return of Lord Rama, his wife Sita Devi, and brother Lakshmana to their homeland after 14 years in exile.Diwali includes the festival of Annakut, and the celebration of Lakshmi, the goddess of wealth.


                                
                                <br><br>A tradition during Diwali where devotees create a Govardhan Puja out of cow dung or other natural materials to symbolize the Govardhan Hill. Diwali is a major religious festival in Hinduism, Jainism, and Sikhism. 
                            </p>
                        </span>
                        
            
            <button class="read-more-btn">Read More</button>
        </div>
        <div class="product-card" data-state="maharashtra" data-category="home">
            <img src="./assets/images/festival across India/Holi.jpeg" alt="Product 1">
            <h2>Holi</h2>
            <p>Holi celebrates the arrival of spring, the victory of good over evil, and the renewal of relationships.</p>
            <span class="hidden-content">

                            <p>
                            Holi is celebrated on the full moon day of the Hindu month of Phalguna, which usually falls in February or March. The date changes each year. People throw colored water and powder on each other, and participate in processions, music, and dance. 

 
                            
                                <br><br>
                                Holi has multiple origin stories, but one popular legend is the story of Hiranyakashipu, Prahlada, and Holika. Holi is most popular in India and Nepal, but is also celebrated in other countries with large South Asian populations, such as the United States and the United Kingdom. 


                                
                                <br><br>Holi can sometimes lead to harassment and brawls, so police departments in some places take precautionary security measures. 


                            </p>
                        </span>
                        
            
            <button class="read-more-btn">Read More</button>
        </div>
        <div class="product-card" data-state="maharashtra" data-category="home">
            <img src="./assets/images/festival across India/Raksha-Bandhan.jpeg" alt="Product 2">
            <h2>Raksha Bandhan</h2>
            <p>Raksha Bandhan is a cultural festival celebrated during the Sawan month or the month of August.
            </p>
            <span class="hidden-content">
            <p>This is a holy occasion for commemorating the bond between brothers and sisters. On this day, sisters tie a thread or a rakhi on their brothers' wrists to symbolise their bond. 
        <br><br>
        According to another legend, the god of death, Yama, visited his sister, Yamuna, on Raksha Bandhan. Overwhelmed by her love and hospitality, Yama offered her a special gift in return. He declared that any brother who receives a Rakhi from his sister and promises to protect her shall be blessed with immortality.    
        
        
        </p>
            </span>
            <button class="read-more-btn">Read More</button>
        </div>
        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/festival across India/eidulfitr.jpeg" alt="Product 4">
            <h2>Eid-al-fitr</h2>
            <p>Eid al-Fitr is a three-day Islamic holiday that marks the end of Ramadan, the holy month of fasting</p>
            <span class="hidden-content">
            <p> Eid al-Fitr is known as the "Festival of breaking fast". It's a time to celebrate with family and friends after a month of fasting from dawn to dusk.
            <br><br>
            Muslims celebrate Eid al-Fitr with: 
Prayer at the mosque 
Sharing large meals 
Giving gifts to children and those in need 
Wearing new clothes 
Visiting friends and family 
Decorating homes with lanterns and lights
            <br><br>
            Eid al-Fitr is a time to acknowledge Allah for enabling Muslims to fast during Ramadan. It's also a time for charity, known as Zakat al-Fitr, to help feed the poor.
            <br><br>
            Eid al-Fitr is celebrated during the first three days of Shawwal, the tenth month of the Islamic calendar. The Gregorian date of Eid al-Fitr changes yearly because Muslims use a lunar calendar.

            </p>
            </span>    
            <button class="read-more-btn">Read More</button>
        </div>
        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/festival across India/christmas.jpeg" alt="Product 4">
            <h2>Christmas</h2>
            <p>Christmas is an annual festival commemorating the birth of Jesus Christ.</p>
            <span class="hidden-content">
            <p>Christmas is a holiday that celebrates the birth of Jesus Christ and is celebrated on December 25th by many people around the world.The name "Christmas" comes from the Old English phrase Cristes maesse, which means "Christ's mass". 
            <br><br>
            Celebrations: Christmas celebrations include: 
            Decorating homes with Christmas trees and lights
            Exchanging gifts with family and friends
            Attending church services 
            Sharing meals with family and friends 
            Singing Christmas carols 
            Listening to Christmas stories 
            Cooking Christmas treats  
            <br><br>
            Christmas preparation begins on the First Sunday of Advent.Not all Christians celebrate Christmas on the same day. For example, in countries with large populations of Orthodox Christians, Christmas Day is celebrated on January 7th.
            </p>
            </span>
            <button class="read-more-btn">Read More</button>
        </div>
        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/festival across India/vesak.jpeg" alt="Product 4">
            <h2>Vesak</h2>
            <p>A sacred Buddhist holiday that commemorates the life of the Buddha.</p>
            <span class="hidden-content">
            <p>Vesak, also known as Buddha Jayanti, Buddha Purnima, or Buddha Day, celebrates the birth, enlightenment, and death of Siddhartha Gautama, the Buddha.Vesak is celebrated on the full moon of the lunar month of Vesakha, which usually falls in April, May, or June. The exact date varies by tradition and lunar calendar.
            <br><br>
            The United Nations recognized Vesak as an international holiday in 1999. 
        
            </p>    
            </span>
            <button class="read-more-btn">Read More</button>
        </div>
        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/festival across India/mahavirjayanti.jpeg" alt="Product 4">
            <h2>Mahavir Jayanti</h2>
            <p>Mahavir Jayanti is a festival that celebrates the birth of Lord Mahavira, the 24th and final Tirthankara (enlightened teacher) of Jainism. 
            </p>
            <span class="hidden-content">
            <p>Mahavir Jayanti is celebrated in March or April on the Gregorian calendar. In 2025, it will be celebrated on April 10. 
            <br><br>
            Celebrations include:
Processions: A procession called the rath yatra is carried out with an idol of Lord Mahavira on top. 
Temple visits: Devotees visit Jain temples to learn about Mahavira's teachings and seek his blessings. 
Prayers: Prayers are offered in temples. 
Donations: Donations are made to stop animal killings. 
Meditation: Devotees meditate, a practice championed by Mahavira. 
Fasting: Many devotees fast on this day to gain spiritual strength. 
            <br><br>
            Mahavir Jayanti is a gazetted holiday in India, so government workplaces and some shops are closed. 
            Mahavira taught the principles of non-violence, truthfulness, non-stealing, and non-attachment.
            </p>
            </span>
            <button class="read-more-btn">Read More</button>
        </div>
        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/festival across India/guru nanak jayanti.jpeg" alt="Product 4">
            <h2>Guru Nanak Jayanti</h2>
            <p>A festival that commemorates the birth anniversary of Guru Nanak Dev, the founder of Sikhism.</p>
            <span class="hidden-content">
            <p>
            Celebrated on the 15th lunar day of the Hindu month of Kartik, which usually falls in November. A day of devotion, prayer, processions, and community feasts. A celebration of Guru Nanak's teachings, which promoted equality and the idea that all humans are equal before God. 
           <br><br>
           Celebrations include:
Akhand path: A non-stop reading of the Adi Granth in gurdwaras 
Nagar kirtan: A procession led by the panj pyare, who hold the nishan sahib, the Sikh triangular flag 
Prabhat pheri: A morning procession where devotees sing shabads and recite katha 
Langar: A community kitchen that promotes brotherhood and love 
Lighting candles: Sikhs light candles in their homes and gurdwaras at night
            <br><br>
            
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