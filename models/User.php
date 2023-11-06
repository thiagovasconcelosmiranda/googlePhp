<?php

class User {
   private $id;
   private $firstname;
   private $lastname;
   private $surname;
   private $birthdate;
   private $gender;
   private $email;
   private $phone;
   private $password;
   private $avatar;
   private $token;

   public function getId(){
      return $this->id;
   }

   public function setId($id){
     $this->id = $id;
   }

   public function getFirstname(){
      return $this->firstname;
   }

   public function setFirstname($firstname){
     $this->firstname = $firstname;
   }

   public function getLastname(){
      return $this->lastname;
   }

   public function setLastname($lastname){
     $this->lastname = $lastname;
   }
//
   public function getSurname(){
      return $this->surname;
   }

   public function setSurname($surname){
     $this->surname = $surname;
   }

   public function getBirthdate(){
      return $this->birthdate;
   }

   public function setBirthdate($birthdate){
     $this->birthdate= $birthdate;
   }

   public function getGender(){
      return $this->gender;
   }

   public function setGender($gender){
     $this->gender= $gender;
   }

   public function getEmail(){
    return $this->email;
   }

   public function setEmail($email){
     $this->email = $email;
   }

   public function getPhone(){
      return $this->phone;
   }
  
   public function setPhone($phone){
       $this->phone = $phone;
   }

   public function getPassword(){
        return $this->password;
   }
  
   public function setPassword($password){
       $this->password = $password;
   }

   public function getToken(){
        return $this->token;
   }
  
   public function setToken($token){
       $this->token = $token;
   }

   public function getAvatar(){
      return $this->avatar;
   }

    public function setAvatar($avatar){
     $this->avatar = $avatar;
   }
}

interface UserDao{
   public function findByToken($token);
   public function findByEmail($email);
   public function update(User $u);
}