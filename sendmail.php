<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->Charset = 'UTF-8';
$mail->setLanguage('uk', 'phpmailer/language/');
$mail->IsHTML(true);

$mail->setFrom('pavelseravin@gmail.com', 'користувач');
$mail->addAddress('pavelseravin@gmail.com');
$mail->Subject = 'привіт, ось моє замовлення';
$swal = new PHPMailer(true);

// $mailTwo = new PHPMailer(true);
// $mailTwo->Charset = 'UTF-8';
// $mailTwo->setLanguage('uk', 'phpmailer/language/');
// $mailTwo->IsHTML(true);

// $mailTwo->setFrom('pavelseravin@gmail.com', 'користувач');
// $mailTwo->addAddress('pavelseravin@gmail.com');
// $mailTwo->Subject = 'привіт, ось моє замовлення';

// $hand = "права";
// if($_POST['hand'] == "left"){
//     $hand = "ліва";
// }


// $hand = "права";
// if($_POST['hand'] == "left"){
//     $hand = "ліва";
// }

$body = '<h1>А ось і замовлення</h1>';
// $bodyTwo = '<h1>А ось і замовлення</h1>';

// if (trim(!empty($_POST['name']))) {
//     $body .= '<p><strong>Ім’я:</strong> '.$_POST['name'].'</p>';
// }

if (trim(!empty($_POST['phone']))) {
    $body .= '<p><strong>Телефон:</strong> '.$_POST['phone'].'</p>';
}
// if (trim(!empty($_POST['eyelashes']))) {
//     $body .= '<p><strong>Замовлені послуги:</strong><br> '.$_POST['eyelashes'].'</p>';
// }
// if (trim(!empty($_POST['eyebrow']))) {
//     $body .= '<p><strong>           </strong> '.$_POST['eyebrow'].'</p>';
// }
// if (trim(!empty($_POST['lamination']))) {
//     $body .= '<p><strong>           </strong> '.$_POST['lamination'].'</p>';
// }

// if (trim(!empty($_POST['yourName']))) {
//     $body .= '<p><strong>Ім’я:</strong> '.$_POST['yourName'].'</p>';
// }

if (trim(!empty($_POST['email']))) {
    $body .= '<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
}
// if (trim(!empty($_POST['message']))) {
//     $body .= '<p><strong>Повідомлення:</strong><br> '.$_POST['message'].'</p>';
// }


$mail->Body = $body;

if (!$mail->send()) {
    $message = 'Ой лишенько! Сталася помилка з відправкою форми!';
    // $message = swal("Ой лишенько!", "Сталася помилка з відправкою форми!", "error");
} else {
    $message = 'Ваше замовлення прийнято! Найближчим часом з Вами зв’яжуться';
    // $message = swal("Ваше замовлення прийнято!", "Найближщим часом з Вами зв’яжуться", "success");
}
$response = ['message' => $message];
header('Content-type: application/json');
echo json_encode($response);

// $mailTwo->Body = $bodyTwo;

// if (!$mailTwo->send()) {
//     $message = 'Помилка з відправкою Two!';
// } else {
//     $message = 'Дані відправлені Two';
// }
// $responseTwo = ['message' => $message];
// header('Content-type: application/json');
// echo json_encode($responseTwo);

//  TWO ==============================================














?>