<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Get form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  // Set recipient email
  $recipient = "your-email@example.com";
  
  // Set email subject
  $subject = "New Message from Contact Form";
  
  // Set email headers
  $headers = "From: $name <$email>";
  
  // Compose the email body
  $body = "Name: $name\n\n";
  $body .= "Email: $email\n\n";
  $body .= "Message:\n$message";
  
  // Send the email
  if (mail($recipient, $subject, $body, $headers)) {
    // Email sent successfully
    echo "Thank you! Your message has been sent.";
  } else {
    // Failed to send email
    echo "Oops! Something went wrong. Please try again.";
  }
}
?>
