<?php
require 'dao/IconeDaoMysql.php';
require 'config.php';
session_start();
$flash = '';
if(!empty($_SESSION['flash'])){
    $flash = $_SESSION['flash'];
    $_SESSION['flash'] = '';
}

$iconeDao = new IconeDaoMysql($pdo);
$icones = $iconeDao->findAll();

?>
<?php require 'partials/header.php'; ?>
<main>
  <div class="container">
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
                      <div class="auto-complete" ></div>
                 </div>
             </div>
         </div>
         <div class="col-google-x">
           <div class="align-item-x">
              <div class="list-add">
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
          </div>
       </div>
       <?php require 'partials/modal-item-atalho.php'; ?>
      <?php require 'partials/flash.php';?>
      <?php require 'partials/modal-mic.php';?>
      <?php require 'partials/footer.php'; ?>