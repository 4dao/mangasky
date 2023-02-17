let currentIndex4 = 0;
const items4 = document.querySelectorAll('.item4');
const prevButton4 = document.querySelector('.prev-btn4');
const nextButton4 = document.querySelector('.next-btn4');

function showPrevImage4() {
    currentIndex4--;
    updateCarousel4();
  }
  
  function showNextImage4() {
    currentIndex4++;
    updateCarousel4();
  }

  

  function updateCarousel4() {
    items4.forEach(item => item.classList.remove('active'));
    items4[currentIndex4].classList.add('active');
    document.querySelector('.carousel-items4').style.transform = `translateX(-${currentIndex4 * 3}%)`;
  
    // Verifica se o índice atual é maior que zero para exibir ou ocultar o botão anterior
    if (currentIndex4 > 0) {
      prevButton4.style.display = 'block';
    } else {
      prevButton4.style.display = 'none';
    }
  
    // Verifica se o índice atual é menor que o tamanho total de itens para exibir ou ocultar o botão seguinte
    if (currentIndex4 < items4.length - 1) {
      nextButton4.style.display = 'block';
    } else {
      nextButton4.style.display = 'none';
    }
  }

  
prevButton4.addEventListener('click', showPrevImage4);
nextButton4.addEventListener('click', showNextImage4);

updateCarousel4();
