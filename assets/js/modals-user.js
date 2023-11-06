if(document.getElementById('userClick')){
    document.getElementById('userClick').addEventListener('click', () => {
       document.querySelector('.container-user').style.visibility="visible";
       document.querySelector('.option-apps').style.display="none";
        setTimeout(()=>{
            document.addEventListener('click', closeClickPage);
        },500);
    });
}
if(document.querySelector('.icone-close-user')){
    document.querySelector('.icone-close-user').addEventListener('click', ()=>{
        document.querySelector('.container-user').style.visibility="hidden";
    });
}



function closeClickPage(){
    document.querySelector('.container-user').style.visibility="hidden";
    document.removeEventListener('click', closeClickPage);
    
 }




