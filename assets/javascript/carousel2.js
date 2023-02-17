let currentIndex2 = 0;
const items2 = document.querySelectorAll('.item2');
const prevButton2 = document.querySelector('.prev-btn2');
const nextButton2 = document.querySelector('.next-btn2');

function showPrevImage2() {
    currentIndex2--;
    updateCarousel2();
  }
  
  function showNextImage2() {
    currentIndex2++;
    updateCarousel2();
  }

  

  function updateCarousel2() {
    items2.forEach(item => item.classList.remove('active'));
    items2[currentIndex2].classList.add('active');
    document.querySelector('.carousel-items2').style.transform = `translateX(-${currentIndex2 * 3}%)`;
  
    // Verifica se o índice atual é maior que zero para exibir ou ocultar o botão anterior
    if (currentIndex2 > 0) {
      prevButton2.style.display = 'block';
    } else {
      prevButton2.style.display = 'none';
    }
  
    // Verifica se o índice atual é menor que o tamanho total de itens para exibir ou ocultar o botão seguinte
    if (currentIndex2 < items2.length - 1) {
      nextButton2.style.display = 'block';
    } else {
      nextButton2.style.display = 'none';
    }
  }

  
prevButton2.addEventListener('click', showPrevImage2);
nextButton2.addEventListener('click', showNextImage2);

updateCarousel2();
