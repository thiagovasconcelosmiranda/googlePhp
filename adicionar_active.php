<?php
require_once 'dao/IconeDaoMysql.php';
require_once 'config.php';
session_start();

$iconeDao = new IconeDaoMysql($pdo);
$name = filter_input(INPUT_POST, 'name');
$url = filter_input(INPUT_POST, 'url');

if($name && $url){
    $icone = new Icone();
    $icone->setName($name);
    $icone->setUrl($url);
    if($iconeDao->insert($icone)){
        $_SESSION['flash'] = 'Adicionado com sucesso';
    }else{
        $_SESSION['flash'] = 'Erro: Não adicionado';  
    }
        
}else{
    $_SESSION['flash'] = 'Dados incomplatos'; 
}

header('Location:'.$base);
exit;