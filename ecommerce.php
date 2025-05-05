<?php
$title = 'Home - Indian Heritage Booking';
ob_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bharat Emporium</title>

    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}

header {
    text-align: center;
    padding: 20px;
    background-color: #232f3e;
    color: white;
    margin-top: 2%;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    padding: 20px;
}

.product-card {
    background: white;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 20px;
}

.product-card img {
    max-width: 80%;
    height: auto;
    height: 60%;
}

.product-card h2 {
    font-size: 1.2rem;
    margin: 10px 0;
}

.product-card p {
    font-size: 1rem;
    color: #555;
}

.product-card button {
    background-color: #ff9900;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
}

.product-card button:hover {
    background-color: #e68a00;
}

.filter-section {
            padding: 1rem 2rem;
            display: flex;
            gap: 1rem;
            justify-content: center;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 1rem;
        }
        .filter-section select, .filter-section input {
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }
        .filter-section button {
            padding: 0.5rem 1rem;
            border: none;
            background: linear-gradient(to right, #ff6347, #ff4500);
            color: white;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .filter-section button:hover {
            background: linear-gradient(to right, #ff4500, #ff6347);
        }
/* Media Query for Mobile Screens */
@media (max-width: 768px) {
    .product-grid {
        grid-template-columns: repeat(2, 1fr); /* Two products horizontally */
    }
        .filter-section {
                flex-direction: column;
                align-items: center;
            }
    }


        </style>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const filterButton = document.querySelector(".filter-section button");
            const stateSelect = document.querySelector("#state");
            const categorySelect = document.querySelector("#category");
            const productCards = document.querySelectorAll(".product-card");

            filterButton.addEventListener("click", () => {
                const selectedState = stateSelect.value.toLowerCase();
                const selectedCategory = categorySelect.value.toLowerCase();

                let hasVisibleProducts = false;

                productCards.forEach((card) => {
                    const productState = card.getAttribute("data-state").toLowerCase();
                    const productCategory = card.getAttribute("data-category").toLowerCase();

                    if (
                        (selectedState === "" || productState.includes(selectedState)) &&
                        (selectedCategory === "" || productCategory.includes(selectedCategory))
                    ) {
                        card.style.display = "block";
                        hasVisibleProducts = true;
                    } else {
                        card.style.display = "none";
                    }
                });

                // Scroll to the specific state section if a state is selected and products are visible
                if (selectedState && hasVisibleProducts) {
                    const stateSection = document.querySelector(`#${selectedState}`);
                    if (stateSection) {
                        stateSection.scrollIntoView({ behavior: "smooth" });
                    }
                }
            });
        });
    </script>
</head>

<body>
    <header style="background-image: url(./assets/images/ecommerce/design.jpg);">
        <h1>Bharat Emporium</h1>
    </header>

    <section class="filter-section">
        <select name="state" id="state">
            <option value="">Select State</option>
            <option value="maharashtra">Maharashtra</option>
            <option value="karnataka">Karnataka</option>
            <option value="tamilnadu">Tamil Nadu</option>
            <option value="gujarat">Gujarat</option>
            <option value="delhi">Delhi</option>
        </select>
        <select name="category" id="category">
            <option value="">Select Category</option>
            <option value="electronics">Electronics</option>
            <option value="fashion">Fashion</option>
            <option value="home">Home & Kitchen</option>
        </select>
        <button>Filter</button>
    </section>

    <div id="maharashtra">
        <h2 style="margin-left: 22px; font-size: xx-large;"><b><u>Maharashtra</u></b></h2>
    </div>
    <main class="product-grid">
        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/ecommerce/kolhapuri chappal.jpg" alt="Product 3">
            <h2>Kolhapuri Chappal</h2>
            <p>$20.00</p>
            <button onclick="addToCart('Kolhapuri Chappal', 20, './assets/images/ecommerce/kolhapuri chappal.jpg')">Add to Cart</button>
        </div>
        <div class="product-card" data-state="maharashtra" data-category="home">
            <img src="./assets/images/ecommerce/solapuri chadar.jpg" alt="Product 1">
            <h2>Solapuri Chadar</h2>
            <p>$10.00</p>
            <button onclick="addToCart('Solapuri Chadar', 10, './assets/images/ecommerce/solapuri chadar.jpg')">Add to Cart</button>
        </div>
        <div class="product-card" data-state="maharashtra" data-category="home">
            <img src="./assets/images/ecommerce/warli art .jpg" alt="Product 2">
            <h2>Warli Art</h2>
            <p>$15.00</p>
            <button onclick="addToCart('Warli Art', 15, './assets/images/ecommerce/warli art .jpg')">Add to Cart</button>
        </div>
        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/ecommerce/sharee.webp" alt="Product 4">
            <h2>Paithani</h2>
            <p>$25.00</p>
            <button onclick="addToCart('Paithani', 25, './assets/images/ecommerce/sharee.webp')">Add to Cart</button>
        </div>
    </main>
</body>

    <?php
$content = ob_get_clean();
include 'layout.php';
?>

