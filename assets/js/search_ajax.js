const search = document.querySelector('.input-search');
const containerInput = document.querySelector('.container-input');
const autocomplete = document.querySelector('.auto-complete');

document.querySelectorAll('.input-align input').forEach(item => {
   item.addEventListener('input', () => {
      urlAutocomplate(item.value);
   });
});
let imgIcone = document.querySelector('.lupa')
async function urlAutocomplate(name) {
   if (name.length > 1) {
      imgIcone.src = `${base}/assets/images/icons8-atualizar-50.png`;

      let req = await fetch(`${base}/search_name.php?search=${name}`, {
         method: 'GET'
      });

      const json = await req.json();

      if (json.length > 0) {
         openStyle();
         var ul = '<ul>';
         ul += `<li class="li-text"> <ion-icon name="search-outline"></ion-icon> ${name}  -  <strong> Pesquisa do Google </strong></li>`
         ul += json.map(item => {
            return `<li> <ion-icon name="refresh-outline"></ion-icon> <img src=""/> <a href="${item.url}">${item.name}</strong></a></li>`
         });

         ul += '</ul>';
         autocomplete.innerHTML = ul;

         setTimeout(() => {
            document.addEventListener('click', () => {
               autocomplete.innerHTML = "";
               closeStyle();
            });
         }, 500);
      }
   } else {
      imgIcone.src = `${base}/assets/images/lupa.png`
      autocomplete.innerHTML = "";
      closeStyle();
   }

}

function closeStyle() {
   containerInput.style.borderTopLeftRadius = '25px';
   containerInput.style.borderTopRightRadius = '25px';
   containerInput.style.borderBottomLeftRadius = '25px';
   containerInput.style.borderBottomRightRadius = '25px';
}

function openStyle() {
   containerInput.style.borderTopLeftRadius = '25px';
   containerInput.style.borderTopRightRadius = '25px';
   containerInput.style.borderBottomLeftRadius = '0';
   containerInput.style.borderBottomRightRadius = '0';
   autocomplete.style.height = "auto";
}