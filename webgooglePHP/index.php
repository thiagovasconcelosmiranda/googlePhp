<?php
require 'modals/modal.php';

 $atalho = new Atalho();
 $add = new Atalho();
 $getAtalhoId = new Atalho();
 $editar = new Atalho();


 $itens = $atalho->getAtalho();

 if(isset($_POST['Adicionar'])){
    $add->Add();
 }


 if(isset($_POST['Alterar'])){
    $editar->editar($_GET['id']);
  }
  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/chrome.png" type="image/png">
    <title>Nova guia</title>
    <link rel="stylesheet" href="css/styles.css">
    
      <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/underscore@1.13.6/underscore-umd-min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <ul>
        <div class="link">
            <li><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl">Gmail</a></li>
            <li><a href="https://www.google.com/imghp?hl=pt-BR&tab=ri&authuser=0&ogbl">Imagens</a></li>
            <div class="option">
              <div class="option-circle" id="option">
                <img src="images/icons8-menu-circulado-24.png" alt="menu"/>
              </div>
              <div class="option-legend">
                <p>Google Apps</p>
            </div>
            <div class="option-apps">
               <div class="option-itens">
                 <div class="icons">
                  <div class="item-text-icon">
                    <a href="">
                      <img src="images/perfil.png" alt="perfil" >
                      <p>Conta</p>
                    </a>
                  </div>
                  <div class="item-text-icon">
                    <img src="images/icons8-google-logo-48.png" alt="perfil" >
                    <p>Pesquisa</p>
                  </div>
                  <div class="item-text-icon">
                    <img src="images/icons8-gmail-48.png" alt="perfil">
                    <p>Gmail</p>
                  </div>
                 </div>
                 <div class="icons">
                  <div class="item-text-icon">
                    <img src="images/icons8-google-play-48.png" alt="perfil" >
                    <p>Play</p>
                  </div>
                  <div class="item-text-icon">
                    <img src="images/icons8-reproduzir-youtube-48.png" alt="perfil" >
                    <p>Youtube</p>
                  </div>
                    <div class="item-text-icon">
                        <img src="images/icons8-google-maps-48.png" alt="perfil" >
                        <p>Google Maps</p>
                    </div>
                 </div>
                 <div class="icons">
                  <div class="item-text-icon">
                    <img src="images/icons8-google-meet-48.png" alt="perfil" >
                    <p>Meet</p>
                  </div>
                  <div class="item-text-icon">
                    <img src="images/icons8-google-drive-48.png" alt="perfil" >
                    <p>Drive</p>
                  </div>
                  <div class="item-text-icon">
                    <img src="images/icons8-balão-de-fala-com-pontos-48.png" alt="perfil" >
                    <p>Chat</p>
                  </div>
                 </div>
                 <div class="icons">
                  <div class="item-text-icon">
                    <img src="images/icons8-contatos-50.png" alt="perfil" >
                    <p>Contatos</p>
                  </div>
                  <div class="item-text-icon">
                    <img src="images/icons8-google-photos-48.png" alt="perfil" >
                    <p>Foto</p>
                  </div>
                  <div class="item-text-icon">
                    <img src="images/icons8-google-tradutor-48.png" alt="perfil" >
                    <p>Tradutor</p>
                  </div>
                  
                 </div>
                 <div class="icons">
                  <div class="item-text-icon">
                    <img src="images/icons8-planejador-48.png" alt="perfil" >
                    <p>Agenda</p>
                  </div>
                  <div class="item-text-icon">
                    <img src="images/icons8-google-photos-48.png" alt="perfil" >
                    <p>Foto</p>
                  </div>
                  <div class="item-text-icon">
                    <img src="images/icons8-google-shopping-48.png" alt="perfil" >
                    <p>Shopping</p>
                  </div>
                </div>
               </div>
              </div>
            </div>
            <div class="auth-circle">
              <img src="images/perfil.png" alt="perfil">
              <div class="auth-legend">
                <p>Conta do google</p>
                <p class="user">Thiago univer</p>
                <p class="email">profissao33@gmail.com</p>
              </div>
            </div>
        </div>
    </ul>
    <div class="container">
      <div class="group-google">
        <div class="image-google-x">
          <img src="images/pngwing.com.png" alt="google-image"/>
        </div>
         <div class="group-input-align">
          <div class="input-google-x" >
              <input class="input-search" type="text" name="assunto" id="assunto" placeholder="Pesquise no Google ou pelo URL"/>
              <ion-icon name="search-outline"></ion-icon>
              
              <div id="autocomplete"></div>
             <div class="div-mic">
              <img class="mic" src="images/7123011_google_mic_icon.png" alt="microfone">
              <div class="legend_i-x">
                <p>Pesquise por voz</p>
              </div>
            <div class="div-image">
              <img class="image" src="images/google-lens_1.png" alt="image">
              <div class="legend_i-x-2">
                <p>Pesquisar por imagem</p>
              </div>
            </div>
         </div>
        </div>
       </div>
       <div class="col-google-x">
        <div class="align-item-x">
           <div class="list-add">
            <!--item com imagem-->
            <?php
            foreach ($itens as $item) {
              ?>
              <div class="item-add <?php echo $item['id'];?>">
                <img class="img-option" onclick="buttonOption(<?php echo $item['id']; ?>)" src="images/icons8-três-pontos-50.png"/>
               
                <div class="option-i" id="<?php echo $item['id'];?>"> 
                  <div class="i-atalho-text">
                    <a href="http://localhost/webgoogle?id=<?php echo $item['id'];?>"><p>Editar atalho</p></a>
                  </div>
                  <div class="i-atalho-text">
                    <a href="http://localhost/webgoogle/modals/excluir.php?id=<?php echo $item['id']; ?>"><p>Excluir atalho</p></a>
                  </div>
                </div>
                <div class="circle-add">
                  <a href="<?php echo  $item['url']; ?>"><img src="images/planeta-terra.png" alt="button-add"/></a>
                </div>
                <div class="item-text">
                  <p><?php echo  $item['name'];?></p>
                </div>

             </div>
            <?php
            }
            ?>
             <div class="item-add">
              <div class="circle-add" id="add">
                <a  href="http://localhost/webgoogle/?add=true"><img src="images/plus.png" alt="button-add"/></a>
              </div>
              <div class="item-text">
                <p>Adicionar atalho</p>
              </div>
              </div>
            </div>
        <div class="add_legend">
          <p>Adicionar atalho</p>
        </div>
        </div>
      </div>
      <div class="chrome" >
        <a href="">
          <p><img src="images/icons8-editar-24.png" height="15"/>Personalizar o Chrome</p>
        </a>
        <div class="edit-legend">
          <p>Personalizar está página</p>
        </div>
      </div>
     </div>
    <?php
    if(isset($_GET['id'])){
       $return = $getAtalhoId->getAtalhoId($_GET['id']);
       foreach($return as $ret){

       }
    ?>
     <div class="container-modal" id="modal">
      <div class="modal-add">
          <div class="text-i-x">
            <h3 id="title">Alterar Atalho</h3>
          </div>
          <form method="post">
            <div class="item-add-align">
              <div class="group-input-add">
                <label>Nome</label><br>
                <input class="input-modal" value="<?php echo $ret['name'];?>" type="text" name="name"/>
             </div>
              <div class="group-input-add">
                <label>URL</label><br>
                <input class="input-modal" value="<?php echo $ret['url'];?>" type="text" name="url"/>
              </div>
              <div class="add-button">
                <button  onclick="buttonOff()" style="color: blue;" type="button">Cancelar</button>
                <button id="button"  style="color: blue;" type="submit" name="Alterar">Alterar</button>
              </div>
            </div>
          </div>
          </form>
      </div>
    </div>
    <?php 
    }
     ?>
     <?php
    if(isset($_GET['add'])){
    ?>
     <div class="container-modal" id="modal">
      <div class="modal-add">
          <div class="text-i-x">
            <h3 id="title">Adicionar Atalho</h3>
          </div>
          <form method="post">
            <div class="item-add-align">
              <div class="group-input-add">
                <label>Nome</label><br>
                <input class="input-modal" id="adicionarName" type="text" name="name"/>
             </div>
              <div class="group-input-add">
                <label>URL</label><br>
                <input class="input-modal" id="adicionarUrl" type="text" name="url"/>
              </div>
              <div class="add-button">
                <button  onclick="buttonOff()" style="color: blue;" type="button">Cancelar</button>
                <button id="button" type="submit" name="Adicionar">Adicionar</button>
              </div>
            </div>
          </div>
          </form>
      </div>
    </div>
    <?php 
    }
     ?>

    
   
    <script>
      const option = document.querySelector('#option');
      const optionApps = document.querySelector('.option-apps');
      const container = document.querySelector('.container');

      container.addEventListener('click', () =>{
         optionApps.style.display='none';
      });
     
      option.addEventListener('click',()=>{
        if(optionApps.style.display ==="flex"){
          optionApps.style.display='none';
        }else{
          optionApps.style.display='flex';
        }
      });


      const add = document.querySelector('#add');
      function buttonOff(){
        document.querySelector('#modal').style.display="none";
        window.location.replace("http://localhost/webgoogle/");
      }

     function buttonOption(id){
        const AtalhoOption =  document.getElementById(`${id}`);
        if(AtalhoOption.style.display === "block"){
          AtalhoOption.style.display = 'none';
        }else{
          AtalhoOption.style.display = 'block';
        }
     }
     <?php
     if(isset($_GET['add'])){
     ?>
       let adicionarName = document.getElementById('adicionarName');
       let adicionarUrl= document.getElementById('adicionarUrl');
       var button =  document.getElementById("button");
       button.disabled=true;
    
       adicionarName.addEventListener('input', () =>{
         adicionarUrl.addEventListener('input', () =>{
          if(adicionarName.value.length > 0 && adicionarUrl.value.length > 0){
             button.disabled=false;
             button.style.color="blue";
          }else{  
             button.disabled=true;
             button.style.color=""; 
          }
          });
      });

      <?php
      }    

      ?>
  </script>
   <script src="js/searchs.js"></script>
 </body>
</html>
