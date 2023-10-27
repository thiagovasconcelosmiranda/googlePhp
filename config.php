<?php
$base = 'https://a953-2804-1254-8035-7e00-2906-bd8d-bc99-7b18.ngrok-free.app/webgooglePHP';

try {
   $pdo = new PDO("mysql:host=localhost;dbname=google", 'root', '');
} catch (PDOException $pe) {
   die("Não foi possível se conectar ao banco de dados :" . $pe >getMessage());
}
?>