<?php
$base = 'http://localhost/webgooglePHP';

try {
   $pdo = new PDO("mysql:host=localhost;dbname=google", 'root', '');
} catch (PDOException $pe) {
   die("Não foi possível se conectar ao banco de dados :" . $pe >getMessage());
}
?>