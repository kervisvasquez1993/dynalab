<?php 
/**
 * Template Name: FarmacoVigilancia
 * **/
get_header();
?>
<div class="hero-page" style="background:url('<?php echo get_the_post_thumbnail_url();?>');" >
    <div class="wrap-hero">
         <div class="hero-content">
               <a href="<?php echo esc_url(home_url('/'));?>" class="home">INICIO</a> <p>></p> <p><?php the_title();?></p>
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


<main class="container conatiner-flex">
    
    <div class="farmacovigilancia_wrap">
        
             <img src="<?php the_field('imagen_cabecera')?>" alt="imagen cabecera">
        

        <div>
              <?php 
              while(have_posts()):
                    the_post();
                    the_content();
              endwhile;
              ?>
        </div>
     </div>   
    
    <div>
         <?php the_field('contacto_form');?>
    </div>          

</main>

<?php get_footer();?>