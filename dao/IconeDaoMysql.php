<?php
require_once 'models/Icone.php';

class IconeDaoMysql implements IconeDao {
    private $pdo;

    public function __construct(PDO $driver){
      $this->pdo = $driver;
    }

    public function findAll(){
      $list = [];
      $sql = $this->pdo->query('SELECT * FROM atalho');
      
      if($sql->rowCount() > 0){
        $dado = $sql->fetchAll();

       foreach($dado as $item){  
        $icone = new Icone();
        $icone->setId($item['id']);
        $icone->setName($item['name']);
        $icone->setUrl($item['url']);
        $list[] = $icone;
       }
       return $list;
      }

      return false;
    }


    public function findId($id){
      $sql = $this->pdo->prepare('SELECT * FROM atalho WHERE id = :id');
      $sql->bindValue(':id', $id);
      $sql->execute();

      if($sql->rowCount() > 0){
         $dado = $sql->fetch(PDO::FETCH_ASSOC);
         $icone = new Icone();
         $icone->setId($dado['id']);
         $icone->setName($dado['name']);
         $icone->setUrl($dado['url']);

         return $icone;
      }

      return false;
    }
    public function insert(Icone $i){
        $sql= $this->pdo->prepare('INSERT INTO atalho (name, url) VALUES (:name, :url)');
        $sql->bindValue(':name', $i->getName());
        $sql->bindValue(':url', $i->getUrl());
        $sql->execute();
        return true;
    }

    public function update(Icone $i){
       $sql = $this->pdo->prepare('UPDATE atalho SET name = :name, url = :url  WHERE id = :id');
       $sql->bindValue(':id', $i->getId());
       $sql->bindValue(':name', $i->getName());
       $sql->bindValue(':url', $i->getUrl());
       $sql->execute();

       if($sql){
        return true;
       }
       return false;
     
    }

    public function delete($id){
      $sql = $this->pdo->prepare('DELETE FROM atalho WHERE id = :id');
      $sql->bindValue(':id', $id);
      $sql->execute();
      
      return true;
    }

    public function deleteAll(){
      $sql = $this->pdo->prepare('DELETE FROM atalho');
      $sql->execute();

      return true;
    }
}