<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $name = $_POST['name'];
    $position = $_POST['position'];
    $date = $_POST['date'];

    // Email information
    $to = 'info@easycareltd.co.uk';
    $subject = 'Job Application';
    $message = "Name: $name\nPosition Applied For: $position\nDate Completed: $date";

    // Send email
    $headers = 'From: ' . $name . "\r\n" .
        'Reply-To: ' . $name . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully';
    } else {
        echo 'Unable to send email';
    }
}
?>