<?php
function error($error)
{
  $errorMsg = $error;
  require_once VIEWS . "/error/error.php";
}

function validateRequest($request)
{
  
  $first_name = isset($request['first_name']);
  $last_name = isset($request['last_name']);
  $email = isset($request['email']);
  $address = isset($request['address']);
  $city = isset($request['city']);
  $state = isset($request['state']);
  $phone = isset($request['phone']);
  if (!$first_name || !$last_name || !$email || !$address || !$city || !$state || !$phone) {
    error('Some request was empty');
  }
}