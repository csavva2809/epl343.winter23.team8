<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funerals - FlowerShop</title>
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
            <a href="product.php?product=loose"><img src="images/funerals/loose.jpg" alt="loose"></a>

            <div class="des">
                <span>Loose Wreath</span>
                <div class="star">

                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button class="btn-add-to-cart" data-product-id="loose"></button>

            </div>
        </div>

        <div class="pro">
            <a href="product.php?product=colourloose"><img src="images/funerals/colourloose.jpg" alt="colourloose"></a>
            <div class="des">
                <span> Mixed Loose Wreath</span>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button class="btn-add-to-cart" data-product-id="colourloose"></button>
            </div>
        </div>


        <div class="pro">
            <a href="product.php?product=tied"><img src="images/funerals/tied.jpg" alt="tied"></a>
            <div class="des">
                <span>White Tied Sheaf</span>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button class="btn-add-to-cart" data-product-id="tied"></button>
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

