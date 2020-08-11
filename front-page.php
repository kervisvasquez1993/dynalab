<?php 
get_header();
$sliders = get_post_meta( get_the_ID(), 'slider', true );

?>
<nav>
    <div class="nav-wrapper">
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>
<div class="slider">
                <ul class="slides">
                  
                <?php foreach($sliders as $slider): ?>
                  <li>
                    <img src="<?php echo $slider['image']?>"> <!-- random image -->
                    <div class="caption center-align">
                      <h3><?php echo $slider['title']?></h3>
                      <h5 class="light grey-text text-lighten-3">
                        <?php echo $slider['yourprefix_demo_wysiwyg']; ?>
                      </h5>
                    </div>
                  </li>
                <?php endforeach;?>
                </ul>
        </div>
      
</header>


<div class="container c">
<section class="container-slider">

<!-- Swiper -->
<div class="swiper-container ">
    <div class="swiper-wrapper">
     <?php productos();?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
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