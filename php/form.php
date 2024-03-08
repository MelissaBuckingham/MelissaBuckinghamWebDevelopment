<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate email (you can add more validation here)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit;
    }

    // Send email
    $to = "info@melissabuckingham.net";
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
