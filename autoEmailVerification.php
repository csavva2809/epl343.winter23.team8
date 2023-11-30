<?php
session_start();


$conn = new mysqli("localhost", "root", "", "anthemioflowershop");

function sendEmailVerification()
{
    if (isset($_SESSION['user_email'])) {
        $to =$_SESSION['user_email'];
        $subject = "Order Confirmation";
        $message = "Thank you for your order";
        $headers = "From: anthemioflowershop@gmail.com";
        if(mail($to, $subject, $message, $headers)) {
              $_SESSION['email_status'] = "Email sent successfully to $to";
        } else {
            $_SESSION['email_status'] = "Failed to send email";
        }
    } else{
        $_SESSION['email_status'] = "No user email found in session";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    sendEmailVerification();
    header("Location: website.php");
    exit();

}

?>