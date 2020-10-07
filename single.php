<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Dynalab
 */

get_header();

?>
<div class="hero-page" style="background:url('<?php echo get_template_directory_uri();?>/img/imagen_blog.jpg');" >
    <div class="wrap-hero">
         <div class="hero-content">
			  <h6 class="home"><a href="<?php echo esc_url(home_url('/'));?>" class="home">INICIO</a> &gt  BLOG </h6> 
         </div>
         <div class="hero-content-2">
             <h4 class="titulo">
                  BLOG 
                 <img src="<?php echo get_template_directory_uri();?>/img/linea-areas-terapeuticas.png" alt="">
             </h4>
             <p class="slogan-title">Comprometidos <spam class="destacado"> Con Tu Salud</spam></p>
             
         </div>
    </div>

</div>
</header>

<main id="primary" class="site-main">
	<div class="container section_blog">
		  <section class="entradas_blog">
		      <?php
		        while ( have_posts() ) : the_post();
		      ?>
		      	<h3><?php the_title()?></h3>
			   <img src="<?php  the_post_thumbnail_url();?>" alt=" imagen destacada">
			   <div class="flex-wrap_blog"><?php the_content(); ?></div>   
      
		      <?php
     	      endwhile; // End of the loop.
		      ?>
		 </section>
		 <aside>
			<?php get_sidebar();?>
		 </aside>
    </div>
</main><!-- #main -->

<?php
get_footer();
