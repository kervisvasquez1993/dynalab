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

<section class="flex-center-column section-info-front" style=" 
background: url('<?php echo get_template_directory_uri();?>/img/img1.jpg');
background-position: center center;
	  background-repeat: no-repeat;
	  background-size: cover;
">
     <div class="margin-top-10 ">
          <h3 class="text-center">Dynalab</h3>
          <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores repudiandae ipsum aut vel voluptate voluptatem.</p>
      </div>
     <button class="btn btn-primary btn-padiing">Ver Todos los Productos</button> 
</section>

<section class="product-post">
     <div class="container-slider-2">
     
     <!-- Swiper -->
          <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide imagen-producto">
                  <img src="<?php echo get_template_directory_uri();?>/img/img1.jpg" alt="">
                  <div class="wrapper-content-card">
                    <h3>Lorem idivsum dolor sit amet </h3> 
                    <a href="#" class="leer-mas">Leer Más</a>
                  </div>
                </div>
                <div class="swiper-slide imagen-producto">
                  <img src="<?php echo get_template_directory_uri();?>/img/img1.jpg" alt="">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eum quaerat explicabo? Ullam, laborum nisi!</p>
                </div>
                <div class="swiper-slide imagen-producto">
                   <img src="<?php echo get_template_directory_uri();?>/img/img1.jpg" alt="">
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eum quaerat explicabo? Ullam, laborum nisi!</p>
                </div>
                <div class="swiper-slide imagen-producto">
                   <img src="<?php echo get_template_directory_uri();?>/img/img1.jpg" alt="">
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eum quaerat explicabo? Ullam, laborum nisi!</p>
                </div>
                <div class="swiper-slide imagen-producto">
                    <img src="<?php echo get_template_directory_uri();?>/img/img1.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eum quaerat explicabo? Ullam, laborum nisi!</p>
                </div>
                
              
            </div>
            <!--navegador-->
            <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            
            
          </div>
     </div>
</section>


<?php get_footer();?>