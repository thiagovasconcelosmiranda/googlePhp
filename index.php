<?php
require_once 'config.php';
require_once 'dao/IconeDaoMysql.php';
require_once 'dao/UserDaoMysql.php';
session_start();

$token = '';
if(!empty($_SESSION['token'])){
  $token = $_SESSION['token'];

  $user = new UserDaoMysql($pdo);
  $userInfo = $user->findByToken($token);
  
  $iconeDao = new IconeDaoMysql($pdo);
  $icones = $iconeDao->findAll($userInfo->getId());
}

$flash = '';
if(!empty($_SESSION['flash'])){
    $flash = $_SESSION['flash'];
    $_SESSION['flash'] = '';
}
?>
<?php require 'partials/header.php'; ?>
<main>
  <div class="container"  data-login-id='<?=$token != '' ? $userInfo->getId():'';?>'>
      <div class="group-google">
        <div class="image-google-x">
          <img src="<?=$base;?>/assets/images/pngwing.com.png" alt="google-image"/>
         </div>
         <div class="group-input-align">
             <div class="input-google-x">
                <div class="legend_i-x-voz">
                  <p>Pesquise por voz</p>
                </div>
                 <div class="legend_i-x-image">
                    <p>Pesquise por imagem</p>
                 </div>
                 <div class="container-input">
                     <div class="input-align">
                         <img class="lupa" src="<?=$base;?>/assets/images/lupa.png" alt="lupa">
                         <input class="input-search icone" type="text" name="search" placeholder="Pesquise no Google ou pelo URL"/>
                         <img class="mic" src="<?=$base;?>/assets/images/mic.png" alt="mic">
                         <img class="image" src="<?=$base;?>/assets/images/image.png" alt="image">
                      </div>
                      <div class="upload-image-group">
                          <div class="title-image">
                            <h3>Pesquisa Qualquer imagem com o google Lens</h3>
                            <div class="icone-close-i">
                               <ion-icon style="cursor: pointer;"  class="icone-close-image" name="close-outline"></ion-icon>
                            </div>
                          </div>
                          <div class="upload-image-i">
                            <div class="group-image-align">
                               <img src="<?=$base;?>/assets/images/icons8-imagem-48.png" alt="Image">
                               <div class="icone-image-title">
                                  <h3>Arraste uma imagem aqui ou</h3>
                                  <a href=""><p>faça upload de um arquivo</p></a>
                               </div>
                            </div>
                            <div class="division_page">
                              <div class="linha"></div>
                              <p> OU</p>
                              <div class="linha"></div>
                            </div>
                            <div class="upload-input-group">
                                 <input type="text" name="link" placeholder="Cole e copie uma imagem">
                                 <button type="button">Pesquisar</button>
                            </div>
                          </div>
                      </div>
                      <div class="auto-complete" ></div>
                 </div>
             </div>
         </div>
         <div class="col-google-x">
           <div class="align-item-x">
             <div class="list-add">
               <?php if(!empty($token)):?>
                 <?php if(!empty($icones)):
                       foreach ($icones as $item):?>
                         <div class="item-add <?php echo $item->getId();?>" title="<?=$item->getName();?>">
                            <div class="option-img">
                               <img class="img-option"  src="<?=$base;?>/assets/images/icons8-três-pontos-50.png"/>
                               <div class="option-i"> 
                                  <div class="i-atalho-text">
                                      <a onclick="buttonUpdate(<?=$item->getId();?>)"><p>Editar atalho</p></a>
                                    </div>
                                    <div class="i-atalho-text">
                                      <a href="<?=$base;?>/excluir_active.php?id=<?=$item->getId();?>"><p>Remover</p></a>
                                   </div>
                               </div>
                           </div>
                           <div class="circle-add">
                               <a href="<?=$item->getUrl(); ?>"><img src="https://t0.gstatic.com/faviconV2?client=SOCIAL&type=FAVICON&fallback_opts=TYPE,SIZE,URL&url=<?=$item->getUrl();?>/&size=16" alt="<?=$item->getName?>"/></a>
                           </div>
                           <div class="item-text">
                               <p><?=$item->getName();?></p>
                           </div>
                         </div>
                       <?php endforeach;?>
                  <?php endif;?>
                  <div class="item-add">
                      <div class="circle-add" id="add">
                        <a class="icone-i"><img src="<?=$base;?>/assets/images/plus.png" alt="button-add"/></a>
                      </div>
                      <div class="item-text" id="item-add-text">
                        <p>Adicionar atalho</p>
                      </div>
                   </div>
                 </div>
                 <div class="add_legend">
                   <p>Adicionar atalho</p>
                </div>
              </div>
               <?php else:?>
                <div class="group-search-link">
                    <div class="circle-link">
                       <a href="">Google Search</a>
                    </div>
                    <div class="circle-link">
                       <a href="">I'm Feeling Lucky</a>
                    </div>
                </div>
                <div class="affered-i">
                  <p>Google affered in: <a href="">Portuguès (Brasil)</a></p> 
               </div>
               <?php endif; ?>
           </div>
       </div>
      <?php require 'partials/modal-item-atalho.php'; ?>
      <?php require 'partials/flash.php';?>
      <?php require 'partials/modal-mic.php';?>
      <?php require 'partials/footer.php'; ?>
     
      