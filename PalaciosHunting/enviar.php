<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone  = $_POS['phone'];
$message = $_POST['message'];

$header = 'From' .$mail . "\r\n";
$header = 'X-Mailer: PHP/' .phpversion() . "\r\n";
$header = "Mime-version 1.0 \r\n ";
$header = "content-Type: text/plain";

$message = "this message was send to" .$name . "\r\n";
$message = "your email is" .$mail . "\r\n";
$message = "contact phone" .$phone . "\r\n";
$message= "message" .$_POST['message'] . "\r\n";
$message = "send" .date('d/m/Y', time());

$para = 'palacioshunting@gmail.com ';
$asunto = 'asunto del mensaje';

mail($para , $asunto , utf8_decode($message), $header);

header("location:index.html");

?>

