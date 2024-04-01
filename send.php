<?php
$to = "recipient@example.com";
$subject = "Test Email";
$message = "This is a test email.";
$sender_email = "sender@example.com";
$sender_name = "Your Name";

$headers = "From: $sender_name <$sender_email>\r\n";
$headers .= "Reply-To: $sender_name <$sender_email>\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed.";
}
?>

