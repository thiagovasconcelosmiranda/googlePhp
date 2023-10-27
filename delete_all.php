<?php
require_once 'dao/IconeDaoMysql.php';
require_once 'config.php';

$iconeDao = new IconeDaoMysql($pdo);
$array = [];

if($iconeDao->deleteAll()){
   $array['error'] = 'Deletado com sucesso!';
}

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo json_encode($array);

