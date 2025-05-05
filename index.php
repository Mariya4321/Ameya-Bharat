<?php
$title = 'Home - Indian Heritage Booking';
ob_start();
?>

<head>
    <link rel="stylesheet" href="../assets/css/states_main.css">
    <link rel="stylesheet" href="./assets/css/pricing.css">
    <style>
        .video-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            z-index: -1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .video-container video {
            width: 100vw;
            height: 100vh;
            object-fit: cover;
        }

        #hero {
            position: relative;
            height: 100vh;
            width: 100%;
        }

        .card {
    font-family: Arial, Helvetica, sans-serif;
    max-width: 17em;
    margin: 1em;
    text-align: center;
    margin-inline: auto;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
    height: 350px;

  }
  .card img {
    max-width: 100%;
    clip-path: polygon(0 0, 0 100%, 100% 85%, 100% 0%);
    height: 50%;

  }
  .description {
    padding: 0 1em 1em 1em;
  }

#states {
    padding: 50px;
    background-color: #f1f1f1;
    text-align: center;
}

#states h2 {
    margin-bottom: 30px;
    font-size: 25px;
    color: #333;
}

a {
    color: white;
    text-decoration: none;
}
    </style>
</head>

<!-- HERO SECTION -->
<section id="hero">
    <div class="video-container">
        <video autoplay loop muted playsinline>
            <source src="./assets/images/home/v.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="hero-text">
        <h1 style="color:white; font-size:xx-large;">Explore The Beauty Of <span style="color: orange;">IN</span>D<span style="color: rgb(23, 186, 23);">IA</span></h1>
        <button class="read-more-btn"> <a href="#states">Explore</a></button>
    </div>
</section>

<section class="explore-india">
    <h2>Explore the Diverse India</h2>
    <h4>Unity in Diversity.....</h4>
</section>

<section id="states">
    <div class="states-grid">
    <div class="card">
        <img src="./assets/images/gallary/g1.jpeg" alt="">
        <div class="description">
          <h2>Heritage of India</h2>
          <button><a href="states_selection.php" class="state-link">Know More</a></button>
        </div>
    </div>
    <div class="card">
        <img src="./assets/images/gallary/g2.jpg" alt="">
        <div class="description">
            <h2>Culture of India</h2>
            <button><a href="culture.php" class="state-link">Know More</a></button>
        </div>
    </div>
    <div class="card">
        <img src="./assets/images/gallary/g3.jpeg" alt="">
        <div class="description">
            <h2>E-commerce</h2>
            <button><a href="./ecommerce.php" class="state-link">Know More</a></button>
        </div>
    </div>
    <div class="card">
        <img src="./assets/images/gallary/g5.jpeg" alt="">
        <div class="description">
            <h2>Virtual Gallery</h2>
            <button><a href="#" class="state-link">Know More</a></button>
        </div>
    </div>
    </div>
</section>

<section class="pricing-section">
<div class="pricing-container">
    <div class="pricing-card" onclick="selectCard(this)">
      <h3>Basics</h3>
      <p class="price">Free</p>
      <ul>
        <li>Introduction to Swift</li>
        <li>Basic App Development</li>
        <li>3-Month Access</li>
      </ul>
      <button class="btn">Start Free Trial</button>
    </div>

    <div class="pricing-card featured" onclick="selectCard(this)">
      <h3>Standard</h3>
      <p class="price">$199.99</p>
      <ul>
        <li>Advanced Swift Concepts</li>
        <li>Complex UI Design</li>
        <li>6-Month Access</li>
        <li>Access to Weekly Webinars</li>
      </ul>
      <button class="btn">Get Started</button>
    </div>

    <div class="pricing-card" onclick="selectCard(this)">
      <h3>Premium</h3>
      <p class="price">$299.99</p>
      <ul>
        <li>iOS, macOS, watchOS, tvOS</li>
        <li>Cross-Platform Integration</li>
        <li>1-Year Access</li>
        <li>Direct Expert Support</li>
      </ul>
      <button class="btn">Try Premium</button>
    </div>
  </div>
</section>
</body>
</html>
<?php
$content = ob_get_clean();
include 'layout.php';
?>