<?php
  if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "youremail@example.com";
    $subject = "New message from website";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if(mail($to, $subject, $body)) {
      echo "Thank you for your message!";
    } else {
      echo "Error sending message. Please try again.";
    }
  }
?>
