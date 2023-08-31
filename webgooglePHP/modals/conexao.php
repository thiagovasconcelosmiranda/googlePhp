<?php
  class Conexao {
    public $conn;
      public function conectar(){
        try {
            $conn = new PDO("mysql:host=localhost;dbname=google", 'root', '');
             return $this->conn = $conn;
        } catch (PDOException $pe) {
            die("Não foi possível se conectar ao banco de dados :" . $pe >getMessage());
        }
           
      }
}

?>