<?php
require 'config.php';
$title="Fazer Conta nas Contas Google";
?>
<?php require 'partials/header-login.php';?>
<?php require 'partials/header-login.php';?>
<form method="POST" action="<?=$base;?>/signin_action.php">
    <div class="group-align">
        <div class="group-title">
            <img src="assets/images/pngwing.com.png" alt="logo google">
            <h2>Find your email</h2>
            <p>Enter your recovery phone number or email</p>
        </div>
        <div class="group-i"  style="display: none;">
            <div class="containeri-x">
                <div class="fieldset-row-2">
                    <div class="align-i">
                        <fieldset >
                            <legend>Email or phone</legend>
                            <input type="email"  name="email">
                        </fieldset>
                        <span >Obrigatório</span>
                    </div>
                </div>
                <div class="link"></div>
                <div class="access-i"></div>
                <div class="group-row">
                    <div class="col-acess-2"></div>
                    <div class="col-acess-2 align-i">
                        <button  type="button">Next</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="group-i" >
            <div class="containeri-x">
                <div class="fieldset-row-2">
                    <div class="align-i">
                        <fieldset >
                            <legend>First name</legend>
                            <input type="email"  name="first-name-user">
                        </fieldset>
                        <span >Obrigatório</span>
                    </div>
                </div>

                <div class="fieldset-row-2">
                    <div class="align-i">
                        <fieldset >
                            <legend>last name</legend>
                            <input type="text" name="last-name-user">
                        </fieldset>
                        <span>Obrigatório</span>
                    </div>
                </div>
                <div class="link"></div>
                <div class="access-i"></div>
                <div class="group-row">
                    <div class="col-acess-2"></div>
                    <div class="col-acess-2 align-i">
                        <button type="button">Next</button>
                    </div>
                </div>
            </div>
        </div>
</form>
<?php require 'partials/footer-login.php';?>