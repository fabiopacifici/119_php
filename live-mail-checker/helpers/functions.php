<?php


/**
 * Generates alert message using a given true/false response parameter
 * @param string $response A true false value
 * @return array
 */
function generateAlertMessage($response)
{
  if ($response) {
    return [
      'status' => 'success',
      'text' => 'Success! your are subscribed'
    ];
  }
  return [
    'status' => 'danger',
    'text' => 'Error! your email is incorrect.'
  ];
}


/**
 * Check if an email has a . and `@`
 * @param string $email the email to check
 * @return bool
 * 
 */
function checkEmail($mail)
{
  if (str_contains($mail, '@') && str_contains($mail, '.')) {
    return true;
  }
  return false;
}
