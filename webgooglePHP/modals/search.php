<?php
require 'conexao.php';

$conexao = new Conexao();
$conn = $conexao->conectar();
$assunto = filter_input(INPUT_GET,'book', FILTER_SANITIZE_STRING);
 $resultado_msg_cont = "SELECT * FROM search WHERE name LIKE '%".$assunto."%' LIMIT 4";
 $resultado_msg_cont = $conn->prepare($resultado_msg_cont);
 $resultado_msg_cont->execute();
 $data = $resultado_msg_cont->fetchAll();    

 
 echo json_encode($data);
 
 

?>