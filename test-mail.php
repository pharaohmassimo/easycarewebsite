<?php
// Simple test file to check PHP and mail configuration
header('Content-Type: application/json');

$errors = [];
$warnings = [];

// Check PHP version
$phpVersion = phpversion();
if (version_compare($phpVersion, '5.6', '<')) {
    $errors[] = "PHP version too old: $phpVersion (minimum 5.6 required)";
} else {
    $warnings[] = "PHP version: $phpVersion ✓";
}

// Check if mail function is available
if (!function_exists('mail')) {
    $errors[] = "PHP mail() function is not available on this server";
} else {
    $warnings[] = "PHP mail() function is available ✓";
}

// Check if we can send a test email
$testEmail = false;
if (function_exists('mail') && isset($_GET['test']) && $_GET['test'] === 'send') {
    $to = 'bookings1@easycareltd.co.uk';
    $subject = 'Test Email from EasyCare Website';
    $message = '<html><body><h2>Test Email</h2><p>This is a test email sent from the website.</p></body></html>';
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: noreply@easycareltd.co.uk\r\n";
    
    $testEmail = mail($to, $subject, $message, $headers);
    
    if ($testEmail) {
        $warnings[] = "Test email sent successfully ✓";
    } else {
        $errors[] = "Failed to send test email";
    }
}

// Check if POST data can be received
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $warnings[] = "POST request received ✓";
    $warnings[] = "POST data count: " . count($_POST);
} else {
    $warnings[] = "Not a POST request (GET request received)";
}

// Output results
$response = [
    'status' => count($errors) > 0 ? 'Error' : 'Success',
    'php_version' => $phpVersion,
    'mail_available' => function_exists('mail'),
    'errors' => $errors,
    'info' => $warnings,
    'server_info' => [
        'server_software' => $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown',
        'document_root' => $_SERVER['DOCUMENT_ROOT'] ?? 'Unknown',
        'script_filename' => __FILE__
    ],
    'instructions' => [
        'Add ?test=send to URL to send a test email',
        'Example: http://easycareltd.co.uk/test-mail.php?test=send'
    ]
];

echo json_encode($response, JSON_PRETTY_PRINT);
?>
