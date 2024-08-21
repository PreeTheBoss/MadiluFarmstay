<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $dates = htmlspecialchars($_POST['dates']);

    $to = 'madilufarmstay@gmail.com'; // Replace with your email address
    $subject = 'New Booking Request';
    $message = "Name: $name\nEmail: $email\nDates: $dates";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo 'Booking request sent!';
    } else {
        echo 'Failed to send booking request.';
    }
} else {
    echo 'Invalid request.';
}
?>
