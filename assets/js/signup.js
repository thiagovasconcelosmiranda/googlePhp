const base = document.querySelector('.group-align').getAttribute('data-url');

if(document.querySelectorAll('.group-i') && document.getElementById('button-signup-name')){
  alterTitle('Enter your name');
  document.getElementById('button-signup-name').addEventListener('click',verifyInputSignupLastName);
  document.getElementById('button-signup-date').addEventListener('click', verifyInputSignupDate);
  document.getElementById('button-signup-email').addEventListener('click', verifyInputSignupEmail);
  document.getElementById('button-signup-password').addEventListener('click', verifyInputSignupPassword);
  document.getElementById('button-signup-upload').addEventListener('click', verifyInputSignupUpload);

  const name = document.getElementById('name');
  const date = document.getElementById('date');
  const email = document.getElementById('email');
  const password = document.getElementById('password');
  const upload = document.getElementById('upload');

   
   function verifyInputSignupLastName(){
    let count = 0;
    document.querySelectorAll('.group-i input').forEach(item =>{
        if(item.name =='firstname'){
            let id = item.id;
            if(id){
                if(!item.value){
                    document.getElementById('error-'+id).classList.add('alert-error-fieldeset');
                    document.getElementById('msg-'+id).style.display="flex";
                }else{
                    document.getElementById('error-'+id).classList.remove('alert-error-fieldeset');
                    document.getElementById('msg-'+id).style.display="none";
                    count++
                }   
            }
        }
    })

    if(count > 0){
       name.style.display="none";
       date.style.display="flex";
       alterTitle('Enter your birthday and gender');
    }
    
   }
    
   function verifyInputSignupDate(){
       let count = 0;
       document.querySelectorAll('.group-i input, .group-i select ').forEach(item=>{
        if(item.name == 'month' || item.name == 'day'
          || item.name == 'year' || item.name == 'gender' ){
            let id = item.id;
            if(id){
               if(!item.value){
                  document.getElementById('error-'+id).classList.add('alert-error-fieldeset');
                  document.getElementById('msg-'+id).style.display="flex";
                  return;
               }else{
                  document.getElementById('error-'+id).classList.remove('alert-error-fieldeset');
                  document.getElementById('msg-'+id).style.display="none";
                  count++;
               }
            }
        }
       });
       
       if(count > 3){
            date.style.display="none";
            email.style.display="flex";
            alterTitle('Create a Gmail address for signing in to your Google Account');
        }   
    }
     
    function verifyInputSignupEmail(){
        let count = 0;
          document.querySelectorAll('.group-i input').forEach(item =>{
           if(item.name == 'email'){
            let id = item.id;
             if(id){
                if(!item.value){
                   document.getElementById('error-'+id).classList.add('alert-error-fieldeset');
                   document.getElementById('msg-'+id).style.display="flex";
                   document.getElementById('msg-'+id).innerHTML="Obrigatório";
                   return;
                }else{
                    document.getElementById('error-'+id).classList.remove('alert-error-fieldeset');
                    document.getElementById('msg-'+id).style.display="none";
                    count++;
                }
             }
            let errorInput = document.getElementById('error-5');
            let errorMsg = document.getElementById('msg-5');
            if(validateEmail(item.value) == false){
                errorInput.classList.add('alert-error-fieldeset');
                errorInput.style.display="flex";
                errorMsg.innerHTML="Email invalido";
            }else{
             
                 verifyEmail(item.value).then(user=>{
                      if(user == '0'){
                         if(count > 0){
                            email.style.display="none";
                            password.style.display="flex";
                            alterTitle('Create your email');
                         }
                      }else{
                        errorInput.classList.add('alert-error-fieldeset');
                        document.getElementById('msg-5').style.display="flex";
                        document.getElementById('msg-5').innerHTML="Email exist";
                      }
                    
                  });
            } 
           }
          });
         
    }
    
    function verifyInputSignupPassword(){
       let count = 0;
       document.querySelectorAll('.group-i input').forEach(item =>{
         if(item.name == 'password' || item.name == 'confirm-password'){
             let id = item.id;
             if(id){
                if(!item.value){
                    document.getElementById('error-'+id).classList.add('alert-error-fieldeset');
                    document.getElementById('msg-'+id).style.display="flex";
                    document.getElementById('msg-'+id).style.innerHTML="Obrigatório";
                }else{
                    document.getElementById('error-'+id).classList.remove('alert-error-fieldeset');
                    document.getElementById('msg-'+id).style.display="none";
                    count++; 
                }
             } 
           
         }
       });
      let inputError = document.getElementById('error-7');
      let msgError =document.getElementById('msg-7');

      if(document.getElementById('6').value != document.getElementById('7').value){
        inputError.classList.add('alert-error-fieldeset');
        msgError.style.display="flex";
        msgError.innerHTML="senhas não conferem";
      }else{
        if(count > 1){
          password.style.display="none";
          upload.style.display="flex";
          alterTitle('Create your new password');
      }
      }
      
      
    }

    function verifyInputSignupUpload(){
      let count = 0;
      document.querySelectorAll('.group-i input').forEach(item =>{
        if(item.name == 'avatar'){
          let id = item.id;
          if(id){
            if(!item.value){
              document.getElementById('error-'+id).classList.add('alert-error-fieldeset');
              document.getElementById('msg-'+id).style.display="flex";
              document.getElementById('msg-'+id).style.innerHTML="Obrigatório";
            }else{
              document.getElementById('error-'+id).classList.remove('alert-error-fieldeset');
              document.getElementById('msg-'+id).style.display="none";
              count++;
            }

          }
        }
      });
      if(count > 0){
         document.getElementById('button-signup-upload').type="submit";
      }
    }

    function validateEmail(email){
      var re = /\S+@\S+\.\S+/;
      return re.test(email);
    }

    async function verifyEmail(email){
      if(validateEmail(email)){
        const req = await fetch(`${base}/verify_email.php?email=${email}`,{
        method:"GET"
        });

        const json = await req.json();
        if(json == false){
          return  '0';
        }else{
          return '1';
        }
      }  
    }
    //preview
    function previewImage(){
      var image = document.querySelector('input[name=avatar]').files[0];
      var preview = document.getElementById('preview');

      var reader = new FileReader();
      reader.onloadend = function(){
        preview.src = reader.result
      }

      if(image){
        reader.readAsDataURL(image);
      }
    }
    //
    function alterTitle(title){
      document.querySelectorAll('.group-title').forEach(item =>{
         item.querySelector('h2').innerHTML="Create a Google Account";
         item.querySelector('p').innerHTML= title;
      });
    }

    document.querySelectorAll('.group-i fieldset').forEach(item =>{
      item.addEventListener('click', ()=>{
         styleFieldset(item);
      });
    });

    function styleFieldset(clickFieldset){
      document.querySelectorAll('.align-i').forEach(item =>{
        if(item.querySelector('fieldset')){
          item.querySelector('fieldset').classList.remove('fieldset-border'); 
          item.querySelector('legend').style.color="";
        } 
      });
      
      clickFieldset.classList.add('fieldset-border');
      clickFieldset.querySelector('legend').style.color="blue";
      setTimeout(()=>{
        document.addEventListener('click',removeBorderfieldset);
      },1000);
    }

    function removeBorderfieldset(){
      document.querySelectorAll('.align-i fieldset').forEach(item =>{
        item.classList.remove('fieldset-border');
        item.querySelector('legend').style.color=""
      });
      document.removeEventListener('click', removeBorderfieldset);
    }

}

