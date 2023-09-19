<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "jfcattaneo87@gmail.com"; // Replace with your email address
    $subject = "Contact me Form Submission";
    $headers = "From: $email";
    
    // Send the email
    mail($to, $subject, $message, $headers);

    // Redirect back to the thank you page or a confirmation page
    header("Location: index.html");
    exit;
}
?>