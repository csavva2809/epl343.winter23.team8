<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weddings - FlowerShop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section id="header">
        <a href="http://127.0.0.1:5500/website.php">
            <img src="images/transparent_logoanthemio2.png" class="logo" height="82" width="240">
            <div>
                <nav id="navbar">
                    <li><a class="active" href="website.php">Home</a></li>
                    <li><a href="about.php">About</a></li>

                    <li><a href="cart.php"><img
                                src="images/shopping-cart-icon-shopping-basket-on-transparent-background-free-png.webp"
                                height="20" width="35" class="cart"><span id="cartCount">0</span></a></li>
                    <li><a class="buttonlogin" href="login.php"><button class="btnLogin">Login</button></a></li>
                </nav>

            </div>
        </a>


    </section>
</section>

    <section id="product1" class="section-p1">

        <div class="pro-container">
            <div class="pro">
                <a href="product.php?product=ava"><img src="images//wedding/ava.jpg" alt="ava"></a>
    
                <div class="des">
                    <span>Ava</span>
                    <div class="star">
    
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="btn-add-to-cart" data-product-id="ava"></button>
    
                </div>
            </div>
            
            <div class="pro">
                <a href="product.php?product=spark"><img src="images/wedding/spark.jpg"alt="spark"></a>
                <div class="des">
                    <span>Sparkling Champagne</span>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="btn-add-to-cart" data-product-id="spark"></button>
                </div>
            </div>
    
            <div class="pro">
                <a href="product.php?product=white"><img src="images/wedding/white.jpg" alt="white"></a>
                <div class="des">
                    <span>White Love</span>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="btn-add-to-cart" data-product-id="white"></button>
                </div>
            </div>
    
            
            <div class="pro">
                <a href="product.php?product=forever"><img src="images/wedding/forever.jpg"alt="forever"></a>
                <div class="des">
                    <span>Forever Yours</span>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="btn-add-to-cart" data-product-id="forever"></button>
                </div>
            </div>
    
          
            <script>

                function updateCartCount() {
                    let cart = localStorage.getItem('cart');
                    cart = cart ? JSON.parse(cart) : [];
                    let count = cart.length;
                    document.getElementById('cartCount').textContent = count;
                }
                
                // Initialize cart count on page load
                document.addEventListener('DOMContentLoaded', updateCartCount);
                </script>
       
    
</body>
</html>

