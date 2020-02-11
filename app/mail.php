<?php
header('Content-Type: text/html; charset=utf-8');
// Variables
$name = trim($_POST["name"]);
$mail = trim($_POST["email"]);
$services = trim($_POST["services"]);
$message = trim($_POST["message"]);

$pattern = "/(content-type|bcc:|cc:|to:)/i";

$to = 'dev.andreyilin@gmail.com';
$sub = "=?utf-8?B?". base64_encode("Сообщение с сайта devandreyilin.ru"). "?="; // You can define email subject
// HTML Elements for Email Body
$body = "Имя: $name<br>Почта: $mail<br>Услуга: $services<br>Сообщение: $message";
//Must end on first column
$headers = "From: admin@devandreyilin.ru" ."\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
// PHP email sender

if (mail($to, $sub , $body, $headers)) {
   echo "SUCCESS";
} else {
   echo "ERROR";
}