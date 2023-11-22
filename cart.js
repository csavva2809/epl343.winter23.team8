function updateTotal(){
    let total =0;
    dicument.querySelectorAll('.cart-item').forEach(item =>{
        const price = parseFloat(item.querySelector('.product-price').textContent.replace('$',''));
        const quantity = parseInt(item.querySelector('.product-quantity').value);
        total+=price*quantity;
    });
    document.querySelector('.total-price').textContent = `$${total.toFixed(2)}`;
}

function removeItem(event){
    const item = event.target.closest('.cart-item');
    item.remove();
    updateTotal();
}

function updateQuantity(event){
    const quantity = parseInt(event.target.value);
    if (quantity < 1) {
        event.target.value = 1;
    }
    updateTotal();
}

document.querySelectorAll('.remove-item').forEach(button => {
    button.addEventListener('click', removeItem);
});

document.querySelectorAll('.product-quantity').forEach(input => {
    input.addEventListener('change', updateQuantity);
});

updateTotal();

document.querySelector('.checkout-button').addEventListener('click', () => {
    alert('Proceeding to checkout...');
    // Here you can add more logic for the checkout process
});