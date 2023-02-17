let currentIndex = 0;
const items = document.querySelectorAll('.item');
const prevButton = document.querySelector('.prev-btn');
const nextButton = document.querySelector('.next-btn');

function showPrevImage() {
    currentIndex--;
    updateCarousel();
  }
  
  function showNextImage() {
    currentIndex++;
    updateCarousel();
  }

  

  function updateCarousel() {
    items.forEach(item => item.classList.remove('active'));
    items[currentIndex].classList.add('active');
    document.querySelector('.carousel-items').style.transform = `translateX(-${currentIndex * 3}%)`;
  
    // Verifica se o índice atual é maior que zero para exibir ou ocultar o botão anterior
    if (currentIndex > 0) {
      prevButton.style.display = 'block';
    } else {
      prevButton.style.display = 'none';
    }
  
    // Verifica se o índice atual é menor que o tamanho total de itens para exibir ou ocultar o botão seguinte
    if (currentIndex < items.length - 1) {
      nextButton.style.display = 'block';
    } else {
      nextButton.style.display = 'none';
    }
  }

  
prevButton.addEventListener('click', showPrevImage);
nextButton.addEventListener('click', showNextImage);

updateCarousel();












// function setupCarousel() {
//   const carousel = document.querySelector('.carousel');
//   let isDragging = false;
//   let startPosition = 0;
//   let currentTranslate = 0;
//   let previousTranslate = 0;
//   let animationID = 0;
//   let currentIndex = 0;

//   // Verifica a largura da janela e adiciona ou remove os eventos de toque conforme necessário
//   if (window.innerWidth <= 810) {
//     carousel.addEventListener('touchstart', touchStart);
//     carousel.addEventListener('touchmove', touchMove);
//     carousel.addEventListener('touchend', touchEnd);
//   } else {
//     carousel.removeEventListener('touchstart', touchStart);
//     carousel.removeEventListener('touchmove', touchMove);
//     carousel.removeEventListener('touchend', touchEnd);
//   }

//   function touchStart(event) {
//     isDragging = true;
//     startPosition = event.touches[0].clientX;
//     animationID = requestAnimationFrame(animation);
//     carousel.classList.add('grabbing');
//   }

//   function touchMove(event) {
//     if (isDragging) {
//       const currentPosition = event.touches[0].clientX;
//       currentTranslate = previousTranslate + currentPosition - startPosition;
//     }
//   }

//   function touchEnd() {
//     isDragging = false;
//     cancelAnimationFrame(animationID);
//     const movedBy = currentTranslate - previousTranslate;

//     // Se o carrossel não se moveu, retorna
//     if (movedBy === 0) return;

//     // Atualiza o índice atual com base na direção do movimento
//     if (movedBy < -50 && currentIndex < items.length - 1) {
//       currentIndex++;
//     } else if (movedBy > 50 && currentIndex > 0) {
//       currentIndex--;
//     }

//     setPositionByIndex();
//     carousel.classList.remove('grabbing');
//   }

//   function animation() {
//     setSliderPosition();
//     if (isDragging) requestAnimationFrame(animation);
//   }

//   function setSliderPosition() {
//     carousel.style.transform = `translateX(${currentTranslate}px)`;
//   }

//   function setPositionByIndex() {
//     currentTranslate = currentIndex * -carouselWidth();
//     previousTranslate = currentTranslate;
//     setSliderPosition();
//   }

//   function carouselWidth() {
//     return carousel.offsetWidth;
//   }

//   function slideNext() {
//     if (currentIndex === items.length - 1) {
//       currentIndex = 0;
//     } else {
//       currentIndex++;
//     }

//     setPositionByIndex();
//   }

//   function slidePrev() {
//     if (currentIndex === 0) {
//       currentIndex = items.length - 1;
//     } else {
//       currentIndex--;
//     }

//     setPositionByIndex();
//   }

//   const nextButton = document.querySelector('.next-btn');
//   const prevButton = document.querySelector('.prev-btn');
//   const items = document.querySelectorAll('.item');

//   nextButton.addEventListener('click', slideNext);
//   prevButton.addEventListener('click', slidePrev);
// }

