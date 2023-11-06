<?php
require_once 'config.php';
require_once 'models/User.php';

class UserDaoMysql implements UserDao{
    private $pdo;

    public function __construct(PDO $driver){
      $this->pdo = $driver;
    }

    public function generateUser($array){
      $newUser = new User();
      $newUser->setId($array['id']) ?? 0;
      $newUser->setFirstname($array['firstname'])?? 0;
      $newUser->setLastname($array['lastname']) ?? 0;
      $newUser->setSurname($array['surname']) ?? 0;
      $newUser->setEmail($array['email']) ?? 0;
      $newUser->setPassword($array['password']) ?? 0;
      $newUser->setAvatar($array['avatar']) ?? 0;
      $newUser->SetToken($array['token']) ?? 0;
      return $newUser;
    }


    public function findByToken($token){
      if(!empty($token)){
          $sql = $this->pdo->prepare("SELECT * FROM logins WHERE token = :token");
          $sql->bindValue(':token', $token);
          $sql->execute();
          
          if($sql->rowCount()){
             $dado = $sql->fetch(PDO::FETCH_ASSOC);
             $user = $this->generateUser($dado);
             return $user;
          }
          return false;
      }
    }

    public function findByEmail($email){
       $sql = $this->pdo->prepare("SELECT * FROM logins WHERE email = :email");
       $sql->bindValue(':email', $email);
       $sql->execute();
       if($sql->rowCount() > 0){
        $dados = $sql->fetch(PDO::FETCH_ASSOC);
        $user = $this->generateUser($dados);
        return $user;
     }

     return false;
    }

    public function update(User $u){
       $sql = $this->pdo->prepare("UPDATE logins
        set
          firstname = :firstname,
          lastname = :lastname,
          surname = :surname,
          email = :email,
          phone = :phone,
          password = :password,
          avatar = :avatar,
          token = :token
         WHERE 
          id = :id
      ");
        $sql->bindValue(':firstname', $u->getFirstname());
        $sql->bindValue(':lastname', $u->getLastname());
        $sql->bindValue(':surname', $u->getSurname());
        $sql->bindValue(':email', $u->getEmail());
        $sql->bindValue(':phone', $u->getPhone());
        $sql->bindValue(':password', $u->getPassword());
        $sql->bindValue(':avatar', $u->getAvatar());
        $sql->bindValue(':token', $u->getToken());
        $sql->bindValue(':id', $u->getId());
        $sql->execute();
        
        if($sql->rowCount() > 0){
            $dado = $sql->fetch(PDO::FETCH_ASSOC);
            return $dado;
        }
        return false;
      
    }

    public function insert(User $u){
        $sql = $this->pdo->prepare('INSERT INTO logins
          (
            firstname, lastname, birthdate, gender, phone, surname, email,  password, avatar, token, created_at
          ) VALUES (
            :firstname, :lastname, :birthdate, :gender, :phone, :surname, :email,  :password, :avatar, :token, :created_at
          )');

        $sql->bindValue(':firstname', $u->getFirstname());
        $sql->bindValue(':lastname', $u->getLastname());
        $sql->bindValue(':birthdate', $u->getBirthdate());
        $sql->bindValue(':gender', $u->getGender());
        $sql->bindValue(':surname', $u->getSurname());
        $sql->bindValue(':email', $u->getEmail());
        $sql->bindValue(':phone', $u->getPhone());
        $sql->bindValue(':password', $u->getPassword());
        $sql->bindValue(':avatar', $u->getAvatar());
        $sql->bindValue(':token', $u->getToken());
        $sql->bindValue(':created_at', date('Y/m/d h:m:s'));
        $sql->execute();
        return true;
      
    }

}