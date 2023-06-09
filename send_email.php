<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Email details
$to = 'victorpaul989@gmail.com';
$headers = "From: $email\r\n" .
           "Reply-To: $email\r\n" .
           "X-Mailer: PHP/" . phpversion();

// Compose the email body
$body = "Name: $name\n" .
        "Email: $email\n" .
        "Subject: $subject\n" .
        "Message: $message";

// Send the email
if (mail($to, $subject, $body, $headers)) {
    // Email sent successfully
    echo 'Thank you for contacting me. Your message has been sent.';
} else {
    // Error sending email
    echo 'There was a problem sending your message. Please try again.';
}
?>
