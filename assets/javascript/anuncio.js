function openPopup() {
  // Verificar se o tempo atual é maior do que a última vez em que o anúncio foi exibido mais 30 minutos
  var lastDisplayed = localStorage.getItem("lastDisplayed");
  if (lastDisplayed && Date.now() < lastDisplayed + 1800000) {
    return;
  }

  document.getElementById("popup").style.display = "block";
  var countdown = 5;
  var countdownInterval = setInterval(function() {
    document.getElementById("countdown").innerHTML = countdown;
    if (countdown == 0) {
      document.getElementById("close").style.display = "block";
      clearInterval(countdownInterval);
      document.getElementById("countdown").style.display = "none";
    }
    countdown--;
  }, 1000);

  // Reproduzir o vídeo quando o pop-up for aberto
  document.getElementById("video").play();

  // Atualizar o armazenamento local com a hora atual
  localStorage.setItem("lastDisplayed", Date.now());
}

function closePopup() {
  document.getElementById("popup").style.display = "none";

  // Pausar o vídeo e voltar para o começo quando o pop-up for fechado
  var video = document.getElementById("video");
  video.pause();
  video.currentTime = 0;
}

// Verificar se o anúncio deve ser exibido assim que a página for carregada
openPopup();
