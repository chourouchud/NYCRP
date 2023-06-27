<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Validate the input and perform additional processing if required

    // Send the email
    $to = 'your-email@example.com';  // Replace with the actual email address where you want to receive the order
    $subject = 'New Order';
    $message = "Name: $name\nEmail: $email\nAddress: $address";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        http_response_code(200);
        echo 'Order placed successfully!';
    } else {
        http_response_code(500);
        echo 'Failed to place the order. Please try again.';
    }
} else {
    http_response_code(400);
    echo 'Invalid request.';
}
?>
