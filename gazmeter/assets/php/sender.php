<?php
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$text = $_POST['message'];

$to = "orest_polusyn@ukr.net";
$date = date("d.m.Y");
$time = date("h:i");
$from = $email;
$subject = "Заявка з сайту";


$msg = "
    Ім'я: $name 
    Номер телефону: $number 
    E-mail: $email 
    Повідомлення: $text";
mail($to, $subject, $msg, "From: $from ");
