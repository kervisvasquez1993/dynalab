<?php 
/**
 * Template Name: dynalab
 * **/
get_header();
$iconos = get_post_meta( get_the_ID(), 'campos_repetidos', true );
?>
<div class="hero-page" style="background:url('<?php echo get_the_post_thumbnail_url();?>');" >
    <div class="wrap-hero">
         <div class="hero-content">
             <p class="home">INICIO</p> > <p><?php the_title();?></p>
         </div>
         <div class="hero-content-2">
             <h4 class="titulo">
                 <?php the_title();?>
                 <img src="<?php echo get_template_directory_uri();?>/img/linea-areas-terapeuticas.png" alt="">
             </h4>
             <p class="slogan-title">Comprometidos <spam class="destacado"> Con Tu Salud</spam></p>
             
         </div>
    </div>

</div>

</header>

<main id="primary" class="site-main">
    <div class="container">
        <img src="<?php the_field('quienes_somos_img')?>" alt="quienes_somos_img">

        <p>
            <?php the_field('quienes_somos');?>
        </p>
    </div>
    <!--   Icon Section   -->
   <div class="container-slider-3">
     <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
                <?php foreach($iconos as $icono):?>
                    <div class="swiper-slide card">
                        <div class="image_card">
                            <img class="icono-imagen" src="<?php echo $icono[image]?>">
                         </div> 
                         <div class="body_card">
                             <h5 class="center color-titulos"><?php echo $icono[title]?></h5>
                             <p class="light center"><?php echo $icono[description] ?></p>
                          </div>
                    </div>
               <?php endforeach;?> 
               
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
   </div>

   <div class="container">
        <img src="<?php the_field('mision_img')?>" alt="mision de dynalab">

        <p>
            <?php the_field('mision');?>
        </p>
    </div>

    <div class="container">
        <img src="<?php the_field('vision_img')?>" alt="vision de dynalab">

        <p>
            <?php the_field('vision');?>
        </p>
    </div>
</main><!-- #main -->
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
<?php get_footer();?>