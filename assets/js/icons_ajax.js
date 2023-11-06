
const base = document.querySelector('.ul').getAttribute('data-id');

function closeOptionClick(){
  document.querySelectorAll('.option-i').forEach(item =>{
   item.style.display="none";
  });
  document.removeEventListener('click', closeOptionClick);
}

document.querySelectorAll('.option-img').forEach(item=>{
  
 item.addEventListener('click',()=>{
   closeOptionClick();
   item.querySelector('.option-i').style.display="block";
    
    setTimeout(()=>{
       document.addEventListener('click', closeOptionClick);
    },500)
 });
});

document.querySelectorAll('.option-img').forEach(item=>{
   
  item.addEventListener('click',()=>{
    closeOptionClick();
    item.querySelector('.option-i').style.display="block";
     
     setTimeout(()=>{
        document.addEventListener('click', closeOptionClick);
     },500)
  })
});

let modal =  document.querySelector('.container-modal-add');
  if(document.querySelector('.icone-i')){
    document.querySelector('.icone-i').addEventListener('click', ()=>{
      modal.style.display="flex";  
    });
  }
  

  document.querySelectorAll('.add-button button').forEach(item =>{
    item.addEventListener('click',()=>{
      modal.style.display="none";  
    });
});

let modalUpdate = document.querySelector('.container-modal-update');

async function buttonUpdate(id){
   modalUpdate.style.display="flex";
   
   const req = await fetch(`${base}/edit_id.php?id=${id}`, {
      method:'GET',

   });

   let json = await req.json();

   if(json.id && json.name && json.url){
    document.querySelector('.input-id').value = json.id;
    document.querySelector('.input-name').value = json.name;
    document.querySelector('.input-url').value = json.url;

   }

   if(json.error != ''){
     alert('Erro: ' + json.error);
   }
}

document.querySelector('.cancel-i').addEventListener('click',()=>{
  modalUpdate.style.display="none";
});



const buttonAdicionar = document.getElementById('buttonAdicionar');
buttonAdicionar.disabled = true;
document.querySelectorAll('.modal-add input').forEach(item =>{
  item.addEventListener('input', ()=>{
    veryInput();
  })
 
})

function veryInput(){
  if(document.getElementById('adicionarName').value && document.getElementById('adicionarUrl').value){
     buttonAdicionar.style.color="blue";
     buttonAdicionar.disabled = false;
  }
}

veryInput();


let adicionarName = document.getElementById('adicionarName');
let adicionarUrl= document.getElementById('adicionarUrl');
var button =  document.getElementById("button");

adicionarName.addEventListener('input', () =>{
  adicionarUrl.addEventListener('input', () => {
   if(adicionarName.value.length > 0 && adicionarUrl.value.length > 0){
      button.disabled=false;
      button.style.color="blue";
   }else{  
      buttonAltetar.disabled=true;
      button.style.color=""; 
   }
   });
});
