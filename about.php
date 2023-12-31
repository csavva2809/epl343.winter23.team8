<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - FlowerShop</title>
    <link rel="stylesheet" href="about.css">
    
</head>

<body>
<section id="header">
    <a href="website.php">
            <img src="images/transparent_logoanthemio2.png" class="logo" height="82" width="240" alt="Home">
        </a>
            <div>
                <nav id="navbar">
                    <li><a  href="website.php">Home</a></li>
                    <li><a class="active" href="about.php">About</a></li>

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

    <section id="hero">
        <h1>
            <i><span class="hero-text">Anthemio</span></i>
            <i><span class="hero-text">Flower</span></i>
            <i><span class="hero-text">Shop</span></i>
        </h1>
    </section>


    <div class="container">
        <header>
            <p style ="font-size: 40px;"><b></b>Anthemio Flowershop</b></p>
            <p class="tagline">Send stunning flowers from independent florists in Nicosia.</p>
        </header>

        <section class="about-details">
            <p style="font-size: 20px;">Anthemio Flowershop in Nicosia is your trusted choice for beautiful flower
                arrangements and personalized delivery services. With our partnership, you are
                guaranteed excellent service and the freshest of blooms. We cater to Nicosia, Limmasol, Paphos, Larnaca and surrounding areas. For
                same-day delivery, please place your order before 12pm.</p>


                <div class="content-container">
                    <!-- About Info Container -->
                    <div class="about-info">
                        <h2>Visit Us</h2>
                        <div class="location-container">
                            <img src="images/red.png" class="location-image">
                            <p>Makedonitissis 91 TH, Strovolos, Nicosia, 2057</p>
                        </div>
                        <h2>Contact Us</h2>
                        <div class="gmail-container">
                            <img src="images/gmail.png" class="gmail-image">
                            <p>email: rentheo@gmail.com</p>
                        </div>
                        <div class="telephone-container">
                            <img src="images/tilefono.png" class="telephone-image">
                            <p>telephone: +357 225 14415</p>
                        </div>
    
    
                        <h2>Opening Hours</h2>
                        <p>Mon-Sat: 9:00 - 19:00<br>Sunday: 9:00 - 17:00</p>
                    </div>
                
                    <!-- Map Container -->
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps?q=35.146608702351635,33.32940372637586&z=17&output=embed"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                </div>
                
               
            </div>

    </div>

    <!-- footer section starts -->
    <section class="footer">

        <div class="box-container">

            <div class="box">



                <nav id="quicklinks">
                    <h3>Quick links</h3>
                    <li><a class="active" href="website.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="cart.php">My Cart</a></li>
                </nav>



            </div>

            <div class="box">
                <h3>Delivery</h3>
                <a>Nicosia</a>
                <a>Limmasol</a>
                <a>Paphos</a>
                <a>Larnaca</a>

            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a>Telephone: +357 225 14415</a>
                <a href="mailto:rentheo@gmail.com" class="email-button">E-mail: rentheo@gmail.com
                </a>

                <a href="https://www.instagram.com/anthemioflowershop/?hl=el">Instagram: anthemioflowershop</a>
                <a href="https://www.facebook.com/anthemioflowershop/">Facebook: Anthemio Flowershop</a>

            </div>
    </section>

    <script>
        function updateCartCount() {
            let cart = localStorage.getItem('cart');
            cart = cart ? JSON.parse(cart) : [];
            // Calculate the total quantity
            let totalQuantity=0;
            for(const item of cart) {
                totalQuantity += (item.quantity || 1); // Add the quantity of each item 
            }
           // let count = cart.length;
            document.getElementById('cartCount').textContent = totalQuantity;
        }
    
        // Add this to call updateCartCount on page load
        document.addEventListener('DOMContentLoaded', updateCartCount);
    </script>   

<script src="path/to/common.js"></script>

    </div>
    </div>

</body>

</html>