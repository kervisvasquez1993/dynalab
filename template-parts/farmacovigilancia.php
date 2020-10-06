<?php 
/**
 * Template Name: FarmacoVigilancia
 * **/
get_header();
contenido_hero();
?>


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