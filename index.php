<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="assets/imagem/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MangaSky</title>
    <link rel="stylesheet" href="assets/design/index.css">
    <link rel="stylesheet" href="assets/design/anuncio.css">
    
</head>
<body>
<!-- anuncio -->
<div id="popup"> 
  <div class="popup-content">
    <span id="close" class="close" onclick="closePopup()">&times;</span>
    <p id="countdown">5</p>
    <div class="anuncio">  
        <video id="video" width="320" height="340" src="assets/imagem/video.mp4"></video>
        <form action="" method="get">
          <button>Saiba mais</button>
        </form>
    </div>
    
  </div>
</div>

<!-- menu -->
<nav>
  <!-- <div id="side-menu">
    <a id="option" href=" " title="home"><img src="assets/imagem/home.png" alt="home"></a>
    <a id="option" href="category_page.php" title="category"><img src="assets/imagem/book.png" alt="category"></a>
    <a id="option" href="favorite_page.php" title="favorite"><img src="assets/imagem/favorite.png" alt="favorite"></a>
    <a id="option" href="profile_page.php" title="profile"><img src="assets/imagem/pefil.png" alt="profile"></a>
 </div> -->
 <?= require 'partials/menu.php'?>
</nav>

<!-- pesquisa -->
<section>
      <!-- <div class="search">
        <form method="get">
            <input type="search”">
        </form>
        <img src="assets/imagem/pesquisa.png" alt="">
      </div> -->
      <?= require 'partials/search.php'; ?>
</section>

<!-- conteudo principal -->
<main>
    
    <div class="content">
      <div class="border">
        <!-- slide inicial -->
        <div class="slideshow-container banner">
            <div class="slide  ">
                <div class="inf">
                    <div class="titulo">
                        solo Leveling
                    </div>
                    <div class="sinopse">
                        Dez anos atrás, depois do “Portal” que conecta o mundo real com um mundo de montros se abriu,
                        algumas pessoas comuns receberam o poder de caçar os monstros do portal.
                        Eles são conhecidos como caçadores. Porém, nem todos os caçadores são fortes.
                    </div>
                    <p>ficção/fantasia</p>
                    <button>LER</button>
                </div>
                <div class="manga">
                    <div class="manga-img">
                        <img src="assets/imagem/capa solo.jpg" alt="">
                    </div>
                </div>
            </div>
          </div>
          <!-- slide inicial 2 -->
            <div class="slideshow-container banner2">
            <div class="slide ">
              <div class="inf">
                  <div class="titulo">
                    The beginning after the end
                  </div>
                  <div class="sinopse">
                    O rei Grey tem força, riqueza e prestígio incomparáveis ​
                    ​em um mundo governado pela habilidade marcial.
                     No entanto, a solidão permanece bem atrás daqueles com grande poder.
                      Sob o exterior glamoroso de um rei poderoso espreita a concha do homem,
                       desprovida de propósito e vontade.
                      
                  </div>
                  <p>ficção/fantasia</p>
                  <button>LER</button>
              </div>
              <div class="manga">
                  <div class="manga-img">
                      <img src="assets/imagem/the begining.jpg" alt="">
                  </div>
              </div>
          </div>
        </div>
          <!-- slide inicial 3 -->
        <div class="slideshow-container banner3">
          <div class="slide ">
              <div class="inf">
                  <div class="titulo">
                    kaiju no 8
                  </div>
                  <div class="sinopse">
                    O Japão é o lugar com o maior índice de aparição de monstros no mundo,
                     sofrendo invasões todos os dias.
                      No passado, Kafka Hibino almejava fazer parte das Forças de Defesa,
                       mas atualmente trabalha para uma empresa especializada na limpeza dos resquícios das batalhas
                        travadas com os monstros.
                  </div>
                  <p>ficção/fantasia</p>
                  <button>LER</button>
              </div>
              <div class="manga">
                  <div class="manga-img">
                      <img src="assets/imagem/kaiju.jpg" alt="">
                  </div>
              </div>
          </div>
        </div>
          <!-- slide inicial 4 -->
          <div class="slideshow-container banner4">
          <div class="slide ">
            <div class="inf">
                <div class="titulo">
                  One Punch-Man
                </div>
                <div class="sinopse">
                  One Punch-Man conta a história de Saitama,
                   um super-herói extremamente poderoso,
                    que se entediou com a ausência dos desafios nas suas lutas contra o mal
                     e procura encontrar um oponente digno.
                      Capa do primeiro volume de One Punch-Man,
                       manga adaptado por Yusuke Murata,
                        mostrando o protagonista Saitama.
                    
                </div>
                <p>ficção/fantasia</p>
                <button>LER</button>
            </div>
            <div class="manga">
                <div class="manga-img">
                    <img src="assets/imagem/one punch man.jpg" alt="">
                </div>
            </div>
        </div>
        </div>
      </div>


        <!-- carrosel 1 -->
        <div class="carousel-mangas">
            <div id="class-mangas"><p>Recentes</p></div>
            <div class="carousel">
                <button class="prev-btn" onclick="showPrevImage()"><img src="assets/imagem/setaEsquerda.png" alt="setaEsquerda"></button>
                <div class="carousel-items touch">
                  <div class="item"><img src="assets/mangas/adult.jpg"></div>
                  <div class="item"><img src="assets/mangas/bleatch.jpg"></div>
                  <div class="item"><img src="assets/mangas/caste.jpg"></div>
                  <div class="item"><img src="assets/mangas/daily.jpg"></div>
                  <div class="item"><img src="assets/mangas/death.jpg"></div>
                  <div class="item"><img src="assets/mangas/genere.jpg"></div>
                  <div class="item"><img src="assets/mangas/magi.jpg"></div>
                  <div class="item"><img src="assets/mangas/momo.jpg"></div>
                  <div class="item"><img src="assets/mangas/ogro.jpg"></div>
                  <div class="item"><img src="assets/mangas/onepiece.jpg"></div>
                  <div class="item"><img src="assets/mangas/sword.jpg"></div>
                  <div class="item"><img src="assets/mangas/yakusoku.jpg"></div>
                  <div class="item"><img src="assets/mangas/panini.jpg"></div>
                  <div class="item"><img src="assets/mangas/kaiju.jpg"></div>
                  
                </div>
                <button class="next-btn" onclick="showNextImage()"><img src="assets/imagem/setaDireita.png" alt="setaDireita"></button>
            </div>
            
        </div>


        <!-- carrosel 2 -->
        <div class="carousel-mangas">
          <div id="class-mangas"><p>Manga Físico</p></div>
          <div class="carousel2">
            <button class="prev-btn2" onclick="showPrevImage2()"><img src="assets/imagem/setaEsquerda.png" alt="setaEsquerda"></button>
            <div class="carousel-items2 touch">
              <div class="item2"><img src="assets/mangas/kaiju.jpg"></div>
              <div class="item2"><img src="assets/mangas/adult.jpg"></div>
              <div class="item2"><img src="assets/mangas/bleatch.jpg"></div>
              <div class="item2"><img src="assets/mangas/caste.jpg"></div>
              <div class="item2"><img src="assets/mangas/yakusoku.jpg"></div>
              <div class="item2"><img src="assets/mangas/sword.jpg"></div>
              <div class="item2"><img src="assets/mangas/panini.jpg"></div>
              <div class="item2"><img src="assets/mangas/onepiece.jpg"></div>
              <div class="item2"><img src="assets/mangas/ogro.jpg"></div>
              <div class="item2"><img src="assets/mangas/momo.jpg"></div>
              <div class="item2"><img src="assets/mangas/magi.jpg"></div>
              <div class="item2"><img src="assets/mangas/genere.jpg"></div>
              <div class="item2"><img src="assets/mangas/death.jpg"></div>
              <div class="item2"><img src="assets/mangas/daily.jpg"></div>
            </div>
            <button class="next-btn2" onclick="showNextImage2()"><img src="assets/imagem/setaDireita.png" alt="setaDireita"></button>
          </div>
        </div>
          
          
        <!-- carrosel 3 -->
        <div class="carousel-mangas">
          <div id="class-mangas"><p>Recomendado</p></div>
          <div class="carousel3">
            <button class="prev-btn3" onclick="showPrevImage3()"><img src="assets/imagem/setaEsquerda.png" alt="setaEsquerda"></button>
            <div class="carousel-items3 touch">
              <div class="item3"><img src="assets/mangas/caste.jpg"></div>
              <div class="item3"><img src="assets/mangas/yakusoku.jpg"></div>
              <div class="item3"><img src="assets/mangas/panini.jpg"></div>
              <div class="item3"><img src="assets/mangas/ogro.jpg"></div>
              <div class="item3"><img src="assets/mangas/momo.jpg"></div>
              <div class="item3"><img src="assets/mangas/magi.jpg"></div>
              <div class="item3"><img src="assets/mangas/kaiju.jpg"></div>
              <div class="item3"><img src="assets/mangas/genere.jpg"></div>
              <div class="item3"><img src="assets/mangas/death.jpg"></div>
              <div class="item3"><img src="assets/mangas/daily.jpg"></div>
              <div class="item3"><img src="assets/mangas/bleatch.jpg"></div>
              <div class="item3"><img src="assets/mangas/adult.jpg"></div>
              <div class="item3"><img src="assets/mangas/sword.jpg"></div>
              <div class="item3"><img src="assets/mangas/onepiece.jpg"></div>
            </div>
            <button class="next-btn3" onclick="showNextImage3()"><img src="assets/imagem/setaDireita.png" alt="setaDireita"></button>
          </div>
        </div>
          
          
        <!-- carrosel 4 -->
        <div class="carousel-mangas">
          <div id="class-mangas"><p>Mais lidos</p></div>
          <div class="carousel4">
            <button class="prev-btn4" onclick="showPrevImage4()"><img src="assets/imagem/setaEsquerda.png" alt="setaEsquerda"></button>
            <div class="carousel-items4 touch">
              <div class="item4"></div>
              <div class="item4"></div>
              <div class="item4"></div>
              <div class="item4"></div>
              <div class="item4"></div>
              <div class="item4"></div>
              <div class="item4"></div>
              <div class="item4"></div>
              <div class="item4"></div>
              <div class="item4"></div>
              <div class="item4"></div>
              <div class="item4"></div>
              <div class="item4"></div>
              <div class="item4"></div>
            </div>
            <button class="next-btn4" onclick="showNextImage4()"><img src="assets/imagem/setaDireita.png" alt="setaDireita"></button>
          </div>
        </div>
          
          
        <!-- carrosel 5 -->
        <div class="carousel-mangas">
          <div id="class-mangas"><p>Lançamentos</p></div>
          <div class="carousel5">
            <button class="prev-btn5" onclick="showPrevImage5()"><img src="assets/imagem/setaEsquerda.png" alt="setaEsquerda"></button>
            <div class="carousel-items5 touch">
              <div class="item5"></div>
              <div class="item5"></div>
              <div class="item5"></div>
              <div class="item5"></div>
              <div class="item5"></div>
              <div class="item5"></div>
              <div class="item5"></div>
              <div class="item5"></div>
              <div class="item5"></div>
              <div class="item5"></div>
              <div class="item5"></div>
              <div class="item5"></div>
              <div class="item5"></div>
              <div class="item5"></div>
            </div>
            <button class="next-btn5" onclick="showNextImage5()"><img src="assets/imagem/setaDireita.png" alt="setaDireita"></button>
          </div>
        </div>
        
</div>

</main>
<script src="assets/javascript/anuncio.js"></script>
<script src="assets/javascript/slide.js"></script>
<script src="assets/javascript/search.js"></script>
<script src="assets/javascript/carousel.js"></script>
<script src="assets/javascript/carousel2.js"></script>
<script src="assets/javascript/carousel3.js"></script>
<script src="assets/javascript/carousel4.js"></script>
<script src="assets/javascript/carousel5.js"></script>

</body>
</html>