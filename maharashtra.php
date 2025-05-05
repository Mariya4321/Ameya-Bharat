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
    <!-- Hero Section with Image Slider -->
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
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 200">
                <defs>
                    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#ff7a18;stop-opacity:1" />
                        <stop offset="50%" style="stop-color:#FFFFFF;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#00FF00;stop-opacity:1" />
                    </linearGradient>
                </defs>
                <text x="50" y="150" font-family="'palatino', cursive" font-size="120" class="text-path">
                    Maharashtra
                </text>
            </svg>
        </div>
        </div>
        </section>

        <!-- State Description Section -->
        <section id="state-description">
            <div class="state-container">
                <div class="state-text">
                    <h2>Maharashtra</h2>
                    <p>
                        Maharashtra, state of India, occupying a substantial portion of the Deccan plateau in the western peninsular part of the subcontinent. Its shape roughly resembles a triangle, with the 450-mile (725-km) western coastline forming the base and its interior narrowing to a blunt apex some 500 miles (800 km) to the east.
                        <br><br>Maharashtra is bounded by the Indian states of Gujarat to the northwest, Madhya Pradesh to the north, Chhattisgarh to the east, Telangana to the southeast, Karnataka to the south, and Goa to the southwest and by the union territory of Dadra and Nagar Haveli and the Arabian Sea to the west.


                        During that early period the territory constituting the present-day state of Maharashtra was divided between several Hindu kingdoms: Satavahana, Vakataka, Kalacuri, Rashtrakuta, Chalukya, and Yadava.
                        <br><br>A succession of Muslim dynasties ruled after 1307. Persian, the court language of the Muslims, had a far-reaching effect on the Marathi language. By the mid-16th century, Maharashtra was again fragmented between several independent Muslim rulers, who fought each other endlessly. It was in the midst of that chaos that a great leader,  Chhatrapati Shivaji Maharaj, was born in 1627.  Chhatrapati Shivaji Maharaj showed astonishing prowess by founding a large Maratha empire that shook Delhi-based Mughal rule to its foundations.
                    </p>
               
                </div>
            </div>
        </section>

        <!-- Heritage Sites in Z-shaped Layout -->
        <section id="heritage-sites">
            <h2>Heritage Sites in Maharashtra</h2>

            <!-- Heritage Site 1 - Left side -->
            <div class="heritage-row">
                <div class="heritage-card left">
                    <img src="./assets/images/states/shaniwarwada.jpeg" alt="shaniwarwada">
                    <div class="card-content">
                        <h3>Shaniwar Wada</h3>
                        <p>Shaniwar Wada is a historical fortification in the city of Pune, India. Built in 1732,[1] it was the seat of the Peshwas of the Maratha Confederacy until 1818. The fort itself was largely destroyed in 1828 by an unexplained fire, but the surviving structures are now maintained as a tourist site</p>
                        <span class="hidden-content">

                            <p>
                                The Shaniwar Wada was normally the seven-story capital building of the Peshwas of the Maratha Empire. It was supposed to be made entirely of stone. However, after the completion of the base floor or the first story, the people of Satara (the national capital) complained to the Chhatrapati Shahu I (Emperor) saying that a stone monument can be sanctioned and built only by the emperor himself and not the Peshwas. Following this, an official letter was written to the Peshwas stating that the remaining building had to be made of brick and not stone.

                                By 1758, at least a thousand people lived in the fort.
                                <br><br>
                                In 1773, Narayanrao, who was the fifth and ruling Peshwa then, was murdered by guards on orders of his uncle Raghunathrao and aunt Anandibai. A popular legend has it that Narayanrao's ghost still calls for help on full moon nights. Various people, working around the area, have allegedly reported the cries of "Kaka mala vachava" (Uncle, save me) by Narayanrao Peshwa after his death.[2][3][4]

                                In June 1818, the Peshwa, Bajirao II, abdicated his Gaadi (throne) to Sir John Malcolm of the British East India Company and went into political exile at Bithoor, near Kanpur in present-day Uttar Pradesh, India.
                                <br><br>On 27 February 1828, a great fire started inside the palace complex. The conflagration raged for seven days. Only the heavy granite ramparts, strong teak gateways and deep foundations and ruins of the buildings within the fort survived
                            </p>
                        </span>
                        <button class="read-more-btn">Read More</button>
                        <button>
                            <a href="./hotels/shaniwarwada_hotel.php" style="color: white; text-decoration: none; font-size: larger;">
                                Hotel Bookings
                            </a>
                        </button>

                        <button>
                            <a href="" style="color: white; text-decoration: none; font-size: larger;">
                                Ticket Bookings
                            </a>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Heritage Site 2 - Right side -->
            <div class="heritage-row">
                <div class="heritage-card right">
                    <img src="./assets/images/states/raigadh.jpeg" alt="raigadh">
                    <div class="card-content">
                        <h3>Raigad Fort</h3>
                        <p>
                            Raigad, located in Mahad, Raigad district, Maharashtra, is a historic hill fort on the Deccan Plateau, formerly known as Rairee. Chhatrapati Shivaji Maharaj, with engineer Hiroji Indulkar, developed it and made it the capital of Hindavi Swaraj after his coronation in 1674
                        </p>

                        <span class="hidden-content">

                            <p>
                                The main palace at Raigad was built of wood, with only the base pillars remaining today. The fort's ruins include the queen's quarters with six chambers, each having private restrooms but no windows. In front of the palace grounds are remnants of three watchtowers, two of which remain intact, while the third was destroyed by bombardment. The fort also overlooks the Ganga Sagar Lake, an artificial waterbody.

                                <br><br>The fort is accessed through the Maha Darwaja, flanked by 20-meter-high bastions, and leads to the king's court where Shivaji Maharaj's coronation took place. This area was acoustically designed for clear communication between the throne and the Nagarkhana Darwaja. The Mena Darwaja served as the private entrance for royal women, while the Palkhi Darwaja was used by the king's convoy. Nearby, dark chambers believed to be granaries are also found. The fort's Takmak Tok cliff served as an execution point, now secured with fencing.

                                <br><br>A significant feature is the Hirakani Buruj, built on a steep cliff. Legend tells of a milkmaid named Hirakani who climbed down the cliff at night to reach her crying child after the gates were locked. Impressed by her bravery, Shivaji Maharaj rewarded her and later fortified the cliff with a bastion named in her honor.
                            </p>
                        </span>

                        <button class="read-more-btn">Read More</button>
                        <button>
                            <a href="./hotels/Raigadh_hotel.php" style="color: white; text-decoration: none; font-size: larger;">
                                Hotel Bookings
                            </a>
                        </button>

                        <button>
                            <a href="" style="color: white; text-decoration: none; font-size: larger;">
                                Ticket Bookings
                            </a>
                        </button>
                   
                    </div>
                </div>
            </div>

            <!-- Heritage Site 3 - Left side -->
            <div class="heritage-row">
                <div class="heritage-card left">
                    <img src="./assets/images/states/agakhan.jpeg" alt="agakhan">
                    <div class="card-content">
                        <h3>Agakhan Palace</h3>
                        <p>
                            he Aga Khan Palace was built by Sultan Muhammed Shah Aga Khan III in the city of Pune, India.

                            The palace was an act of charity by the spiritual leader of the Nizari Ismaili Muslims, who wanted to help the poor in the neighbouring areas of Pune, who were drastically hit by famine by offering them work.
                        </p>
                        <span class="hidden-content">

                            <p>
                                The Aga Khan Palace, a majestic structure in Pune, is closely tied to India's freedom movement. It served as a prison for Mahatma Gandhi, his wife Kasturba Gandhi, secretary Mahadev Desai, and Sarojini Naidu during the Quit India Movement. Tragically, Kasturba Gandhi and Mahadev Desai passed away during their captivity here, and their memorials are located within the palace complex. In 2003, the Archaeological Survey of India (ASI) declared the palace a monument of national importance.

                                <br><br>Built by Sultan Aga Khan III in 1892, the palace holds historical significance beyond its role in the freedom struggle. It was constructed to provide employment to famine-stricken villagers, with 1,000 workers completing the project in five years at a cost of Rs. 12 lakhs. Spread over 19 acres, the palace complex includes a sprawling garden and is a popular site for photography due to its stunning architecture and natural beauty.

                                <br><br> In 1969, Aga Khan IV donated the palace to the Indian people in honor of Gandhi's philosophy. It now houses a Gandhi memorial where his ashes were kept, alongside a museum showcasing artifacts related to his life and legacy. The palace remains a significant cultural and historical landmark in India.
                            </p>
                        </span>

                        <button class="read-more-btn">Read More</button>
                        <button>
                            <a href="./hotels/agakhan_hotel.php" style="color: white; text-decoration: none; font-size: larger;">
                                Hotel Bookings
                            </a>
                        </button>

                        <button>
                            <a href="https://asi.payumoney.com/quick/akp" style="color: white; text-decoration: none; font-size: larger;">
                                Ticket Bookings
                            </a>
                        </button>
                        


                    </div>
                </div>
            </div>



        </section>

        <script src="./assets/js/states_main.js"></script>
    <script src="./assets/js/states.js"></script>
    <script src="./assets/js/read_more.js"></script>
        <?php
$content = ob_get_clean();
include 'layout.php';
?>
