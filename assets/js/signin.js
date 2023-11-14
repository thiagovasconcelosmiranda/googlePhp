if (document.querySelectorAll('.gorup-i') && document.getElementById('button-signin-email')) {
  document.getElementById('button-signin-email').addEventListener('click', verifyInputSigninEmail);
  document.getElementById('button-signin-password').addEventListener('click', verifyInputSigninPassword);

  function verifyInputSigninEmail() {
    let count = 0;
    let inputError = document.getElementById('error-9');
    let msgError = document.getElementById('msg-9');
    document.querySelectorAll('.group-i input').forEach(item => {
      if (item.name == 'user-email') {
        if (!item.value) {
          inputError.classList.add('alert-error-fieldeset');
          msgError.style.display = "flex";
        } else {
          inputError.classList.remove('alert-error-fieldeset');
          msgError.style.display = "none";
          count++;
        }
      }
    });
    if (count > 0) {
      document.getElementById('group-signin-email').style.display = "none";
      document.getElementById('group-signin-password').style.display = "flex";
    }
  }

  function verifyInputSigninPassword() {
    let count = 0;
    let inputError = document.getElementById('error-10');
    let msgError = document.getElementById('msg-10')
    document.querySelectorAll('.group-i input').forEach(item => {
      if (item.type == 'checkbox') {
      }
      if (item.name == 'user-password') {
        if (!item.value) {
          inputError.classList.add('alert-error-fieldeset');
          msgError.style.display = "flex";
        } else {
          inputError.classList.remove('alert-error-fieldeset');
          msgError.style.display = "none";
          count++;
        }
      }
    });
    if (count > 0) {
      document.getElementById('button-signin-password').type = "submit";
    }
  }

  document.getElementById('show').addEventListener('click', () => {
    let check = document.getElementById('10');
    document.querySelectorAll('.group-i input').forEach(item => {
      if (item.type == 'checkbox') {
        if (item.checked) {
          check.type = 'text';
        } else {
          check.type = 'password';
        }
      }

    })
  });
  document.querySelectorAll('.group-i fieldset').forEach(item => {
    item.addEventListener('click', () => {
      styleFieldset(item);
    });
  });

  function styleFieldset(clickFieldset) {
    document.querySelectorAll('.align-i').forEach(item => {
      if (item.querySelector('fieldset')) {
        item.querySelector('fieldset').classList.remove('fieldset-border');
        item.querySelector('legend').style.color = "";

      }
    });
    clickFieldset.classList.add('fieldset-border');
    clickFieldset.querySelector('legend').style.color = "blue";
    setTimeout(() => {
      document.addEventListener('click', removeBorderfieldset);
    }, 800);
  }

  function removeBorderfieldset() {
    document.querySelectorAll('.align-i fieldset').forEach(item => {
      item.classList.remove('fieldset-border');
      item.querySelector('legend').style.color = ""
    });
    document.removeEventListener('click', removeBorderfieldset);
  }
}