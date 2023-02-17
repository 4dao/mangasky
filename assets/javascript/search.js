const searchDiv = document.querySelector('.search');
const inputField = searchDiv.querySelector('input');
const image = searchDiv.querySelector('img');

image.addEventListener('click', () => {
  inputField.style.display = 'block';
  inputField.style.transition = "all 1s ease-in-out";
  image.style.display = 'none';
  inputField.focus();
});

document.addEventListener('click', (event) => {
  if (!searchDiv.contains(event.target)) {
    inputField.style.display = 'none';
    inputField.style.transition = "all 1s ease-in-out";
    image.style.display = 'block';
    
  }
});
