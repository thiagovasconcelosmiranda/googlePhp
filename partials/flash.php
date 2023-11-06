
<?php 
$atalho = [];
if(!empty($_SESSION['atalho-item'])){
  $atalho = unserialize($_SESSION['atalho-item']);
  $_SESSION['atalho-item'] = '';
}
?>

<div class="flash" >
    <p class="text-msg"><?=$flash;?> </p>
    <p class="active-i" onclick="desfazer(
      '<?=(!empty($atalho)? $atalho->getId() : '');?>',
      '<?=(!empty($atalho)? $atalho->getName() : '');?>',
      '<?=(!empty($atalho)? $atalho->getUrl() : '');?>',
      '<?=(!empty($atalho)? $atalho->getLoginId() : '');?>'
    )">Desfazer</p>
    <p class="active-i" onclick="restaurarPadrao()">Restaurar atalhos padões</p>
</div>

