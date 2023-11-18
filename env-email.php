<?php
require_once 'config.php';
require_once 'email/EnvEmail.php';

$envEmail = new EnvEmail($pdo, $base);

$email = filter_input(INPUT_POST, 'recover-email', FILTER_VALIDATE_EMAIL);
$firstName = filter_input(INPUT_POST, 'first-name-user');
$lastName = filter_input(INPUT_POST, 'last-name-user');

if($email && $firstName && $lastName){
    
    $env = $envEmail->envEmail($email, $firstName, $lastName);
     if($env){
       header('Location:'.$base.'/very_code.php');
       exit;
     }else{
        header('Location:'.$base.'signin.php');
        exit;
     }


}




