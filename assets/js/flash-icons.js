
const loginId = document.querySelector('.container').getAttribute('data-login-id');
if (document.querySelector('.flash') && document.querySelector('.text-msg')) {
   const msg = document.querySelector('.flash');
   if (document.querySelector('.text-msg').innerText.length > 2) {
      msg.style.display = "flex";
      setTimeout(() => {
         msg.style.display = "none";
      }, 5000);
   } else {

   }
}

async function desfazer(id, name, url, loginId) {
   if (id && name && url, loginId) {
      loginI = loginId;
      const data = new FormData();
      data.append('id', id);
      data.append('name', name);
      data.append('url', url);
      data.append('login_id', loginId);

      const req = await fetch(`${base}/adicionar_active.php`, {
         method: 'POST',
         body: data
      })

      const json = await req.json();
      if (json) {
         location.reload();
      }
   }
}

async function restaurarPadrao() {
   let array = [
      {
         'id': 1,
         'name': 'Linkedin',
         'url': 'https://linkedin.com/in/',
         'login_id': loginId
      },

      {
         'id': 2,
         'name': 'Facebook',
         'url': 'https://m.facebook.com/',
         'login_id': loginId
      },

      {
         'id': 3,
         'name': 'terra',
         'url': 'https://terra.com.br',
         'login_id': loginId
      },

      {
         'id': 4,
         'name': 'Instagram',
         'url': 'https://www.instagram.com/',
         'login_id': loginId
      },

      {
         'id': 5,
         'name': 'Uol',
         'url': 'https://noticias.uol.com.br/',
         'login_id': loginId
      },

      {
         'id': 6,
         'name': 'Workana',
         'url': 'https://workana.com/',
         'login_id': loginId
      },

      {
         'id': 7,
         'name': 'Pat',
         'url': 'https://patdemariliasp.blogspot.com/',
         'login_id': loginId
      },

      {
         'id': 8,
         'name': '99Freelas',
         'url': 'https://www.99freelas.com.br/',
         'login_id': loginId
      },
      {
         'id': 8,
         'name': 'Daem',
         'url': 'https://www.daem.com.br/',
         'login_id': loginId
      }
   ];
   
   const req = await fetch(`${base}/delete_all.php`, {
      method: 'GET'
   });

   const json = await req.json();

   if (json.error != '') {
      array.forEach(item => {
         desfazer(item.id, item.name, item.url, loginId);
      });
      location.reload();
   }

}
