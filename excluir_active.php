<?php
require 'dao/IconeDaoMysql.php';
require 'config.php';
session_start();

$iconeDao = new IconeDaoMysql($pdo);

$id = filter_input(INPUT_GET, 'id');

if($id){
    $atalhos = $iconeDao->findId($id);
    $_SESSION['atalho-item'] = serialize($atalhos);
   

   if($iconeDao->delete($id)){
      $_SESSION['flash'] = 'Atalho Alterado';
   }
}else{
  $_SESSION['flash'] = 'Erro: Id Não enviado'; 
}
header('Location:'.$base);
exit;


