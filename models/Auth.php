<?php
require 'dao/UserDaoMysql.php';
session_start();

class Auth {
    private $pdo;
    private $base;
    private $dao;

    public function __construct(PDO $driver, $base){
      $this->pdo = $driver;
      $this->base = $base;
      $this->dao = new UserDaoMysql($driver);
    }

    public function checkToken(){
        if(!empty($_SESSION['token'])){
            $token = $_SESSION['token'];

            $user = $this->dao->findByName($token);
            if($user){
             return $user;
            }
            header("Location:".$this->base);
            exit;
        }
    }

    public function validateLogin($email, $password){
       $user = $this->dao->findByEmail($email);
       if($user){
          if(password_verify($password, $user->getPassword())){
              $token = md5(time().round(0,9999));
              $_SESSION['token'] = $token;
              $user->setToken($token);
              $this->dao->update($user);
              return true;
          }
       }
       return false;
    }

    public function registerUser($firstname, $lastname, $surname, $phone, $birthdate, $gender, $password, $email , $avatar){
       $hash = password_hash($password, PASSWORD_DEFAULT);
       $token = md5(time().rand(0,9999));
       
       $u = new User();
       $u->setFirstname($firstname);
       $u->setLastname($lastname);
       $u->setSurname($surname);
       $u->setPhone($phone);
       $u->setBirthdate($birthdate);
       $u->setGender($gender);
       $u->setPassword($hash);
       $u->setEmail($email);
       $u->setToken($token);
       $u->setAvatar($avatar);

       $this->dao->insert($u);
       $_SESSION['token'] = $token;
    }


}