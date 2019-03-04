<?php
require_once './PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';

$data=$_POST = json_decode(file_get_contents('php://input'), true);
$name = $data['name'];
$phone = $data['phone'];
// Настройки SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;

$mail->Host = "ssl://smtp.gmail.com";
$mail->Port = 465;
$mail->Username = "sibtrade.tech";
$mail->Password = "wz2egnb9";

// От кого
$mail->setFrom('sibtrade.tech@gmail.com', 'sibtrade.tech');

// Кому
$mail->addAddress('dir@sibtrade.info', 'dir');

// Тема письма
$mail->Subject = 'Запрос на сайте';

// Тело письма
$body = '<p><strong>Имя: '.$name.'</strong></p>'.'<p><strong>Телефон: +7'.$phone.'</strong></p>';
$mail->msgHTML($body);


$mail->send();
?>