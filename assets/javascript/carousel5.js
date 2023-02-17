let currentIndex5 = 0;
const items5 = document.querySelectorAll('.item5');
const prevButton5 = document.querySelector('.prev-btn5');
const nextButton5 = document.querySelector('.next-btn5');

function showPrevImage5() {
    currentIndex5--;
    updateCarousel5();
  }
  
  function showNextImage5() {
    currentIndex5++;
    updateCarousel5();
  }

  

  function updateCarousel5() {
    items5.forEach(item => item.classList.remove('active'));
    items5[currentIndex5].classList.add('active');
    document.querySelector('.carousel-items5').style.transform = `translateX(-${currentIndex5 * 3}%)`;
  
    // Verifica se o índice atual é maior que zero para exibir ou ocultar o botão anterior
    if (currentIndex5 > 0) {
      prevButton5.style.display = 'block';
    } else {
      prevButton5.style.display = 'none';
    }
  
    // Verifica se o índice atual é menor que o tamanho total de itens para exibir ou ocultar o botão seguinte
    if (currentIndex5 < items5.length - 1) {
      nextButton5.style.display = 'block';
    } else {
      nextButton5.style.display = 'none';
    }
  }

  
prevButton5.addEventListener('click', showPrevImage5);
nextButton5.addEventListener('click', showNextImage5);

updateCarousel5();
