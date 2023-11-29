<?php 
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn =  new mysqli("localhost","root","","epl343team8");

    if($conn -> connect_error){
        die('Connection Failed :' .$conn->connect_error);
    }else {
        $stmt = $conn->prepare("INSERT *INTO userinfo(firstName, lastName, email, password) VALUES ($firstName, $lastName, $email, $password)");
        $stmt -> bind_param("ssss", $firstName, $lastName, $email, $password);
        $stmt-> execute();
        echo "Registration Successfully";
        $stmt->close();
        $conn->close();
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
    <section id="header">
        <a href="http://127.0.0.1:5500/website.html">
            <img src="/images/transparent_logoanthemio2.png" class="logo" height="82" width="240">
            <div>
                <nav id="navbar">
                    <li><a class="active" href="website.html">Home</a></li>
                    <li><a href="about.html">About</a></li>

                    <li><a href="cart.html"><img
                                src="images/shopping-cart-icon-shopping-basket-on-transparent-background-free-png.webp"
                                height="20" width="35" class="cart"></a></li>
                    <li><a class="buttonlogin" href="login.html"><button class="btnLogin">Login</button></a></li>
                </nav>

            </div>
        </a>


    </section>

    <div class="full-page">
        <div id='login=form' class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button' onclick='login()' class='toggle-btn'>Log In</button>
                    <button type='button' onclick='register()' class='toggle-btn'>Register</button>
                </div>
                
                <form id='login' class='input-group-login' action>
                    <input type='text' class='input-field' placeholder='Email Id' required>
                    <input type='password' class='input-field' placeholder='Enter Password' required>
                    <input type='checkbox' class='check-box'><span>Remember Password</span>
                    <button type='submit' class='submit-btn'>Log in</button>

                </form>

                <form id='register' class='input-group-register' action='registration.php' method='POST'>
                    <input type='text' name='firstName' class='input-field' placeholder='First Name' required>
                    <input type='text' name='lastName' class='input-field' placeholder='Last Name' required>
                    <input type='email' name='email' class='input-field' placeholder='Email Id' required>
                    <input type='password' name='password' class='input-field' placeholder='Enter Password' required>
                    <input type='checkbox' class='check-box'><span>I agree to the terms and conditions</span>
                    <button type='submit' class='submit-btn'>Register</button>
                </form>
            </div>
        </div>

    </div>
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
    </script>
    <script>
        var modal = document.getElementByiD('login-form');
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";

            }
        }
    </script>
</body>