<div class="container-modal-update" id="modal">
           <div class="modal-add">
              <div class="text-i-x">
                  <h3 id="title">Alterar Atalho</h3>
              </div>
              <form method="POST" action="<?=$base;?>/editar_action.php">
                 <div class="item-add-align">
                    <input class="input-id" type="hidden" value="" name="id"/>
                 <div class="group-input-add">
                    <label>Nome</label><br>
                    <input class="input-modal input-name" type="text" name="name"/>
                 </div>
                 <div class="group-input-add">
                   <label>URL</label><br>
                   <input class="input-modal input-url"  type="text" name="url"/>
                </div>
                <div class="add-button">
                   <button class="cancel-i" style="color: blue;" type="button">Cancelar</button>
                   <button id="button"  style="color: blue;" type="submit" name="Alterar">Alterar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="container-modal-add" id="modal">
         <div class="modal-add">
            <div class="text-i-x">
              <h3 id="title">Adicionar Atalho</h3>
            </div>
            <form method="post" action="<?=$base;?>/adicionar_active.php">
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
                <button  style="color: blue;" type="button">Cancelar</button>
                <button id="buttonAdicionar" type="submit" name="Adicionar">Adicionar</button>
              </div>
            </div>
          </div>
        </form>
      </div>
     </div>