function updateCartCount() {
    let cart = localStorage.getItem('cart');
    cart = cart ? JSON.parse(cart) : [];

    let totalCount = 0;
    for (let item of cart) {
        totalCount += item.quantity || 1; // Add the quantity of each item or 1 if it's not set
    }

    document.getElementById('cartCount').textContent = totalCount;
}

// Initialize cart count on page load
document.addEventListener('DOMContentLoaded', updateCartCount);

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
    const index = event.target.getAttribute('data-index');
    let cart = localStorage.getItem('cart');
    
    if (cart) {
        cart = JSON.parse(cart);

        // Remove the item at the specified index
        cart.splice(index, 1);

        // Update the cart in localStorage
        localStorage.setItem('cart', JSON.stringify(cart));

        // Update the cart count in the UI
        updateCartCount();

        // Reload the cart items to reflect the removal
        loadCartItems();
    }
    // Call updateTotal to refresh the total price display
    updateTotal();
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
    updateCartCount(); // Update the cart count as well
}

// Load cart items when the page loads
document.addEventListener('DOMContentLoaded', loadCartItems);

function proceedToCheckout() {
    var form = document.getElementById('checkout-form');
    
    if (form.checkValidity()) {
        // Form is valid
        alert("Your order has been sent successfully!");
        var messageElement = document.getElementById("checkoutMessage");
        messageElement.innerHTML = "Your order has been sent successfully!";
        messageElement.style.display = "block"; // Make the message visible
    } 
}

document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('checkout-form');

    // Function to create event listeners for a field
    function createValidationListeners(inputElement, errorElement) {
        inputElement.addEventListener('invalid', function(event) {
            if (inputElement.validity.valueMissing) {
                errorElement.textContent = 'You have to complete this field';
                errorElement.style.display = 'block';
            } 
        });

        inputElement.addEventListener('input', function(event) {
            if (inputElement.validity.valid) {
                errorElement.textContent = '';
                errorElement.style.display = 'none';
            }
        });
    }

    // Setup for Address field
    var addressInput = document.getElementById('address');
    var addressError = document.getElementById('address-error');
    createValidationListeners(addressInput, addressError);

    // Setup for City field
    var cityInput = document.getElementById('city');
    var cityError = document.getElementById('city-error'); 
    createValidationListeners(cityInput, cityError);

    // Setup for Postal Code field
    var postcodeInput = document.getElementById('postcode');
    var postcodeError = document.getElementById('postcode-error'); 
    createValidationListeners(postcodeInput, postcodeError);

    // Setup for Phone Number field
    var phoneInput = document.getElementById('phone-number');
    var phoneError = document.getElementById('phone-number-error'); 
    createValidationListeners(phoneInput, phoneError);

    // Form submit event listener
    form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
    }, false);
});

