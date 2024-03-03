<?php
$to = "lopalopa2007@gmail.com";
$subject = "Test email";
$message = "This is a test email sent from PHP.";
$headers = "From: babu2007@gmail.com\r\n";
$headers .= "Reply-To: babu2007@gmail.com\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Email sending failed.";
}
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
