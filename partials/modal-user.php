<div class="container-user" id="modelUser">
      <div class="info-close-x">
         <p class="email-user"><?= $userInfo->getEmail();?></p>
         <ion-icon  class="icone-close-user" name="close-outline"></ion-icon>
      </div>
      <div class="photo-user">
            <div class="circle-user">
                <img src="<?=$base;?>/assets/media/avatars/<?= $userInfo->getAvatar();?>">
            </div>
         </div>
         <div class="text-user">
            <h3>Olá, <?=$userInfo->getFirstname();?>!</h3>
         </div>
         <div class="button-i-user">
             <button class="button-user" >Gerenciar sua Conta do Google</button>
         </div>
         <div class="row-user-button">
             <div class="col-add-user">
             <a href="<?=$base;?>/signup.php">
               <div class="button-add"> 
                  <div class="circle-icon">
                    <ion-icon class="add-icon" name="add-outline"></ion-icon>
                  </div>
                  <p>Adicionar</p>
               </div>
             </div>
             </a>
             <div class="col-add-user">
             <a href="<?=$base;?>/logout.php">
                <div class="button-out">
                  <div class="circle-icon">
                    <ion-icon class="out-icon" name="log-out-outline"></ion-icon>
                  </div>
                     <p>Sair</p>
                  </div>
             </div>
            
         </div>
         </a> 
         <div class="policy-user">
            <p>Pólitica de Privacidade    .    Termos</p>
         </div>
</div>