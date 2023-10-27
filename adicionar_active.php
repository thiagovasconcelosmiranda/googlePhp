<?php
require_once 'dao/IconeDaoMysql.php';
require_once 'config.php';
session_start();
 $array = ['Error' => ''];
$iconeDao = new IconeDaoMysql($pdo);

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$url = filter_input(INPUT_POST, 'url');

if($name && $url){
   
    $icone = new Icone();
    $icone->setName($name);
    $icone->setUrl($url);

    if(!$iconeDao->insert($icone)){
        $_SESSION['flash'] = 'Erro: Não adicionado';  
        $array['error'] = 'Erro: Não adicionado';
    }
        
}else{
    $_SESSION['flash'] = 'Dados incomplatos'; 
}
if(!$id){
    header('Location:'.$base);
    exit;

}else{
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    echo json_encode($array);
}


