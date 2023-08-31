<?php
require 'modal.php';
$excluir = new Atalho();


if($_GET['id']){
   if(is_numeric($_GET['id'])){
      if( $excluir->excluir($_GET['id'])){
         header('Location: http://localhost/webgoogle/ ');
        }
   } 
}