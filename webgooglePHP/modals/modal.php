<?php
  require "conexao.php";
class Atalho {
  private $conn;

  public function __construct(){
     $conexao = new Conexao();
     $this->conn = $conexao->conectar();
    
  }

  public function Add(){
       $name = "";
       $url = "";
       if(isset($_POST['name']) && isset($_POST['url'])){
           $name = $_POST['name'];
           $url = $_POST['url'];

           $sql = ('INSERT INTO atalho(name, url) VALUES (:name, :url)');
           $sql =  $this->conn->prepare($sql);
           $sql->bindValue(':name', $name);
           $sql->bindValue(':url', $url);
           if($sql->execute()){
               header('Location: http://localhost/webgoogle/ ');
            }else{
              echo " Não Adicionado!";
            }
          }else{
              header('Location: http://localhost/webgoogle/ ');
       }
   
    }

    public function getAtalho(){
       $sql = 'SELECT * FROM atalho';
       $sql = $this->conn->query($sql);

       if($sql->execute()){
         $query = $sql->fetchAll();
          return $query;
       }
    }

    public function getAtalhoId($id){
      $sql = 'SELECT * FROM atalho WHERE id=:id';
      $sql = $this->conn->prepare($sql);
      $sql->bindValue(':id', $id);
      if($sql->execute()){
        $query = $sql->fetchAll();
         return $query;
      }
    }
    public function excluir($id){
      $sql= 'DELETE FROM atalho WHERE id = :id';
      $sql = $this->conn->prepare($sql);
      $sql->bindValue(':id', $id);

      if($sql->execute()){
         return true;
      }else{
        return false;
      }
  }

  public function editar($id){
    $name = $_POST['name'];
    $url = $_POST['url'];
  
    $sql= 'UPDATE atalho  SET name = :name, url = :url WHERE id = :id';
    $sql = $this->conn->prepare($sql);
    $sql->bindValue(':id', $id);
    $sql->bindValue(':name', $name);
    $sql->bindValue(':url', $url);

    if($sql->execute()){
      header('Location: http://localhost/webgoogle/ ');
    }else{
      header('Location: http://localhost/webgoogle?error=true');
    }
    
}

}
?>