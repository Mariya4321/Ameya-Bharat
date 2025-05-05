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
    grid-template-columns: repeat(3, 1fr); /* 4 cards per row */
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
    height: 40%;
    margin-left: 15%;
    display: block;

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
            <h1 style="color:white; font-size:xx-large;">Explore The Religions  Of <span style="color: orange;">IN</span>D<span style="color: rgb(23, 186, 23);">IA</span></h1>
        </div>
</section>

<section>
    <main class="product-grid">
        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/culture/hindu.jpg" alt="Product 3">
            <h2>Hinduism</h2>
            <p>Hinduism, also known as Sanatana Dharma, is the world’s oldest living religion..Hinduism, major world religion originating on the Indian subcontinent and comprising several and varied systems of philosophy, belief, and ritual. </p> 
            <span class="hidden-content">
             <p>
             

            It is a natural religion, meaning its philosophies and practices are considered universally accessible through sincere study, reason, and experience apart from special revelation. Hinduism is also an indigenous religion made up of a diverse family of philosophies and traditions that have been practiced primarily throughout Asia for thousands of years. Today, Hinduism is a global religion with adherents representing virtually every racial, ethnic, and national background and living on every continent, and comprising majorities in three countries: India, Nepal, and Mauritius.<br><br>

            Most traditions, sects, or schools within Hinduism share certain distinctive, foundational concepts despite the absence of an identifiable beginning in history, single founder, central religious establishment, or sole authoritative scripture. Two of these foundational concepts are that of the oneness of existence and pluralism.

            All beings, from the smallest organism to man, are considered manifestations of the Divine (existence, pure being, light of consciousness) or reflections of the Divine’s qualities, depending upon the school of thought. Because of this shared divinity, Hinduism views the universe as a family or, in Sanskrit, Vasudhaiva Kutumbakam.

            
            <br><br>
            Hinduism also advances the concept of the equal worth of all mankind, as expressed in the ancient hymn:

            Ajyesthaso akanishthaso ete sambhrataro vahaduhu saubhagaya.

            “No one is superior, none inferior. All are brothers marching forward to prosperity.” </p>
           </span>
            <button class="read-more-btn">Read More</button>
        </div>
        
        <div class="product-card" data-state="maharashtra" data-category="home">
            <img src="./assets/images/culture/islam.jpg" alt="Product 1">
            <h2>Islam</h2>
            <p>Islam is an Arabic word which means "surrender, submission, commitment and peace." Thus, Islam can be defined as a path to attain complete peace through voluntary submission to the divine will. </p>
            <span class="hidden-content">
                <p>
                Islam is a monotheistic faith centered around belief in the one God (Allah). In this regard, it shares some beliefs with Judaism and Christianity by tracing its history back to the patriarch Abraham, and ultimately to the first prophet, Adam. 
                All the prophets preached the same universal message of belief in one God and kindness to humanity. <br><br>
                The last in the series of prophets, according to Muslims, was Muhammad. Muhammad was born in Mecca, Saudi Arabia around 570 CE. He worked first as a shepherd and then as a merchant. He was not happy with the people around him because of superstitions and social and economic injustice. The people were worshipping many gods and had forgotten the message of prophet Abraham to worship one God. Muhammad loved to pray and meditate in the mountains. On one of those occasions, in the year 610 CE, when he was about 40 years old, he received a revelation from God through the angel Jibril (Gabriel). He continued to receive messages from God throughout his life and he began preaching to others what he had learned. His main message is that there was no other God but Allah and that people should lead their lives in a way that was pleasing to Allah. </p>

            </span>
            <button class="read-more-btn">Read More</button>
        </div>
        
        <div class="product-card" data-state="maharashtra" data-category="home">
            <img src="./assets/images/culture/cr.jpg" alt="Product 2">
            <h2>Christianity</h2>
            <p>Christianity is the largest world religion by number of followers (around 2.4 billion). Members of the religion are called Christians. Christians generally believe Jesus Christ to be the Son of God, the second person of the Trinity. </p>
            <span class="hidden-content">
            <p>It is categorized as one of the three Abrahamic or monotheistic religions of the Western tradition along with Judaism and Islam. 'Christian' is derived from the Greek christos for the Hebrew messiah ("anointed one"). Christianoi, "followers of the Christ," became the name of a group who followed the teachings of Jesus of Nazareth in 1st-century Israel and proclaimed him the predicted messiah of the prophets.

Christianity merged the beliefs of ancient Judaism with elements from the dominant culture of the Roman Empire. <br><br>The sacred texts are combined in the Christian Bible: the Jewish Scriptures (now deemed the Old Testament) and the New Testament (the gospels, the letters of Paul, and the Book of Revelation).</p>
                </span>

            <button class="read-more-btn">Read More</button>
        </div>

        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/culture/sikk.webp" alt="Product 4">
            <h2>Sikhism</h2>
            <p>Sikhism, religion and philosophy founded in the Punjab region of the Indian subcontinent in the late 15th century.The Sikhs call their faith Gurmat. According to Sikh tradition, Sikhism was established by Guru Nanak.</p>
            <span class="hidden-content">
            <p>The word Sikh is derived from the Sanskrit word Shishya, meaning disciple or learner. Sikhism was born at a time when there was a growing conflict amongst the two dominating religious traditions of Hinduism and Islam in India. 
                Guru Nanak, the founder of the Sikh faith, is generally depicted as a reconciler of the two conflicting traditions.
                Guru Nanak got his enlightenment in Sultanpur in 1496. 
                After enlightenment, he travelled extensively to spread the message of love and brotherhood.<br><br>
                The number of Guru Nanak’s followers increased through the sixteenth century under his successors. 
                They belonged to a number of castes, but traders, agriculturists, artisans and craftsmen predominated. They were also expected to contribute to the general funds of the community of followers. 
                By the beginning of the seventeenth century, the town of Ramdaspur (Amritsar) had developed around the central Gurdwara called Harmandar Sahib (Golden Temple). It was virtually self-governing, and modern historians refer to the early seventeenth-century Sikh community as ‘a state within the state’.

            </p>
            </span>
            <button class="read-more-btn">Read More</button>
        </div>

        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/culture/budd.jpg" alt="Product 4">
            <h2>Buddhism</h2>
            <p>Buddhism is one of the world’s largest religions and originated 2,500 years ago in India. Buddhists believe in reincarnation of the soul, and that, by following the teachings of Buddha, or dharma, people can reach an enlightened state called nirvana and stop the cycle of reincarnation.</p>
            <span class="hidden-content">
            <p>TSiddhartha Gautama was the first person to reach this state of enlightenment and is still known today as the Buddha. Buddhists do not believe in any kind of deity or god, although there are supernatural figures who can help or hinder people on the path toward enlightenment.

                Born in Nepal, Siddhartha Gautama was an Indian prince who, upon seeing people poor and dying, realized that human life is suffering. 
                He renounced his wealth and adopted the life of a poor beggar, spending his time meditating and traveling.<br><br>
                 Ultimately, he remained unsatisfied and settled on
                “the Middle Way”—the idea that the path to enlightenment was neither asceticism nor wealth, but rather, a way of life between the two extremes. Eventually, 
                in a state of deep meditation, Gautama achieved enlightenment underneath the Bodhi tree (the tree of awakening). 
                The Mahabodhi Temple in Bihar, India—the site of his enlightenment—is now a major Buddhist pilgrimage site.</p>
            </span>
            <button class="read-more-btn">Read More</button>
        </div>

        <div class="product-card" data-state="maharashtra" data-category="fashion">
            <img src="./assets/images/culture/jain.jpg" alt="Product 4">
            <h2>Jainism</h2>
            <p>Jainism is one of the three most ancient religions of India, with roots that go back to at least the mid-first century B.C.E. Today, it is still an integral part of Indian culture. Jainism is a religion with a value system that puts nonviolence above all else.</p>
            <span class="hidden-content">
            <p>Like Hindus and Buddhists, Jains believe in reincarnation. This cycle of birth, death, and rebirth is determined by one’s karma. 
                Jains believe bad karma is caused by harming living things. To avoid bad karma, Jains must practice ahimsa, a strict code of nonviolence. <br><br>
                Jains believe plants, animals, and even some nonliving things (like air and water) have souls, just as humans do. The principle of nonviolence includes doing no harm to humans, plants, animals, and nature. For that reason, Jains are strict vegetarians—so strict, in fact, that eating root vegetables is not allowed because removing the root would kill the plant. However, Jains can eat vegetables that grow above the ground, because they can be picked while leaving the rest of the plant intact. In complete dedication to nonviolence, the highest-ranked Jain monks and nuns avoid swatting at mosquitoes or sweeping a path on the floor so they do not step on an ant. In addition to nonviolence, Jainism has four additional vows that guide believers:
                 always speak the truth, do not steal, show sexual restraint (with celibacy as an ideal), and do not become attached to worldly things. </p>
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
<script src="./assets/js/read_more.js"></script>
<?php
$content = ob_get_clean();
include 'layout.php';
?>
