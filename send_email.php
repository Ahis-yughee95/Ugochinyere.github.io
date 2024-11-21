<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "ugochiahaiwe30@gmail.com"; // Your email
    $subject = "New Message from Your Website";
    $headers = "From: $email";

    $body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message delivery failed.";
    }
}
?>