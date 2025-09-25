<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = "diegotrujillor@gmail.com"; // Replace with your email
        $subject = "Nuevo Mensaje de Ecos Angelicales";
        $headers = "From: " . $email . "\r\n" .
                   "Reply-To: " . $email . "\r\n" .
                   "Content-Type: text/plain; charset=UTF-8\r\n";

        $email_body = "Name: $name\n" .
                      "Email: $email\n" .
                      "Message:\n$message";

        if (mail($to, $subject, $email_body, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "Failed to send email.";
        }
    }
?>