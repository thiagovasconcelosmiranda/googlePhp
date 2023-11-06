
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=$base;?>/assets/images/chrome.png" type="image/png">
    <title>Nova guia</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/style.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/flash.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/mic.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/user.css">
      <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/underscore@1.13.6/underscore-umd-min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <ul class="ul" data-id="<?=$base;?>">
        <div class="link">
            <li><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl">Gmail</a></li>
            <li><a href="https://www.google.com/imghp?hl=pt-BR&tab=ri&authuser=0&ogbl">Imagens</a></li>
            <div class="option">
              <div class="option-circle" id="option">
                <img src="<?=$base;?>/assets/images/icons8-menu-circulado-24.png" alt="menu"/>
              </div>
              <div class="option-legend">
                <p>Google Apps</p>
            </div>
            <div class="option-apps">
               <div class="option-itens">
                 <div class="icons">
                  <div class="item-text-icon">
                     
                  <?php if(!empty($token)): ?>
                    <a>
                      <img src="<?=$base;?>/assets/images/perfil.png" alt="perfil" >
                      <p><?=$userInfo->getFirstname();?></p>
                    </a>
                    <?php else: ?>
                      <a>
                      <img src="<?=$base;?>/assets/images/login.png" alt="perfil" >
                      <p>Conta</p>
                    </a>
                    <?php endif; ?>

                  </div>
                  <div class="item-text-icon">
                    <img src="<?=$base;?>/assets/images/icons8-google-logo-48.png" alt="perfil" >
                    <p>Pesquisa</p>
                  </div>
                  <div class="item-text-icon">
                    <img src="<?=$base;?>/assets/images/icons8-gmail-48.png" alt="perfil">
                    <p>Gmail</p>
                  </div>
                 </div>
                 <div class="icons">
                  <div class="item-text-icon">
                    <img src="<?=$base;?>/assets/images/icons8-google-play-48.png" alt="perfil" >
                    <p>Play</p>
                  </div>
                  <div class="item-text-icon">
                    <img src="<?=$base;?>/assets/images/icons8-reproduzir-youtube-48.png" alt="perfil">
                    <p>Youtube</p>
                  </div>
                    <div class="item-text-icon">
                        <img src="<?=$base;?>/assets/images/icons8-google-maps-48.png" alt="perfil" >
                        <p>Google Maps</p>
                    </div>
                 </div>
                 <div class="icons">
                  <div class="item-text-icon">
                    <img src="<?=$base;?>/assets/images/icons8-google-meet-48.png" alt="perfil" >
                    <p>Meet</p>
                  </div>
                  <div class="item-text-icon">
                    <img src="<?=$base;?>/assets/images//icons8-google-drive-48.png" alt="perfil" >
                    <p>Drive</p>
                  </div>
                  <div class="item-text-icon">
                    <img src="<?=$base;?>/assets/images/icons8-balão-de-fala-com-pontos-48.png" alt="perfil" >
                    <p>Chat</p>
                  </div>
                 </div>
                 <div class="icons">
                  <div class="item-text-icon">
                    <img src="<?=$base;?>/assets/images/icons8-contatos-50.png" alt="perfil" >
                    <p>Contatos</p>
                  </div>
                  <div class="item-text-icon">
                    <img src="<?=$base;?>/assets/images/icons8-google-photos-48.png" alt="perfil" >
                    <p>Foto</p>
                  </div>
                  <div class="item-text-icon">
                    <img src="<?=$base;?>/assets/images/icons8-google-tradutor-48.png" alt="perfil" >
                    <p>Tradutor</p>
                  </div>
                  
                 </div>
                 <div class="icons">
                  <div class="item-text-icon">
                    <img src="<?=$base;?>/assets/images/icons8-planejador-48.png" alt="perfil" >
                    <p>Agenda</p>
                  </div>
                  <div class="item-text-icon">
                    <img src="<?=$base;?>/assets/images/icons8-google-photos-48.png" alt="perfil" >
                    <p>Foto</p>
                  </div>
                  <div class="item-text-icon">
                    <img src="<?=$base;?>/assets/images/icons8-google-shopping-48.png" alt="perfil" >
                    <p>Shopping</p>
                  </div>
                </div>
               </div>
              </div>
            </div>
            <?php if(!empty($_SESSION['token'])):?>
            <div class="auth-circle">
              <img id="userClick"  src="<?=$base;?>/assets/media/avatars/<?=$userInfo->getAvatar();?>" alt="perfil">
              <div class="auth-legend" >
                <p>Conta do google</p>
                <p class="user"><?=$userInfo->getSurname();?></p>
                <p class="email"><?=$userInfo->getEmail();?></p>
              </div>
              <?php require 'modal-user.php';?>
            </div>
            <?php else: ?>
               <div class="button-user-acess">
                  <a href="<?=$base;?>/signin.php">
                      <button>Sign in</button>
                   </a>
               </div>
              <?php endif; ?>
        </div>
    </ul>