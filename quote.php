<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $company = $_POST["company"];
    $serviceType = $_POST["serviceType"];
    $equipmentType = $_POST["equipmentType"];
    $origin = $_POST["origin"];
    $destination = $_POST["destination"];
    $dimensions = $_POST["dimensions"];
    $message = $_POST["message"];

    // Compose the email message
    $to = ""; // Replace with your email address
    $subject = "New Quote Request";
    $messageBody = "Name: $name\nEmail: $email\nPhone: $phone\nCompany: $company\nService Type: $serviceType\nEquipment Type: $equipmentType\nOrigin: $origin\nDestination: $destination\nDimensions: $dimensions\nComments: $message";
    
    // Send the email
    mail($to, $subject, $messageBody);

    // You can also redirect the user to a "Thank you" page
    header("Location: thank-you.html"); // Create a thank-you page
}
?>