function updateCartCount() {
    let cart = localStorage.getItem('cart');
    cart = cart ? JSON.parse(cart) : [];
    let count = cart.length;
    document.getElementById('cartCount').textContent = count;
}

// Initialize cart count on page load
document.addEventListener('DOMContentLoaded', updateCartCount);

function redirectToPage(){
    var targetPage= 'about.html';
    window.location.href = targetPage;
}
