<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Velo Slider - with Borders</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Poppins:400,700'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,600'>

      <link rel="stylesheet" href="slider.css">

  
</head>

<body>
  <main role="main">

  <!-- Slider -->
  <section class="velo-slides" data-velo-slider="on" data-velo-theme="light">
  

    <!-- Slide -->
    <section class="velo-slide">
      <!-- Pretitle Hint -->
      <span class="velo-slider__hint"><span><span>Check Them Bldgs</span></span></span> <!-- Slide BG -->
      <div class="velo-slide__bg">
        <!-- Borders -->
        <span class="border"><span></span></span> <!-- Img -->
        <figure class="velo-slide__figure" style="background-image: url(sss.jpg)"></figure>
      </div>
    
      <!-- Header -->
      <header class="velo-slide__header">
        <h3 class="velo-slide__title"><span class="oh"><span>GETTING YOUR FOOD</span></span><span class="oh"><span>MORE TASTY</span></span></h3>
        <p class="velo-slide__text"><span class="oh"><span></span></span></p>
        <span class="velo-slide__btn"><a class="btn-draw btn--white" href="#"><span class="btn-draw__text"><span>View Work</span></span></a></span>
      </header>
    </section>

    <!-- Slide -->
    <section class="velo-slide">
      <!-- Pretitle Hint -->
      <span class="velo-slider__hint"><span><span>What's up Playas</span></span></span> 
      <!-- Slide BG -->
      <div class="velo-slide__bg">
        <!-- Borders -->
        <span class="border"><span></span></span> <!-- Img -->
        <figure class="velo-slide__figure" style="background-image: url(ss.jpg)"></figure>
      </div>
    
      <!-- Header -->
      <header class="velo-slide__header">
        <h3 class="velo-slide__title"><span class="oh"><span>TASTE</span></span><span class="oh">THAT MAKE EVERYTHING BETTER<span></span></span></h3>
        <p class="velo-slide__text"><span class="oh"><span>.</span></span></p>
      </header>
    </section>
    
    <!-- Slides Nav -->
    <nav class="velo-slides-nav">
      <ul class="velo-slides-nav__list">
        <li>
          <a class="js-velo-slides-prev velo-slides-nav__prev inactive" href="#0"><i class="icon-up-arrow"></i></a>
        </li>
        <li>
          <a class="js-velo-slides-next velo-slides-nav__next" href="#0"><i class="icon-down-arrow"></i></a>
        </li>
      </ul>
    </nav>
  </section>
</main>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.3.0/velocity.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.3.0/velocity.ui.js'></script>

    <script src="slider.js"></script>

</body>
</html>
