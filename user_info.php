<?php
require_once 'config.php';
require_once 'dao/IconeDaoMysql.php';
require_once 'dao/UserDaoMysql.php';
session_start();

$token = '';
if (!empty($_SESSION['token'])) {
  $token = $_SESSION['token'];
}