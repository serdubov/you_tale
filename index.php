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
    <script src="js/preload.js"></script>
    <script src="js/fm.revealator.jquery.js"></script>
    <link rel="stylesheet" href="css/preload.css" type="text/css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/fm.revealator.jquery.css" type="text/css">
      <!-- <script src="js/jquery-1.11.3.min.js"></script> -->
      
    <!-- <link rel="stylesheet" href="css/list-style.css" type="text/css"> -->
    <title>webdev</title>
</head>
<body>

  <!-- <div id="preload">
    <div class="load-logo-around">
    </div>
    <div class="load-logo">
    </div>
    <div class="text-logo">
      Студия web-разработки YouTale
    </div>
  </div> -->
  <!-- Swiper -->
  <div class="swiper-container">
      <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="revealator-slideup revealator-duration1 revealator-once">
              <div class="block-b"></div>
		        </div>
          </div>
          <div class="swiper-slide">
            <div class="revealator-slideup revealator-once revealator-delay20 revealator-within block-b">

            </div>
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