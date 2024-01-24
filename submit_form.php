<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // TODO: Add your processing logic here
    // For now, let's just print the received data
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Message: $message<br>";
} else {
    // Handle non-POST requests (optional)
    echo "This page should only be accessed through form submission.";
}
?>