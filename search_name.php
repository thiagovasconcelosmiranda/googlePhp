<?php
require_once 'dao/SearchDaoMysql.php';
require_once 'config.php';

$SearchDao = new SearchDaoMysql($pdo);

$array = [];
$name = filter_input(INPUT_GET, 'search');
 $n = new Search();
 $n->setName($name);

 $search = $SearchDao->findName($n);
if($search){
    foreach ($search as $key => $value) {
        $array[] = [
            'id' =>$value->getId(),
            'name' => $value->getName(),
            'url' => $value->getUrl(),
        ];
     }  
}  
 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo json_encode($array);
exit;