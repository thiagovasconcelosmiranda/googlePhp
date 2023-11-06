<?php
require_once 'config.php';
//require_once 'dao/UserDaoMysql.php';
require_once 'models/Auth.php';

//$userDao = new UserDaoMysql($pdo);
$auth = new Auth($pdo, $base);


$email = filter_input(INPUT_POST, 'user-email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'user-password');

if($email && $password){
     $validateAuth = $auth->validateLogin($email, $password);
    
     if($validateAuth){
      $_SESSION['flash'] = 'Welcome';
     }else{
        $_SESSION['flash'] = 'Invalid auth';
        
     }
}

header('Location: '.$base);
exit;



