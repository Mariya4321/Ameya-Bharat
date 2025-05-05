<?php
$title = 'Home - Indian Heritage Booking';
ob_start();
?>

<head>
    <link rel="stylesheet" href="../assets/css/states.css">
    <link rel="stylesheet" href="../assets/css/states_main.css">
    <link rel="stylesheet" href="../assets/css/state_responsive.css">
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
            <h1 style="color:white; font-size:xx-large;">EXPLORE THE TRADITIONS OF MAHARASHTRA</h1>
        </div>
    </div>
</section>


<div class="heritage-row">
                <div class="heritage-card left">
                    <img src="./assets/images/states/shaniwarwada.jpeg" alt="shaniwarwada">
                    <div class="card-content">
                        <h3>Clothing</h3>
                        <p> Maharashtrians are often pictured in their traditional attire, which is practical and suited to their occupations. Most people are farmers, while Konkanis engage in fishing, both requiring labor-intensive work under the sun. Their clothing is designed for comfort and mobility. Unlike many Indian cultures, some women in Maharashtra participated in outdoor and agricultural activities, opting for practical attire similar to men.</p>
                        <span class="hidden-content">
                            <h4><U>Maharashtrian Attire For Men </U></h4>
                            <h4>DHOTI</h4><br>
                            <p>Maharashtrian men traditionally wear a dhoti, a single unstitched cloth wrapped around the waist and tucked at the back, allowing for adjustable fit. Typically in saffron, cream, or white, dhotis are worn for both work and celebrations due to their comfort. Nagpur is well-known for its dhotis.</p>
                            <h4><U>Maharashtrian Attire For Women</U> </h4>
                            <h4>SAREES</h4>
                            <p>Women wear sarees that are 9 yards long. The saree is tucked in the middle giving it a similar look to the dhoti. The rest of the saree is wrapped around the upper body of the women. This type of saree is usually called Lugade. There were many variations in how women wear their saree. Some only wear knee length sarees. Some wear it in a skirt manner without the tuck in the middle. But the 9-yard saree is the traditional costume of women in Maharashtra.</p>
                        </span>
                        <button class="read-more-btn">Read More</button>
                    </div>
                </div>
            </div>

            <!-- Heritage Site 2 - Right side -->
            <div class="heritage-row">
                <div class="heritage-card right">
                    <img src="./assets/images/maha_tradition/Marathi.png" alt="lang">
                    <div class="card-content">
                        <h3>Language</h3>
                        <h4>Marathi (The Soul of Maharashtra)</h4>
                        <p>
                        Marathi, the official language of Maharashtra, has deep historical roots tracing back over a millennium. Emerging from Maharashtri Prakrit, an ancient Indic language, Marathi began to develop its distinct identity around the 8th century. The earliest inscriptions in Marathi, such as the copper plate inscriptions of King Vijayaditya dated around 800 AD, mark the beginning of its documented history.  
                        </p>

                        <span class="hidden-content">

                            <p>
                            Marathi has a rich literary tradition, with seminal works such as the Dnyaneshwari by Sant Dnyaneshwar in the 13th century, which remains a cornerstone of Marathi literature. The Bhakti movement saw an explosion of devotional literature in Marathi, with contributions from saints like Namdev, Eknath, and Tukaram. Modern Marathi literature has been enriched by authors like P. L. Deshpande, V. S. Khandekar, and Shanta Shelke, whose works cover a range of genres from poetry to novels and plays.
                            </p>

                           
                            <h4>Dialectical Diversity</h4>
                            <p>Marathi’s dialectical diversity reflects the state’s varied geography and cultural influences:

                            <br><br>Varhadi: Spoken in the Vidarbha region, Varhadi has unique phonetic features, such as the replacement of the standard Marathi ‘la’ with ‘laa’.<br><br>
                            Zadi Boli: Found in the forested areas of eastern Maharashtra, this dialect has distinct linguistic traits influenced by the tribal languages of the region.<br><br>
                            Ahirani: Predominantly spoken in the Khandesh region, Ahirani has significant lexical variations from standard Marathi.<br><br>
                            Malvani: Used in the Konkan coast, Malvani incorporates numerous Konkani words, reflecting the region’s historical interactions.
                            </p>
                        </span>

                        <button class="read-more-btn">Read More</button>
                   
                    </div>
                </div>
            </div>

            <!-- Heritage Site 3 - Left side -->
            <div class="heritage-row">
                <div class="heritage-card left">
                    <img src="./assets/images/states/agakhan.jpeg" alt="agakhan">
                    <div class="card-content">
                        <h3>Dance</h3>
                        <p>
                        Lavani is a captivating blend of song and dance, traditionally showcased to the lively rhythms of the Dholki. The term 'Lavani' originates from 'Lavanya,' signifying beauty in Marathi. Essentially, it is performed in Maharashtra and southern Madhya Pradesh by females wearing a nauvari saree (nine-yard long saree).
                        </p>
                        <span class="hidden-content">

                            <p>
                            The origin of Lavani can be traced back to the 1560s but it came into popularity in the Peshwa rule. Traditionally this genre of folk dance deals with subjects like society, religion and politics. Originally it was a sort of morale booster for tired soldiers as the songs which are sung along with dance are generally erotic and naughty in nature.


Lavani developed in two distinct performances, namely Phadachi Lavani and Baithakichi Lavani. The Phadachi Lavani is performed publically in front of a large audience while Baithakichi Lavani is performed in private in an enclosed chamber performed for a selective audience. 


                             </p>
                        </span>

                        <button class="read-more-btn">Read More</button>
                    </div>
                </div>
            </div>





<script src="./assets/js/states_main.js"></script>
<script src="./assets/js/states.js"></script>
<script src="./assets/js/read_more.js"></script>

<?php
$content = ob_get_clean();
include 'layout.php';
?>
<