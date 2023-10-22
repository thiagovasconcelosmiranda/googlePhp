<?php
require_once 'models/Search.php';
require_once 'models/Icone.php';
class SearchDaoMysql implements SearchDao {
    private $pdo;

    public function __construct(PDO $driver){
      $this->pdo = $driver;
    }

    public function findName(Search $s){
        $list = [];
        $sql = $this->pdo->query("SELECT * FROM search WHERE name like '%".$s->getName()."%' ");
        
        if($sql->rowCount() > 0){
          $dado = $sql->fetchAll(PDO::FETCH_ASSOC);
         
        
         foreach($dado as $item){
            $search = new Search();
            $search->setId($item['id']);
            $search->setName($item['name']);
            $search->setUrl($item['url']);

            $list[] = $search;
         }

          
          return $list;
        }
  
        return false;

    }

}