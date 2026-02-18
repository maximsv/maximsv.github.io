<?php

$frm_name  = "vitalik";
$recepient = "maximsv1701@gmail.com";
$sitename  = "nash sad";
$subject   = "Новая заявка с сайта \"$sitename\"";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$mail = trim($_POST["mail"]);
// $formname = trim($_POST["formname"]);

$message = "
Форма: $formname <br>
Имя: $name <br>
Телефон: $phone <br>
Почта: $mail
";

mail($recepient, $subject, $message, "From: $frm_name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");
