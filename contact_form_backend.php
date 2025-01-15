<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data and sanitize it
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Check if any of the fields are empty
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    // Set the email recipient (your email address)
    $to = "raccoonlocksmith@gmail.com";
    $subject = "New Message from $name";
    
    // Construct the email body
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    // Send the email
    $headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n" . "Content-Type: text/plain; charset=UTF-8";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
