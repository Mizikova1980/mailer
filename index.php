<?php

require_once './vendor/autoload.php';
require 'config.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
  ->setUsername(MAIL)
  ->setPassword(PASSWORD)
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Test'))
  ->setFrom(['mizikova1980@bk.ru' => 'Yulia'])
  ->setTo(['galashina@bk.ru' => 'A name'])
  ->setBody('Here is the message itself')
  ;

// Send the message
$result = $mailer->send($message);

if($result) {
  var_dump($result);
  echo '<br>';
  echo 'Письмо успешно отправлено';
}


?>