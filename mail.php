<?php

   $name = $_POST['name'];

  if (isset($_POST['email']))
    $email = $_POST['email'];

  if (isset($_POST['message']))
    $message = $_POST['message'];

  if (isset($_POST['subject']))
    $subject = $_POST['subject'];

  if ($name === '') {
    echo "Name cannot be empty.";
    die();
  }
  if ($email === '') {
    echo "Email cannot be empty.";
  }
  if ($subject === '') {
    echo "Subject cannot be empty.";
    die();
  }
  if ($message === '') {
    echo "Message cannot be empty.";
    die();
  }
  // $content = "From: $name \nEmail: $email \nMessage: $message";
  // $recipient = "jaba222m@yahoo.com";
  // $mailheader = "From: $email \r\n";
  // mail($recipient, $subject, $content, $mailheader) or die("Error!");
  // echo "Email sent!";

?>