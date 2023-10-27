const optionApps = document.querySelector('.option-apps');
const clickOption = document.querySelector('#option')

function closeOption(){
  optionApps.style.display='none';
  document.removeEventListener('click', closeOption);
}
clickOption.addEventListener('click',()=>{
    optionApps.style.display='flex';

    setTimeout(()=>{
      document.addEventListener('click', closeOption)
    },500);
});


