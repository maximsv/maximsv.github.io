<?php

$recepient = "romenko@bigmir.net";
$sitename = "Магія каменю";
$subject   = "Новая заявка с сайта \"$sitename\"";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$comment = trim($_POST["comment"]);
$message = "Имя: $name \nТелефон: $phone \nТекст: $comment";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");