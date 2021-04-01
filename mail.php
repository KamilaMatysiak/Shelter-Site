<?php
$to = 's444441@wmi.amu.edu.pl';
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = 'From: ' . $name . ' ' . $surname . '(' . $email . ')' . "\n" . $_POST['message'];
$headers = 'From: ' . $name . ' ' . $surname . '(' . $email . ')' . ':' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
$headers = 'Content-type: text/html; charset=utf-8';

mail($to, $subject, $message, $headers);


header('Location: send.html');

?>