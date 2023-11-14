
document.querySelector('.icone-close-image').addEventListener('click', () => {
  document.querySelector('.upload-image-group').style.display = "none";
});

document.querySelector('.image').addEventListener('click', () => {
  document.querySelector('.upload-image-group').style.display = "flex";
  document.querySelector('.list-add').style.display = "none";
  setTimeout(() => {
    document.addEventListener('click', closeClickImage);

  }, 500);
});

function closeClickImage() {
  document.querySelector('.upload-image-group').style.display = "none";
  document.querySelector('.list-add').style.display = "flex";
  document.removeEventListener('click', closeClickImage);
}