<?php
require_once 'dao/IconeDaoMysql.php';
require_once 'config.php';
session_start();

$iconeDao = new IconeDaoMysql($pdo);
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$url = filter_input(INPUT_POST, 'url');

if($id && $name && $url){
    $icone = new Icone();
    $icone->setId($id);
    $icone->setName($name);
    $icone->setUrl($url);
    if($iconeDao->update($icone)){
        $_SESSION['flash'] = 'Alterado com sucesso';
    }else{
        $_SESSION['flash'] = 'Erro: Não adicionado';  
    }
        
}else{
    $_SESSION['flash'] = 'dados imcompletos'; 

}

header('Location:'.$base);
exit;