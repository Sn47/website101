<?php
require_once '../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.org', 25))
  ->setUsername('Ahmad Ali')
  ->setPassword('Tigerchanlhr@486')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
  ->setFrom(['ahmadshykh2015@gmail.com' => 'Ahmad ali'])
  ->setTo(['ahmadshykh2015@gmail.com' => 'Ahmad Ali'])
  ->setBody('Here is the message itself')
  ;

// Send the message
$result = $mailer->send($message);