

if(document.querySelector('.flash') && document.querySelector('.text-msg') ){
    const msg =  document.querySelector('.flash');
    if(document.querySelector('.text-msg').innerText.length > 2){
        msg.style.display="flex";
          setTimeout(() => {
              msg.style.display="none";
          }, 5000);
    }else{
       
    }   
}

 async function desfazer(id, name, url){
    if(id && name && url){
        const data = new FormData();
        data.append('id', id);
        data.append('name', name);
        data.append('url', url);

       const req = await fetch(`${base}/adicionar_active.php`, {
        method: 'POST',
        body:data
       })

       const json = await req.json();
       if(json){
         location.reload();
       }
    }  
 } 

 async function restaurarPadrao(){
    let array = [ 
        {
           'id': 1,
           'name': 'Linkedin',
           'url': 'https://linkedin.com/in/'
        },
    
        {
            'id': 2,
            'name': 'Facebook',
            'url': 'https://m.facebook.com/'
         },
    
         {
            'id': 3,
            'name': 'terra',
            'url': 'https://terra.com.br'
         },
    
         {
            'id': 4,
            'name': 'Instagram',
            'url': 'https://www.instagram.com/'
         },
    
         {
            'id': 5,
            'name': 'Uol',
            'url': 'https://noticias.uol.com.br/'
         }
    ];

    const req = await fetch(`${base}/delete_all.php`,{
      method: 'GET'
    });

    const json = await req.json();

    if(json.error != ''){
        array.forEach(item =>{
            desfazer(item.id ,item.name, item.url);
          });  
         // location.reload();
    }

    
}
