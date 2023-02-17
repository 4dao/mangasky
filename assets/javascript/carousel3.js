let currentIndex3 = 0;
const items3 = document.querySelectorAll('.item3');
const prevButton3 = document.querySelector('.prev-btn3');
const nextButton3 = document.querySelector('.next-btn3');

function showPrevImage3() {
    currentIndex3--;
    updateCarousel3();
  }
  
  function showNextImage3() {
    currentIndex3++;
    updateCarousel3();
  }

  

  function updateCarousel3() {
    items3.forEach(item => item.classList.remove('active'));
    items3[currentIndex3].classList.add('active');
    document.querySelector('.carousel-items3').style.transform = `translateX(-${currentIndex3 * 3}%)`;
  
    // Verifica se o índice atual é maior que zero para exibir ou ocultar o botão anterior
    if (currentIndex3 > 0) {
      prevButton3.style.display = 'block';
    } else {
      prevButton3.style.display = 'none';
    }
  
    // Verifica se o índice atual é menor que o tamanho total de itens para exibir ou ocultar o botão seguinte
    if (currentIndex3 < items3.length - 1) {
      nextButton3.style.display = 'block';
    } else {
      nextButton3.style.display = 'none';
    }
  }

  
prevButton3.addEventListener('click', showPrevImage3);
nextButton3.addEventListener('click', showNextImage3);

updateCarousel3();
