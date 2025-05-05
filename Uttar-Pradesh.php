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
    <section id="state-slider">
        <div class="slider">
            <button class="slider-btn prev" onclick="prevSlide()">&#10094;</button>
            <div class="slides">
                <div class="slide active">
                    <img src="./assets/images/states/up1.jpg" alt="Heritage Site 1">
                </div>
                <div class="slide">
                    <img src="./assets/images/states/up2.jpg" alt="Heritage Site 2">
                </div>
                <div class="slide">
                    <img src="./assets/images/states/up3.jpg" alt="Heritage Site 3">
                </div>
            </div>
            <button class="slider-btn next" onclick="nextSlide()">&#10095;</button>
        </div>

    </section>

    <!-- State Description Section -->
    <section id="state-description">
        <div class="state-container">
            <div class="state-text">
                <h2>Uttar Pradesh</h2>
                <p>
                    The history of Uttar Pradesh is very much associated with the broad history of India.
                    It dates back to 4000 years. Formerly the area of Uttar Pradesh was occupied by the
                    Aryans or the Dasas and their main occupation was agriculture. The Aryans, through
                    conquests occupied the adjoining areas too.

                    The history of Uttar Pradesh, a state in India, stretches back several millennia.
                    The region shows the presence of human habitation dating back to between 85,000 and
                    73,000 years ago. Additionally, the region seems to have been domesticated as early
                    as 6,000 BC.

                    The early modern period in the region started in 1526 after Babur invaded the Delhi
                    Sultanate, and established the Mughal Empire covering large parts of modern Uttar
                    Pradesh. The remnants of the Mughal Empire include their monuments, most notably
                    Fatehpur Sikri, Allahabad Fort, Agra Fort.

                    The region was the site of the Indian Rebellion of 1857, with revolts at, Jhansi,
                    Meerut, Kanpur, and Lucknow. The region was also a site for the Indian Independence
                    movement with the Indian National Congress.

                    After independence in 1947, the United Provinces were renamed Uttar Pradesh in 1950.

                    In 2000, the state of Uttarakhand was carved out from Uttar Pradesh.
                </p>
            </div>
        </div>
    </section>

    <!-- Heritage Sites in Z-shaped Layout -->
    <section id="heritage-sites">
        <h2>Heritage Sites in Uttar Pradesh</h2>

        <!-- Heritage Site 1 - Left side -->
        <div class="heritage-row">
            <div class="heritage-card left">
                <img src="./assets/images/states/up.jpg" alt="Taj Mahal">
                <div class="card-content">
                    <h3>Taj Mahal</h3>
                    <p>
                        Taj Mahal, white marble mausoleum complex in Agra, western Uttar Pradesh state,
                        northern India. The Taj Mahal was built by the Mughal emperor Shah Jahan (reigned
                        1628–58) to immortalize his empress consort Mumtaz Mahal (“Beloved Ornament of the
                        Palace”), who died in childbirth in 1631.
                    </p>
                    <span class="hidden-content">
                        <p>
                            been the emperor’s inseparable
                            companion since their marriage in 1612. One of India’s most iconic mausoleums,
                            it is situated in the eastern part of the city on the southern (right) bank of
                            the Yamuna (Jumna) River. Agra Fort (Red Fort), also on the right bank of the
                            Yamuna, is about 1 mile (1.6 km) west of the Taj Mahal.

                            In its harmonious proportions and its fluid incorporation of decorative elements,
                            the Taj Mahal is distinguished as the finest example of Mughal architecture, a
                            blend of Indian, Persian, and Islamic styles. Other attractions include twin
                            mosque buildings (placed symmetrically on either side of the mausoleum), gardens,
                            and a museum. One of the most beautiful structural compositions in the world, the
                            Taj Mahal is also one of the world’s most iconic monuments, visited by millions
                            of tourists each year. The complex was designated a UNESCO World Heritage site
                            in 1983.
                        </p>
                    </span>
                    <button class="read-more-btn">Read More</button>
                    <button>
                        <a href="./hotels/TajMahal_hotel.php" style="color: white; text-decoration: none; font-size: larger;">
                            Hotel Bookings
                        </a>
                    </button>

                    <button>
                            <a href="https://asi.payumoney.com/quick/taj" style="color: white; text-decoration: none; font-size: larger;">
                                Ticket Bookings
                            </a>
                </div>
            </div>
        </div>

        <!-- Heritage Site 2 - Right side -->
        <div class="heritage-row">
            <div class="heritage-card right">
                <img src="./assets/images/states/fatehpurSikri.jpg" alt="Badami">
                <div class="card-content">
                    <h3>Fatehpur Sikri</h3>
                    <p>Badami is famous for its rock-cut temples and was once the capital of the Chalukya dynasty. It is known for its ancient ruins and temples carved into cliffs.</p>
                    <button>Learn More</button>
                </div>
            </div>
        </div>

        <!-- Heritage Site 3 - Left side -->
        <div class="heritage-row">
            <div class="heritage-card left">
                <img src="./assets/images/states/agra.jpg" alt="Chitradurga">
                <div class="card-content">
                    <h3>Agra Fort</h3>
                    <p>Chitradurga Fort is a historical fort located in the Chitradurga district. It's known for its architecture and the famous legend of Onake Obavva's bravery.</p>
                    <button>Learn More</button>
                </div>
            </div>
        </div>

        <!-- Heritage Site 4 - Right side -->
        <div class="heritage-row">
            <div class="heritage-card right">
                <img src="./assets/images/states/jansi.jpg" alt="Bijapur">
                <div class="card-content">
                    <h3>Jhansi</h3>
                    <p>Bijapur is known for its stunning historical buildings and tombs. The Gol Gumbaz is one of its most iconic monuments.</p>
                    <button>Learn More</button>
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
