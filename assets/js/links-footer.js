
if(document.querySelector('.settings')){
    document.querySelector('.settings').addEventListener('click',()=>{
        let modal = document.querySelector('.modal-settings');
        if(modal.style.display == 'block'){
            modal.style.display="none";
        }else{
            modal.style.display="block";
        }
      
    });
    
}
