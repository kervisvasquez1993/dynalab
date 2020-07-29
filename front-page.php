<?php get_header();?>
<div id="carouselExampleControls" class="carousel slide position-r" data-ride="carousel">
             <div class="carousel-inner min-h-40">
                     <div class="carousel-item active">
                       <img src="..." class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                       <img src="..." class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                       <img src="..." class="d-block w-100" alt="...">
                     </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
</header>

<section class="container blue">
 <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background: red"></div>
      <div class="swiper-slide" style="background: blue"></div>
      <div class="swiper-slide" style="background: yellow"></div>
      <div class="swiper-slide" style="background: green"></div>
      <div class="swiper-slide" style="background: orange"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>

</section>

<?php get_footer();?>