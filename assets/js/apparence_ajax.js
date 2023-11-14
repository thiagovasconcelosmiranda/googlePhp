if (document.querySelector('.border')) {
   const ip = document.querySelector('.body').getAttribute('data-ip');
   document.querySelector('.border').addEventListener('click', () => {
      let icon = document.getElementById('icon-feedback');
      $data = listApparence();
      if (icon.name == 'moon') {
         icon.name = 'sunny';
         url($data, 1);
      } else {
         icon.name = 'moon';
         url($data, 2);
      }
   });

   async function url(item, pos) {
      form = new FormData();
      form.append('body', item.body);
      form.append('ip', ip);
      form.append('ul', item.ul);
      form.append('input', item.input);
      form.append('button', item.button);
      form.append('letter', item.letter);
      form.append('footer', item.footer);
      form.append('pos', pos)

      const req = await fetch(`${base}/appearence_ip.php`, {
         method: 'post',
         body: form
      });

      const json = await req.json();

      if (json.error != '') {
         alert(json.error);
      }
      location.reload();
   }

   function listApparence() {
      const array = [
         {
            'body': 'rgb(39, 38, 38)',
            'ip': '12:0',
            'ul': 'rgb(39, 38, 38)',
            'input': 'rgb(39, 38, 38)',
            'button': '#222222',
            'letter': '#fff',
            'footer': 'rgb(34, 33, 33)'
         }
      ];
      return array[0];
   }

   getApparence();
   async function getApparence() {
      
      const req = await fetch(`${base}/apparence_very.php?ip=${ip}`, {
         method: 'GET'
      });

      const json = await req.json();
      if (json.error == '') {
         document.getElementById('icon-feedback').name="moon";
         document.querySelectorAll('.body').forEach(body => {
            body.style.backgroundColor = json['appearence'][0].body;
            body.querySelectorAll('.ul').forEach(ul => {
               ul.style.backgroundColor = json['appearence'][0].ul;
               ul.querySelectorAll('li a').forEach(a => {
                  a.style.color = json['appearence'][0].letter;
               });
            
               ul.querySelector('.option').style.backgroundColor = json['appearence'][0].letter;
            });
            body.querySelector('.input-search ').style.backgroundColor = json['appearence'][0].input;
            body.querySelector('.input-search ').style.color = json['appearence'][0].letter;
            body.querySelectorAll(".group-search-link .circle-link").forEach(button => {
               button.style.backgroundColor = json['appearence'][0].button;
               button.querySelector('a').style.color = json['appearence'][0].letter;
            });
            body.querySelectorAll('footer .footer-row').forEach(footer => {
               footer.style.backgroundColor=json['appearence'][0].footer;
               footer.querySelector('.language-i a').style.color = json['appearence'][0].letter;
               footer.querySelectorAll('.col-footer').forEach(col => {
                  col.querySelectorAll('a').forEach(a => {
                     a.style.color = json['appearence'][0].letter;
                  });
                  document.querySelectorAll('.settings').forEach(setting => {
                     setting.style.color = json['appearence'][0].letter;
                     setting.querySelector('.modal-settings').style.backgroundColor = json['appearence'][0].footer;
                  })
               });
            });

         });
      }
   }
}

