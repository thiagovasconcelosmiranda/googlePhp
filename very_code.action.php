<?php
require_once 'config.php';
require_once 'dao/UserDaoMysql.php';
session_start();

$token = filter_input(INPUT_POST, 'user-token');

if ($token) {
    $userDao = new UserDaoMysql($pdo);
    $userToken = $userDao->findByToken($token);
    if ($userToken) {
        $_SESSION['token'] = $userToken->getToken();
    } else {
        $_SESSION['flash'] = 'Código invalido';
    }
}

header('Location: '.$base);
exit;