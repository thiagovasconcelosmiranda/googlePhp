
const search = document.querySelector('#assunto');
const autocomplete = document.querySelector('#autocomplete');
  search.addEventListener('input', _.throttle(async event  =>{
    if(event.target.value.length > 0){
      try{
         const  {data} = await axios.get('modals/search.php', {
            params: {
                book: event.target.value
             }
          });

          if(data.length){
            autocomplete.style.display= 'block';
            search.style.borderRadius='15px';
              var ul = '<ul>';

            ul +=  data.map(assunto =>{
                  return  `<li><a href="${assunto.url}">${assunto.name}</a></li>`
              });
              ul += '</ul>';
              autocomplete.innerHTML = ul;
          }
          
          }catch(error){
          console.log(error);
       }
    }else{
        
        autocomplete.style.display= 'none';
        search.style.borderRadius='25px';
        
        
       
    }

  
        
    }, 500));

