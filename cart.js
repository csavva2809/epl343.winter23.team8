function loadCartItems() {
    let cart = localStorage.getItem('cart');
    if (cart) {
        cart = JSON.parse(cart);
        const cartItemsContainer = document.querySelector('.cart-items');
        cartItemsContainer.innerHTML = ''; // Clear out any existing items

        // Loop through the cart items and create HTML for each one
        cart.forEach((item, index) => {
            cartItemsContainer.innerHTML += `
                <div class="cart-item">
                    <img src="${item.image}" alt="${item.name}">
                    <span class="product-name">${item.name}</span>
                    <span class="product-price">$${item.price}</span>
                    <input type="number" value="${item.quantity || 1}" class="product-quantity" data-index="${index}">
                    <button class="remove-item" data-index="${index}">Remove</button>
                </div>
            `;
        });

        // Update the total price display
        updateTotal();
    }
    attachEventListeners();
}

function attachEventListeners() {
    document.querySelectorAll('.remove-item').forEach(button => {
        button.addEventListener('click', removeItem);
    });

    document.querySelectorAll('.product-quantity').forEach(input => {
        input.addEventListener('change', updateQuantity);
    });
}

// Define a delivery fee
const deliveryFee = 3.50;

function updateTotal() {
    let total = 0;
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.forEach((item, index) => {
        const quantityInput = document.querySelector(`.product-quantity[data-index="${index}"]`);
        const quantity = quantityInput ? parseInt(quantityInput.value) : item.quantity;
        total = total + (item.price * quantity) + deliveryFee;
    });

    document.querySelector('.total-price').textContent = `$${total.toFixed(2)}`;
    document.querySelector('.delivery-fee').textContent = `$${deliveryFee.toFixed(2)}`;
}


function removeItem(event) {
    const index = event.target.dataset.index;
    let cart = JSON.parse(localStorage.getItem('cart'));
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
    loadCartItems(); // Refresh the cart display
}

function updateQuantity(event) {
    const index = event.target.dataset.index;
    const newQuantity = parseInt(event.target.value);
    let cart = JSON.parse(localStorage.getItem('cart'));

    if (newQuantity > 0) {
        cart[index].quantity = newQuantity;
    } else {
        cart[index].quantity = 1;
        event.target.value = 1;
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    updateTotal();
}

// Load cart items when the page loads
document.addEventListener('DOMContentLoaded', loadCartItems);

function proceedToCheckout() {
   // Display an alert to the user
   alert("Your order has been sent successfully!");
   var messageElement = document.getElementById("checkoutMessage");
   messageElement.innerHTML = "Your order has been sent successfully!";
   messageElement.style.display = "block"; // Make the message visible
}
