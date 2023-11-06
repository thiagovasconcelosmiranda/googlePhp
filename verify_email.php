<?php
require_once 'config.php';
require_once 'dao/UserDaoMysql.php';

$userDao = new UserDaoMysql($pdo);
$array = [];
$email = filter_input(INPUT_GET, 'email');

if($email){
    $veryEmail = $userDao->findByEmail($email);
 
   $array['email'] = $veryEmail;
}


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo json_encode($veryEmail);

