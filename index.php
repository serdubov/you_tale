<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="icon" href=​img/favicon.ico type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <script src="js/jquery.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/preload.js"></script>
    <link rel="stylesheet" href="css/preload.css" type="text/css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/menu.css" type="text/css">
      <!-- <script src="js/jquery-1.11.3.min.js"></script> -->
      
    <!-- <link rel="stylesheet" href="css/list-style.css" type="text/css"> -->
    <title>webdev</title>
</head>
<body>

  <div id="preload">
    <div class="load-logo-around">
    </div>
    <div class="load-logo">
    </div>
    <div class="text-logo">
      Студия web-разработки YouTale
    </div>
  </div>


  <div class="menu">
    <div class="menu-list">
      <div class="menu-row">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-6">
              <div class="rectangl-menu">
              </div>
              <div class="menu-items-list">
                <nav>
                    <ul class="menu-items">
                        <li class="menu-items-li">Главная</li>
                        <li class="menu-items-li">О нас</li>
                        <li class="menu-items-li">Проекты</li>
                        <li class="menu-items-li">Партнеры</li>
                        <li class="menu-items-li">Контакты</li>
                    </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="menu-button" id="menu_button">
      <div class="menu-button-line"></div>
      <div class="menu-button-line"></div>
      <div class="menu-button-line"></div>
      <div class="menu-button-line"></div>
  </div>

  <!-- Swiper -->
  <div class="swiper-container">
      <div class="swiper-wrapper">
          <div class="swiper-slide" id="slide1">
                  <!-- <h1>Студия веб-разработки YouTale</h1> -->
            <div id="video-bg">
              <video width="100%" height="auto" preload="auto" autoplay="autoplay"
              loop="loop" poster="video/Love-Coding.jpg">
                  <source src="video/Love-Coding.mp4" type="video/mp4">
                  <source src="video/Love-Coding.webm" type="video/webm">
                  
              </video>
            </div>
          </div>
          <div class="swiper-slide">
            
          </div>
          <div class="swiper-slide">Slide 3</div>
          <div class="swiper-slide">Slide 4</div>
          <div class="swiper-slide">Slide 5</div>
          <div class="swiper-slide">Slide 6</div>
          <div class="swiper-slide">Slide 7</div>
          <div class="swiper-slide">Slide 8</div>
          <div class="swiper-slide">Slide 9</div>
          <div class="swiper-slide">Slide 10</div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
  </div>


  

  <!-- Swiper JS -->
  <script src="js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    console.log('run');
    var swiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        slidesPerView: 1,
        spaceBetween: 0,
        mousewheel: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
    });
  </script>   
</body>
</html>


