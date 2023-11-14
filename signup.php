<?php
require 'config.php';
$title = "Fazer login - Google";
?>
<?php require 'partials/header-login.php'; ?>
<form method="POST" action="<?= $base; ?>/signup_action.php" enctype="multipart/form-data">
    <div class="group-align" data-url="<?= $base; ?>">
        <div class="group-title">
            <img src="assets/images/pngwing.com.png" alt="logo google">
            <h2>Sign in</h2>
            <p>Use your Google Account</p>
        </div>
        <div class="group-i" id="name">
            <div class="containeri-x">
                <div class="fieldset-row-2">
                    <div class="align-i">
                        <fieldset id="error-0">
                            <legend>First name</legend>
                            <input id="0" type="text" name="firstname">
                        </fieldset>
                        <span id="msg-0">Obrigatório</span>
                    </div>
                    <div class="fieldset-row-2">
                        <div class="align-i">
                            <fieldset>
                                <legend>Last name (optional)</legend>
                                <input type="text" name="lastname">
                            </fieldset>
                        </div>
                    </div>
                    <div class="fieldset-row-2">
                        <div class="align-i">
                            <fieldset>
                                <legend>Surname (optional)</legend>
                                <input type="text" name="surname">
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="link"></div>
                <div class="group-row">
                    <div class="col-acess-2 align-i">
                        <button id="button-signup-name" type="button">Next</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="group-i" id="date">
            <div class="containeri-x">
                <div class="fieldset-row">
                    <div class="align-i">
                        <fieldset id="error-1">
                            <legend>Month</legend>
                            <select id="1" name="month">
                                <option value="">Month</option>
                                <option value="Janeiro">Janeiro</option>
                                <option value="Fevereiro">Fevereiro</option>
                                <option value="Março">Março</option>
                                <option value="Abril">Abril</option>
                                <option value="Maio">Maio</option>
                                <option value="Junho">Junho</option>
                                <option value="Julho">Julho</option>
                                <option value="Agosto">Agosto</option>
                                <option value="Setembro">Setembro</option>
                                <option value="Outubro">Outubro</option>
                                <option value="Nvembro">Novembro</option>
                                <option value="Dezembro">Dezembro</option>
                            </select>
                        </fieldset>
                        <span id="msg-1">Obrigatório</span>
                    </div>
                    <div class="align-i">
                        <fieldset id="error-2">
                            <legend>Day</legend>
                            <select type="text" id="2" name="day">
                                <option value="">Day</option>
                                <?php for ($i = 1; $i < 32; $i++): ?>
                                <option value="<?= $i; ?>">
                                    <?= $i; ?>
                                </option>
                                <?php endfor; ?>
                            </select>
                        </fieldset>
                        <span id="msg-2">Obrigatório</span>
                    </div>
                    <div class="align-i">
                        <fieldset id="error-3">
                            <legend>Year</legend>
                            <input class="input-Year" id="3" type="text" placeholder="Year" name="year" maxlength="4">
                        </fieldset>
                        <span id="msg-3">Obrigatório</span>
                    </div>
                </div>
                <div class="fieldset-row-2">
                    <div class="align-i">
                        <fieldset id="error-4">
                            <legend>Vazio</legend>
                            <select class="gender-select" id="4" name="gender">
                                <option value="">Gender</option>
                                <option value="Fermale">Fermale</option>
                                <option value="Male">Male</option>
                                <option value="Rater not say">Rater not say</option>
                                <option value="Custom">Custom</option>
                            </select>
                        </fieldset>
                        <span id="msg-4">Obrigatório</span>
                    </div>
                </div>
                <div class="link"></div>
                <div class="group-row m-x">
                    <div class="col-acess-2 ">
                        <a class="back">
                            <p>Back</p>
                        </a>
                    </div>
                    <div class="col-acess-2 align-i">
                        <button id="button-signup-date" type="button">Next</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="group-i" id="email">
            <div class="containeri-x">
                <div class="fieldset-row-2">
                    <div class="align-i">
                        <fieldset id="error-5">
                            <legend>Email Address</legend>
                            <input type="email" id="5" placeholder="Email Address" name="email">
                        </fieldset>
                        <span id="msg-5">Obrigatório</span>
                    </div>
                </div>
                <div class="fieldset-row-2">
                    <div class="align-i">
                        <fieldset id="error-5">
                            <legend>Phone (optional)</legend>
                            <input type="text" id="5" placeholder="Phone" name="phone">
                        </fieldset>
                        <span id="msg-5">Obrigatório</span>
                    </div>
                </div>
                <p class="confirm-email-text">You'll need to confirm that this email belongs to you</p>
                <div class="link"><a href="">Get a Gmail address</a></div>

                <div class="group-row">
                    <div class="col-acess-2">
                        <a class="back">
                            <p>Back</p>
                        </a>
                    </div>
                    <div class="col-acess-2 align-i">
                        <button id="button-signup-email" type="button">Next</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="group-i" id="password">
            <div class="containeri-x">
                <div class="fieldset-row-2">
                    <div class="align-i">
                        <fieldset id="error-6">
                            <legend>New password</legend>
                            <input type="password" id="6" placeholder="New password" name="password">
                        </fieldset>
                        <span id="msg-6">Obrigatório</span>
                    </div>
                </div>
                <div class="fieldset-row-2">
                    <div class="align-i">
                        <fieldset id="error-7">
                            <legend>Confirm password</legend>
                            <input type="password" id="7" placeholder="New password" name="confirm-password">
                        </fieldset>
                        <span id="msg-7">Obrigatório</span>
                    </div>
                </div>
                <p class="confirm-email-text">The password must contain at least 8 characters</p>
                <div class="link"></div>

                <div class="group-row">
                    <div class="col-acess-2">
                        <a class="back">
                            <p>Back</p>
                        </a>
                    </div>
                    <div class="col-acess-2 align-i">
                        <button id="button-signup-password" type="button">Next</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="group-i" id="upload">
            <div class="containeri-x">
                <div class="fieldset-row-2">
                    <div class="align-i">
                        <fieldset id="error-8">
                            <legend>Add image</legend>
                            <input type="file" id="8" name="avatar" style="display:none;" onchange="previewImage()">
                            <div class="upload-avatar">
                                <label for="8">
                                    <img id="preview" src="<?= $base; ?>/assets/images/login.png" alt="">
                                </label>
                            </div>
                        </fieldset>
                        <span id="msg-8">Obrigatório</span>
                    </div>
                </div>
                <p class="confirm-email-text">The password must contain at least 8 characters</p>
                <div class="link"></div>
                <div class="group-row">
                    <div class="col-acess-2">
                        <a class="back">
                            <p>Back</p>
                        </a>
                    </div>
                    <div class="col-acess-2 align-i">
                        <button id="button-signup-upload" type="button">Next</button>
                    </div>
                </div>
            </div>
        </div>
</form>
<?php require 'partials/footer-login.php'; ?>