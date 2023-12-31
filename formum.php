<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Mum Flowers - FlowerShop</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section id="header">
        <a href="website.php">
            <img src="images/transparent_logoanthemio2.png" class="logo" height="82" width="240" alt="Home">
        </a>
        <div>
            <nav id="navbar">
                <li><a class="active" href="website.php">Home</a></li>
                <li><a href="about.php">About</a></li>

                <li><a href="cart.php"><img
                            src="images/shopping-cart-icon-shopping-basket-on-transparent-background-free-png.webp"
                            height="20" width="35" class="cart">
                        <span id="cartCount">0</span></a></li>
                <li><a class="buttonlogin" href="login.php"><button class="btnLogin">Login</button></a></li>
            </nav>

        </div>
        </a>

        </a>
    </section>

    <section id="product1" class="section-p1">

        <div class="pro-container">
            <div class="pro">
                <a href="product.php?product=Bliss"><img src="images/formum/bliss.jpg" alt="Bliss"></a>

                <div class="des">
                    <span>Bliss</span>


                    <div class="star">

                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="btn-add-to-cart" data-product-id="Bliss"></button>

                </div>
            </div>

            <div class="pro">
                <a href="product.php?product=Clouds-above"><img src="images/formum/clouds above.jpg"
                        alt="Clouds-above"></a>
                <div class="des">
                    <span>Clouds Above</span>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="btn-add-to-cart" data-product-id="Clouds-above"></button>
                </div>
            </div>


            <div class="pro">
                <a href="product.php?product=Dozen"><img src="images/formum/dozen.jpg" alt="Dozen"></a>
                <div class="des">
                    <span>Dozen</span>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="btn-add-to-cart" data-product-id="Dozen"></button>
                </div>
            </div>



            <div class="pro">
                <a href="product.php?product=Jade"><img src="images/formum/jade.jpg" alt="Jade"></a>
                <div class="des">
                    <span>Jade</span>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="btn-add-to-cart" data-product-id="Jade"></button>
                </div>
            </div>


            <div class="pro">
                <a href="product.php?product=Secret-Wispers"><img src="images/formum/secret-wispers.jpg"
                        alt="Secret-Wispers"></a>
                <div class="des">
                    <span>Secret Wispers</span>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="btn-add-to-cart" data-product-id="Secret-Wispers"></button>
                </div>
            </div>



            <div class="pro">
                <a href="product.php?product=Strawberries"><img src="images/formum/strawberries.jpg"
                        alt="Strawberries"></a>
                <div class="des">
                    <span>Strawberries</span>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="btn-add-to-cart" data-product-id="Strawberries"></button>
                </div>
            </div>


            <div class="pro">
                <a href="product.php?product=Vintage"><img src="images/formum/vintage.jpg" alt="Vintage"></a>
                <div class="des">
                    <span>Vintage</span>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="btn-add-to-cart" data-product-id="Vintage"></button>
                </div>
            </div>



            <div class="pro">
                <a href="product.php?product=Candy"><img src="images/formum/candy.jpg" alt="Candy"></a>
                <div class="des">
                    <span>Candy</span>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="btn-add-to-cart" data-product-id="Candy"></button>
                </div>
            </div>
            <script>

                function updateCartCount() {
                    let cart = localStorage.getItem('cart');
                    cart = cart ? JSON.parse(cart) : [];
                    // Calculate the total quantity
                    let totalQuantity = 0;
                    for (const item of cart) {
                        totalQuantity += (item.quantity || 1); // Add the quantity of each item 
                    }
                    // let count = cart.length;
                    document.getElementById('cartCount').textContent = totalQuantity;
                }

                // Initialize cart count on page load
                document.addEventListener('DOMContentLoaded', updateCartCount);
            </script>

</body>

</html>