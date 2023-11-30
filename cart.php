<!-- Cart Page HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="cart.css">

</head>

<body>

    <body>
        <section id="header">
            <a href="website.php">
                <img src="images/transparent_logoanthemio2.png" class="logo" height="82" width="240" alt="Home">
            </a>
            <div>
                <nav id="navbar">
                    <li><a href="website.php">Home</a></li>
                    <li><a href="about.php">About</a></li>

                    <li><a class="active" href="cart.php"><img
                                src="images/shopping-cart-icon-shopping-basket-on-transparent-background-free-png.webp"
                                height="20" width="35" class="cart">
                            <span id="cartCount">0</span></a></li>
                    <li><a class="buttonlogin" href="login.php"><button class="btnLogin">Login</button></a></li>
                </nav>

            </div>
            </a>

            </a>
        </section>



        <section id="cart-page">
            <div class="container">
                <header>
                    <p style="font-size: 40px;"><b></b>Anthemio FlowerShop</b></p>
                    <br>
                    <br>
                    <br>
                    <p class="tagline">BAG</p>
                </header>
            </div>
            <!-- Cart Items -->
            <div class="cart-items">
                <!-- Cart Items -->
                <div class="cart-items">
                    <!-- Cart items will be loaded here by JavaScript -->
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="cart-summary">

                <form id="checkout-form" action="autoEmailVerification.php" method="POST">

                    <div class="form-section">
                        <label for="address">
                            Delivery Address:
                            <span class="required-text">(*required)</span>
                        </label>
                        <input type="text" id="address" name="address" required>
                        <span id="address-error" class="error-message"></span>
                    </div>

                    <div class="form-section">
                        <label for="city">Town / City:
                            <span class="required-text">(*required)</span>

                        </label>
                        <input type="text" id="city" name="city" required>
                        <span id="city-error" class="error-message"></span>
                    </div>

                    <div class="form-section">
                        <label for="postcode">Postal Code:
                            <span class="required-text">(*required)</span>

                        </label>
                        <input type="text" id="postcode" name="postcode" required>
                        <span id="postcode-error" class="error-message"></span>
                    </div>

                    <div class="form-section">
                        <label for="phone-number">Phone Number:
                            <span class="required-text">(*required)</span>

                        </label>
                        <input type="text" id="phone-number" name="phone-number" required>
                        <span id="phone-number-error" class="error-message"></span>
                    </div>



                    <div class="form-section">
                        <label for="note">Note:</label>
                        <input type="text" id="note" name="note" optional>
                    </div>

                    <div class="form-section">
                        <label for="payment-method">Payment Method:</label>
                        <p id="payment-method">Cash on Delivery</p>
                    </div>

                    <span>Delivery Fee: </span>
                    <span class="delivery-fee"></span>

                    <br><br>

                    <div>
                        <span>Total: </span>
                        <span class="total-price"></span>
                        <input type="submit" class="checkout-button" value="Checkout">
                        <div id="checkoutMessage" style="display: none;"></div>
                    </div>
                </form>
            </div>
            
            
            </form>
            </div>
        </section>

        <!-- footer section starts -->
        </section>
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
                    <a>Telephone: +357 225 14415 / 00357 99 64 3392</a>
                    <a href="mailto:rentheo@gmail.com" class="email-button">E-mail: rentheo@gmail.com
                    </a>

                    <a href="https://www.instagram.com/anthemioflowershop/?hl=el">Instagram: anthemioflowershop</a>
                    <a href="https://www.facebook.com/anthemioflowershop/">Facebook: Anthemio Flowershop</a>

                </div>
        </section>

        <script src="path/to/common.js"></script>
        <script src="cart.js"></script> <!-- Link to your JavaScript file -->
    </body>

</html>