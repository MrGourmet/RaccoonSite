<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = htmlspecialchars($_POST['fullname']);
    $phone = htmlspecialchars($_POST['phone']);
    $location = htmlspecialchars($_POST['location']);
    $email = htmlspecialchars($_POST['email']);

    // Recipient email address
    $to = "raccoonlocksmith@gmail.com";

    // Subject
    $subject = "New Contact Form Submission";

    // Message body
    $message = "You have received a new message from your website contact form:\n\n";
    $message .= "Full Name: $fullname\n";
    $message .= "Phone: $phone\n";
    $message .= "Location: $location\n";
    $message .= "Email: $email\n";

    // Headers
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Thank you for contacting us, $fullname. We will get back to you soon!</p>";
    } else {
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }
}
?>
