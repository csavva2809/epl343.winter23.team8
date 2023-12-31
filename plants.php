<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plants - FlowerShop</title>
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
                <a href="product.php?product=mov"><img src="images/plants/mov.jpg" alt="mov"></a>

                <div class="des">
                    <span>Violet Orchids</span>
                    <div class="star">

                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="btn-add-to-cart" data-product-id="mov"></button>

                </div>
            </div>

            <div class="pro">
                <a href="product.php?product=aspri"><img src="images/plants/aspri.jpg" alt="aspri"></a>
                <div class="des">
                    <span>Moonlind Orchid</span>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="btn-add-to-cart" data-product-id="aspri"></button>
                </div>
            </div>


            <div class="pro">
                <a href="product.php?product=portokalia"><img src="images/plants/portokalia.jpg" alt="portokalia"></a>
                <div class="des">
                    <span>Harvest Sunset Roses</span>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="btn-add-to-cart" data-product-id="portokalia"></button>
                </div>
            </div>

            <div class="pro">
                <a href="product.php?product=woodland"><img src="images/plants/woodland.jpg" alt="woodland"></a>
                <div class="des">
                    <span>Woodland</span>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="btn-add-to-cart" data-product-id="woodland"></button>
                </div>
            </div>


            <div class="pro">
                <a href="product.php?product=kaktos"><img src="images/plants/kaktos.jpg " alt="kaktos"></a>
                <div class="des">
                    <span>Cactus</span>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="btn-add-to-cart" data-product-id="kaktos"></button>
                </div>
            </div>

            <div class="pro">
                <a href="product.php?product=pampakas"><img src="images/plants/pampakas.jpg" alt="pampakas"></a>
                <div class="des">
                    <span>Pampas</span>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="btn-add-to-cart" data-product-id="pampakas"></button>
                </div>
            </div>

            <div class="pro">
                <a href="product.php?product=iakinthos"><img src="images/plants/iakinthos.jpg" alt="iakinthos"></a>
                <div class="des">
                    <span>Hyacinth</span>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="btn-add-to-cart" data-product-id="iakinthos"></button>
                </div>
            </div>

            <div class="pro">
                <a href="product.php?product=ponsettia"><img src="images/plants/ponsettia.jpg" alt="ponsettia"></a>
                <div class="des">
                    <span>Festive Ponsettia</span>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="btn-add-to-cart" data-product-id="ponsettia"></button>
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

</body>

</html>