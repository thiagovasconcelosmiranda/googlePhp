<?php
require 'dao/IconeDaoMysql.php';
require 'config.php';

$iconeDao = new IconeDaoMysql($pdo);
$array = [];

$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $icons = $iconeDao->findId($id);
    $array['id'] = $icons->getId();
    $array['name'] = $icons->getName();
    $array['url'] = $icons->getUrl();
    $array['login_id'] = $icons->getLoginId();
    $array['error'] = '';
} else {
    $array['error'] = 'Id não enviado';
}

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo json_encode($array);