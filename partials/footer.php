<?php if (!empty($token)): ?>
<div class="chrome">
    <a href="">
        <p><img src="<?= $base; ?>/assets/images/icons8-editar-24.png" height="15" />Personalizar o Chrome</p>
    </a>
    <div class="edit-legend">
        <p>Personalizar está página</p>
    </div>
</div>
<?php endif; ?>
</main>
<?php if (empty($token)):?>
<footer>
    <div class="footer-row" >
        <div class="language-i">
            <a href="">Brazil</a>
        </div>
        <div class="row-i-x">
            <div class="col-footer">
                <a
                    href="https://about.google/?utm_source=google-BR&utm_medium=referral&utm_campaign=hp-footer&fg=1">About</a>
                <a
                    href="https://ads.google.com/intl/en_br/home/?subid=ww-ww-et-g-awa-a-g_hpafoot1_1!o2&utm_source=google.com&utm_medium=referral&utm_campaign=google_hpafooter&fg=1">Advertising</a>
                <a
                    href="https://smallbusiness.withgoogle.com/intl/pt-BR_br/?subid=ww-ww-et-g-awa-a-g_hpbfoot1_1!o2&utm_source=google&utm_medium=ep&utm_campaign=google_hpbfooter&utm_content=google_hpbfooter&gmbsrc=ww-ww-et-gs-z-gmb-s-z-u~sb-g4sb_srvcs-u&c=BR#!/">How
                    Search works</a>
            </div>

            <div class="col-footer align-col-footer">
                <a href="https://policies.google.com/privacy?hl=en-BR&fg=1">Privaty</a>
                <a href="https://policies.google.com/terms?hl=en-BR&fg=1">Terms</a>
                <div class="settings">
                    <p>Settings</p>
                    <div class="modal-settings">
                        <p>Search settings</p>
                        <p>Advanced search</p>
                        <p>Your data in Search</p>
                        <p>Search help</p>
                        <p>Search help</p>
                        <div class="border">
                            <p>Send feedback</p>
                            <ion-icon id="icon-feedback" name="sunny"></ion-icon>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<?php endif; ?>
<script src="<?= $base; ?>/assets/js/flash-icons.js"></script>
<script src="<?= $base; ?>/assets/js/icons_ajax.js"></script>
<script src="<?= $base; ?>/assets/js/search_ajax.js"></script>
<script src="<?= $base; ?>/assets/js/modal-mic.js"></script>
<script src="<?= $base; ?>/assets/js/modals-user.js"></script>
<script src="<?= $base; ?>/assets/js/modal-app.js"></script>
<script src="<?= $base; ?>/assets/js/upload-images.js"></script>
<script src="<?= $base; ?>/assets/js/link-footer.js"></script>
<script src="<?= $base; ?>/assets/js/apparence_ajax.js"></script>
</body>
</html>