<?php 
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn =  new mysqli("localhost","root","","epl343.userinfo");

    if($conn -> connect_error){
        die('Connection Failed :' .$conn->connect_error);
    }else {
        $stmt = $conn->prepare("INSERT *INTO userinfo(firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
        $stmt -> bind_param("ssss", $firstName, $lastName, $email, $password);
        $stmt-> execute();
        echo "Registration Successfully";
        $stmt->close();
        $conn->close();
    }

?>