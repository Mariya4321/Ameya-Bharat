let cart = [];
let total = 0;

// Add a product to the cart
function addToCart(productName, price, imageSrc) {
    const existingItem = cart.find(item => item.name === productName);

    if (existingItem) {
        existingItem.quantity += 1;
    } else {
        cart.push({ name: productName, price: price, image: imageSrc, quantity: 1 });
    }

    total += price;
    updateCartUI();
    updateCartCount();
}

// Decrease product quantity
function decreaseQuantity(index) {
    if (cart[index].quantity > 1) {
        cart[index].quantity -= 1;
        total -= cart[index].price;
    } else {
        removeFromCart(index);
    }

    updateCartUI();
    updateCartCount();
}

// Load cart from localStorage
function loadCartFromLocalStorage() {
const savedCart = localStorage.getItem('cart');
const savedTotal = localStorage.getItem('total');
if (savedCart) {
cart = JSON.parse(savedCart);
}
if (savedTotal) {
total = parseFloat(savedTotal);
}
updateCartUI();
updateCartCount();
}

// Save cart to localStorage
function saveCartToLocalStorage() {
localStorage.setItem('cart', JSON.stringify(cart));
localStorage.setItem('total', total.toFixed(2));
}

// Update the cart UI
function updateCartUI() {
const cartItemsContainer = document.getElementById('cart-items');
cartItemsContainer.innerHTML = ''; // Clear existing items

cart.forEach((item, index) => {
cartItemsContainer.innerHTML += `
    <div class="cart-item">
        <img src="${item.image}" alt="${item.name}">
        <div class="cart-item-details">
            <span>${item.name}</span><br>
            <span>Quantity: ${item.quantity}</span><br>
            <span>$${(item.price * item.quantity).toFixed(2)}</span>
        </div>
        <div class="cart-controls">
            <button onclick="decreaseQuantity(${index})">-</button>
            <button onclick="addToCart('${item.name}', ${item.price}, '${item.image}')">+</button>
        </div>
        <button onclick="removeFromCart(${index})">Remove</button>
    </div>
`;
});

document.getElementById('cart-total').textContent = total.toFixed(2);
saveCartToLocalStorage(); // Save updated cart state
}


function updateCartCount() {
const cartCount = document.getElementById('cart-count');
const itemCount = cart.reduce((sum, item) => sum + item.quantity, 0);

cartCount.textContent = itemCount;
cartCount.classList.toggle('show', itemCount > 0); // Show or hide count
saveCartToLocalStorage(); // Save updated cart state
}

// Call loadCartFromLocalStorage on page load
document.addEventListener('DOMContentLoaded', loadCartFromLocalStorage);

// Remove an item from the cart
function removeFromCart(index) {
    const item = cart[index];
    total -= item.price * item.quantity;
    cart.splice(index, 1);

    updateCartUI();
    updateCartCount();
}

// Toggle the cart visibility
function toggleCart() {
    const cartContainer = document.getElementById('cart');
    cartContainer.classList.toggle('open');
}

// Wait for the document to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
const navbarToggle = document.getElementById('navbarToggle');
const navbarCollapse = document.querySelector('.navbar-right'); // Make sure we're selecting the right element

// Add event listener to the toggle button
navbarToggle.addEventListener('click', function() {
navbarCollapse.classList.toggle('active'); // Toggle the 'active' class on the navbar
});
});