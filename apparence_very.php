<?php

require_once "config.php";
require_once "dao/AppearenceDaoMysql.php";

$array = ['error'=>''];
$ip = filter_input(INPUT_GET, 'ip');
if($ip){
    $appearenceDao = new AppearenceDaoMysql($pdo);

   $appearence = $appearenceDao->findByIp($ip);

   if($appearence){
     $array['appearence'] = $appearence;
   }else{
    $array['error'] = 'Não há dados';
   }
}else{
    $array['error'] = 'Paramnetro  não enviado';
}

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo json_encode($array);
