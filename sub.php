<?php
  $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $result = "$name\r\n$email\r\n$phone\r\n$message";
  $result = wordwrap($result, 70, "\r\n");
  mail("john316rocks@gmail.com", "Focuz.io new subscription", $result, 'From: <webmaster@focuz.io>');
  header("Location: index.html");  
  die();
?>
