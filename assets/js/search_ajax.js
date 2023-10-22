
const search = document.querySelector('.input-search');
const autocomplete = document.querySelector('#autocomplete');
const input = document.querySelector('.input-search');

input.addEventListener('input', ()=>{
   if(input.value){
       searchUrl(input.value);
   }
});

async function searchUrl(name){
    let req = await fetch(`${base}/search_name.php?search=${name}`, {
        method: 'GET'
    });

     const json = await req.json();
     if(name.length > 1){
       if(json.length > 0){
          autocomplete.style.display= 'block';
          search.style.borderRadius='15px';
          var ul = '<ul class="ul-text">';
           ul += `<li> <ion-icon name="search-outline"></ion-icon> ${name}  -  <strong> Pesquisa do Google </strong></li>`
          ul += json.map(item =>{
             return  `<li> <ion-icon name="refresh-outline"></ion-icon> <a href="${item.url}">${item.name}</strong></a></li>`
          });
          ul += '</ul>';
          autocomplete.innerHTML = ul;
       }
       
       search.style.borderBottomLeftRadius='0px';
       search.style.borderBottomRightRadius='0px';
     } else{
        autocomplete.style.display= 'none';
        search.style.borderBottomLeftRadius='0';
        search.style.borderBottomRightRadius='0';
        search.style.borderRadius='50px';
       
     }  
}