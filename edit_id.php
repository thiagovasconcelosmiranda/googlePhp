<?php
require 'dao/IconeDaoMysql.php';
require 'config.php';

$iconeDao = new IconeDaoMysql($pdo);
$array = [];

$id = filter_input(INPUT_GET, 'id');

if($id){
    $icons = $iconeDao->findId($id);
    $array['id'] = $icons->getId();
    $array['name'] = $icons->getName();
    $array['url'] = $icons->getUrl();
    $array['error'] = '';
}else{
    $array['error'] = 'Id não enviado';
}


echo json_encode($array);