<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newborn Flowers - FlowerShop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="header">
        <a href="http://127.0.0.1:5500/website.php">
            <img src="/images/transparent_logoanthemio2.png" class="logo" height="82" width="240">
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


<section id="product1" class="section-p1">

    <div class="pro-container">
        <div class="pro">
            <a href="product.php?product=little-something"><img src="images/newborn/A little something.jpg" alt="A little something"></a>

            <div class="des">
                <span>A Little Something</span>
                

                <div class="star">
                    
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button class="btn-add-to-cart" data-product-id="little-something"></button>
                
            </div>
        </div>
       
        <div class="pro">
            <a href="product.php?product=cerise-bouquet"><img src="images/newborn/Colour Of Cerise Bouquet.jpg" alt="Colour Of Cerise Bouquet"></a>           
             <div class="des">
                <span>Colour Of Cerise Bouquet</span>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button class="btn-add-to-cart" data-product-id="cerise-bouquet"></button>
            </div>
        </div>


        <div class="pro">
            <a href="product.php?product=cut-flowers"><img src="images/newborn/cut flowers.jpg" alt="cut flowers"></a>
            <div class="des">
                <span>Cut Flowers</span>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button class="btn-add-to-cart" data-product-id="cut-flowers"></button>
            </div>
        </div>



       <div class="pro">
    <a href="product.php?product=loveinpink"><img src="images/newborn/love in pink.jpg" alt="love in pink"></a>
    <div class="des">
        <span>Love In Pink</span>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button class="btn-add-to-cart" data-product-id="loveinpink"></button>
            </div>
        </div>


        <div class="pro">
            <a href="product.php?product=welcome"><img src="images/newborn/welcome.jpg" alt="welcome"></a>
            <div class="des">
                <span>Welcome</span>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button class="btn-add-to-cart" data-product-id="welcome"></button>
            </div>
        </div>



        <div class="pro">
            <a href="product.php?product=roses"><img src="images/newborn/roses.jpg" alt="roses"></a>
            <div class="des">
                <span>Roses</span>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button class="btn-add-to-cart" data-product-id="roses"></button>
            </div>
        </div>


        <div class="pro">
            <a href="product.php?product=sugar-rush"><img src="images/newborn/Sugar rush.jpg" alt="Sugar rush"></a>
            <div class="des">
                <span>Sugar Rush</span>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button class="btn-add-to-cart" data-product-id="sugar-rush"></button>
            </div>
        </div>



        <div class="pro">
            <a href="product.php?product=dreaming"><img src="images//newborn/Dreaming.jpg" alt="Dreaming"></a>
            <div class="des">
                <span>Dreaming</span>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button class="btn-add-to-cart" data-product-id="dreaming"></button>
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