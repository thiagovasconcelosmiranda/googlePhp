<?php
require_once 'dao/IconeDaoMysql.php';
require_once 'config.php';
session_start();

$iconeDao = new IconeDaoMysql($pdo);
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$url = filter_input(INPUT_POST, 'url');
$loginId = filter_input(INPUT_POST, 'login_id');

if ($id && $name && $url && $loginId) {
    $icone = new Icone();
    $icone->setId($id);
    $icone->setName($name);
    $icone->setUrl($url);
    $icone->setLoginId($loginId);

    if (!$iconeDao->update($icone)) {
        $_SESSION['flash'] = 'Erro: Não alterado';
    }

} else {
    $_SESSION['flash'] = 'dados imcompletos';

}
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

header('Location:' . $base);
exit;