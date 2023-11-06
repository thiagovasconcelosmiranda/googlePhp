<?php
require 'config.php';
$title="signin";
?>
    <?php require 'partials/header-login.php';?>
                <form method="POST" action="<?=$base;?>/signin_action.php">
                   <div class="group-align">
                       <div class="group-title">
                          <img src="assets/images/pngwing.com.png" alt="logo google">
                          <h2>Sign in</h2>
                          <p>Use your Google Account</p>
                        </div>
                         <div class="group-i" id="group-signin-email" >
                            <div class="containeri-x">
                              <div class="fieldset-row-2">
                                  <div class="align-i">
                                   <fieldset id="error-9">
                                      <legend>Email or phone</legend>
                                      <input type="text" id="9" name="user-email">
                                   </fieldset>
                                   <span id="msg-9">Obrigatório</span>
                                 </div>
                                </div>
                                <div class="link">
                                  <a href="<?=$base;?>/">Forgot Email?</a>
                                </div>
                                <div class="access-i">
                                    <p>Not your computer? Use Guest mode to sign in privately.
                                    <a href="<?=$base;?>/">Learn more</a></p>
                                </div>
                                <div class="group-row">
                                    <div class="col-acess-2">
                                       <a href="<?=$base;?>/signup.php">Create account</a>
                                    </div>
                                    <div class="col-acess-2 align-i">
                                       <button id="button-signin-email" type="button">Next</button>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="group-i" id="group-signin-password">
                            <div class="containeri-x">
                               <div class="fieldset-row-2">
                                  <div class="align-i">
                                     <fieldset id="error-10">
                                       <legend>Your password</legend>
                                      <input type="password" id="10" placeholder="Enter Your Password" name="user-password">
                                     </fieldset>
                                     <span id="msg-10">Obrigatório</span>
                                   </div>
                                </div>
                                <div class="link">
                                 <input type="checkbox" id="show">
                                 <label>Show password</label>
                                </div>
                                <div class="group-row  m-x">
                                    <div class="col-acess-2">
                                       <a href="<?=$base;?>/">Forgout password</a>
                                    </div>
                                    <div class="col-acess-2 align-i">
                                       <button id="button-signin-password" type="button">Next</button>
                                    </div>
                                </div>
                            </div>
                         </div>
                   </form>
                 </div>
             </div>
       <?php require 'partials/footer-login.php';?>