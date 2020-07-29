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
<div class="container">
<section class="container-slider">

<!-- Swiper -->
<div class="swiper-container ">
    <div class="swiper-wrapper">
      <div class="swiper-slide swiper-slide-border test">
        <img src="<?php echo get_template_directory_uri();?>/img/img1.jpg" alt="">
      </div>
      <div class="swiper-slide swiper-slide-border">
        <img src="<?php echo get_template_directory_uri();?>/img/img1.jpg" alt="">
      </div>
      <div class="swiper-slide swiper-slide-border">
         <img src="<?php echo get_template_directory_uri();?>/img/img1.jpg" alt="">
      </div>
      <div class="swiper-slide swiper-slide-border">
         <img src="<?php echo get_template_directory_uri();?>/img/img1.jpg" alt="">
      </div>
      <div class="swiper-slide swiper-slide-border">
          <img src="<?php echo get_template_directory_uri();?>/img/img1.jpg" alt="">
      </div>
      
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>


</section>

<div class="boton-productos">
    <button class="btn btn-primary m-4">Ver Todos los Productos</button> 
</div>
</div>

<section class="section-info-front" style=" 
background: url('<?php echo get_template_directory_uri();?>/img/img1.jpg');
background-position: center center;
	  background-repeat: no-repeat;
	  background-size: 100%;

">
     <div class="margin-top-10 m-3">
     <h3 class="text-center">Dynalab</h3>
     <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores repudiandae ipsum aut vel voluptate voluptatem.</p>
     </div>
</section>


<div class="container-slider-2">

<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide ">
        <img src="<?php echo get_template_directory_uri();?>/img/img1.jpg" alt="">
      </div>
      <div class="swiper-slide">
        <img src="<?php echo get_template_directory_uri();?>/img/img1.jpg" alt="">
      </div>
      <div class="swiper-slide">
         <img src="<?php echo get_template_directory_uri();?>/img/img1.jpg" alt="">
      </div>
      <div class="swiper-slide">
         <img src="<?php echo get_template_directory_uri();?>/img/img1.jpg" alt="">
      </div>
      <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri();?>/img/img1.jpg" alt="">
      </div>
      
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>


</div>


<?php get_footer();?>