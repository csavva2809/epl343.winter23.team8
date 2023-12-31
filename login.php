<?php
session_start();
if (isset($_POST['register'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli("localhost", "root", "", "anthemioflowershop");

    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO userinfo (firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $firstName, $lastName, $email, $password);
        $stmt->execute();
        $_SESSION['registration_success'] = "Registration Successfully";
        $stmt->close();
        $conn->close();
    }
}
?>


<?php

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli("localhost", "root", "", "anthemioflowershop");

    $sql = "select * from userinfo where email = '$email' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['login_success'] = "Login Successfully";
        $_SESSION['user_email'] = $email;
        
    } else {
        $_SESSION['login_error'] = "Invalid login information";
    }


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlowerShop</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
<div id="registration-success" class="registration-success">
    <?php
    if (isset($_SESSION['registration_success'])) {
        echo $_SESSION['registration_success'];
        unset($_SESSION['registration_success']);
    }
    ?>
</div>

<div id="login-message" class="login-message">
    <?php
    if (isset($_SESSION['login_success'])) {
        echo $_SESSION['login_success'];
        unset($_SESSION['login_success']);
    } elseif (isset($_SESSION['login_error'])) {
        echo $_SESSION['login_error'];
        unset($_SESSION['login_error']);
    }
    ?>
</div>

    <section id="header">
        <a href="website.php">
            <img src="images/transparent_logoanthemio2.png" class="logo" height="82" width="240" alt="Home">
        </a>
        <div>
            <nav id="navbar">
                <li><a href="website.php">Home</a></li>
                <li><a href="about.php">About</a></li>

                <li><a href="cart.php"><img
                            src="images/shopping-cart-icon-shopping-basket-on-transparent-background-free-png.webp"
                            height="20" width="35" class="cart">
                        <span id="cartCount">0</span></a></li>
                <li><a class="active" class="buttonlogin" href="login.php"><button class="btnLogin">Login</button></a>
                </li>
            </nav>

        </div>
        </a>

        </a>
    </section>

    <style>
    .registration-success {
        position: fixed; 
        top: 30%; 
        left: 50%; 
        transform: translate(-50%, -50%); 
        text-align: center;
        color:palevioletred;
        font-size: 1.2em;
        padding: 10px;
        z-index: 1000; 
    }

    .login-message {
    position: fixed;
    top: 30%; 
    left: 50%; 
    transform: translate(-50%, -50%);
    text-align: center;
    font-size: 1.2em;
    padding: 10px;
    z-index: 1000;
    color:palevioletred;
}

.login-success {
    color:palevioletred;
    background-color: white;
}

.login-error {
    color:palevioletred;
    background-color: white;
}

</style>

    <div class="full-page">

        <div id='login=form' class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button' onclick='login()' class='toggle-btn'>Log In</button>
                    <button type='button' onclick='register()' class='toggle-btn'>Register</button>
                </div>

                <form id='login' class='input-group-login' action='' method='POST'>
                    <input type='email' name='email' class='input-field' placeholder='Email Id' required>
                    <input type='password' name='password' class='input-field' placeholder='Enter Password' required>
                    <input type='checkbox' class='check-box'><span>Remember Password</span>
                    <button type='submit' name='login' class='submit-btn'>Log in</button>
                </form>


                <form id='register' class='input-group-register' action='' method='POST'>
                    <input type='text' name='firstName' class='input-field' placeholder='First Name' required>
                    <input type='text' name='lastName' class='input-field' placeholder='Last Name' required>
                    <input type='email' name='email' class='input-field' placeholder='Email Id' required>
                    <input type='password' name='password' class='input-field' placeholder='Enter Password' required>
                    <input type='checkbox' class='check-box'><span>I agree to the terms and conditions</span>
                    <button type='submit' name='register' class='submit-btn'>Register</button>

                </form>
            </div>
        </div>

    </div>

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
                <a>Telephone: +357 225 14415</a>
                <a href="mailto:rentheo@gmail.com" class="email-button">E-mail: rentheo@gmail.com
                </a>

                <a href="https://www.instagram.com/anthemioflowershop/?hl=el">Instagram: anthemioflowershop</a>
                <a href="https://www.facebook.com/anthemioflowershop/">Facebook: Anthemio Flowershop</a>

            </div>
        </div>
    </section>


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

        // Add this to call updateCartCount on page load
        document.addEventListener('DOMContentLoaded', updateCartCount);
    </script>

    <script src="path/to/common.js"></script>


    <script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');
        function register() {
            x.style.left = '-400px';
            y.style.left = '50px';
            z.style.left = '110px';
        }
        function login() {
            x.style.left = '50px';
            y.style.left = '450px';
            z.style.left = '0px';
        }
        var modal = document.getElementById('login-form');
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
             
                if (successMessage)t
                 {   var successMessage = document.getElementById('registration-success');
                    successMessage.style.display = 'none';
                }
            }, 1500); 
        });

        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
             
                if (successMessage)t
                 {   var successMessage = document.getElementById('login-message');
                    successMessage.style.display = 'none';
                }
            }, 1500); 
        });

    </script>



</body>