<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "erickarlins@gmail.com"; // Replace with your email
    $subject = "New message from " . $name;
    $body = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message;
    $headers = "From: " . $email;
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>

