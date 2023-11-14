<?php
require_once "config.php";
require_once "dao/AppearenceDaoMysql.php";


$array = ['error'=>''];

$body = filter_input(INPUT_POST, 'body');
$ip = filter_input(INPUT_POST, 'ip');
$ul = filter_input(INPUT_POST, 'ul');
$input = filter_input(INPUT_POST, 'input');
$button = filter_input(INPUT_POST, 'button');
$letter = filter_input(INPUT_POST, 'letter');
$footer = filter_input(INPUT_POST, 'footer');
$pos = filter_input(INPUT_POST, 'pos');
if($body && $ip && $ul && $input && $button && $letter && $footer && $pos){
   $appearenceDao = new AppearenceDaoMysql($pdo);

   $app = new Appearance();
   $app->setBody($body);
   $app->setIP($ip);
   $app->setUl($ul);
   $app->setInput($input);
   $app->setButton($button);
   $app->setLetter($letter);
   $app->setFotter($footer);

  $appearence = $appearenceDao->findByIp($ip);

  if($appearence){
     $appearenceDao->delete($ip);
  }else{
    $appearenceDao->insert($app);
  }
}


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo json_encode($array);
