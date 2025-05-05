<?php
$title = 'Home - Indian Heritage Booking';
ob_start();
?>

    <!-- State Image Slider Section -->
    <section id="state-slider">
        <div class="slider">
            <div class="slide">
                <img src="https://via.placeholder.com/1500x800/FF5733/FFFFFF?text=State+Image+1" alt="State Image 1">
            </div>
            <div class="slide">
                <img src="https://via.placeholder.com/1500x800/2E86C1/FFFFFF?text=State+Image+2" alt="State Image 2">
            </div>
            <div class="slide">
                <img src="https://via.placeholder.com/1500x800/28B463/FFFFFF?text=State+Image+3" alt="State Image 3">
            </div>
        </div>
    </section>

    <!-- State Description Section -->
    <section id="state-description">
        <div class="state-container">
            <div class="state-text">
                <h2>Karnataka</h2>
                <p>Karnataka is a state in the southwestern region of India. It is home to ancient temples, historical forts, and stunning natural landscapes. Famous for its unique blend of culture and heritage, Karnataka offers various iconic tourist spots like the Hampi ruins and the beautiful Badami caves.</p>
                <p>Explore the state's rich cultural history, architectural wonders, and scenic beauty by visiting its heritage sites.</p>
            </div>
        </div>
    </section>

    <!-- Heritage Sites in Z-shaped Layout -->
    <section id="heritage-sites">
        <h2>Heritage Sites in Karnataka</h2>

        <!-- Heritage Site 1 - Left side -->
        <div class="heritage-row">
            <div class="heritage-card left">
                <img src="./assets/images/states/karnataka.jpg" alt="Hampi">
                <div class="card-content">
                    <h3>Hampi</h3>
                    <p>A UNESCO World Heritage Site, Hampi is a historic village known for its ancient temples, ruins, and architecture from the Vijayanagara Empire.</p>
                    <button>Learn More</button>
                </div>
            </div>
        </div>

        <!-- Heritage Site 2 - Right side -->
        <div class="heritage-row">
            <div class="heritage-card right">
                <img src="./assets/images/states/maharashtra.webp" alt="Badami">
                <div class="card-content">
                    <h3>Badami</h3>
                    <p>Badami is famous for its rock-cut temples and was once the capital of the Chalukya dynasty. It is known for its ancient ruins and temples carved into cliffs.</p>
                    <button>Learn More</button>
                </div>
            </div>
        </div>

        <!-- Heritage Site 3 - Left side -->
        <div class="heritage-row">
            <div class="heritage-card left">
                <img src="./assets/images/states/rajasthan.jpg" alt="Chitradurga">
                <div class="card-content">
                    <h3>Chitradurga Fort</h3>
                    <p>Chitradurga Fort is a historical fort located in the Chitradurga district. It's known for its architecture and the famous legend of Onake Obavva's bravery.</p>
                    <button>Learn More</button>
                </div>
            </div>
        </div>

        <!-- Heritage Site 4 - Right side -->
        <div class="heritage-row">
            <div class="heritage-card right">
                <img src="./assets/images/states/up.jpg" alt="Bijapur">
                <div class="card-content">
                    <h3>Bijapur</h3>
                    <p>Bijapur is known for its stunning historical buildings and tombs. The Gol Gumbaz is one of its most iconic monuments.</p>
                    <button>Learn More</button>
                </div>
            </div>
        </div>

    </section>

    <?php
$content = ob_get_clean();
include 'layout.php';
?>