<?php

require_once __DIR__ . '/helpers/functions.php';

$email = $_GET['email'];

if (isset($email)) {

  $response = checkEmail($email);
  $message = generateAlertMessage($response);

  var_dump($message);
  session_start();

  var_dump($_SESSION);
  $_SESSION['message'] = $message;

  header('Location: /index.php');
}
